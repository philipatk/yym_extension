<?php
class ModelExtensionModuleYmm extends Model {
    
    // ==========================
    // MAKES
    // ==========================
    public function addMake($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "ymm_makes SET name = '" . $this->db->escape($data['name']) . "'");
    }

    public function editMake($make_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "ymm_makes SET name = '" . $this->db->escape($data['name']) . "' WHERE make_id = '" . (int)$make_id . "'");
    }

    public function deleteMake($make_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "ymm_makes WHERE make_id = '" . (int)$make_id . "'");
        // Optional: Delete related models?
    }

    public function getMake($make_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_makes WHERE make_id = '" . (int)$make_id . "'");
        return $query->row;
    }

    public function getMakes($data = array()) {
        $sql = "SELECT * FROM " . DB_PREFIX . "ymm_makes";
        if (!empty($data['filter_name'])) {
            $sql .= " WHERE name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }
        $sql .= " ORDER BY name ASC";
        
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) $data['start'] = 0;
            if ($data['limit'] < 1) $data['limit'] = 20;
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }
        
        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalMakes() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "ymm_makes");
        return $query->row['total'];
    }

    // ==========================
    // MODELS
    // ==========================
    public function addModel($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "ymm_models SET make_id = '" . (int)$data['make_id'] . "', name = '" . $this->db->escape($data['name']) . "'");
    }

    public function editModel($model_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "ymm_models SET make_id = '" . (int)$data['make_id'] . "', name = '" . $this->db->escape($data['name']) . "' WHERE model_id = '" . (int)$model_id . "'");
    }

    public function deleteModel($model_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "ymm_models WHERE model_id = '" . (int)$model_id . "'");
    }

    public function getModel($model_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_models WHERE model_id = '" . (int)$model_id . "'");
        return $query->row;
    }


    public function getTotalModels() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "ymm_models");
        return $query->row['total'];
    }

    // ==========================
    // YEARS
    // ==========================
    public function addYear($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "ymm_year SET model_id = '" . (int)$data['model_id'] . "', name = '" . $this->db->escape($data['name']) . "', year_start = '" . (int)$data['year_start'] . "', year_end = '" . (int)$data['year_end'] . "'");
    }

    public function editYear($year_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "ymm_year SET model_id = '" . (int)$data['model_id'] . "', name = '" . $this->db->escape($data['name']) . "', year_start = '" . (int)$data['year_start'] . "', year_end = '" . (int)$data['year_end'] . "' WHERE year_id = '" . (int)$year_id . "'");
    }

    public function deleteYear($year_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "ymm_year WHERE year_id = '" . (int)$year_id . "'");
    }

    public function getYear($year_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "ymm_year WHERE year_id = '" . (int)$year_id . "'");
        return $query->row;
    }

    public function getYears($data = array()) {
        // Join with Model and Make so we can show "Make > Model > Year"
        $sql = "SELECT y.*, m.name as model_name, mk.name as make_name 
                FROM " . DB_PREFIX . "ymm_year y 
                LEFT JOIN " . DB_PREFIX . "ymm_models m ON (y.model_id = m.model_id) 
                LEFT JOIN " . DB_PREFIX . "ymm_makes mk ON (m.make_id = mk.make_id)";
        
        $sql .= " ORDER BY y.year_start DESC";

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) $data['start'] = 0;
            if ($data['limit'] < 1) $data['limit'] = 20;
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalYears() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "ymm_year");
        return $query->row['total'];
    }

    public function getModels($data = array()) {
        $sql = "SELECT m.*, mk.name as make_name FROM " . DB_PREFIX . "ymm_models m LEFT JOIN " . DB_PREFIX . "ymm_makes mk ON (m.make_id = mk.make_id)";
        
        // NEW: Search Logic
        if (!empty($data['filter_name'])) {
            // Search either Model Name OR Make Name
            $sql .= " WHERE m.name LIKE '" . $this->db->escape($data['filter_name']) . "%' OR mk.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }
        
        $sql .= " ORDER BY mk.name ASC, m.name ASC"; // Sort by Make, then Model
        
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) $data['start'] = 0;
            if ($data['limit'] < 1) $data['limit'] = 20;
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }
        
        $query = $this->db->query($sql);
        return $query->rows;
    }
}