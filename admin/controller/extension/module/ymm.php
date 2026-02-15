<?php
class ControllerExtensionModuleYmm extends Controller {
    private $error = array();

    // 1. The Settings Page (Fixes your "Page Not Found" error)
    public function index() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle($this->language->get('heading_title'));

        // Basic view logic so the page loads
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/ymm', $data));
    }

    public function install() {
        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting('module_ymm', ['module_ymm_status' => 1]);

        $this->load->model('setting/event');
        
        // Remove old events to prevent duplicates
        $this->model_setting_event->deleteEventByCode('mmy_menu_injection');
        $this->model_setting_event->deleteEventByCode('ymm_product_hooks');

        // 1. Menu Hook
        $this->model_setting_event->addEvent('mmy_menu_injection', 'admin/view/common/column_left/before', 'extension/module/ymm/addMenu');

        // 2. Product Form Hook (Inject Data) - Runs BEFORE the form loads
        $this->model_setting_event->addEvent('ymm_product_hooks', 'admin/view/catalog/product_form/before', 'extension/module/ymm/eventViewProductFormBefore');

        // 3. Product Form Hook (Inject HTML Tab) - Runs AFTER the HTML is built
        $this->model_setting_event->addEvent('ymm_product_hooks', 'admin/view/catalog/product_form/after', 'extension/module/ymm/eventViewProductFormAfter');

        // 4. Product Save Hook (Save YMM Data) - Runs AFTER saving a product
        $this->model_setting_event->addEvent('ymm_product_hooks', 'admin/model/catalog/product/addProduct/after', 'extension/module/ymm/eventModelProductSaveAfter');
        $this->model_setting_event->addEvent('ymm_product_hooks', 'admin/model/catalog/product/editProduct/after', 'extension/module/ymm/eventModelProductSaveAfter');
    }

    public function uninstall() {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('mmy_menu_injection');
        $this->model_setting_event->deleteEventByCode('ymm_product_hooks');
    }



    public function eventViewProductFormBefore(&$route, &$data) {
        $this->load->model('extension/module/ymm');
        $data['ymm_makes'] = $this->model_extension_module_ymm->getMakes();

        $product_id = isset($this->request->get['product_id']) ? $this->request->get['product_id'] : 0;

        if (isset($this->request->post['product_ymm'])) {
            $data['product_ymm'] = $this->request->post['product_ymm'];
        } elseif ($product_id) {
            $data['product_ymm'] = $this->getProductYmm($product_id);
        } else {
            $data['product_ymm'] = array();
        }

        $data['ymm_row'] = 0;
        if (is_array($data['product_ymm'])) {
            $data['ymm_row'] = count($data['product_ymm']);
        }

        $data['is_universal'] = 0;
        if (!empty($data['product_ymm'])) {
            foreach ($data['product_ymm'] as $ymm) {
                if (empty($ymm['model_id'])) {
                    $data['is_universal'] = 1;
                    break;
                }
            }
        }

    }

    // 2. Inject Tab HTML after form renders
    public function eventViewProductFormAfter(&$route, &$args, &$output) {
        // Load the content of our new tab (using the data from the Before event)
        $ymm_content = $this->load->view('extension/module/ymm_product_tab', $args);

        // Inject Tab Link after the "Links" tab
        $tab_link_html = '<li><a href="#tab-ymm" data-toggle="tab">Vehicle Fitment</a></li>';
        $search_link = '<li><a href="#tab-links" data-toggle="tab">';
        $output = str_replace($search_link, $tab_link_html . $search_link, $output);

        // Inject Tab Content before the "Links" content
        $search_content = '<div class="tab-pane" id="tab-links">';
        $output = str_replace($search_content, $ymm_content . $search_content, $output);
    }

    // 3. Save Data to Database
    public function eventModelProductSaveAfter(&$route, &$args, &$output) {
        if (strpos($route, 'editProduct') !== false) {
            $product_id = $args[0];
            $data = $args[1];
        } else {
            $product_id = $output;
            $data = $args[0];
        }

        // Only run if product_id is valid
        if ($product_id) {
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_ymm WHERE product_id = '" . (int)$product_id . "'");

            if (isset($data['is_universal']) && $data['is_universal'] == 1) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_ymm SET product_id = '" . (int)$product_id . "', model_id = NULL, year_start = NULL, year_end = NULL");
            } elseif (isset($data['product_ymm'])) {
                foreach ($data['product_ymm'] as $ymm) {
                    if (!empty($ymm['model_id'])) {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_ymm SET product_id = '" . (int)$product_id . "', model_id = '" . (int)$ymm['model_id'] . "', year_start = '" . (int)$ymm['year_start'] . "', year_end = '" . (int)$ymm['year_end'] . "'");
                    }
                }
            }
        }
    }

    // Helper Function to get data without editing Catalog Model
    private function getProductYmm($product_id) {
        $query = $this->db->query("SELECT p2y.*, m.name as model_name, mk.name as make_name 
                                   FROM " . DB_PREFIX . "product_to_ymm p2y 
                                   LEFT JOIN " . DB_PREFIX . "ymm_models m ON (p2y.model_id = m.model_id) 
                                   LEFT JOIN " . DB_PREFIX . "ymm_makes mk ON (m.make_id = mk.make_id) 
                                   WHERE p2y.product_id = '" . (int)$product_id . "'");
        return $query->rows;
    }

    // 3. Insert the menu item
    public function addMenu(&$route, &$data) {
        $mmy = array();
        $user_token = $this->session->data['user_token'];

        // FIXED: Points to functions inside THIS file (makes, models, years)
        if ($this->user->hasPermission('access', 'extension/module/ymm')) {
            $mmy[] = array(
                'name'     => 'Makes',
                'href'     => $this->url->link('extension/module/ymm/makes', 'user_token=' . $user_token, true),
                'children' => array()
            );
            $mmy[] = array(
                'name'     => 'Models',
                'href'     => $this->url->link('extension/module/ymm/models', 'user_token=' . $user_token, true),
                'children' => array()
            );
            $mmy[] = array(
                'name'     => 'Years',
                'href'     => $this->url->link('extension/module/ymm/years', 'user_token=' . $user_token, true),
                'children' => array()
            );
        }

        if ($mmy) {
            $data['menus'][] = array(
                'id'       => 'menu-mmy',
                'icon'     => 'fa-car',
                'name'     => 'Vehicle Filter',
                'href'     => '',
                'children' => $mmy
            );
        }
    }


    // ... existing install/index code ...

    // ==========================================
    // MAKES CONTROLLER LOGIC
    // ==========================================
    public function makes() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Manage Makes');
        $this->load->model('extension/module/ymm');

        $this->getList('make');
    }

    public function addMake() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Add Make');
        $this->load->model('extension/module/ymm');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_ymm->addMake($this->request->post);
            $this->session->data['success'] = 'Success: You have modified makes!';
            $this->response->redirect($this->url->link('extension/module/ymm/makes', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm('make');
    }

    public function editMake() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Edit Make');
        $this->load->model('extension/module/ymm');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_ymm->editMake($this->request->get['make_id'], $this->request->post);
            $this->session->data['success'] = 'Success: You have modified makes!';
            $this->response->redirect($this->url->link('extension/module/ymm/makes', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm('make');
    }

    public function deleteMake() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Delete Make');
        $this->load->model('extension/module/ymm');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $make_id) {
                $this->model_extension_module_ymm->deleteMake($make_id);
            }
            $this->session->data['success'] = 'Success: You have modified makes!';
            $this->response->redirect($this->url->link('extension/module/ymm/makes', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getList('make');
    }

    // ==========================================
    // GENERIC HELPERS (REUSE FOR MODELS/YEARS)
    // ==========================================
    protected function getList($type) {
        // 1. Initialize variables to prevent "Undefined variable" errors
        $results = array();
        $total = 0;
        $data['heading_title'] = '';
        $data['add'] = '';
        $data['delete'] = '';

        // 2. Setup standard page data
        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        // 3. Breadcrumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => 'Home',
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );
        $data['breadcrumbs'][] = array(
            'text' => 'YMM Module',
            'href' => $this->url->link('extension/module/ymm', 'user_token=' . $this->session->data['user_token'], true)
        );

        // 4. LOGIC SWITCHER
        $filter_data = array(
            'start' => ($page - 1) * 20,
            'limit' => 20
        );

        // ==========================
        // CASE: MAKE
        // ==========================
        if ($type == 'make') {
            $data['heading_title'] = 'Manage Makes';
            $data['add'] = $this->url->link('extension/module/ymm/addMake', 'user_token=' . $this->session->data['user_token'] . $url, true);
            $data['delete'] = $this->url->link('extension/module/ymm/deleteMake', 'user_token=' . $this->session->data['user_token'] . $url, true);
            
            $results = $this->model_extension_module_ymm->getMakes($filter_data);
            $total = $this->model_extension_module_ymm->getTotalMakes();
        } 
        // ==========================
        // CASE: MODEL (This was missing!)
        // ==========================
        elseif ($type == 'model') {
            $data['heading_title'] = 'Manage Models';
            $data['add'] = $this->url->link('extension/module/ymm/addModel', 'user_token=' . $this->session->data['user_token'] . $url, true);
            $data['delete'] = $this->url->link('extension/module/ymm/deleteModel', 'user_token=' . $this->session->data['user_token'] . $url, true);

            // You must have getModels() in your admin/model/extension/module/ymm.php
            $results = $this->model_extension_module_ymm->getModels($filter_data);
            $total = $this->model_extension_module_ymm->getTotalModels();
        }
        // ==========================
        // CASE: YEAR (Placeholder)
        // ==========================
        elseif ($type == 'year') {
            $data['heading_title'] = 'Manage Years';
            $data['add'] = $this->url->link('extension/module/ymm/addYear', 'user_token=' . $this->session->data['user_token'] . $url, true);
            $data['delete'] = $this->url->link('extension/module/ymm/deleteYear', 'user_token=' . $this->session->data['user_token'] . $url, true);

            $results = $this->model_extension_module_ymm->getYears($filter_data);
            $total = $this->model_extension_module_ymm->getTotalYears();
        }

        // 5. Process Results into View Array
        $data['items'] = array();
        
        if ($results) {
            foreach ($results as $result) {
                $edit_link = $this->url->link('extension/module/ymm/edit' . ucfirst($type), 'user_token=' . $this->session->data['user_token'] . '&' . $type . '_id=' . $result[$type . '_id'] . $url, true);
                
                // Handle different data fields safely
                $make_name = isset($result['make_name']) ? $result['make_name'] : '';
                $model_name = isset($result['model_name']) ? $result['model_name'] : '';
                $year_start = isset($result['year_start']) ? $result['year_start'] : '';
                $year_end   = isset($result['year_end']) ? $result['year_end'] : '';

                $data['items'][] = array(
                    'id'         => $result[$type . '_id'],
                    'name'       => $result['name'],
                    'make_name'  => $make_name,  // Only used for models/years
                    'model_name' => $model_name, // Only used for years
                    'year_start' => $year_start, // Only used for years
                    'year_end'   => $year_end,   // Only used for years
                    'edit'       => $edit_link
                );
            }
        }

        // 6. Final Data for View
        $data['user_token'] = $this->session->data['user_token'];
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        // Pagination
        $pagination = new Pagination();
        $pagination->total = $total;
        $pagination->page = $page;
        $pagination->limit = 20;
        $pagination->url = $this->url->link('extension/module/ymm/' . $type . 's', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
        $data['pagination'] = $pagination->render();
        
        $data['results'] = sprintf('Showing %d to %d of %d (%d Pages)', ($total) ? (($page - 1) * 20) + 1 : 0, ((($page - 1) * 20) > ($total - 20)) ? $total : ((($page - 1) * 20) + 20), $total, ceil($total / 20));

        // Load specific view based on type
        $this->response->setOutput($this->load->view('extension/module/ymm_' . $type . '_list', $data));
    }

    protected function getForm($type) {
        $data['text_form'] = !isset($this->request->get[$type . '_id']) ? 'Add ' . ucfirst($type) : 'Edit ' . ucfirst($type);
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->request->get[$type . '_id'])) {
            $data['action'] = $this->url->link('extension/module/ymm/edit' . ucfirst($type), 'user_token=' . $this->session->data['user_token'] . '&' . $type . '_id=' . $this->request->get[$type . '_id'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/ymm/add' . ucfirst($type), 'user_token=' . $this->session->data['user_token'], true);
        }
        
        $data['cancel'] = $this->url->link('extension/module/ymm/' . $type . 's', 'user_token=' . $this->session->data['user_token'], true);

        // Get Saved Data
        $info = array();
        if (isset($this->request->get[$type . '_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $funcName = 'get' . ucfirst($type);
            $info = $this->model_extension_module_ymm->$funcName($this->request->get[$type . '_id']);
        }

        $data['name'] = isset($this->request->post['name']) ? $this->request->post['name'] : (!empty($info) ? $info['name'] : '');

        // ===============================================
        // 1. LOGIC FOR "MODEL" PAGE
        // ===============================================
        if ($type == 'model') {
            $data['makes'] = $this->model_extension_module_ymm->getMakes();
            $data['make_id'] = isset($this->request->post['make_id']) ? $this->request->post['make_id'] : (!empty($info) ? $info['make_id'] : '');
        }

        // ===============================================
        // 2. LOGIC FOR "YEAR" PAGE (Standard Dropdown)
        // ===============================================
        if ($type == 'year') {
            $data['model_id'] = isset($this->request->post['model_id']) ? $this->request->post['model_id'] : (!empty($info) ? $info['model_id'] : '');
            $data['year_start'] = isset($this->request->post['year_start']) ? $this->request->post['year_start'] : (!empty($info) ? $info['year_start'] : '');
            $data['year_end'] = isset($this->request->post['year_end']) ? $this->request->post['year_end'] : (!empty($info) ? $info['year_end'] : '');

            // Load ALL models and format them as "Make, Model"
            $data['models'] = array();
            $results = $this->model_extension_module_ymm->getModels(); // Gets all models

            foreach ($results as $result) {
                $data['models'][] = array(
                    'model_id' => $result['model_id'],
                    // This creates the "BMW, E40" format
                    'name'     => $result['make_name'] . ', ' . $result['name'] 
                );
            }
        }

        $data['user_token'] = $this->session->data['user_token'];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/ymm_' . $type . '_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'extension/module/ymm')) {
            $this->error['warning'] = 'Warning: You do not have permission to modify this module!';
        }
        return !$this->error;
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'extension/module/ymm')) {
            $this->error['warning'] = 'Warning: You do not have permission to modify this module!';
        }
        return !$this->error;
    }


    // ==========================================
    // MODELS CONTROLLER LOGIC
    // ==========================================
    public function models() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Manage Models');
        $this->load->model('extension/module/ymm');
        $this->getList('model');
    }

    public function addModel() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Add Model');
        $this->load->model('extension/module/ymm');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_ymm->addModel($this->request->post);
            $this->session->data['success'] = 'Success: You have modified models!';
            $this->response->redirect($this->url->link('extension/module/ymm/models', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm('model');
    }

    public function editModel() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Edit Model');
        $this->load->model('extension/module/ymm');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_ymm->editModel($this->request->get['model_id'], $this->request->post);
            $this->session->data['success'] = 'Success: You have modified models!';
            $this->response->redirect($this->url->link('extension/module/ymm/models', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm('model');
    }

    public function deleteModel() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Delete Model');
        $this->load->model('extension/module/ymm');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $model_id) {
                $this->model_extension_module_ymm->deleteModel($model_id);
            }
            $this->session->data['success'] = 'Success: You have modified models!';
            $this->response->redirect($this->url->link('extension/module/ymm/models', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getList('model');
    }

    public function autocomplete() {
        $json = array();

        if ($this->user->hasPermission('access', 'extension/module/ymm') && isset($this->request->get['filter_name'])) {
            $this->load->model('extension/module/ymm');

            $filter_data = array(
                'filter_name' => $this->request->get['filter_name'],
                'start'       => 0,
                'limit'       => 10 // Show top 10 results
            );

            $results = $this->model_extension_module_ymm->getModels($filter_data);

            foreach ($results as $result) {
                // FORMAT: Make, Model
                $json[] = array(
                    'model_id' => $result['model_id'],
                    'name'     => strip_tags(html_entity_decode($result['make_name'] . ', ' . $result['name'], ENT_QUOTES, 'UTF-8'))
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    
    // ==========================================
    // YEARS CONTROLLER LOGIC
    // ==========================================
    public function years() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Manage Years');
        $this->load->model('extension/module/ymm');

        // This tells getList to load the 'year' logic
        $this->getList('year');
    }

    public function addYear() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Add Year');
        $this->load->model('extension/module/ymm');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_ymm->addYear($this->request->post);
            $this->session->data['success'] = 'Success: You have modified years!';
            $this->response->redirect($this->url->link('extension/module/ymm/years', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm('year');
    }

    public function editYear() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Edit Year');
        $this->load->model('extension/module/ymm');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_module_ymm->editYear($this->request->get['year_id'], $this->request->post);
            $this->session->data['success'] = 'Success: You have modified years!';
            $this->response->redirect($this->url->link('extension/module/ymm/years', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm('year');
    }

    public function deleteYear() {
        $this->load->language('extension/module/ymm');
        $this->document->setTitle('Delete Year');
        $this->load->model('extension/module/ymm');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $year_id) {
                $this->model_extension_module_ymm->deleteYear($year_id);
            }
            $this->session->data['success'] = 'Success: You have modified years!';
            $this->response->redirect($this->url->link('extension/module/ymm/years', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getList('year');
    }

}