<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;
use App\Models\MasterdataModel;

class PhysicalprogressController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }

    public function index() {
        $masterdataModel = new MasterdataModel();
        $this->data['css'] = '';
        $this->data['js'] = 'chart';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        if (empty($city)) {
            $this->data['includefile'] = 'physicalprogresschart.php';
        } else {
            $this->data['cityheader'] = $masterdataModel->getCityHeader($city);
            $this->data['citycomponent'] = $masterdataModel->getCityHasComponent($city);
            $this->data['cc'] = $masterdataModel->getCityContractCost($city);
        }
        return view('templates/header', $this->data)
                . view('physicalprogress/index', $this->data)
                . view('templates/footer', $this->data);
    }
}
