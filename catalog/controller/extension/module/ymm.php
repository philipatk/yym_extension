<?php
class ControllerExtensionModuleYmm extends Controller {
    public function index() {
        $this->load->language('extension/module/ymm');

        // 1. Get Makes
        $data['makes'] = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_makes ORDER BY name ASC")->rows;

        // 2. Load Saved Session Data
        $data['selected_make'] = isset($this->session->data['ymm']['make_id']) ? $this->session->data['ymm']['make_id'] : '';
        $data['selected_model'] = isset($this->session->data['ymm']['model_id']) ? $this->session->data['ymm']['model_id'] : '';
        $data['selected_year'] = isset($this->session->data['ymm']['year_id']) ? $this->session->data['ymm']['year_id'] : '';

        return $this->load->view('extension/module/ymm', $data);
    }

    public function getModels() {
        $json = array();
        if (isset($this->request->post['make_id'])) {
            $make_id = (int)$this->request->post['make_id'];
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_models WHERE make_id = '" . $make_id . "' ORDER BY name ASC");
            $json = $query->rows;
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    // UPDATED: Get Years from oc_ymm_year
    public function getYears() {
        $json = array();
        if (isset($this->request->post['model_id'])) {
            $model_id = (int)$this->request->post['model_id'];
            
            // Query the new table
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_year WHERE model_id = '" . $model_id . "' ORDER BY year_start DESC");
            
            foreach ($query->rows as $result) {
                $json[] = array(
                    'year_id'    => $result['year_id'],
                    'name'       => $result['name'], // Exactly what is in the DB
                    'year_start' => $result['year_start'],
                    'year_end'   => $result['year_end']
                );
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    // UPDATED: Save Filter
    public function saveFilter() {
        $json = array();
        
        if (isset($this->request->post['year_id'])) {
            
            // Get start/end dates from the selected ID
            $year_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_year WHERE year_id = '" . (int)$this->request->post['year_id'] . "'");
            
            if ($year_query->num_rows) {
                $this->session->data['ymm'] = array(
                    'make_id'    => $this->request->post['make_id'],
                    'model_id'   => $this->request->post['model_id'],
                    'year_id'    => $this->request->post['year_id'],
                    'year_start' => $year_query->row['year_start'],
                    'year_end'   => $year_query->row['year_end']
                );
                
                $json['success'] = true;
            }
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function clearFilter() {
        unset($this->session->data['ymm']);
        // 2. Redirect back to the previous page
        if (isset($this->request->server['HTTP_REFERER'])) {
            $this->response->redirect($this->request->server['HTTP_REFERER']);
        } else {
            // Fallback to home if referer is missing
            $this->response->redirect($this->url->link('common/home'));
        }
    }
}