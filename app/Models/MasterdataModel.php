<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterdataModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getCityHeader($cityid) {
        $sql = "SELECT rh_id,header,rh_data from report_header_master LEFT join city_has_report_header_data on rh_id=rh_id_rh where city_id_city=$cityid order by rh_id asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponent($cityid) {
        $sql = "SELECT chcb_id,cm_id_cm,component,component_breakup,(contract_cost * component_breakup/100) as breakupcost,contract_cost "
                . "from city_has_component_breakup "
                . "join component_master_data on cm_id=cm_id_cm  "
                . "JOIN cities_master on city_id=city_id_city "
                . "where city_id_city=$cityid order by cm_id asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponentTask($cityid) {
        $sql = "SELECT chcht_id,chcht.cm_id_cm,task_name,task_breakup,contract_cost,"
                . "(select component_breakup from city_has_component_breakup chcb1 where chcb1.cm_id_cm=chcht.cm_id_cm and chcb1.city_id_city='$cityid') as componentbreakup "
                . "from city_has_component_has_task chcht "
                . "JOIN task_master_data tmd on chcht.tm_id_tm=tm_id  "
                . "JOIN cities_master cmd on chcht.city_id_city=city_id "
                . "where chcht.city_id_city=$cityid order by chcht_id asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getAllTask() {
        $sql = "SELECT tm_id,task_name from task_master_data where task_status=1 order by task_name asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getcomponentMasterData() {
        $sql = "SELECT cm_id,component from component_master_data where component_status=1 order by component asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getreportheaderMasterData() {
        $sql = "SELECT rh_id,header from report_header_master where 1=1 order by rh_id asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getsubtaskMasterData() {
        $sql = "SELECT sm_id,subtask from subtask_master_data where sm_status=1 order by sm_id asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCitySubTask($cityid) {
        $sql = "SELECT chchths_id,subtask,sub_task_breakup,subtask_unit,subtask_qty,if(allowed_partial='1','Yes','No') allowedpartial,subtask_status,entered_progress "
                . "from city_has_component_has_task_has_subtask "
                . "join subtask_master_data on sm_id_sm=sm_id "
                . "where mapping_status=1 and city_id_city=$cityid order by chchths_id asc";
        
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        
    }

    public function getCityComponentHasTask($cityid, $componentid) {
        $sql = "SELECT tm_id_tm,task_name  "
                . "from city_has_component_has_task chcht "
                . "JOIN task_master_data tmd on chcht.tm_id_tm=tm_id  "                
                . "where city_id_city=$cityid and cm_id_cm=$componentid order by task_name asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }
    
    public function getCityHasComponent($cityid) {
        $sql = "SELECT cm_id_cm,component "
                . "from city_has_component_breakup "
                . "join component_master on cm_id_cm=cm_id "
                . "where city_id_city=$cityid order by component asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }
    public function getCityComponentHasTaskHasSubtask($city, $component,$task){
        $sql = "SELECT chchths_id,subtask,sub_task_breakup,subtask_unit,subtask_qty,if(allowed_partial='1','Yes','No') allowedpartial,subtask_status,entered_progress "
                . "from city_has_component_has_task_has_subtask join subtask_master on sm_id_sm=sm_id "
                . "where mapping_status=1 and city_id_city=$city and cm_id_cm=$component and tm_id_tm=$task order by chchths_id asc";
        
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

}
