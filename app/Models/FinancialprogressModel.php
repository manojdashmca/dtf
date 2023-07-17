<?php

namespace App\Models;

use CodeIgniter\Model;

class FinancialprogressModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function financialprogressdata() {
        $sql = "SELECT city_name, contract_cost from cities_master where city_status=1";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

}
