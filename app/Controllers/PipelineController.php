<?php

namespace App\Controllers;

use App\Models\PipelineModel;
use App\Libraries;

class PipelineController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->pipeineModel = new PipelineModel();
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

}
