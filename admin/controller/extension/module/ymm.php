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
        // 1. Load the Settings Model
        $this->load->model('setting/setting');

        // 2. Force the module to be "Enabled" immediately
        // "module_ymm_status" is the standard key OpenCart looks for.
        $this->model_setting_setting->editSetting('module_ymm', ['module_ymm_status' => 1]);

        // 3. Your existing event code for the menu...
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('mmy_menu_injection');
        $this->model_setting_event->addEvent('mmy_menu_injection', 'admin/view/common/column_left/before', 'extension/module/ymm/addMenu');
    }

    public function uninstall() {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('mmy_menu_injection');
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
        
        if (isset($this->request->get[$type . '_id'])) {
            $data['action'] = $this->url->link('extension/module/ymm/edit' . ucfirst($type), 'user_token=' . $this->session->data['user_token'] . '&' . $type . '_id=' . $this->request->get[$type . '_id'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/ymm/add' . ucfirst($type), 'user_token=' . $this->session->data['user_token'], true);
        }
        
        $data['cancel'] = $this->url->link('extension/module/ymm/' . $type . 's', 'user_token=' . $this->session->data['user_token'], true);

        // Get Data
        if (isset($this->request->get[$type . '_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $funcName = 'get' . ucfirst($type);
            $info = $this->model_extension_module_ymm->$funcName($this->request->get[$type . '_id']);
        }

        $data['name'] = isset($this->request->post['name']) ? $this->request->post['name'] : (!empty($info) ? $info['name'] : '');

        // If Type is Model, load Makes for dropdown
        if ($type == 'model') {
            $data['makes'] = $this->model_extension_module_ymm->getMakes();
            $data['make_id'] = isset($this->request->post['make_id']) ? $this->request->post['make_id'] : (!empty($info) ? $info['make_id'] : '');
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

        if (isset($this->request->get['filter_name'])) {
            $this->load->model('extension/module/ymm');

            $filter_data = array(
                'filter_name' => $this->request->get['filter_name'],
                'start'       => 0,
                'limit'       => 10 // Show top 10 results
            );

            $results = $this->model_extension_module_ymm->getModels($filter_data);

            foreach ($results as $result) {
                // FORMAT: Make > Model
                $json[] = array(
                    'model_id' => $result['model_id'],
                    'name'     => strip_tags(html_entity_decode($result['make_name'] . ' > ' . $result['name'], ENT_QUOTES, 'UTF-8'))
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    

}