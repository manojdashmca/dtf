<?php

namespace App\Controllers;

use App\Models\PipelineModel;

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
        $this->data['allcitydata']=$this->pipelineModel->getAllCityDetails();
        $this->data['getall'] = $this->pipelineModel->getAll();


        return view('pipelinedashboard/template_pipe/header', $this->data)
                . view('pipelinedashboard/pages/index', $this->data)
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
        $id = $_GET['id'];
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
        // $this->data['division']=$this->request->getVar('division');

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
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
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

    



}
