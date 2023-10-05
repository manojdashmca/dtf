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
        $this->data['title'] = 'City Configuration';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        $this->data['includefile'] = 'configvalidation.php';
        $this->data['divisions']=$this->webModel->getTableMultyData('id,division_name','divisions','1=1');
        return view('templates/header', $this->data)
                . view('configuration/index', $this->data)
                . view('templates/footer', $this->data);
    }
}
