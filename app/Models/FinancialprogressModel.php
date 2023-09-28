<?php

namespace App\Models;

use CodeIgniter\Model;

class FinancialprogressModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function financialprogressdata() {
        //$sql = "SELECT city_name, contract_cost from cities_master where city_status=1";
        $sql = "select C.city_id, C.city_name, C.contract_cost,round((progress_percentage*B.contract_cost)/100) as achievedprogress,progress_percentage as achievedprogress_percentage from 
        (
        select city_id, city_name, contract_cost,sum(CC.component_breakup),
        round(sum(((A.entered_progress_percentage*CC.component_breakup)/100)),2) as progress_percentage  from 
        (SELECT city_id, city_name, contract_cost,CTS.cm_id_cm,
        sum(task_breakup * ((sub_task_breakup*entered_progress)/100)/100) entered_progress_percentage
        from cities_master CM
        inner join city_has_component_has_task_has_subtask CTS on CM.city_id = CTS.city_id_city
        inner join city_has_component_has_task CT on CM.city_id = CT.city_id_city and CT.cm_id_cm = CTS.cm_id_cm AND CT.tm_id_tm = CTS.tm_id_tm
        where city_status=1 
        group by city_id, city_name, contract_cost,CTS.cm_id_cm) A
        inner join city_has_component_breakup CC on CC.city_id_city = A.city_id and CC.cm_id_cm = A.cm_id_cm
        group by city_id, city_name, contract_cost
        )B
        right join cities_master C on C.city_id = B.city_id";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

}
