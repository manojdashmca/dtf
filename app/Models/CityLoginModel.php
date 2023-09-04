<?php

namespace App\Models;

use CodeIgniter\Model;

class CityLoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getLoginDmadetails()
    {
        $sql = "SELECT c.id AS city_id,d.division_name AS division_name, 
		c.city_name AS city_name, 
        COUNT(z.id) AS no_of_dma,
        SUM(z.population) AS city_population,
        sum(z.no_house_coction) AS city_house_connection, 
        sum(z.no_metered_house_connections) AS city_meter_connection,
        sum(z.no_house_holds) AS city_household,
        max(DATE_FORMAT(z.modification_date, '%d-%m-%Y')) AS last_nrw_update 
         FROM zone_master z INNER JOIN divisions d ON d.id = z.division_id INNER JOIN pl_citys c ON c.id = z.city_id WHERE z.city_id = '7' GROUP BY z.city_id;";
        $result = $this->db->query($sql);
        $final_array = array();
        $return = $result->getRow();
        if($return->city_id){


            $city_id = $return->city_id;
            $division_name = $return->division_name;
            $city_name = $return->city_name;
            $total_dma = $return->no_of_dma;
            $total_population = $return->city_population;
            $total_household = $return->city_household;
            $total_house_connection_complete = $return->city_house_connection;
            $total_meter_connection_comeplte = $return->city_meter_connection;
            $dma_last_update = $return->last_nrw_update;

            $dma_full_details[] = array(
                'division_name' => $division_name,
                'city_name' => $city_name,
                'total_dma' => $total_dma,
                'total_population' => $total_population,
                'total_household' => $total_household,
                'total_house_connection_complete' => $total_house_connection_complete,
                'total_meter_connection_comeplte' => $total_meter_connection_comeplte,
                'dma_last_update' => $dma_last_update != null ? $dma_last_update : '00-00-0000'
                );


            $dma_query = "SELECT id AS dma_id,dma_no,area_name,nrw,DATE_FORMAT(modification_date, '%d-%m-%Y') AS modification_date FROM zone_master WHERE city_id = '$city_id' ORDER BY id;";
            $dma_result = $this->db->query($dma_query);
            $dma_data = $dma_result->getResult();

            $final_array[] = array('dma_full_details' => $dma_full_details, 'dma_data' => $dma_data);


        }
        return $final_array;
    }

    public function getCityJalasathi(){
        $sql = "SELECT d.division_name AS division_name,c.city_name AS city_name,j.word_names,j.msg_shg_name,j.jalasathi_name,j.pan_no,j.bank_account_no,j.ifsc_code,j.bank_name_branch,j.collection_by_jalasathi,j.ibu_5p_incentive_from_water_charges,j.ibu_no_new_water_supply_connection,j.ibu_total_amt_of_new_water_con,j.ibu_total_no_of_water_quality_testa,j.ibu_water_quality_tests,j.total_incentive_of_jalasathi,j.persentage_of_tds,j.current_tds,j.net_payable FROM `jalsathi_word` j INNER JOIN divisions d ON j.division_id = d.id INNER JOIN pl_citys c ON j.jalsathi_ulb_city_id = c.id ORDER BY j.id;";
        $result = $this->db->query($sql);
        $return = $result->getResult();
        return $return;
    }

    public function getEditDmaDetails($dma_id){
        $sql = "SELECT * FROM zone_master WHERE id = '$dma_id';";
        $result = $this->db->query($sql);
        $return = $result->getRow();
        return $return;
    }

    public function updateDmaZoneData($dma_id,$dma_data){
    
        $sql = "UPDATE zone_master SET dma_no = '$dma_data[dma_no]',area_name = '$dma_data[area_name]',population = '$dma_data[population]',no_house_holds = '$dma_data[no_house_holds]',no_house_coction = '$dma_data[no_house_coction]',no_house_connection_replaced = '$dma_data[no_house_connection_replaced]',no_metered_house_connections = '$dma_data[no_metered_house_connections]',dft_complete_m_y = '$dma_data[dft_complete_m_y]',dft_target_date_completion = '$dma_data[dft_target_date_completion]',nrw = '$dma_data[nrw]',modification_date = NOW() WHERE id='$dma_id';";
        $result = $this->db->query($sql);
        return $result;

        $this->db->close();
    }


    
}
