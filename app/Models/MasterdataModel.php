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
        $sql = "SELECT cc_record_sl,chcb_id,cm_id_cm,component,component_breakup,round((contract_cost * component_breakup/100),2) as breakupcost,contract_cost,component_scope "
                . "from city_has_component_breakup "
                . "join component_master_data on cm_id=cm_id_cm  "
                . "JOIN cities_master on city_id=city_id_city "
                . "where city_id_city='$cityid' order by cc_record_sl asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponentTask($cityid) {
        $sql = "SELECT chcht_id,chcht.cm_id_cm,task_name,task_breakup,task_sl_no record_sl,"
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
        $sql = "SELECT chchths_id,subtask,sub_task_breakup,subtask_sl_no record_sl,"
                . "ROUND((select contract_cost * "
                . "(select component_breakup from city_has_component_breakup schc "
                . "where schc.city_id_city=chchthc.city_id_city and schc.cm_id_cm=chchthc.cm_id_cm)/100 * "
                . " (select task_breakup from city_has_component_has_task as chcht "
                . "where chcht.city_id_city=chchthc.city_id_city "
                . "and chcht.cm_id_cm=chchthc.cm_id_cm and chcht.tm_id_tm=chchthc.tm_id_tm)/100 * "
                . "sub_task_breakup/100 from cities_master scm where scm.city_id=chchthc.city_id_city ),2) as breakup_cost,"
                . "subtask_unit,subtask_qty,if(allowed_partial='1','Yes','No') allowedpartial,status,entered_progress "
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
        $sql = "SELECT tm_id_tm,task_name,task_sl_no record_sl  "
                . "from city_has_component_has_task chcht "
                . "JOIN task_master_data tmd on chcht.tm_id_tm=tm_id  "
                . "JOIN city_has_component_breakup chcb on chcb.city_id_city=chcht.city_id_city and chcb.cm_id_cm=chcht.cm_id_cm "
                . "where chcht.city_id_city='$cityid' and chcht.cm_id_cm='$componentid' order by task_sl_no asc";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityHasComponent($cityid) {
        /* $sql = "SELECT cm_id_cm,component "
          . "from city_has_component_breakup "
          . "join component_master_data on cm_id_cm=cm_id "
          . "where city_id_city='$cityid' order by cc_record_sl asc"; */
        $sql = "select city_id, city_name,A.cm_id_cm,CMD.component,sum(CC.component_breakup),round(sum(A.entered_progress_percentage),2) component_progress_percentage,
        round(sum(((A.entered_progress_percentage*CC.component_breakup)/100)),2) as overal_progress_percentage  from 
        (SELECT city_id, city_name, contract_cost,CTS.cm_id_cm,
        sum(task_breakup * ((sub_task_breakup*entered_progress)/100)/100) entered_progress_percentage
        from cities_master CM
        inner join city_has_component_has_task_has_subtask CTS on CM.city_id = CTS.city_id_city
        inner join city_has_component_has_task CT on CM.city_id = CT.city_id_city and CT.cm_id_cm = CTS.cm_id_cm AND CT.tm_id_tm = CTS.tm_id_tm
        where city_status=1 and city_id='$cityid'
        group by city_id, city_name, contract_cost,CTS.cm_id_cm) A
        inner join city_has_component_breakup CC on CC.city_id_city = A.city_id and CC.cm_id_cm = A.cm_id_cm
        inner join component_master_data CMD on CC.cm_id_cm = CMD.cm_id
        group by city_id, city_name, contract_cost,A.cm_id_cm,CMD.component";

        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityComponentHasTaskHasSubtask($city, $component, $task) {
        $sql = "SELECT chchths_id,subtask_sl_no record_sl,"
                . "subtask,sub_task_breakup,subtask_unit,subtask_qty,if(allowed_partial='1','Yes','No') allowedpartial,"
                . "status,entered_progress,subtask_qty "
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

    public function getSubTaskBreakUpPercent($city, $component, $task) {
        $sql = "SELECT coalesce(sum(sub_task_breakup),0) as sumbreakup from city_has_component_has_task_has_subtask where cm_id_cm='$component' and city_id_city='$city' and tm_id_tm='$task'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->sumbreakup;
        return $return;
    }

    public function getCityComponentRecordCount($cityid) {
        $sql = "SELECT count(*) counter from city_has_component_breakup where city_id_city='$cityid'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->counter;
        return $return;
    }

    public function getCityComponentTaskRecordCount($city, $component) {
        $sql = "SELECT count(*) counter from city_has_component_has_task where cm_id_cm='$component' and city_id_city='$city'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->counter;
        return $return;
    }

    public function getCityComponentTaskSubtaskRecordCount($city, $component, $task) {
        $sql = "SELECT count(*) counter from city_has_component_has_task_has_subtask where cm_id_cm='$component' and city_id_city='$city' and tm_id_tm='$task'";
        $result = $this->db->query($sql);
        $return = $result->getRow()->counter;
        return $return;
    }

    public function createMockComponentTask($cityid) {
        $sql = "INSERT INTO `city_has_component_has_task` (`cm_id_cm`, `city_id_city`, `tm_id_tm`, `task_breakup`, `task_sl_no`, `task_quantity`) VALUES
        (1, $cityid, 49, '0.0', '1.1', ''),
        (1, $cityid, 50, '0.0', '1.2', ''),
        (3, $cityid, 59, '0.0', '3.1', ''),
        (3, $cityid, 52, '0.0', '3.2', ''),
        (3, $cityid, 60, '0.0', '3.3', ''),
        (3, $cityid, 61, '0.0', '3.4', ''),
        (3, $cityid, 62, '0.0', '3.5', ''),
        (3, $cityid, 63, '0.0', '3.6', ''),
        (3, $cityid, 58, '0.0', '3.7', ''),
        (4, $cityid, 51, '0.0', '4.1', ''),
        (4, $cityid, 59, '0.0', '4.2', ''),
        (4, $cityid, 52, '0.0', '4.3', ''),
        (4, $cityid, 64, '0.0', '4.4', ''),
        (4, $cityid, 65, '0.0', '4.5', ''),
        (4, $cityid, 66, '0.0', '4.6', ''),
        (4, $cityid, 63, '0.0', '4.7', ''),
        (4, $cityid, 58, '0.0', '4.8', ''),
        (5, $cityid, 51, '0.0', '5.1', ''),
        (5, $cityid, 67, '0.0', '5.2', ''),
        (5, $cityid, 68, '0.0', '5.3', ''),
        (5, $cityid, 69, '0.0', '5.4', ''),
        (5, $cityid, 70, '0.0', '5.5', ''),
        (5, $cityid, 71, '0.0', '5.6', ''),
        (5, $cityid, 72, '0.0', '5.7', ''),
        (5, $cityid, 73, '0.0', '5.8', ''),
        (6, $cityid, 51, '0.0', '7.1', ''),
        (6, $cityid, 59, '0.0', '7.2', ''),
        (6, $cityid, 52, '0.0', '7.3', ''),
        (6, $cityid, 64, '0.0', '7.4', ''),
        (6, $cityid, 65, '0.0', '7.5', ''),
        (6, $cityid, 66, '0.0', '7.6', ''),
        (6, $cityid, 63, '0.0', '7.7', ''),
        (6, $cityid, 58, '0.0', '7.8', ''),
        (8, $cityid, 51, '0.0', '9.1', ''),
        (8, $cityid, 59, '0.0', '9.2', ''),
        (8, $cityid, 52, '0.0', '9.3', ''),
        (8, $cityid, 64, '0.0', '9.4', ''),
        (8, $cityid, 65, '0.0', '9.5', ''),
        (8, $cityid, 66, '0.0', '9.6', ''),
        (8, $cityid, 63, '0.0', '9.7', ''),
        (8, $cityid, 58, '0.0', '9.8', ''),
        (9, $cityid, 83, '0.0', '10.1', ''),
        (9, $cityid, 84, '0.0', '10.2', ''),
        (9, $cityid, 85, '0.0', '10.3', ''),
        (9, $cityid, 86, '0.0', '10.4', ''),
        (9, $cityid, 87, '0.0', '10.5', ''),
        (10, $cityid, 59, '0.0', '11.1', ''),
        (10, $cityid, 88, '0.0', '11.2', ''),
        (10, $cityid, 89, '0.0', '11.3', ''),
        (10, $cityid, 90, '0.0', '11.4', ''),
        (11, $cityid, 91, '0.0', '12.1', ''),
        (11, $cityid, 92, '0.0', '12.2', ''),
        (12, $cityid, 93, '0.0', '13.1', ''),
        (12, $cityid, 91, '0.0', '13.2', ''),
        (12, $cityid, 92, '0.0', '13.3', ''),
        (13, $cityid, 94, '0.0', '14.1', ''),
        (13, $cityid, 59, '0.0', '14.2', ''),
        (13, $cityid, 95, '0.0', '14.3', ''),
        (13, $cityid, 87, '0.0', '14.4', ''),
        (13, $cityid, 96, '0.0', '14.5', ''),
        (14, $cityid, 51, '0.0', '6.1', ''),
        (14, $cityid, 59, '0.0', '6.2', ''),
        (14, $cityid, 52, '0.0', '6.3', ''),
        (14, $cityid, 60, '0.0', '6.4', ''),
        (14, $cityid, 61, '0.0', '6.5', ''),
        (14, $cityid, 62, '0.0', '6.6', ''),
        (14, $cityid, 63, '0.0', '6.7', ''),
        (14, $cityid, 58, '0.0', '6.8', ''),
        (34, $cityid, 51, '0.0', '2.1', ''),
        (34, $cityid, 52, '0.0', '2.2', ''),
        (34, $cityid, 53, '0.0', '2.3', ''),
        (34, $cityid, 54, '0.0', '2.4', ''),
        (34, $cityid, 55, '0.0', '2.5', ''),
        (34, $cityid, 56, '0.0', '2.6', ''),
        (34, $cityid, 57, '0.0', '2.7', ''),
        (34, $cityid, 58, '0.0', '2.8', ''),        
        (36, $cityid, 173, '0.0', '15.1', ''),
        (36, $cityid, 174, '0.0', '15.2', ''),
        (36, $cityid, 175, '0.0', '15.3', '');";
        $this->db->query($sql);
    }

    public function createMockComponent($cityid) {
        $sql = "INSERT INTO `city_has_component_breakup` (`cc_record_sl`, `city_id_city`, `cm_id_cm`, `component_breakup`, `component_weitage`, `component_scope`) VALUES
            (1, $cityid, 1, '0.0', '0.000', NULL),
            (2, $cityid, 34, '0.0', '0.000', NULL),
            (3, $cityid, 3, '0.0', '0.000', NULL),
            (4, $cityid, 4, '0.0', '0.000', NULL),
            (5, $cityid, 5, '0.0', '0.000', NULL),
            (6, $cityid, 14, '0.0', '0.000', NULL),
            (7, $cityid, 6, '0.0', '0.000', NULL),
            (8, $cityid, 35, '0.0', '0.000', NULL),
            (9, $cityid, 8, '0.0', '0.000', NULL),
            (10, $cityid, 9, '0.0', '0.000', NULL),
            (11, $cityid, 10, '0.0', '0.000', NULL),
            (12, $cityid, 11, '0.0', '0.000', NULL),
            (13, $cityid, 12, '0.0', '0.000', NULL),
            (14, $cityid, 13, '0.0', '0.000', NULL),
            (15, $cityid, 36, '0.0', '0.000', NULL);";
        $this->db->query($sql);
    }

    public function createMockComponentTaskSubtask($cityid) {
        $sql = "INSERT INTO `city_has_component_has_task_has_subtask` (`city_id_city`, `cm_id_cm`, `tm_id_tm`, `sm_id_sm`, `subtask_qty`, `sub_task_breakup`, `status`, `entered_progress`, `allowed_partial`, `subtask_sl_no`) VALUES
                ($cityid, 1, 49, 359, NULL, '0.00', 1, NULL, 1, '1.1.1'),
                ($cityid, 1, 50, 360, NULL, '0.00', 1, NULL, 1, '1.2.1'),
                ($cityid, 34, 51, 361, NULL, '0.00', 1, NULL, 1, '2.1.1'),
                ($cityid, 34, 51, 362, NULL, '0.00', 1, NULL, 1, '2.1.2'),
                ($cityid, 34, 52, 363, NULL, '0.00', 1, NULL, 1, '2.2.1'),
                ($cityid, 34, 52, 364, NULL, '0.00', 1, NULL, 1, '2.2.2'),
                ($cityid, 34, 52, 365, NULL, '0.00', 1, NULL, 1, '2.2.3'),
                ($cityid, 34, 53, 366, NULL, '0.00', 1, NULL, 1, '2.3.1'),
                ($cityid, 34, 53, 367, NULL, '0.00', 1, NULL, 1, '2.3.2'),
                ($cityid, 34, 53, 368, NULL, '0.00', 1, NULL, 1, '2.3.3'),
                ($cityid, 34, 53, 369, NULL, '0.00', 1, NULL, 1, '2.3.4'),
                ($cityid, 34, 53, 370, NULL, '0.00', 1, NULL, 1, '2.3.5'),
                ($cityid, 34, 53, 371, NULL, '0.00', 1, NULL, 1, '2.3.6'),
                ($cityid, 34, 53, 372, NULL, '0.00', 1, NULL, 1, '2.3.7'),
                ($cityid, 34, 53, 373, NULL, '0.00', 1, NULL, 1, '2.3.8'),
                ($cityid, 34, 53, 374, NULL, '0.00', 1, NULL, 1, '2.3.9'),
                ($cityid, 34, 53, 375, NULL, '0.00', 1, NULL, 1, '2.3.10'),
                ($cityid, 34, 54, 376, NULL, '0.00', 1, NULL, 1, '2.4.1'),
                ($cityid, 34, 54, 377, NULL, '0.00', 1, NULL, 1, '2.4.2'),
                ($cityid, 34, 54, 378, NULL, '0.00', 1, NULL, 1, '2.4.3'),
                ($cityid, 34, 54, 379, NULL, '0.00', 1, NULL, 1, '2.4.4'),
                ($cityid, 34, 55, 380, NULL, '0.00', 1, NULL, 1, '2.5.1'),
                ($cityid, 34, 55, 381, NULL, '0.00', 1, NULL, 1, '2.5.2'),
                ($cityid, 34, 56, 382, NULL, '0.00', 1, NULL, 1, '2.6.1'),
                ($cityid, 34, 56, 383, NULL, '0.00', 1, NULL, 1, '2.6.2'),
                ($cityid, 34, 56, 384, NULL, '0.00', 1, NULL, 1, '2.6.3'),
                ($cityid, 34, 56, 385, NULL, '0.00', 1, NULL, 1, '2.6.4'),
                ($cityid, 34, 56, 386, NULL, '0.00', 1, NULL, 1, '2.6.5'),
                ($cityid, 34, 56, 387, NULL, '0.00', 1, NULL, 1, '2.6.6'),
                ($cityid, 34, 56, 388, NULL, '0.00', 1, NULL, 1, '2.6.7'),
                ($cityid, 34, 56, 389, NULL, '0.00', 1, NULL, 1, '2.6.8'),
                ($cityid, 34, 57, 390, NULL, '0.00', 1, NULL, 1, '2.7.1'),
                ($cityid, 34, 57, 391, NULL, '0.00', 1, NULL, 1, '2.7.2'),
                ($cityid, 34, 57, 392, NULL, '0.00', 1, NULL, 1, '2.7.3'),
                ($cityid, 34, 58, 393, NULL, '0.00', 1, NULL, 1, '2.8.1'),
                ($cityid, 3, 59, 394, NULL, '0.00', 1, NULL, 1, '3.1.1'),
                ($cityid, 3, 59, 388, NULL, '0.00', 1, NULL, 1, '3.1.2'),
                ($cityid, 3, 59, 395, NULL, '0.00', 1, NULL, 1, '3.1.3'),
                ($cityid, 3, 52, 396, NULL, '0.00', 1, NULL, 1, '3.2.1'),
                ($cityid, 3, 60, 397, NULL, '0.00', 1, NULL, 1, '3.3.1'),
                ($cityid, 3, 60, 398, NULL, '0.00', 1, NULL, 1, '3.3.2'),
                ($cityid, 3, 60, 399, NULL, '0.00', 1, NULL, 1, '3.3.3'),
                ($cityid, 3, 60, 400, NULL, '0.00', 1, NULL, 1, '3.3.4'),
                ($cityid, 3, 60, 401, NULL, '0.00', 1, NULL, 1, '3.3.5'),
                ($cityid, 3, 61, 402, NULL, '0.00', 1, NULL, 1, '3.4.1'),
                ($cityid, 3, 61, 403, NULL, '0.00', 1, NULL, 1, '3.4.2'),
                ($cityid, 3, 61, 404, NULL, '0.00', 1, NULL, 1, '3.4.3'),
                ($cityid, 3, 61, 405, NULL, '0.00', 1, NULL, 1, '3.4.4'),
                ($cityid, 3, 62, 406, NULL, '0.00', 1, NULL, 1, '3.5.1'),
                ($cityid, 3, 63, 407, NULL, '0.00', 1, NULL, 1, '3.6.1'),
                ($cityid, 3, 63, 408, NULL, '0.00', 1, NULL, 1, '3.6.2'),
                ($cityid, 3, 63, 392, NULL, '0.00', 1, NULL, 1, '3.6.3'),
                ($cityid, 3, 58, 393, NULL, '0.00', 1, NULL, 1, '3.7.1'),
                ($cityid, 4, 51, 409, NULL, '0.00', 1, NULL, 1, '4.1.1'),
                ($cityid, 4, 51, 410, NULL, '0.00', 1, NULL, 1, '4.1.2'),
                ($cityid, 4, 59, 858, NULL, '0.00', 1, NULL, 1, '4.2.1'),
                ($cityid, 4, 59, 412, NULL, '0.00', 1, NULL, 1, '4.2.2'),
                ($cityid, 4, 59, 413, NULL, '0.00', 1, NULL, 1, '4.2.3'),
                ($cityid, 4, 59, 414, NULL, '0.00', 1, NULL, 1, '4.2.4'),
                ($cityid, 4, 52, 415, NULL, '0.00', 1, NULL, 1, '4.3.1'),
                ($cityid, 4, 64, 837, NULL, '0.00', 1, NULL, 1, '4.4.1'),
                ($cityid, 4, 64, 417, NULL, '0.00', 1, NULL, 1, '4.4.2'),
                ($cityid, 4, 64, 418, NULL, '0.00', 1, NULL, 1, '4.4.3'),
                ($cityid, 4, 64, 838, NULL, '0.00', 1, NULL, 1, '4.4.4'),
                ($cityid, 4, 65, 839, NULL, '0.00', 1, NULL, 1, '4.5.1'),
                ($cityid, 4, 66, 421, NULL, '0.00', 1, NULL, 1, '4.6.1'),
                ($cityid, 4, 66, 422, NULL, '0.00', 1, NULL, 1, '4.6.2'),
                ($cityid, 4, 66, 423, NULL, '0.00', 1, NULL, 1, '4.6.3'),
                ($cityid, 4, 66, 424, NULL, '0.00', 1, NULL, 1, '4.6.4'),
                ($cityid, 4, 63, 412, NULL, '0.00', 1, NULL, 1, '4.7.1'),
                ($cityid, 4, 63, 413, NULL, '0.00', 1, NULL, 1, '4.7.2'),
                ($cityid, 4, 58, 425, NULL, '0.00', 1, NULL, 1, '4.8.1'),
                ($cityid, 5, 51, 426, NULL, '0.00', 1, NULL, 1, '5.1.1'),
                ($cityid, 5, 51, 427, NULL, '0.00', 1, NULL, 1, '5.1.2'),
                ($cityid, 5, 51, 428, NULL, '0.00', 1, NULL, 1, '5.1.3'),
                ($cityid, 5, 67, 429, NULL, '0.00', 1, NULL, 1, '5.2.1'),
                ($cityid, 5, 67, 430, NULL, '0.00', 1, NULL, 1, '5.2.2'),
                ($cityid, 5, 67, 431, NULL, '0.00', 1, NULL, 1, '5.2.3'),
                ($cityid, 5, 67, 432, NULL, '0.00', 1, NULL, 1, '5.2.4'),
                ($cityid, 5, 67, 433, NULL, '0.00', 1, NULL, 1, '5.2.5'),
                ($cityid, 5, 67, 434, NULL, '0.00', 1, NULL, 1, '5.2.6'),
                ($cityid, 5, 67, 435, NULL, '0.00', 1, NULL, 1, '5.2.7'),
                ($cityid, 5, 67, 436, NULL, '0.00', 1, NULL, 1, '5.2.8'),
                ($cityid, 5, 67, 437, NULL, '0.00', 1, NULL, 1, '5.2.9'),
                ($cityid, 5, 67, 438, NULL, '0.00', 1, NULL, 1, '5.2.10'),
                ($cityid, 5, 67, 439, NULL, '0.00', 1, NULL, 1, '5.2.11'),
                ($cityid, 5, 67, 440, NULL, '0.00', 1, NULL, 1, '5.2.12'),
                ($cityid, 5, 67, 441, NULL, '0.00', 1, NULL, 1, '5.2.13'),
                ($cityid, 5, 67, 442, NULL, '0.00', 1, NULL, 1, '5.2.14'),
                ($cityid, 5, 67, 443, NULL, '0.00', 1, NULL, 1, '5.2.15'),
                ($cityid, 5, 67, 444, NULL, '0.00', 1, NULL, 1, '5.2.16'),
                ($cityid, 5, 67, 445, NULL, '0.00', 1, NULL, 1, '5.2.17'),
                ($cityid, 5, 67, 446, NULL, '0.00', 1, NULL, 1, '5.2.18'),
                ($cityid, 5, 67, 447, NULL, '0.00', 1, NULL, 1, '5.2.19'),
                ($cityid, 5, 67, 448, NULL, '0.00', 1, NULL, 1, '5.2.20'),
                ($cityid, 5, 67, 449, NULL, '0.00', 1, NULL, 1, '5.2.21'),
                ($cityid, 5, 67, 450, NULL, '0.00', 1, NULL, 1, '5.2.22'),
                ($cityid, 5, 67, 451, NULL, '0.00', 1, NULL, 1, '5.2.23'),
                ($cityid, 5, 67, 452, NULL, '0.00', 1, NULL, 1, '5.2.24'),
                ($cityid, 5, 67, 453, NULL, '0.00', 1, NULL, 1, '5.2.25'),
                ($cityid, 5, 68, 454, NULL, '0.00', 1, NULL, 1, '5.3.1'),
                ($cityid, 5, 68, 430, NULL, '0.00', 1, NULL, 1, '5.3.2'),
                ($cityid, 5, 68, 455, NULL, '0.00', 1, NULL, 1, '5.3.3'),
                ($cityid, 5, 68, 456, NULL, '0.00', 1, NULL, 1, '5.3.4'),
                ($cityid, 5, 68, 457, NULL, '0.00', 1, NULL, 1, '5.3.5'),
                ($cityid, 5, 68, 458, NULL, '0.00', 1, NULL, 1, '5.3.6'),
                ($cityid, 5, 68, 459, NULL, '0.00', 1, NULL, 1, '5.3.7'),
                ($cityid, 5, 68, 460, NULL, '0.00', 1, NULL, 1, '5.3.8'),
                ($cityid, 5, 68, 461, NULL, '0.00', 1, NULL, 1, '5.3.9'),
                ($cityid, 5, 68, 462, NULL, '0.00', 1, NULL, 1, '5.3.10'),
                ($cityid, 5, 68, 463, NULL, '0.00', 1, NULL, 1, '5.3.11'),
                ($cityid, 5, 68, 464, NULL, '0.00', 1, NULL, 1, '5.3.12'),
                ($cityid, 5, 68, 465, NULL, '0.00', 1, NULL, 1, '5.3.13'),
                ($cityid, 5, 69, 466, NULL, '0.00', 1, NULL, 1, '5.4.1'),
                ($cityid, 5, 69, 430, NULL, '0.00', 1, NULL, 1, '5.4.2'),
                ($cityid, 5, 69, 467, NULL, '0.00', 1, NULL, 1, '5.4.3'),
                ($cityid, 5, 69, 468, NULL, '0.00', 1, NULL, 1, '5.4.4'),
                ($cityid, 5, 69, 469, NULL, '0.00', 1, NULL, 1, '5.4.5'),
                ($cityid, 5, 69, 470, NULL, '0.00', 1, NULL, 1, '5.4.6'),
                ($cityid, 5, 69, 471, NULL, '0.00', 1, NULL, 1, '5.4.7'),
                ($cityid, 5, 69, 472, NULL, '0.00', 1, NULL, 1, '5.4.8'),
                ($cityid, 5, 69, 473, NULL, '0.00', 1, NULL, 1, '5.4.9'),
                ($cityid, 5, 69, 474, NULL, '0.00', 1, NULL, 1, '5.4.10'),
                ($cityid, 5, 69, 475, NULL, '0.00', 1, NULL, 1, '5.4.11'),
                ($cityid, 5, 69, 476, NULL, '0.00', 1, NULL, 1, '5.4.12'),
                ($cityid, 5, 69, 477, NULL, '0.00', 1, NULL, 1, '5.4.13'),
                ($cityid, 5, 69, 463, NULL, '0.00', 1, NULL, 1, '5.4.14'),
                ($cityid, 5, 69, 478, NULL, '0.00', 1, NULL, 1, '5.4.15'),
                ($cityid, 5, 69, 479, NULL, '0.00', 1, NULL, 1, '5.4.16'),
                ($cityid, 5, 69, 480, NULL, '0.00', 1, NULL, 1, '5.4.17'),
                ($cityid, 5, 69, 481, NULL, '0.00', 1, NULL, 1, '5.4.18'),
                ($cityid, 5, 69, 482, NULL, '0.00', 1, NULL, 1, '5.4.19'),
                ($cityid, 5, 69, 465, NULL, '00.00', 1, NULL, 1, '5.4.20'),
                ($cityid, 5, 70, 483, NULL, '00.00', 1, NULL, 1, '5.5.1'),
                ($cityid, 5, 70, 430, NULL, '00.00', 1, NULL, 1, '5.5.2'),
                ($cityid, 5, 70, 484, NULL, '00.00', 1, NULL, 1, '5.5.3'),
                ($cityid, 5, 70, 485, NULL, '00.00', 1, NULL, 1, '5.5.4'),
                ($cityid, 5, 70, 486, NULL, '00.00', 1, NULL, 1, '5.5.5'),
                ($cityid, 5, 70, 487, NULL, '0.00', 1, NULL, 1, '5.5.6'),
                ($cityid, 5, 70, 488, NULL, '0.00', 1, NULL, 1, '5.5.7'),
                ($cityid, 5, 70, 489, NULL, '0.00', 1, NULL, 1, '5.5.8'),
                ($cityid, 5, 70, 490, NULL, '0.00', 1, NULL, 1, '5.5.9'),
                ($cityid, 5, 70, 491, NULL, '0.00', 1, NULL, 1, '5.5.10'),
                ($cityid, 5, 70, 492, NULL, '0.00', 1, NULL, 1, '5.5.11'),
                ($cityid, 5, 70, 463, NULL, '0.00', 1, NULL, 1, '5.5.12'),
                ($cityid, 5, 70, 493, NULL, '0.00', 1, NULL, 1, '5.5.13'),
                ($cityid, 5, 70, 465, NULL, '0.00', 1, NULL, 1, '5.5.14'),
                ($cityid, 5, 71, 494, NULL, '0.00', 1, NULL, 1, '5.6.1'),
                ($cityid, 5, 71, 495, NULL, '0.00', 1, NULL, 1, '5.6.2'),
                ($cityid, 5, 71, 496, NULL, '0.00', 1, NULL, 1, '5.6.3'),
                ($cityid, 5, 71, 497, NULL, '0.00', 1, NULL, 1, '5.6.4'),
                ($cityid, 5, 71, 498, NULL, '0.00', 1, NULL, 1, '5.6.5'),
                ($cityid, 5, 71, 486, NULL, '00.00', 1, NULL, 1, '5.6.6'),
                ($cityid, 5, 71, 487, NULL, '0.00', 1, NULL, 1, '5.6.7'),
                ($cityid, 5, 71, 488, NULL, '0.00', 1, NULL, 1, '5.6.8'),
                ($cityid, 5, 71, 499, NULL, '0.00', 1, NULL, 1, '5.6.9'),
                ($cityid, 5, 71, 500, NULL, '0.00', 1, NULL, 1, '5.6.10'),
                ($cityid, 5, 71, 501, NULL, '0.00', 1, NULL, 1, '5.6.11'),
                ($cityid, 5, 71, 502, NULL, '0.00', 1, NULL, 1, '5.6.12'),
                ($cityid, 5, 71, 492, NULL, '0.00', 1, NULL, 1, '5.6.13'),
                ($cityid, 5, 71, 463, NULL, '00.00', 1, NULL, 1, '5.6.14'),
                ($cityid, 5, 71, 503, NULL, '0.00', 1, NULL, 1, '5.6.15'),
                ($cityid, 5, 71, 465, NULL, '00.00', 1, NULL, 1, '5.6.16'),
                ($cityid, 5, 72, 504, NULL, '0.00', 1, NULL, 1, '5.7.1'),
                ($cityid, 5, 72, 505, NULL, '0.00', 1, NULL, 1, '5.7.2'),
                ($cityid, 5, 72, 437, NULL, '0.00', 1, NULL, 1, '5.7.3'),
                ($cityid, 5, 72, 506, NULL, '0.00', 1, NULL, 1, '5.7.4'),
                ($cityid, 5, 72, 439, NULL, '0.00', 1, NULL, 1, '5.7.5'),
                ($cityid, 5, 72, 507, NULL, '0.00', 1, NULL, 1, '5.7.6'),
                ($cityid, 5, 72, 508, NULL, '0.00', 1, NULL, 1, '5.7.7'),
                ($cityid, 5, 72, 509, NULL, '0.00', 1, NULL, 1, '5.7.8'),
                ($cityid, 5, 72, 510, NULL, '0.00', 1, NULL, 1, '5.7.9'),
                ($cityid, 5, 72, 511, NULL, '0.00', 1, NULL, 1, '5.7.10'),
                ($cityid, 5, 72, 512, NULL, '0.00', 1, NULL, 1, '5.7.11'),
                ($cityid, 5, 72, 513, NULL, '0.00', 1, NULL, 1, '5.7.12'),
                ($cityid, 5, 72, 514, NULL, '0.00', 1, NULL, 1, '5.7.13'),
                ($cityid, 5, 72, 515, NULL, '0.00', 1, NULL, 1, '5.7.14'),
                ($cityid, 5, 72, 516, NULL, '0.00', 1, NULL, 1, '5.7.15'),
                ($cityid, 5, 72, 517, NULL, '0.00', 1, NULL, 1, '5.7.16'),
                ($cityid, 5, 72, 440, NULL, '0.00', 1, NULL, 1, '5.7.17'),
                ($cityid, 5, 72, 518, NULL, '0.00', 1, NULL, 1, '5.7.18'),
                ($cityid, 5, 72, 519, NULL, '0.00', 1, NULL, 1, '5.7.19'),
                ($cityid, 5, 72, 520, NULL, '0.00', 1, NULL, 1, '5.7.20'),
                ($cityid, 5, 72, 444, NULL, '0.00', 1, NULL, 1, '5.7.21'),
                ($cityid, 5, 72, 446, NULL, '0.00', 1, NULL, 1, '5.7.22'),
                ($cityid, 5, 72, 521, NULL, '0.00', 1, NULL, 1, '5.7.23'),
                ($cityid, 5, 72, 522, NULL, '0.00', 1, NULL, 1, '5.7.24'),
                ($cityid, 5, 72, 450, NULL, '0.00', 1, NULL, 1, '5.7.25'),
                ($cityid, 5, 72, 481, NULL, '0.00', 1, NULL, 1, '5.7.26'),
                ($cityid, 5, 72, 482, NULL, '0.00', 1, NULL, 1, '5.7.27'),
                ($cityid, 5, 72, 465, NULL, '00.00', 1, NULL, 1, '5.7.28'),
                ($cityid, 5, 73, 523, NULL, '00.00', 1, NULL, 1, '5.8.1'),
                ($cityid, 5, 73, 524, NULL, '0.00', 1, NULL, 1, '5.8.2'),
                ($cityid, 5, 73, 525, NULL, '0.00', 1, NULL, 1, '5.8.3'),
                ($cityid, 5, 73, 526, NULL, '0.00', 1, NULL, 1, '5.8.4'),
                ($cityid, 5, 73, 527, NULL, '0.00', 1, NULL, 1, '5.8.5'),
                ($cityid, 5, 73, 396, NULL, '0.00', 1, NULL, 1, '5.8.6'),
                ($cityid, 5, 73, 528, NULL, '0.00', 1, NULL, 1, '5.8.7'),
                ($cityid, 5, 73, 529, NULL, '0.00', 1, NULL, 1, '5.8.8'),
                ($cityid, 5, 73, 530, NULL, '0.00', 1, NULL, 1, '5.8.9'),
                ($cityid, 5, 73, 531, NULL, '0.00', 1, NULL, 1, '5.8.10'),
                ($cityid, 5, 73, 532, NULL, '0.00', 1, NULL, 1, '5.8.11'),
                ($cityid, 5, 73, 533, NULL, '0.00', 1, NULL, 1, '5.8.12'),
                ($cityid, 5, 73, 534, NULL, '0.00', 1, NULL, 1, '5.8.13'),
                ($cityid, 5, 73, 535, NULL, '0.00', 1, NULL, 1, '5.8.14'),
                ($cityid, 5, 73, 536, NULL, '0.00', 1, NULL, 1, '5.8.15'),
                ($cityid, 5, 73, 452, NULL, '0.00', 1, NULL, 1, '5.8.16'),
                ($cityid, 5, 73, 465, NULL, '0.00', 1, NULL, 1, '5.8.17'),
                ($cityid, 14, 51, 537, NULL, '0.00', 1, NULL, 1, '6.1.1'),
                ($cityid, 14, 51, 538, NULL, '0.00', 1, NULL, 1, '6.1.2'),
                ($cityid, 14, 59, 539, NULL, '0.00', 1, NULL, 1, '6.2.1'),
                ($cityid, 14, 59, 540, NULL, '0.00', 1, NULL, 1, '6.2.2'),
                ($cityid, 14, 59, 541, NULL, '0.00', 1, NULL, 1, '6.2.3'),
                ($cityid, 14, 59, 542, NULL, '0.00', 1, NULL, 1, '6.2.4'),
                ($cityid, 14, 59, 395, NULL, '0.00', 1, NULL, 1, '6.2.5'),
                ($cityid, 14, 59, 388, NULL, '0.00', 1, NULL, 1, '6.2.6'),
                ($cityid, 14, 52, 396, NULL, '0.00', 1, NULL, 1, '6.3.1'),
                ($cityid, 14, 52, 543, NULL, '0.00', 1, NULL, 1, '6.3.2'),
                ($cityid, 14, 60, 400, NULL, '0.00', 1, NULL, 1, '6.4.1'),
                ($cityid, 14, 60, 401, NULL, '0.00', 1, NULL, 1, '6.4.2'),
                ($cityid, 14, 61, 544, NULL, '0.00', 1, NULL, 1, '6.5.1'),
                ($cityid, 14, 61, 545, NULL, '0.00', 1, NULL, 1, '6.5.2'),
                ($cityid, 14, 61, 402, NULL, '0.00', 1, NULL, 1, '6.5.3'),
                ($cityid, 14, 61, 546, NULL, '0.00', 1, NULL, 1, '6.5.4'),
                ($cityid, 14, 61, 404, NULL, '0.00', 1, NULL, 1, '6.5.5'),
                ($cityid, 14, 62, 406, NULL, '00.00', 1, NULL, 1, '6.6.1'),
                ($cityid, 14, 63, 547, NULL, '0.00', 1, NULL, 1, '6.7.1'),
                ($cityid, 14, 63, 548, NULL, '0.00', 1, NULL, 1, '6.7.2'),
                ($cityid, 14, 63, 391, NULL, '0.00', 1, NULL, 1, '6.7.3'),
                ($cityid, 14, 63, 549, NULL, '0.00', 1, NULL, 1, '6.7.4'),
                ($cityid, 14, 58, 393, NULL, '0.00', 1, NULL, 1, '6.8.1'),
                ($cityid, 6, 51, 550, NULL, '0.00', 1, NULL, 1, '7.1.1'),
                ($cityid, 6, 51, 410, NULL, '0.00', 1, NULL, 1, '7.1.2'),
                ($cityid, 6, 59, 859, NULL, '0.00', 1, NULL, 1, '7.2.1'),
                ($cityid, 6, 59, 552, NULL, '0.00', 1, NULL, 1, '7.2.2'),
                ($cityid, 6, 59, 412, NULL, '0.00', 1, NULL, 1, '7.2.8'),
                ($cityid, 6, 59, 413, NULL, '0.00', 1, NULL, 1, '7.2.9'),
                ($cityid, 6, 59, 414, NULL, '0.00', 1, NULL, 1, '7.2.10'),
                ($cityid, 6, 52, 860, NULL, '0.00', 1, NULL, 1, '7.3.1'),
                ($cityid, 6, 52, 558, NULL, '0.00', 1, NULL, 1, '7.3.2'),
                ($cityid, 6, 64, 760, NULL, '0.00', 1, NULL, 1, '7.4.1'),
                ($cityid, 6, 64, 564, NULL, '0.00', 1, NULL, 1, '7.4.2'),
                ($cityid, 6, 64, 417, NULL, '0.00', 1, NULL, 1, '7.4.7'),
                ($cityid, 6, 64, 418, NULL, '0.00', 1, NULL, 1, '7.4.8'),
                ($cityid, 6, 64, 569, NULL, '0.00', 1, NULL, 1, '7.4.9'),
                ($cityid, 6, 65, 829, NULL, '0.00', 1, NULL, 1, '7.5.1'),
                ($cityid, 6, 65, 571, NULL, '0.00', 1, NULL, 1, '7.5.2'),
                ($cityid, 6, 66, 421, NULL, '0.00', 1, NULL, 1, '7.6.1'),
                ($cityid, 6, 66, 422, NULL, '0.00', 1, NULL, 1, '7.6.2'),
                ($cityid, 6, 66, 423, NULL, '0.00', 1, NULL, 1, '7.6.3'),
                ($cityid, 6, 66, 424, NULL, '0.00', 1, NULL, 1, '7.6.4'),
                ($cityid, 6, 63, 412, NULL, '0.00', 1, NULL, 1, '7.7.1'),
                ($cityid, 6, 63, 413, NULL, '0.00', 1, NULL, 1, '7.7.2'),
                ($cityid, 6, 58, 655, NULL, '0.00', 1, NULL, 1, '7.8.1'),
                ($cityid, 6, 58, 577, NULL, '0.00', 1, NULL, 1, '7.8.2'),
                ($cityid, 8, 51, 550, NULL, '0.00', 1, NULL, 1, '9.1.1'),
                ($cityid, 8, 51, 410, NULL, '0.00', 1, NULL, 1, '9.1.2'),
                ($cityid, 8, 59, 633, NULL, '0.00', 1, NULL, 1, '9.2.1'),
                ($cityid, 8, 59, 551, NULL, '0.00', 1, NULL, 1, '9.2.2'),
                ($cityid, 8, 59, 634, NULL, '0.00', 1, NULL, 1, '9.2.3'),
                ($cityid, 8, 59, 552, NULL, '0.00', 1, NULL, 1, '9.2.4'),
                ($cityid, 8, 59, 412, NULL, '0.00', 1, NULL, 1, '9.2.7'),
                ($cityid, 8, 59, 413, NULL, '0.00', 1, NULL, 1, '9.2.8'),
                ($cityid, 8, 52, 635, NULL, '0.00', 1, NULL, 1, '9.3.1'),
                ($cityid, 8, 52, 636, NULL, '0.00', 1, NULL, 1, '9.3.2'),
                ($cityid, 8, 52, 637, NULL, '0.00', 1, NULL, 1, '9.3.3'),
                ($cityid, 8, 52, 638, NULL, '0.00', 1, NULL, 1, '9.3.4'),
                ($cityid, 8, 64, 641, NULL, '0.00', 1, NULL, 1, '9.4.1'),
                ($cityid, 8, 64, 642, NULL, '0.00', 1, NULL, 1, '9.4.2'),
                ($cityid, 8, 64, 643, NULL, '0.00', 1, NULL, 1, '9.4.3'),
                ($cityid, 8, 64, 644, NULL, '0.00', 1, NULL, 1, '9.4.4'),
                ($cityid, 8, 64, 417, NULL, '0.00', 1, NULL, 1, '9.4.7'),
                ($cityid, 8, 64, 418, NULL, '0.00', 1, NULL, 1, '9.4.8'),
                ($cityid, 8, 64, 647, NULL, '0.00', 1, NULL, 1, '9.4.9'),
                ($cityid, 8, 65, 648, NULL, '0.00', 1, NULL, 1, '9.5.1'),
                ($cityid, 8, 65, 649, NULL, '0.00', 1, NULL, 1, '9.5.2'),
                ($cityid, 8, 65, 650, NULL, '0.00', 1, NULL, 1, '9.5.3'),
                ($cityid, 8, 65, 651, NULL, '0.00', 1, NULL, 1, '9.5.4'),
                ($cityid, 8, 66, 421, NULL, '00.00', 1, NULL, 1, '9.6.1'),
                ($cityid, 8, 66, 422, NULL, '00.00', 1, NULL, 1, '9.6.2'),
                ($cityid, 8, 66, 423, NULL, '00.00', 1, NULL, 1, '9.6.3'),
                ($cityid, 8, 66, 424, NULL, '00.00', 1, NULL, 1, '9.6.4'),
                ($cityid, 8, 63, 412, NULL, '00.00', 1, NULL, 1, '9.7.1'),
                ($cityid, 8, 63, 413, NULL, '00.00', 1, NULL, 1, '9.7.2'),
                ($cityid, 8, 58, 654, NULL, '00.00', 1, NULL, 1, '9.8.1'),
                ($cityid, 8, 58, 576, NULL, '00.00', 1, NULL, 1, '9.8.2'),
                ($cityid, 8, 58, 655, NULL, '0.00', 1, NULL, 1, '9.8.3'),
                ($cityid, 8, 58, 577, NULL, '0.00', 1, NULL, 1, '9.8.4'),
                ($cityid, 9, 83, 656, NULL, '0.00', 1, NULL, 1, '10.1.1'),
                ($cityid, 9, 84, 657, NULL, '0.00', 1, NULL, 1, '10.2.1'),
                ($cityid, 9, 85, 658, NULL, '0.00', 1, NULL, 1, '10.3.1'),
                ($cityid, 9, 86, 659, NULL, '0.00', 1, NULL, 1, '10.4.1'),
                ($cityid, 9, 87, 660, NULL, '0.00', 1, NULL, 1, '10.5.1'),
                ($cityid, 10, 59, 661, NULL, '0.00', 1, NULL, 1, '11.1.1'),
                ($cityid, 10, 59, 662, NULL, '0.00', 1, NULL, 1, '11.1.2'),
                ($cityid, 10, 59, 663, NULL, '0.00', 1, NULL, 1, '11.1.3'),
                ($cityid, 10, 59, 664, NULL, '0.00', 1, NULL, 1, '11.1.4'),
                ($cityid, 10, 88, 665, NULL, '00.00', 1, NULL, 1, '11.2.1'),
                ($cityid, 10, 89, 666, NULL, '00.00', 1, NULL, 1, '11.3.1'),
                ($cityid, 10, 90, 667, NULL, '00.00', 1, NULL, 1, '11.4.1'),
                ($cityid, 11, 91, 668, NULL, '0.00', 1, NULL, 1, '12.1.1'),
                ($cityid, 11, 91, 669, NULL, '0.00', 1, NULL, 1, '12.1.2'),
                ($cityid, 11, 91, 670, NULL, '0.00', 1, NULL, 1, '12.1.3'),
                ($cityid, 11, 91, 671, NULL, '0.00', 1, NULL, 1, '12.1.4'),
                ($cityid, 11, 91, 672, NULL, '0.00', 1, NULL, 1, '12.1.5'),
                ($cityid, 11, 91, 673, NULL, '0.00', 1, NULL, 1, '12.1.6'),
                ($cityid, 11, 91, 674, NULL, '0.00', 1, NULL, 1, '12.1.7'),
                ($cityid, 11, 91, 675, NULL, '0.00', 1, NULL, 1, '12.1.8'),
                ($cityid, 11, 91, 676, NULL, '0.00', 1, NULL, 1, '12.1.9'),
                ($cityid, 11, 91, 677, NULL, '0.00', 1, NULL, 1, '12.1.10'),
                ($cityid, 11, 91, 678, NULL, '0.00', 1, NULL, 1, '12.1.11'),
                ($cityid, 11, 91, 679, NULL, '0.00', 1, NULL, 1, '12.1.12'),
                ($cityid, 11, 91, 680, NULL, '0.00', 1, NULL, 1, '12.1.13'),
                ($cityid, 11, 91, 681, NULL, '0.00', 1, NULL, 1, '12.1.14'),
                ($cityid, 11, 91, 682, NULL, '0.00', 1, NULL, 1, '12.1.15'),
                ($cityid, 11, 91, 683, NULL, '0.00', 1, NULL, 1, '12.1.16'),
                ($cityid, 11, 91, 684, NULL, '0.00', 1, NULL, 1, '12.1.17'),
                ($cityid, 11, 91, 685, NULL, '0.00', 1, NULL, 1, '12.1.18'),
                ($cityid, 11, 91, 686, NULL, '0.00', 1, NULL, 1, '12.1.19'),
                ($cityid, 11, 91, 687, NULL, '0.00', 1, NULL, 1, '12.1.20'),
                ($cityid, 11, 91, 688, NULL, '0.00', 1, NULL, 1, '12.1.21'),
                ($cityid, 11, 91, 680, NULL, '0.00', 1, NULL, 1, '12.1.22'),
                ($cityid, 11, 91, 689, NULL, '0.00', 1, NULL, 1, '12.1.23'),
                ($cityid, 11, 91, 690, NULL, '0.00', 1, NULL, 1, '12.1.24'),
                ($cityid, 11, 91, 691, NULL, '0.00', 1, NULL, 1, '12.1.25'),
                ($cityid, 11, 91, 692, NULL, '0.00', 1, NULL, 1, '12.1.26'),
                ($cityid, 11, 91, 693, NULL, '0.00', 1, NULL, 1, '12.1.27'),
                ($cityid, 11, 91, 694, NULL, '0.00', 1, NULL, 1, '12.1.28'),
                ($cityid, 11, 91, 695, NULL, '0.00', 1, NULL, 1, '12.1.29'),
                ($cityid, 11, 91, 696, NULL, '0.00', 1, NULL, 1, '12.1.30'),
                ($cityid, 11, 91, 697, NULL, '0.00', 1, NULL, 1, '12.1.31'),
                ($cityid, 11, 91, 698, NULL, '0.00', 1, NULL, 1, '12.1.32'),
                ($cityid, 11, 91, 699, NULL, '0.00', 1, NULL, 1, '12.1.33'),
                ($cityid, 11, 91, 700, NULL, '0.00', 1, NULL, 1, '12.1.34'),
                ($cityid, 11, 91, 701, NULL, '0.00', 1, NULL, 1, '12.1.35'),
                ($cityid, 11, 91, 702, NULL, '0.00', 1, NULL, 1, '12.1.36'),
                ($cityid, 11, 91, 703, NULL, '0.00', 1, NULL, 1, '12.1.37'),
                ($cityid, 11, 91, 704, NULL, '0.00', 1, NULL, 1, '12.1.38'),
                ($cityid, 11, 91, 705, NULL, '0.00', 1, NULL, 1, '12.1.39'),
                ($cityid, 11, 91, 706, NULL, '0.00', 1, NULL, 1, '12.1.40'),
                ($cityid, 11, 91, 707, NULL, '0.00', 1, NULL, 1, '12.1.41'),
                ($cityid, 11, 91, 708, NULL, '0.00', 1, NULL, 1, '12.1.42'),
                ($cityid, 11, 91, 709, NULL, '0.00', 1, NULL, 1, '12.1.43'),
                ($cityid, 11, 91, 710, NULL, '0.00', 1, NULL, 1, '12.1.44'),
                ($cityid, 11, 91, 705, NULL, '0.00', 1, NULL, 1, '12.1.45'),
                ($cityid, 11, 91, 711, NULL, '0.00', 1, NULL, 1, '12.1.46'),
                ($cityid, 11, 91, 712, NULL, '0.00', 1, NULL, 1, '12.1.47'),
                ($cityid, 11, 91, 713, NULL, '0.00', 1, NULL, 1, '12.1.48'),
                ($cityid, 11, 91, 714, NULL, '0.00', 1, NULL, 1, '12.1.49'),
                ($cityid, 11, 91, 715, NULL, '0.00', 1, NULL, 1, '12.1.50'),
                ($cityid, 11, 91, 716, NULL, '0.00', 1, NULL, 1, '12.1.51'),
                ($cityid, 11, 91, 705, NULL, '0.00', 1, NULL, 1, '12.1.52'),
                ($cityid, 11, 91, 717, NULL, '0.00', 1, NULL, 1, '12.1.53'),
                ($cityid, 11, 92, 668, NULL, '0.00', 1, NULL, 1, '12.2.1'),
                ($cityid, 11, 92, 718, NULL, '0.00', 1, NULL, 1, '12.2.2'),
                ($cityid, 11, 92, 670, NULL, '0.00', 1, NULL, 1, '12.2.3'),
                ($cityid, 11, 92, 671, NULL, '0.00', 1, NULL, 1, '12.2.4'),
                ($cityid, 11, 92, 672, NULL, '0.00', 1, NULL, 1, '12.2.5'),
                ($cityid, 11, 92, 673, NULL, '0.00', 1, NULL, 1, '12.2.6'),
                ($cityid, 11, 92, 719, NULL, '0.00', 1, NULL, 1, '12.2.7'),
                ($cityid, 11, 92, 675, NULL, '0.00', 1, NULL, 1, '12.2.8'),
                ($cityid, 11, 92, 720, NULL, '0.00', 1, NULL, 1, '12.2.9'),
                ($cityid, 11, 92, 677, NULL, '0.00', 1, NULL, 1, '12.2.10'),
                ($cityid, 11, 92, 678, NULL, '0.00', 1, NULL, 1, '12.2.11'),
                ($cityid, 11, 92, 679, NULL, '0.00', 1, NULL, 1, '12.2.12'),
                ($cityid, 11, 92, 680, NULL, '0.00', 1, NULL, 1, '12.2.13'),
                ($cityid, 11, 92, 681, NULL, '0.00', 1, NULL, 1, '12.2.14'),
                ($cityid, 11, 92, 682, NULL, '0.00', 1, NULL, 1, '12.2.15'),
                ($cityid, 11, 92, 683, NULL, '0.00', 1, NULL, 1, '12.2.16'),
                ($cityid, 11, 92, 721, NULL, '0.00', 1, NULL, 1, '12.2.17'),
                ($cityid, 11, 92, 722, NULL, '0.00', 1, NULL, 1, '12.2.18'),
                ($cityid, 11, 92, 686, NULL, '0.00', 1, NULL, 1, '12.2.19'),
                ($cityid, 11, 92, 687, NULL, '0.00', 1, NULL, 1, '12.2.20'),
                ($cityid, 11, 92, 688, NULL, '0.00', 1, NULL, 1, '12.2.21'),
                ($cityid, 11, 92, 680, NULL, '0.00', 1, NULL, 1, '12.2.22'),
                ($cityid, 11, 92, 689, NULL, '0.00', 1, NULL, 1, '12.2.23'),
                ($cityid, 11, 92, 690, NULL, '0.00', 1, NULL, 1, '12.2.24'),
                ($cityid, 11, 92, 691, NULL, '0.00', 1, NULL, 1, '12.2.25'),
                ($cityid, 11, 92, 723, NULL, '0.00', 1, NULL, 1, '12.2.26'),
                ($cityid, 11, 92, 693, NULL, '0.00', 1, NULL, 1, '12.2.27'),
                ($cityid, 11, 92, 694, NULL, '0.00', 1, NULL, 1, '12.2.28'),
                ($cityid, 11, 92, 724, NULL, '0.00', 1, NULL, 1, '12.2.29'),
                ($cityid, 11, 92, 696, NULL, '0.00', 1, NULL, 1, '12.2.30'),
                ($cityid, 11, 92, 697, NULL, '0.00', 1, NULL, 1, '12.2.31'),
                ($cityid, 11, 92, 698, NULL, '0.00', 1, NULL, 1, '12.2.32'),
                ($cityid, 11, 92, 699, NULL, '0.00', 1, NULL, 1, '12.2.33'),
                ($cityid, 11, 92, 700, NULL, '0.00', 1, NULL, 1, '12.2.34'),
                ($cityid, 11, 92, 701, NULL, '0.00', 1, NULL, 1, '12.2.35'),
                ($cityid, 11, 92, 702, NULL, '0.00', 1, NULL, 1, '12.2.36'),
                ($cityid, 11, 92, 703, NULL, '0.00', 1, NULL, 1, '12.2.37'),
                ($cityid, 11, 92, 704, NULL, '0.00', 1, NULL, 1, '12.2.38'),
                ($cityid, 11, 92, 705, NULL, '0.00', 1, NULL, 1, '12.2.39'),
                ($cityid, 11, 92, 706, NULL, '0.00', 1, NULL, 1, '12.2.40'),
                ($cityid, 11, 92, 707, NULL, '0.00', 1, NULL, 1, '12.2.41'),
                ($cityid, 11, 92, 708, NULL, '0.00', 1, NULL, 1, '12.2.42'),
                ($cityid, 11, 92, 709, NULL, '0.00', 1, NULL, 1, '12.2.43'),
                ($cityid, 11, 92, 710, NULL, '0.00', 1, NULL, 1, '12.2.44'),
                ($cityid, 11, 92, 705, NULL, '0.00', 1, NULL, 1, '12.2.45'),
                ($cityid, 11, 92, 711, NULL, '0.00', 1, NULL, 1, '12.2.46'),
                ($cityid, 11, 92, 712, NULL, '0.00', 1, NULL, 1, '12.2.47'),
                ($cityid, 11, 92, 713, NULL, '0.00', 1, NULL, 1, '12.2.48'),
                ($cityid, 11, 92, 714, NULL, '0.00', 1, NULL, 1, '12.2.49'),
                ($cityid, 11, 92, 715, NULL, '0.00', 1, NULL, 1, '12.2.50'),
                ($cityid, 11, 92, 716, NULL, '0.00', 1, NULL, 1, '12.2.51'),
                ($cityid, 11, 92, 705, NULL, '0.00', 1, NULL, 1, '12.2.52'),
                ($cityid, 11, 92, 717, NULL, '0.00', 1, NULL, 1, '12.2.53'),
                ($cityid, 12, 93, 725, NULL, '0.00', 1, NULL, 1, '13.1.1'),
                ($cityid, 12, 91, 726, NULL, '0.00', 1, NULL, 1, '13.2.1'),
                ($cityid, 12, 91, 727, NULL, '0.00', 1, NULL, 1, '13.2.2'),
                ($cityid, 12, 91, 728, NULL, '0.00', 1, NULL, 1, '13.2.3'),
                ($cityid, 12, 91, 729, NULL, '0.00', 1, NULL, 1, '13.2.4'),
                ($cityid, 12, 91, 730, NULL, '0.00', 1, NULL, 1, '13.2.5'),
                ($cityid, 12, 91, 731, NULL, '0.00', 1, NULL, 1, '13.2.6'),
                ($cityid, 12, 91, 732, NULL, '0.00', 1, NULL, 1, '13.2.7'),
                ($cityid, 12, 91, 733, NULL, '0.00', 1, NULL, 1, '13.2.8'),
                ($cityid, 12, 92, 734, NULL, '0.00', 1, NULL, 1, '13.3.1'),
                ($cityid, 12, 92, 727, NULL, '0.00', 1, NULL, 1, '13.3.2'),
                ($cityid, 12, 92, 728, NULL, '0.00', 1, NULL, 1, '13.3.3'),
                ($cityid, 12, 92, 729, NULL, '0.00', 1, NULL, 1, '13.3.4'),
                ($cityid, 12, 92, 730, NULL, '0.00', 1, NULL, 1, '13.3.5'),
                ($cityid, 12, 92, 731, NULL, '0.00', 1, NULL, 1, '13.3.6'),
                ($cityid, 12, 92, 735, NULL, '0.00', 1, NULL, 1, '13.3.7'),
                ($cityid, 12, 92, 733, NULL, '0.00', 1, NULL, 1, '13.3.8'),
                ($cityid, 13, 94, 736, NULL, '00.00', 1, NULL, 1, '14.1.1'),
                ($cityid, 13, 59, 737, NULL, '0.00', 1, NULL, 1, '14.2.1'),
                ($cityid, 13, 59, 738, NULL, '0.00', 1, NULL, 1, '14.2.2'),
                ($cityid, 13, 59, 739, NULL, '0.00', 1, NULL, 1, '14.2.3'),
                ($cityid, 13, 95, 740, NULL, '00.00', 1, NULL, 1, '14.3.1'),
                ($cityid, 13, 87, 660, NULL, '00.00', 1, NULL, 1, '14.4.1'),
                ($cityid, 13, 96, 741, NULL, '00.00', 1, NULL, 1, '14.5.1'),
                ($cityid, 36, 173, 861, NULL, '0.00', 1, NULL, 1, '15.1.1'),
                ($cityid, 36, 173, 862, NULL, '0.00', 1, NULL, 1, '15.1.2'),
                ($cityid, 36, 173, 863, NULL, '0.00', 1, NULL, 1, '15.1.3'),
                ($cityid, 36, 174, 861, NULL, '0.00', 1, NULL, 1, '15.2.1'),
                ($cityid, 36, 174, 862, NULL, '0.00', 1, NULL, 1, '15.2.2'),
                ($cityid, 36, 174, 864, NULL, '000', 1, NULL, 1, '15.2.3'),
                ($cityid, 36, 175, 861, NULL, '0.00', 1, NULL, 1, '15.3.1'),
                ($cityid, 36, 175, 862, NULL, '0.00', 1, NULL, 1, '15.3.2'),
                ($cityid, 36, 175, 863, NULL, '0.00', 1, NULL, 1, '15.3.3');";
        $this->db->query($sql);
    }
}
