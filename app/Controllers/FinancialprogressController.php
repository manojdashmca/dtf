<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;
use App\Models\FinancialprogressModel;
class FinancialprogressController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
        $this->fpModel = new FinancialprogressModel();
    }
    
    public function index(){
        $this->data['css']='';
        $this->data['js']='chart';
        $this->data['includefile']='financialprogresschart.php';
        $this->data['financialdata']=$this->fpModel->financialprogressdata();
        return view('templates/header', $this->data)
                . view('financialprogress/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
