<?php

namespace App\Models;

use CodeIgniter\Model;

class WebModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUserdetailByUsername($username) {
        $sql = "SELECT * "
                . "FROM users "
                . "WHERE (user_code='$username' or user_login_name='$username' or user_email='$username' or user_mobile='$username') AND user_status in(1,2) ";

        $result = $this->db->query($sql);
        return $result->getRow();
    }
    
    public function getUserProfileDetail($userid) {
        $sql = "select user_name,user_mobile,user_email,user_profile_pic from users where id_user='$userid'";
        
        $result = $this->db->query($sql);
        return $result->getRow();
    }
     public function getUserLoginInfo($userid) {
        $sql = "select * from user_log_history where user_id_user='$userid'";
        $result = $this->db->query($sql);
        return $result->getResult();
    }

    

}
