<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;
use App\Models\FinancialprogressModel;
class FinancialprogressController extends WebController {

    public function __construct() {
        parent::__construct();
                
    }
    
    public function index(){
        $fpModel = new FinancialprogressModel();
        $this->data['title'] = 'Financial Progress';
        $this->data['css']='';
        $this->data['js']='chart';
        $this->data['includefile']='financialprogresschart.php';
        $this->data['financialdata']=$fpModel->financialprogressdata();
        return view('templates/header', $this->data)
                . view('financialprogress/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
