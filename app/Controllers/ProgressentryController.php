<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;
use App\Models\MasterdataModel;
class ProgressentryController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
        $this->masterdataModel = new MasterdataModel();
    }
    public function index(){
        $this->data['css']='';
        $this->data['js']='';
        $this->data['includefile']='processentry.php';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['component']=array();
        if (!empty($city)) {
            $this->data['component'] = $this->masterdataModel->getCityComponent($city);
        }
        return view('templates/header', $this->data)
                . view('progressentry/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
