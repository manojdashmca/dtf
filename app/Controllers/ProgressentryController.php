<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;
use App\Models\MasterdataModel;
use App\Models\ProgressentryModel;
class ProgressentryController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
        $this->masterdataModel = new MasterdataModel();
        $this->progressentryModel = new ProgressentryModel();
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
        $this->data['activemenu']=array('amenuactive'=>'pe','divshow'=> 'pe','aliactive'=> 'peprogressentry');
        return view('templates/header', $this->data)
                . view('progressentry/index', $this->data)
                . view('templates/footer', $this->data);
    }
    public function updateTaskProgressEntry() {
        if ($this->request->isAJAX()) {
            $chchths_id = trim($this->request->getPost('chchths_id'));
            $userentryprogress = trim($this->request->getPost('userentryprogress'));
            //$entryqty = trim($this->request->getPost('entryqty'));
            $allowpartial = trim($this->request->getPost('allowpartial'));
            $updatearray = array('entered_progress' => $userentryprogress);
            $insid = $this->progressentryModel->updateTaskProgressEntry($updatearray, $chchths_id);
            if (!empty($insid)) {
                $data = array('status' => 'success', 'message' => 'Progress Entry Updated Successfully.');
            } else {
                $data = array('status' => 'error', 'message' => 'Unable To Update Progress Entry.');
            }
            
            echo json_encode($data);
            exit;
        }
    }

}
