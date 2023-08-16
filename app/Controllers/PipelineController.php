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


}
