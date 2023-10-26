<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Models\FinancialprogressModel;
use App\Libraries;

class DashboardController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }

    public function index() {
        $fpModel = new FinancialprogressModel();
        $this->data['title'] = 'Dashboard';
        $this->data['css']='dashboard';
        $this->data['js']='dashboard';
        $this->data['includefile']='dashboard.php';
        $this->data['financialdata']=$fpModel->financialprogressdata();
        $this->data['topdata']=array('budget'=>$this->webModel->getTotalContractCost(),'location'=>$this->webModel->getTotalCity(),'progress'=>$this->webModel->getAchievedProgress());
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puconstruction');
        return view('templates/header', $this->data)
                . view('dashboard/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
