<?php

namespace App\Controllers;

use App\Models\PipelineModel;
use App\Libraries;

class PipelineController extends WebController {
    // private $data = array();
    // private $pipelineModel;

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
        $this->data['css']='';
        $this->data['js']='';
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
            // print_r($res);die;
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
            // print_r($res);die;
            echo json_encode($res);  
        }


}
