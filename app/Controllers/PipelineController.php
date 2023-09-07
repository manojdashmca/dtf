<?php

namespace App\Controllers;

use App\Models\PipelineModel;
use App\Libraries;

class PipelineController extends WebController {
    public function __construct() {
        parent::__construct();
        $this->pipelineModel = new PipelineModel();
    }    
   

    public function dashboard(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['usernewname']='chhitaranjan';
        return view('templates/header', $this->data)
                . view('pipeline/index', $this->data)
                . view('templates/footer', $this->data);
    }

    public function divisionMaster(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='sweetalert';
        $this->data['js']='sweetalert,divisionmastertable';
        $this->data['jspagination']='divisionmastertable';
        $this->data['usernewname']='chhitaranjan';
        return view('templates/header', $this->data)
                . view('pipeline/division-home', $this->data)
                . view('templates/footer', $this->data);
    }

        public function getDivision() {
            $allDivision = $this->pipelineModel->getAllDivision();
            echo json_encode($allDivision);
        }

        public function addDivision() {
            extract($_POST);
            if($division_name == 0){
                $res = array("res" => "enterDivision");
            }else if($division_name == ''){
                $res = array("res" => "enterDivision");
            }else{
                $checkDuplicate = array();
                $checkDuplicate = $this->pipelineModel->checkDuplicate($division_name);
                if(!empty($checkDuplicate)){
                        $res = array("res" => "exist", "division_name" => $division_name);
                }else{
                    $insertDivision = $this->pipelineModel->insertDivision($division_name);
                    if($insertDivision)
                    {
                        $res = array("res" => "success", "division_name" => $division_name);
                    }
                    else
                    {
                        $res = array("res" => "failed", "division_name" => $division_name);
                    }
                }
            }
            echo json_encode($res);  
        }

        public function editDivisionDataInId() {
            extract($_POST);
            if($edit_division_name == 0){
                $res = array("res" => "enterDivision");
            }else if($edit_division_name == ''){
                $res = array("res" => "enterDivision");
            }else{
                $checkDuplicate = array();
                $checkDuplicate = $this->pipelineModel->checkDuplicate($edit_division_name);
                if(!empty($checkDuplicate)){
                        $res = array("res" => "exist", "division_name" => $edit_division_name);
                }else{
                    $updateDivision = $this->pipelineModel->updateDivision($old_division_id, $edit_division_name);
                    if($updateDivision)
                    {
                        $res = array("res" => "success", "division_name" => $edit_division_name);
                    }
                    else
                    {
                        $res = array("res" => "failed", "division_name" => $edit_division_name);
                    }
                }
            }
            echo json_encode($res);
        }

        public function deleteDivision() {
            extract($_POST);
            $deleteDivision = $this->pipelineModel->deleteDivision($id);
            if($deleteDivision)
            {
                $res = array("res" => "success");
            }
            else
            {
                $res = array("res" => "failed");
            }
            echo json_encode($res);
        }

        public function getCitys() {
            $allCities = $this->pipelineModel->getAllCities();
            echo json_encode($allCities);
        }

        public function cityTablePage(){
            $this->data['title'] = 'Pipeline Dashboard';
            $this->data['css']='';
            $this->data['js']='';
            $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName(); 
            return view('templates/city-home', $this->data);
        }


        public function addNewCity() {
            extract($_POST);
            $res = "";
            if($division_id == "")
            {
                $res = array("res" => "enterDistrict");
            } 
            elseif($city == "")
            {
                $res = array("res" => "enterCity");
            } else {
                $checkDuplicateCity = array();
                $checkDuplicateCity = $this->pipelineModel->checkDuplicateCity($city);
                if(!empty($checkDuplicateCity)){
                        $res = array("res" => "exist", "city_name" => $city);
                }else{
                    $insertCityTable = $this->pipelineModel->insertCityTable($division_id, $city);
                    if($insertCityTable)
                    {
                        $res = array("res" => "success", "city_name" => $city);
                    }
                    else
                    {
                        $res = array("res" => "failed", "city_name" => $city);
                    }
                }
            }
            echo json_encode($res);  
        }

