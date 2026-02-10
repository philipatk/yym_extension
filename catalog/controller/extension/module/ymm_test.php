<?php
class ControllerExtensionModuleYmmTest extends Controller {
    public function index() {
        echo '<a href="index.php?route=extension/module/ymm_test/set&model_id=10&year=2012" style="font-size: 20px; display:block; padding:50px; text-align:center; background:#eee;">
                [CLICK TO TEST] Simulate Searching for Model 10 (Year 2012)
              </a>';
    }

    public function set() {
        // 1. Save Session
        $this->session->data['ymm_model_id'] = (int)$this->request->get['model_id'];
        $this->session->data['ymm_year'] = (int)$this->request->get['year'];
        
        // 2. Redirect to Category 60
        $this->response->redirect($this->url->link('product/category', 'path=60')); 
    }
}
