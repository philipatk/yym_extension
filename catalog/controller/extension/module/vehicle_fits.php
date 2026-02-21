<?php
class ControllerExtensionModuleVehicleFits extends Controller {
    public function index() {
        $this->load->model('tool/image');
        $data['vehicles'] = array();

        if (isset($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];

            // Query your tables! Notice we are pulling p2y.image, m.name and mk.name
            $sql = "SELECT p2y.model_id, p2y.year_start, p2y.year_end, p2y.image, m.name as model_name, mk.name as make_name 
                    FROM " . DB_PREFIX . "product_to_ymm p2y 
                    LEFT JOIN " . DB_PREFIX . "ymm_models m ON (p2y.model_id = m.model_id) 
                    LEFT JOIN " . DB_PREFIX . "ymm_makes mk ON (m.make_id = mk.make_id) 
                    WHERE p2y.product_id = '" . (int)$product_id . "'";
            
            $query = $this->db->query($sql);

            foreach ($query->rows as $result) {
                // Format the title (handles Universal fits and specific years) 
                if (empty($result['model_id'])) {
                     $title = 'Universal';
                } else {
                    $year_text = '';
                    if ($result['year_start']) {
                        $year_text = $result['year_start'];
                        if ($result['year_end']) {
                            $year_text .= ' - ' . $result['year_end'];
                        } else {
                            $year_text .= ' >';
                        }
                    }
                    $title = trim($result['make_name'] . ', ' . $result['model_name'] . ' ' . $year_text);
                }

                // Process the image you saved in the admin panel
                if (!empty($result['image']) && is_file(DIR_IMAGE . $result['image'])) {
                    $image = $this->model_tool_image->resize($result['image'], 150, 150);
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', 150, 150);
                }

                $data['vehicles'][] = array(
                    'title' => $title,
                    'image' => $image
                );
            }
        }

        return $this->load->view('extension/module/vehicle_fits', $data);
    }
}