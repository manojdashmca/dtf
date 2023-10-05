<?php

namespace App\Models;

use CodeIgniter\Model;

class BlankModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function checkUserEmail($emailid, $userid = '') {
        $sql = "SELECT count(1) count from users where user_email='$emailid' and user_status !=3 ";
        if (!empty($userid)) {
            $sql .= " AND id_user !='$userid'";
        }
        $result = $this->db->query($sql);
        $return = $result->getRow()->count;
        return $return;
    }

    public function checkUserMobile($mobileno, $userid = '') {
        $sql = "SELECT count(1) count from users where user_mobile='$mobileno' and user_status !=3 ";
        if (!empty($userid)) {
            $sql .= " AND id_user !='$userid'";
        }
        $result = $this->db->query($sql);
        $return = $result->getRow()->count;
        return $return;
    }

    public function getCityForDropdown($cityid = null) {
        $sql = "SELECT city_id, city_name,contract_cost,division_name from cities_master join divisions on division_id=id where 1=1 ";
        if (!empty($cityid)) {
            $sql .= " AND city_id='$cityid'";
        } else {
            $sql .= " AND city_status=1 ";
        }
        $sql.=" ORDER BY city_name asc ";

        $result = $this->db->query($sql);
        if (!empty($cityid)) {
            $return = $result->getRow();
        } else {
            $return = $result->getResult();
        }
        return $return;
    }   
    

}
