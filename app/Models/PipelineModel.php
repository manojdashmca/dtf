<?php

namespace App\Models;

use CodeIgniter\Model;

class PipelineModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllDivision()
    {
        $sql = "SELECT * from divisions";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function checkDuplicate($division_name)
    {

        $sql = "SELECT division_name from divisions WHERE division_name = '$division_name';";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
    }

    public function checkDuplicateCity($city_name)
    {

        $sql = "SELECT city_name from pl_citys WHERE city_name = '$city_name';";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
    }

    public function insertDivision($division_name)
    {
        $sql = "INSERT INTO divisions(division_name)VALUES('$division_name')";
        $result = $this->db->query($sql);

        return $result;
        $this->db->close();
    }

    public function deleteDivision($delete_id)
    {
        $sql = "DELETE FROM divisions WHERE id='$delete_id';";
        $result = $this->db->query($sql);

        return $result;
        $this->db->close();
    }
    public function getAllDivisionName()
    {
        $sql = "SELECT id,division_name from divisions;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }
    public function getAllStatedata()
    {
        $sql = "SELECT SUM(z.population) AS total_no_population, 
        SUM(z.no_house_holds) AS total_no_house_holds, 
        SUM(z.no_house_coction) AS total_no_house_coction, 
        SUM(z.no_house_connection_replaced) AS total_no_house_connection_replaced, 
        SUM(z.no_metered_house_connections) AS total_no_metered_house_connections, 
        COUNT(DISTINCT(z.division_id)) AS total_division, 
        COUNT(DISTINCT(z.city_id)) AS total_cities, 
        COUNT(DISTINCT(z.id)) AS total_dma,
        (SELECT COUNT(id) FROM `jalsathi_word`) as total_jalasathi,
        ROUND(AVG(nrw), 2) AS nrw_average_value,
        (SELECT SUM(population) FROM zone_master WHERE no_house_holds = no_house_coction AND no_house_holds = no_metered_house_connections) AS beneficiary_population 
         FROM zone_master z;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getAllCityDetails()
    {
        $sql = "SELECT COUNT(zone_master.id) AS no_of_dma, SUM(population) AS total_population, SUM(no_house_holds) AS house_holds, SUM(no_house_coction) AS total_house_connection,SUM(no_metered_house_connections) AS total_meter_connection, (SUM(no_house_coction) / SUM(no_house_holds) * 100) AS house_connection_percentage, (SUM(no_metered_house_connections) / SUM(no_house_holds) * 100) AS metered_connections_percentage,pl_citys.city_name AS city_name FROM zone_master INNER JOIN pl_citys ON zone_master.city_id = pl_citys.id WHERE zone_master.city_id IN (1,2,3,4) GROUP BY zone_master.city_id;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getCityOnDivision($division_id)
    {

        $sql = "SELECT id,city_name FROM pl_citys WHERE division_id='$division_id';";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
    }

    public function getAll()
    {
        $district_query = "SELECT d.id AS division_id, 
        d.division_name, 
        SUM(z.population) AS division_population,
        sum(z.no_house_coction) AS division_house_connection, 
        sum(z.no_metered_house_connections) AS division_meter_connection,
        sum(z.no_house_holds) AS division_household,
        (SELECT count(id) FROM `jalsathi_word` 
        WHERE division_id = d.id) division_jalasathi FROM divisions d INNER JOIN zone_master z ON d.id = z.division_id GROUP BY division_id;";
        $division_result = $this->db->query($district_query);
        $finddata = array();
        $division_data = $division_result->getResult();

        foreach ($division_data as $division_row) {
            $d_id = $division_row->division_id;
            $city_query = "SELECT c.id AS city_id, c.city_name, SUM(z.population) AS city_population,
            sum(z.no_house_coction) AS city_house_connection, 
            sum(z.no_metered_house_connections) AS city_meter_connection,
            sum(z.no_house_holds) AS city_household,
            count(z.id) AS city_no_of_dma,
            (select division_name FROM divisions WHERE id = '$d_id') AS city_division_name,
            (SUM(no_house_coction) / SUM(no_house_holds) * 100) AS house_connection_percentage,
            (SUM(no_metered_house_connections) / SUM(no_house_holds) * 100) AS metered_connections_percentage 
            FROM pl_citys c INNER JOIN zone_master z ON c.id = z.city_id WHERE c.division_id = '$d_id' GROUP BY c.id;";
            $city_result = $this->db->query($city_query);
            $city_data = $city_result->getResult();

            $city_details = array(); 
            foreach ($city_data as $city_row) {
                $city_details[] = array(
                    'city_id' => $city_row->city_id,
                    'city_name' => $city_row->city_name,
                    'city_house_connection' => $city_row->city_house_connection,
                    'city_meter_connection' => $city_row->city_meter_connection,
                    'city_household' => $city_row->city_household,
                    'city_no_of_dma' => $city_row->city_no_of_dma,
                    'city_division_name' => $city_row->city_division_name,
                    'house_connection_percentage' => $city_row->house_connection_percentage,
                    'metered_connections_percentage' => $city_row->metered_connections_percentage,
                    'city_population' => $city_row->city_population
                );
            }

            $finddata[] = array(
                'division_id' => $division_row->division_id,
                'division_name' => $division_row->division_name,
                'division_population' => $division_row->division_population,
                'division_household' => $division_row->division_household,
                'division_meter_connection' => $division_row->division_meter_connection,
                'division_house_connection' => $division_row->division_house_connection,
                'division_jalasathi' => $division_row->division_jalasathi,
                'city_details' => $city_details
            );
        }

        return $finddata; 
    }

    public function getPipeMeterConDivisionControl($div_id)
    {
        $sql = "SELECT COUNT(DISTINCT(z.city_id)) AS no_of_city,
        SUM(z.population) AS division_population,
        sum(z.no_house_coction) AS division_house_connection, 
        sum(z.no_metered_house_connections) AS division_meter_connection,
        sum(z.no_house_holds) AS division_household
         FROM divisions d INNER JOIN zone_master z ON d.id = z.division_id WHERE d.id = '$div_id' GROUP BY d.id;";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getPipeMeterConCitiesControl($cit_id)
    {
        $sql = "SELECT COUNT(z.id) AS no_of_dma,
        SUM(z.population) AS city_population,
        sum(z.no_house_coction) AS city_house_connection, 
        sum(z.no_metered_house_connections) AS city_meter_connection,
        sum(z.no_house_holds) AS city_household
         FROM zone_master z WHERE z.city_id = '$cit_id' GROUP BY z.city_id;";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getJalsathiConDivisionMod($div_id)
    {
        $sql = "SELECT COUNT(id) AS no_of_jalasathi,
        SUM(collection_by_jalasathi) AS revenue_collected_by_jalasathi,
        SUM(total_incentive_of_jalasathi)AS incentive_paid_to_jalsathi,
        SUM(ibu_water_quality_tests)AS no_of_test_conducted_by_jalasathi
        FROM `jalsathi_word` WHERE division_id = '$div_id' GROUP BY division_id;";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getJalsathiConCityMod($cit_id)
    {
        $sql = "SELECT COUNT(id) AS no_of_jalasathi,
        SUM(collection_by_jalasathi) AS revenue_collected_by_jalasathi,
        SUM(total_incentive_of_jalasathi)AS incentive_paid_to_jalsathi,
        SUM(ibu_water_quality_tests)AS no_of_test_conducted_by_jalasathi
        FROM `jalsathi_word` WHERE jalsathi_ulb_city_id = '$cit_id' GROUP BY jalsathi_ulb_city_id;";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getHomeAllStatedata($h_div_id)
    {
        $sql = "SELECT SUM(z.population) AS total_no_population,
        (SELECT district_image FROM divisions WHERE id = '$h_div_id') AS division_district_image, 
        SUM(z.no_house_holds) AS total_no_house_holds, 
        SUM(z.no_house_coction) AS total_no_house_coction, 
        SUM(z.no_house_connection_replaced) AS total_no_house_connection_replaced, 
        SUM(z.no_metered_house_connections) AS total_no_metered_house_connections, 
        COUNT(DISTINCT(z.division_id)) AS total_division, 
        COUNT(DISTINCT(z.city_id)) AS total_cities, 
        COUNT(DISTINCT(z.id)) AS total_dma,
        (SELECT COUNT(id) FROM `jalsathi_word` WHERE division_id = '$h_div_id') as total_jalasathi,
        ROUND(AVG(nrw), 2) AS nrw_average_value,
        (SELECT SUM(population) FROM zone_master WHERE division_id = '$h_div_id' AND no_house_holds = no_house_coction AND no_house_holds = no_metered_house_connections) AS beneficiary_population 
        FROM zone_master z WHERE z.division_id = '$h_div_id';";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getTotalCityDetailsCityDashboard()
    {
        $sql = "SELECT (SELECT COUNT(*) FROM pl_citys) AS no_of_city,(SELECT COUNT(*) FROM jalsathi_word) AS no_of_jalasathi,COUNT(zone_master.id) AS no_of_dma, SUM(population) AS total_population, SUM(no_house_holds) AS house_holds, SUM(no_house_coction) AS total_house_connection,SUM(no_metered_house_connections) AS total_meter_connection, (SUM(no_house_coction) / SUM(no_house_holds) * 100) AS house_connection_percentage, (SUM(no_metered_house_connections) / SUM(no_house_holds) * 100) AS metered_connections_percentage FROM zone_master INNER JOIN pl_citys ON zone_master.city_id = pl_citys.id;";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getTotalCityDetailsCityDashboardOnCityId($city_id)
    {
        $sql = "SELECT (SELECT COUNT(id) FROM jalsathi_word WHERE jalsathi_ulb_city_id = '$city_id') AS no_of_jalasathi,COUNT(zone_master.id) AS no_of_dma, SUM(population) AS total_population, SUM(no_house_holds) AS house_holds, SUM(no_house_coction) AS total_house_connection,SUM(no_metered_house_connections) AS total_meter_connection, (SUM(no_house_coction) / SUM(no_house_holds) * 100) AS house_connection_percentage, (SUM(no_metered_house_connections) / SUM(no_house_holds) * 100) AS metered_connections_percentage FROM zone_master INNER JOIN pl_citys ON zone_master.city_id = pl_citys.id WHERE pl_citys.id = '$city_id';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getAllCities()
    {
        $sql = "SELECT c.id,d.division_name,c.city_name FROM pl_citys c INNER JOIN divisions d ON c.division_id = d.id;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function insertCityTable($division_id, $city_name)
    {
        $sql = "INSERT INTO pl_citys(division_id,city_name)VALUES('$division_id','$city_name')";
        $result = $this->db->query($sql);

        return $result;
        $this->db->close();
    }


    public function getAllDmainfo()
    {
        $sql = "SELECT * FROM zone_master;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getDmadataOnCityId($city_id){
        $sql = "SELECT id,dma_no,area_name FROM zone_master WHERE city_id = '$city_id';";
        $result = $this->db->query($sql);
        $return = $result->getResult();

        return $return;
    }

    public function getDmadataInfo($dma_id){
        $sql = "SELECT id,dma_no,area_name,dft_complete_m_y,dft_target_date_completion,SUM(population) AS total_population, SUM(no_house_holds) AS house_holds, SUM(no_house_coction) AS total_house_connection,SUM(no_metered_house_connections) AS total_meter_connection,FLOOR((SUM(no_house_coction) / SUM(no_house_holds) * 100)) AS house_connection_percentage,(FLOOR(SUM(no_metered_house_connections) / SUM(no_house_holds) * 100)) AS metered_connections_percentage,nrw FROM zone_master WHERE id = '$dma_id';";
        $result = $this->db->query($sql);
        $return = $result->getRow();

        return $return;
    }

    public function insertCityTabled($division_id, $city_name)
    {
        $sql = "INSERT INTO pl_citys(division_id,city_name)VALUES('$division_id','$city_name')";
        $result = $this->db->query($sql);

        return $result;
        $this->db->close();
    }

    public function getCityDetailsOnIdData($city_editid)
    {
        $sql = "SELECT * FROM pl_citys WHERE id = '$city_editid';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function checkDuplicateDma($z_division_id,$z_citys,$z_zone)
    {
        $sql = "SELECT dma_no from zone_master WHERE division_id = '$z_division_id' AND city_id='$z_citys' AND dma_no = '$z_zone';";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
    }

    public function insertDmaTable($z_division_id,$z_citys,$z_zone,$z_area_name,$z_population,$z_no_of_house_holds,$z_house_connection_replaced,$z_house_connection,$z_meter_connection,$z_dft_complete_month_year,$z_dft_target_date,$z_nrw)
    {
        $sql = "INSERT INTO zone_master(division_id,city_id,dma_no,area_name,`population`,no_house_holds,no_house_coction,no_house_connection_replaced,no_metered_house_connections,dft_complete_m_y,dft_target_date_completion,nrw,modification_date)VALUES('$z_division_id','$z_citys','$z_zone','$z_area_name','$z_population','$z_no_of_house_holds','$z_house_connection_replaced','$z_house_connection','$z_meter_connection','$z_dft_complete_month_year','$z_dft_target_date','$z_nrw',NOW())";
        $result = $this->db->query($sql);

        return $result;
        $this->db->close();
    }

    public function getDmaDetailsOnIdData($dma_editid)
    {
        $sql = "SELECT * FROM zone_master WHERE id = '$dma_editid';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function getnrwDataWithDmaIdData($dma_id)
    {
        $sql = "SELECT id,city_id,ROUND(max(nrw)) AS mod_set_height,MAX(DATE_FORMAT(modification_date, '%d-%m-%Y')) AS dma_nrw_modification_date,max(nrw) AS dma_nrw_p FROM `t_hist_zone_master` WHERE id = '$dma_id' GROUP BY MONTH (modification_date), YEAR (modification_date);
        ";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
        
    }

    public function getNrwProgressCitywiseData($cit_id)
    {
        $sql = "SELECT round(avg(nrw),2) AS nrw_cn,MAX(DATE_FORMAT(modification_date, '%d-%m-%Y')) AS modification_date_sn FROM `vw_city_wise_nrws` WHERE city_id = '$cit_id' GROUP BY YEAR(modification_date),MONTH(modification_date) ORDER BY modification_date ASC;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
        
    }

    public function getNrwProgressDivisionwiseData($div_id)
    {
        $sql = "SELECT round(avg(nrw),2) AS nrw_dn,MAX(DATE_FORMAT(modification_date, '%d-%m-%Y')) AS modification_date_dn FROM `vw_city_wise_nrws` WHERE division_id = '$div_id' GROUP BY YEAR(modification_date),MONTH(modification_date) ORDER BY modification_date ASC;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
        
    }

    public function dateBetweenNrwfromtoData($nrw_monthly_date,$nrw_weekly_date,$storeTypeFilterData)
    {
        $currentDate = date('Y-m-d');
        // print_r($storeTypeFilterData);die;
        $sql = "SELECT round(avg(nrw),2) AS nrw_dn,
        DATE_FORMAT(modification_date, '%d-%m-%Y') AS modification_date_dn 
        FROM `vw_city_wise_nrws`";
        if($storeTypeFilterData == "all"){
            $sql .= "";
        }else if($storeTypeFilterData == "today"){
            $sql .= "WHERE DATE(modification_date) = '$currentDate' ";
        }else if($storeTypeFilterData != ""){
            $sql .= "WHERE modification_date BETWEEN $storeTypeFilterData ";
        }else if(($nrw_monthly_date != "") && ($nrw_weekly_date != "")){
            $sql .= "WHERE MONTH(modification_date) = '$nrw_monthly_date' AND DAY(modification_date) BETWEEN $nrw_weekly_date ";
        }        
        $sql .= "GROUP BY MONTH(modification_date) ORDER BY modification_date ASC;";
        // print_r($sql);die;

        
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();

        // $sql = "SELECT round(avg(nrw),2) AS nrw_dn,
        // DATE_FORMAT(modification_date, '%d-%m-%Y') AS modification_date_dn 
        // FROM `vw_city_wise_nrws`
        // WHERE MONTH(modification_date) = '$nrw_monthly_date' AND DAY(modification_date) BETWEEN $nrw_weekly_date GROUP BY MONTH(modification_date) ORDER BY modification_date ASC;";
        // $result = $this->db->query($sql);
        // $return = $result->getResult();
        // return $return;
        // $this->db->close();
        
    }

    public function updateDmaTable($old_dma_id,$z_division_id_u,$z_citys_d,$dma_edit_dma_name,$dma_edit_area_name,$dma_edit_population,$dma_edit_no_of_house_holds,$dma_edit_house_connection_replaced,$dma_edit_house_connection,$dma_edit_meter_connection,$dma_edit_dft_complete_month_year,$dma_edit_dft_target_date,$dma_edit_nrw)
    {
        $sql = "UPDATE zone_master SET division_id = '$z_division_id_u',city_id = '$z_citys_d',dma_no = '$dma_edit_dma_name',area_name = '$dma_edit_area_name',population = '$dma_edit_population',no_house_holds = '$dma_edit_no_of_house_holds',no_house_coction = '$dma_edit_house_connection',no_house_connection_replaced = '$dma_edit_house_connection_replaced',no_metered_house_connections = '$dma_edit_meter_connection',dft_complete_m_y = '$dma_edit_dft_complete_month_year',dft_target_date_completion = '$dma_edit_dft_target_date',nrw = '$dma_edit_nrw',modification_date = NOW() WHERE id='$old_dma_id';";
        $result = $this->db->query($sql);
        return $result;
        $this->db->close();
    }

    public function getDivisionDetailsOnIdData($division_edit_gt_id)
    {
        $sql = "SELECT * FROM divisions WHERE id = '$division_edit_gt_id';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function updateDivision($old_division_id, $edit_division_name)
    {
        $sql = "UPDATE divisions SET division_name = '$edit_division_name' WHERE id='$old_division_id';";
        $result = $this->db->query($sql);
        return $result;
        $this->db->close();
    }

    public function checkDuplicateCityEdit($division_id, $city_name)
    {
        $sql = "SELECT * FROM pl_citys WHERE division_id = '$division_id' AND city_name = '$city_name';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function updateCityTable($city_id,$division_id,$city_name)
    {
        $sql = "UPDATE pl_citys SET division_id = '$division_id',city_name = '$city_name' WHERE id ='$city_id';";
        $result = $this->db->query($sql);
        return $result;
        $this->db->close();
    }

    public function deleteCity($city_id)
    {
        $sql = "DELETE FROM pl_citys WHERE id='$city_id';";
        $result = $this->db->query($sql);
        return $result;
        $this->db->close();
    }


// Dma Master
    public function getAllDmaMasterData()
    {
        $sql = "SELECT * FROM dma_master;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function checkDuplicateDmaMaster($z_division_id,$z_citys,$dma_name)
    {
        $sql = "SELECT dma_name from dma_master WHERE division_id = '$z_division_id' AND city_id='$z_citys' AND dma_name = '$dma_name';";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
        $this->db->close();
    }
    
    public function insertDmaMasterTable($z_division_id,$z_citys,$dma_name,$dma_population,$commissioning_status,$dma_updated_date,$distribution_pipe_line_scope,$distribution_pipe_line_progress,$pumping_main_scope,$pumping_main_progress,$storage_resorvoir_scope,$storage_resorvoir_progress,$pumping_station_scope,$pumping_station_progress,$flowmeter_scope,$flowmeter_progress,$pressure_treansmitter_scope,$pressure_treansmitter_progress,$level_treansmitter_scope,$level_treansmitter_progress,$sluice_valve_scope,$sluice_valve_progress,$plc_scope,$plc_progress,$house_connection_scope,$house_connection_progress,$meter_connection_scope,$meter_connection_progress,$nrw_scope,$nrw_progress)
    {
        $sql = "INSERT INTO dma_master(division_id,city_id,dma_name,dma_population,commissioning_status,dma_updated_date,distribution_pipe_line_scope,distribution_pipe_line_progress,pumping_main_scope,pumping_main_progress,storage_resorvoir_scope,storage_resorvoir_progress,pumping_station_scope,pumping_station_progress,flowmeter_scope,flowmeter_progress,pressure_treansmitter_scope,pressure_treansmitter_progress,level_treansmitter_scope,level_treansmitter_progress,sluice_valve_scope,sluice_valve_progress,plc_scope,plc_progress,house_connection_scope,house_connection_progress,meter_connection_scope,meter_connection_progress,nrw_scope,nrw_progress,updated_by,updated_date)VALUES
        ('$z_division_id','$z_citys','$dma_name','$dma_population','$commissioning_status','$dma_updated_date','$distribution_pipe_line_scope','$distribution_pipe_line_progress','$pumping_main_scope','$pumping_main_progress','$storage_resorvoir_scope','$storage_resorvoir_progress','$pumping_station_scope','$pumping_station_progress','$flowmeter_scope','$flowmeter_progress','$pressure_treansmitter_scope','$pressure_treansmitter_progress','$level_treansmitter_scope','$level_treansmitter_progress','$sluice_valve_scope','$sluice_valve_progress','$plc_scope','$plc_progress','$house_connection_scope','$house_connection_progress','$meter_connection_scope','$meter_connection_progress','$nrw_scope','$nrw_progress','1',NOW())";

        // print_r($sql);die;
        $result = $this->db->query($sql);

        return $result;
        $this->db->close();
    }
    public function getDmaMasterDetailsOnIdData($dma_editid)
    {
        $sql = "SELECT * FROM dma_master WHERE id = '$dma_editid';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
        $this->db->close();
    }

    public function updateDmaMasterTable($old_dma_id, $z_division_id_u, $z_citys_d, $edit_dma_name,$edit_dma_population,$edit_commissioning_status,$edit_dma_updated_date,$edit_distribution_pipe_line_scope,$edit_distribution_pipe_line_progress,$edit_pumping_main_scope,$edit_pumping_main_progress,$edit_storage_resorvoir_scope,$edit_storage_resorvoir_progress,$edit_pumping_station_scope,$edit_pumping_station_progress,$edit_flowmeter_scope,$edit_flowmeter_progress,$edit_pressure_treansmitter_scope,$edit_pressure_treansmitter_progress,$edit_level_treansmitter_scope,$edit_level_treansmitter_progress,$edit_sluice_valve_scope,$edit_sluice_valve_progress,$edit_plc_scope,$edit_plc_progress,$edit_house_connection_scope,$edit_house_connection_progress,$edit_meter_connection_scope,$edit_meter_connection_progress,$edit_nrw_scope,$edit_nrw_progress)
    {
        $sql = "UPDATE dma_master SET division_id = '$z_division_id_u',city_id = '$z_citys_d',
        dma_name = '$edit_dma_name',
        dma_population = '$edit_dma_population',
        commissioning_status = '$edit_commissioning_status',
        dma_updated_date = '$edit_dma_updated_date',
        distribution_pipe_line_scope = '$edit_distribution_pipe_line_scope',
        distribution_pipe_line_progress = '$edit_distribution_pipe_line_progress',
        pumping_main_scope = '$edit_pumping_main_scope',
        pumping_main_progress = '$edit_pumping_main_progress',
        storage_resorvoir_scope = '$edit_storage_resorvoir_scope',
        storage_resorvoir_progress = '$edit_storage_resorvoir_progress',
        pumping_station_scope = '$edit_pumping_station_scope',
        pumping_station_progress = '$edit_pumping_station_progress',
        flowmeter_scope = '$edit_flowmeter_scope',
        flowmeter_progress = '$edit_flowmeter_progress',
        pressure_treansmitter_scope = '$edit_pressure_treansmitter_scope',
        pressure_treansmitter_progress = '$edit_pressure_treansmitter_progress',
        level_treansmitter_scope = '$edit_level_treansmitter_scope',
        level_treansmitter_progress = '$edit_level_treansmitter_progress',
        sluice_valve_scope = '$edit_sluice_valve_scope',
        sluice_valve_progress = '$edit_sluice_valve_progress',
        plc_scope = '$edit_plc_scope',
        plc_progress = '$edit_plc_progress',
        house_connection_scope = '$edit_house_connection_scope',
        house_connection_progress = '$edit_house_connection_progress',
        meter_connection_scope = '$edit_meter_connection_scope',
        meter_connection_progress = '$edit_meter_connection_progress',
        nrw_scope = '$edit_nrw_scope',
        nrw_progress = '$edit_nrw_progress',
        updated_date = NOW() WHERE id='$old_dma_id';";
        // print_r($sql);die;
        $result = $this->db->query($sql);
        return $result;
        $this->db->close();
    }
}
