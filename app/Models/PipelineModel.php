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
        ROUND(AVG(nrw), 2) AS nrw_average_value
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
        // print_r();die;
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
        // print_r();die;
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
        // print_r();die;
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
        // print_r();die;
        return $return;
        $this->db->close();
    }


}