<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class ProjectclearanceController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }
    
    public function index(){
        $this->data['css']='datatable';
        $this->data['js']='datatable';
        return view('templates/header', $this->data)
                . view('projectclearance/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
