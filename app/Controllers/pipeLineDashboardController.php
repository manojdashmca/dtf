<?php

namespace App\Controllers;

use App\Models\PipelineModel;
use App\Controllers\Exception;

use App\Libraries;

class pipeLineDashboardController extends WebController {
    protected $division;
    protected $city;
    public function __construct() {
        parent::__construct();
        $this->pipelineModel = new PipelineModel();
        $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName();

    }    
   

    public function pipeDashboard(){
        
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName();
        $this->data['allstataedata']=$this->pipelineModel->getAllStatedata();
        $this->data['getallcitiesdropdown']=$this->pipelineModel->getAllCitysDropdown();
        $this->data['getall'] = $this->pipelineModel->getAll();
        $loginmenu = session()->get('loginheadermenu');
        $this->data['loginlinkdashboard'] = ($loginmenu == 'buttondashboard') ? '/dashboard' : '/login';
        $this->data['headerloginbutton'] = ($loginmenu == 'buttondashboard') ? 'Dashboard' : 'Login';
        return view('pipelinedashboard/template_pipe/header', $this->data)
                . view('pipelinedashboard/pages/index', $this->data)
                . view('pipelinedashboard/template_pipe/footer', $this->data);
    } 

    // Division Dashboard
    public function divisionDishboard(){
        
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName();
        $this->data['allstataedata']=$this->pipelineModel->getAllStatedata();
        // $this->data['allcitydata']=$this->pipelineModel->getAllCityDetails();
        $this->data['getall'] = $this->pipelineModel->getAll();


        return view('pipelinedashboard/template_pipe/header', $this->data)
                . view('pipelinedashboard/pages/division_dashboard', $this->data)
                . view('pipelinedashboard/template_pipe/footer', $this->data);
    }

    // City Dashboard
    public function cityDishboard(){
        
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName();
        $this->data['getallcitiscdashboard'] = $this->pipelineModel->getTotalCityDetailsCityDashboard();

        return view('pipelinedashboard/template_pipe/header', $this->data)
                . view('pipelinedashboard/pages/city_dashboard', $this->data)
                . view('pipelinedashboard/template_pipe/footer', $this->data);
    } 

    // Dma Dashboard
    public function dmaZoneDashboard(){
        
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['alldivisionname']=$this->pipelineModel->getAllDivisionName();
        // $this->data['getallcitiscdashboard'] = $this->pipelineModel->getTotalCityDetailsCityDashboard();

        return view('pipelinedashboard/template_pipe/header', $this->data)
                . view('pipelinedashboard/pages/dma-dashboard', $this->data)
                . view('pipelinedashboard/template_pipe/footer', $this->data);
    } 

    public function homeTabs(){
        
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        
        return view('pipelinedashboard/template_pipe/header', $this->data)
                . view('pipelinedashboard/pages/hometab', $this->data)
                . view('pipelinedashboard/template_pipe/footer', $this->data);
    } 

    public function waterProgressDashboard(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';

        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/index', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function waterMeterConnection(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $id = 1;
        }
        
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $getddddata =$this->pipelineModel->getPipeMeterConDivisionControl($id);
        $arrayData = get_object_vars($getddddata);
        $this->data['pipe_meter_landing']=$arrayData;
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/house-connection-metering', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function getJalasathi(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/jalsathi', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }
    public function getNrw(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/nrw', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function getRevewnuecolected(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $id = 1;
        }
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $getddddata =$this->pipelineModel->getPipeMeterConDivisionControl($id);
        $arrayData = get_object_vars($getddddata);
        $this->data['pipe_meter_landing']=$arrayData;
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/revenue-collection', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function getGrievance(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/grievance-customer-service', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function getWqm(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/wqm', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function reportGeneration(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/report-generation', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    public function reviewMetting(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/review-meetings', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }
    public function getRtm(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('waterprogressdashboard/template_pipe/header', $this->data)
                . view('waterprogressdashboard/pages/rtm', $this->data)
                . view('waterprogressdashboard/template_pipe/footer', $this->data);
    }

    
    public function getCitiesinDivision() {
        extract($_POST);
        $getCity = $this->pipelineModel->getCityOnDivision($division_id);
        return json_encode($getCity); 
    }

    public function getPipeMeterConDivision() {
        extract($_POST);
        $getDiv = $this->pipelineModel->getPipeMeterConDivisionControl($div_id);
        return json_encode($getDiv); 
    }

    public function getPipeMeterConCityes() {
        extract($_POST);
        $getCity = $this->pipelineModel->getPipeMeterConCitiesControl($cit_id);
        return json_encode($getCity); 
    }

    public function getJalsathiConDivision() { 
        extract($_POST);
        $getDivjalsathi = $this->pipelineModel->getJalsathiConDivisionMod($div_id);
        return json_encode($getDivjalsathi); 
    }

    public function getJalsathiConCity() {
        extract($_POST);
        $getJalCit = $this->pipelineModel->getJalsathiConCityMod($cit_id);
        return json_encode($getJalCit); 
    }

    public function getHomePipeMeterConDivision() {
        try {
            extract($_POST);
            $h_dropdown = $this->pipelineModel->getHomeAllStatedata($div_id); 
            return json_encode($h_dropdown);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    public function getCityDashboardById() {
        try {
            extract($_POST);
            $h_dropdown = $this->pipelineModel->getTotalCityDetailsCityDashboardOnCityId($city_id); 
            return json_encode($h_dropdown);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }
    public function getAllDmaInfoDashboardOnCity() {
        try {
            extract($_POST);
            $dma_dh_dropdown = $this->pipelineModel->getDmadataOnCityId($city_id); 
            return json_encode($dma_dh_dropdown);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    public function getAllDmaInfoOnCity() {
        try {
            extract($_POST);
            $dma_d = $this->pipelineModel->getDmadataInfo($dma_id); 
            return json_encode($dma_d);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    public function getCitydropdownDashboard() { 
        try {
            extract($_POST);
            $h_dropdown = $this->pipelineModel->getCitydropdownDashboardData($cty_id); 
            return json_encode($h_dropdown);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    



}
