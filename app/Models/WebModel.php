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
    
    public function getTotalContractCost(){
        $sql="select coalesce(sum(contract_cost),0) as totalcost from cities_master where 1=1";
        $result = $this->db->query($sql);
        return $result->getRow()->totalcost;
    }
    
    public function getTotalCity(){
        $sql="select count(*) as citycount from cities_master where 1=1";
        $result = $this->db->query($sql);
        return $result->getRow()->citycount;
    }
    
    public function getAchievedProgress(){
        //$sql="select count(*) as citycount from cities_master where 1=1";
        //$result = $this->db->query($sql);
        //return $result->getRow()->citycount;
        return rand(100000000,999999999);
    }

    

}
