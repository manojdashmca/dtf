<?php

namespace App\Controllers;

use App\Models\WebModel;

class ProjectclearanceController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }
    
    public function index(){
        $this->data['css']='';
        $this->data['js']='';
        $this->data['includefile'] = 'issuevalidation.php';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['issues']=array();
        if (!empty($city)) {
         $this->data['issues']=$this->webModel->getAllIsuue($city);   
        }
        return view('templates/header', $this->data)
                . view('projectclearance/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
