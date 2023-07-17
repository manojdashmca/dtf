<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class PhysicalprogressController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }
    
    public function index(){
        $this->data['css']='';
        $this->data['js']='chart';
        $city=$this->request->getVar('city');        
        $this->data['city']=$city;
        if(empty($city)){
          $this->data['includefile']='physicalprogresschart.php';  
        }
        return view('templates/header', $this->data)
                . view('physicalprogress/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
