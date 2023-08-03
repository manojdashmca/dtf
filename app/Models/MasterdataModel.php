<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterdataModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getCityHeader($cityid) {
        $sql = "SELECT rh_id,header,rh_data from report_header_master LEFT join city_has_report_header_data on rh_id=rh_id_rh where city_id_city='$cityid' order by rh_id asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponent($cityid) {
        $sql = "SELECT chcb_id,cm_id_cm,component,component_breakup,round((contract_cost * component_breakup/100),2) as breakupcost,contract_cost "
                . "from city_has_component_breakup "
                . "join component_master_data on cm_id=cm_id_cm  "
                . "JOIN cities_master on city_id=city_id_city "
                . "where city_id_city='$cityid' order by cc_record_sl asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponentTask($cityid) {
        $sql = "SELECT chcht_id,chcht.cm_id_cm,task_name,task_breakup,concat(cc_record_sl,'.',task_sl_no) record_sl,"
                . "round(contract_cost * (select component_breakup from city_has_component_breakup chcb1 where chcb1.cm_id_cm=chcht.cm_id_cm and chcb1.city_id_city=chcht.city_id_city)/100 * task_breakup/100 ,2) as breakupcost "
                . "from city_has_component_has_task chcht "
                . "JOIN task_master_data tmd on chcht.tm_id_tm=tm_id  "
                . "JOIN city_has_component_breakup chcb on chcb.city_id_city=chcht.city_id_city and chcb.cm_id_cm=chcht.cm_id_cm "
                . "JOIN cities_master cmd on chcht.city_id_city=city_id "
                . "where chcht.city_id_city='$cityid' order by chcht_id asc";

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
        $sql = "SELECT sm_id,subtask from subtask_master_data where sm_status=1 order by subtask asc";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCitySubTask($cityid) {
        $sql = "SELECT chchths_id,subtask,sub_task_breakup,concat(cc_record_sl,'.',task_sl_no,'.',subtask_sl_no) record_sl,"
                . "ROUND((select contract_cost * (select component_breakup from city_has_component_breakup schc where schc.city_id_city=chchthc.city_id_city and schc.cm_id_cm=chchthc.cm_id_cm)/100 * "
                . " (select task_breakup from city_has_component_has_task as chcht where chcht.city_id_city=chchthc.city_id_city and chcht.cm_id_cm=chchthc.cm_id_cm and chcht.tm_id_tm=chchthc.tm_id_tm)/100 * sub_task_breakup/100 from cities_master scm where scm.city_id=chchthc.city_id_city ),2) as breakup_cost,subtask_unit,subtask_qty,if(allowed_partial='1','Yes','No') allowedpartial,subtask_status,entered_progress "
                . "FROM city_has_component_has_task_has_subtask chchthc "
                . "JOIN subtask_master_data on sm_id_sm=sm_id "
                . "JOIN city_has_component_breakup chcb on chcb.city_id_city=chchthc.city_id_city and chcb.cm_id_cm=chchthc.cm_id_cm "
                . "JOIN city_has_component_has_task chcht on chcht.city_id_city=chchthc.city_id_city and chcht.cm_id_cm=chchthc.cm_id_cm and chcht.tm_id_tm=chchthc.tm_id_tm "
                . "WHERE chchthc.city_id_city='$cityid' order by chchths_id asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponentHasTask($cityid, $componentid) {
        $sql = "SELECT tm_id_tm,task_name,concat(cc_record_sl,'.',task_sl_no) record_sl  "
                . "from city_has_component_has_task chcht "
                . "JOIN task_master_data tmd on chcht.tm_id_tm=tm_id  "
                . "JOIN city_has_component_breakup chcb on chcb.city_id_city=chcht.city_id_city and chcb.cm_id_cm=chcht.cm_id_cm "
                . "where chcht.city_id_city='$cityid' and chcht.cm_id_cm='$componentid' order by task_name asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityHasComponent($cityid) {
        $sql = "SELECT cm_id_cm,component "
                . "from city_has_component_breakup "
                . "join component_master_data on cm_id_cm=cm_id "
                . "where city_id_city='$cityid' order by cc_record_sl asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponentHasTaskHasSubtask($city, $component, $task) {
        $sql = "SELECT chchths_id,concat(cc_record_sl,'.',task_sl_no,'.',subtask_sl_no) record_sl,subtask,sub_task_breakup,subtask_unit,subtask_qty,if(allowed_partial='1','Yes','No') allowedpartial,subtask_status,entered_progress "
                . "FROM city_has_component_has_task_has_subtask chchths "
                . "JOIN subtask_master_data on sm_id_sm=sm_id "
                . "JOIN city_has_component_breakup chcb on chcb.city_id_city=chchths.city_id_city and chcb.cm_id_cm=chchths.cm_id_cm "
                . "JOIN city_has_component_has_task chcht on chcht.city_id_city=chchths.city_id_city and chcht.cm_id_cm=chchths.cm_id_cm and chcht.tm_id_tm=chchths.tm_id_tm "
                . "WHERE chchths.city_id_city='$city' and chchths.cm_id_cm='$component' and chchths.tm_id_tm='$task' order by chchths_id asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityContractCost($cityid) {
        $sql = "SELECT contract_cost from cities_master where city_id='$cityid'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->contract_cost;
        return $return;
    }

    

    public function getComponentBreakUpPercent($city) {
        $sql = "SELECT coalesce(sum(component_breakup),0) as sumbreakup from city_has_component_breakup where city_id_city='$city'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->sumbreakup;
        return $return;
    }
    
    public function getTaskBreakUpPercent($city, $component) {
        $sql = "SELECT coalesce(sum(task_breakup),0) as sumbreakup from city_has_component_has_task where cm_id_cm='$component' and city_id_city='$city'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->sumbreakup;
        return $return;
    }
    
    public function getSubTaskBreakUpPercent($city, $component,$task) {
        $sql = "SELECT coalesce(sum(sub_task_breakup),0) as sumbreakup from city_has_component_has_task_has_subtask where cm_id_cm='$component' and city_id_city='$city' and tm_id_tm='$task'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->sumbreakup;
        return $return;
    }
    
    public function getCityComponentRecordCount($cityid){
        $sql = "SELECT count(*) counter from city_has_component_breakup where city_id_city='$cityid'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->counter;
        return $return;
    }
    
    public function getCityComponentTaskRecordCount($city,$component){
        $sql = "SELECT count(*) counter from city_has_component_has_task where cm_id_cm='$component' and city_id_city='$city'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->counter;
        return $return;
    }
    
    public function getCityComponentTaskSubtaskRecordCount($city, $component,$task) {
        $sql = "SELECT count(*) counter from city_has_component_has_task_has_subtask where cm_id_cm='$component' and city_id_city='$city' and tm_id_tm='$task'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->counter;
        return $return;
    }
}
