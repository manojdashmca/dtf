<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgressentryModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function updateTaskProgressEntry($updateArray, $chchths_id)
    {
        $query = $this->db->table('city_has_component_has_task_has_subtask');
        $query->where('chchths_id', $chchths_id);
        $result = $query->update($updateArray);
        return $result;
        $this->db->close();
    }

    

}
