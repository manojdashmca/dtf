<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class ConfigurationController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }
    
    public function index() {
        $this->data['css']='sweetalert,validation';
        $this->data['js']='sweetalert,validation';
        $this->data['includefile']='configvalidation.php';        
        return view('templates/header', $this->data)
                . view('configuration/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