        public function editCityDataInId() {
            extract($_POST);
            $res = "";
            if($edit_division_name_city == "")
            {
                $res = array("res" => "enterDivision");
            } 
            elseif($edit_city_name == "")
            {
                $res = array("res" => "enterCity");
            } else {
                $checkDuplicateCityEdit = array();
                $checkDuplicateCityEdit = $this->pipelineModel->checkDuplicateCityEdit($edit_division_name_city,$edit_city_name);
                if(!empty($checkDuplicateCityEdit)){
                        $res = array("res" => "exist", "city_name" => $edit_city_name);
                }else{
                    $updateCityTable = $this->pipelineModel->updateCityTable($old_city_id,$edit_division_name_city,$edit_city_name);
                    if($updateCityTable)
                    {
                        $res = array("res" => "success", "city_name" => $edit_city_name);
                    }
                    else
                    {
                        $res = array("res" => "failed", "city_name" => $edit_city_name);
                    }
                }
            }
            echo json_encode($res);  
        }

        public function getCityDetailsOnId() {
            try {
                extract($_POST);
                $cityeditdata = $this->pipelineModel->getCityDetailsOnIdData($city_edit_gt_id); 
                return json_encode($cityeditdata);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }

        public function deleteCity() {
            extract($_POST);
            $deleteCity = $this->pipelineModel->deleteDivision($id);
            if($deleteCity)
            {
                $res = array("res" => "success");
            }
            else
            {
                $res = array("res" => "failed");
            }
            echo json_encode($res);
        }

        public function getDmaInfo() {
            $allDmainfo = $this->pipelineModel->getAllDmainfo();
            echo json_encode($allDmainfo);
        }

        public function getDmaInfoPage(){
            $this->data['title'] = 'Pipeline Dashboard';
            $this->data['css']='';
            $this->data['js']='';
            $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName();
            return view('templates/dma-home', $this->data);
        }

        public function InsertDmaData() {
            extract($_POST);
            $res = "";
            if($z_division_id == "")
            {
                $res = array("res" => "enterDivision");
            } 
            elseif($z_citys == "")
            {
                $res = array("res" => "enterCity");
            }elseif($z_zone == "")
            {
                $res = array("res" => "enterZone");
            }elseif($z_area_name == "")
            {
                $res = array("res" => "enterArea");
            }elseif($z_population == "")
            {
                $res = array("res" => "enterPopulation");
            }elseif($z_no_of_house_holds == "")
            {
                $res = array("res" => "enterHouseHold");
            }elseif($z_house_connection_replaced == "")
            {
                $res = array("res" => "enterHouseConnectionReplaced");
            }elseif($z_house_connection == "")
            {
                $res = array("res" => "enterHouseConnection");
            }elseif($z_meter_connection == "")
            {
                $res = array("res" => "enterMeterConnection");
            }elseif($z_dft_complete_month_year == "")
            {
                $res = array("res" => "enterDftCompleteMonthYear");
            }elseif($z_dft_target_date == "")
            {
                $res = array("res" => "enterDftTargetDate");
            }elseif($z_nrw == "")
            {
                $res = array("res" => "enterNrw");
            }else {
                $checkDuplicateCity = array();
                $checkDuplicateCity = $this->pipelineModel->checkDuplicateDma($z_division_id,$z_citys,$z_zone);
                if(!empty($checkDuplicateCity)){
                        $res = array("res" => "exist", "dma_name" => $z_zone);
                }else{
                    $insertCityTable = $this->pipelineModel->insertDmaTable($z_division_id,$z_citys,$z_zone,$z_area_name,$z_population,$z_no_of_house_holds,$z_house_connection_replaced,$z_house_connection,$z_meter_connection,$z_dft_complete_month_year,$z_dft_target_date,$z_nrw);
                    if($insertCityTable)
                    {
                        $res = array("res" => "success", "dma_name" => $z_zone);
                    }
                    else
                    {
                        $res = array("res" => "failed", "dma_name" => $z_zone);
                    }
                }
            }
            echo json_encode($res);  
        }

        public function getDmaDetailsOnId() {
            try {
                extract($_POST);
                $dmaeditdata = $this->pipelineModel->getDmaDetailsOnIdData($dma_editid); 
                return json_encode($dmaeditdata);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }
        public function updateDmaDataInId() {
            extract($_POST);
            $res = "";
            if($z_division_id_u == "")
            {
                $res = array("res" => "enterDivision");
            } 
            elseif($z_citys_d == "")
            {
                $res = array("res" => "enterCity");
            }elseif($dma_edit_dma_name == "")
            {
                $res = array("res" => "enterZone");
            }elseif($dma_edit_area_name == "")
            {
                $res = array("res" => "enterArea");
            }elseif($dma_edit_population == "")
            {
                $res = array("res" => "enterPopulation");
            }elseif($dma_edit_no_of_house_holds == "")
            {
                $res = array("res" => "enterHouseHold");
            }elseif($dma_edit_house_connection_replaced == "")
            {
                $res = array("res" => "enterHouseConnectionReplaced");
            }elseif($dma_edit_house_connection == "")
            {
                $res = array("res" => "enterHouseConnection");
            }elseif($dma_edit_meter_connection == "")
            {
                $res = array("res" => "enterMeterConnection");
            }elseif($dma_edit_dft_complete_month_year == "")
            {
                $res = array("res" => "enterDftCompleteMonthYear");
            }elseif($dma_edit_dft_target_date == "")
            {
                $res = array("res" => "enterDftTargetDate");
            }elseif($dma_edit_nrw == "")
            {
                $res = array("res" => "enterNrw");
            }else{
                $updateDivisionTable = $this->pipelineModel->updateDmaTable($old_dma_id,$z_division_id_u,$z_citys_d,$dma_edit_dma_name,$dma_edit_area_name,$dma_edit_population,$dma_edit_no_of_house_holds,$dma_edit_house_connection_replaced,$dma_edit_house_connection,$dma_edit_meter_connection,$dma_edit_dft_complete_month_year,$dma_edit_dft_target_date,$dma_edit_nrw);
                if($updateDivisionTable)
                {
                    $res = array("res" => "success", "dma_name" => $dma_edit_dma_name);
                }
                else
                {
                    $res = array("res" => "failed", "dma_name" => $dma_edit_dma_name);
                }
            }
            echo json_encode($res);  
        }

        public function getnrwDataWithDmaId() {
            try {
                extract($_POST);
                $dmaprogress = $this->pipelineModel->getnrwDataWithDmaIdData($dma_id); 
                return json_encode($dmaprogress);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }

        public function getNrwProgressCitywise() {
            try {
                extract($_POST);
                $nrwcitywise = $this->pipelineModel->getNrwProgressCitywiseData($cit_id); 
                return json_encode($nrwcitywise);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }

        public function getNrwProgressDivisionwise() {
            try {
                extract($_POST);
                $nrwcitywise = $this->pipelineModel->getNrwProgressDivisionwiseData($div_id); 
                return json_encode($nrwcitywise);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }
        public function dateBetweenNrwfromto() {
            try {
                extract($_POST);
                $nrwcitywise = $this->pipelineModel->dateBetweenNrwfromtoData($nrw_monthly_date,$nrw_weekly_date); 
                return json_encode($nrwcitywise);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }

        public function getDivisionDetailsOnId() {
            try {
                extract($_POST);
                $dmaeditdata = $this->pipelineModel->getDivisionDetailsOnIdData($division_edit_gt_id); 
                return json_encode($dmaeditdata);
            } catch (Exception $e) {
                error_log($e->getMessage());
                return json_encode(['error' => 'An error occurred']);
            }
        }
}
