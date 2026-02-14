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

    // Placeholders for your sub-pages
    public function makes() { die("Makes Page Working"); }
    public function models() { die("Models Page Working"); }
    public function years() { die("Years Page Working"); }
}