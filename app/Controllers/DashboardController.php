<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class DashboardController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }

    public function index() {
        $this->data['title'] = 'Dashboard';
        $this->data['css']='dashboard';
        $this->data['js']='dashboard';
        $this->data['topdata']=array('budget'=>$this->webModel->getTotalContractCost(),'location'=>$this->webModel->getTotalCity(),'progress'=>$this->webModel->getAchievedProgress());
        return view('templates/header', $this->data)
                . view('dashboard/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
