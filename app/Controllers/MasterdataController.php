<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;
use App\Models\MasterdataModel;

class MasterdataController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
        $this->masterdataModel = new MasterdataModel();
    }

    public function component() {
        $this->data['css'] = 'sweetalert,validation';
        $this->data['js'] = 'sweetalert,validation';
        $this->data['includefile'] = 'componentvalidation.php';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['component'] = array();
        $this->data['componentmaster'] = $this->masterdataModel->getcomponentMasterData();
        if (!empty($city)) {
            $this->data['component'] = $this->masterdataModel->getCityComponent($city);
        }
        return view('templates/header', $this->data)
                . view('masterdata/component', $this->data)
                . view('templates/footer', $this->data);
    }

    public function createComponentkbreakup() {
        if ($this->request->isAJAX()) {
            $taskcity = trim($this->request->getPost('taskcity'));
            $citycomponent = trim($this->request->getPost('citycomponent'));
            $componentbreakup = trim($this->request->getPost('componentbreakup'));
            $createarray = array('city_id_city' => $taskcity, 'cm_id_cm' => $citycomponent, 'component_breakup' => $componentbreakup);
            $this->webModel->createRecordInTable($createarray, 'city_has_component_breakup');
            $data = array('status' => 'success', 'message' => 'Component Breakup Added Successfully');
            echo json_encode($data);
            exit;
        }
    }

    public function task() {
        $this->data['css'] = 'sweetalert,validation';
        $this->data['js'] = 'sweetalert,validation';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['task'] = array();
        $this->data['component'] = array();
        $this->data['includefile'] = 'taskvalidation.php';
        if (!empty($city)) {
            $this->data['task'] = $this->masterdataModel->getCityComponentTask($city);
            $this->data['component'] = $this->masterdataModel->getCityComponent($city);
        }
        $this->data['taskmaster'] = $this->masterdataModel->getAllTask();
        return view('templates/header', $this->data)
                . view('masterdata/task', $this->data)
                . view('templates/footer', $this->data);
    }

    public function createTaskbreakup() {
        if ($this->request->isAJAX()) {
            $taskcity = trim($this->request->getPost('taskcity'));
            $citycomponent = trim($this->request->getPost('citycomponent'));
            $citycomponenttask = trim($this->request->getPost('citycomponenttask'));
            $taskbreakup = trim($this->request->getPost('taskbreakup'));
            $createarray = array('city_id_city' => $taskcity, 'cm_id_cm' => $citycomponent, 'tm_id_tm' => $citycomponenttask, 'task_breakup' => $taskbreakup);
            $this->webModel->createRecordInTable($createarray, 'city_has_component_has_task');
            $data = array('status' => 'success', 'message' => 'Task Breakup Added Successfully');
            echo json_encode($data);
            exit;
        }
    }

    public function subtask() {
        $this->data['css'] = 'sweetalert,validation';
        $this->data['js'] = 'sweetalert,validation';
        $this->data['includefile'] = 'subtaskvalidation.php';
        $this->data['component'] = array();
        $this->data['subtask'] = array();
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        if (!empty($city)) {
            $this->data['subtask'] = $this->masterdataModel->getCitySubTask($city);
            $this->data['component'] = $this->masterdataModel->getCityComponent($city);
        }
        $this->data['subtaskmaster'] = $this->masterdataModel->getsubtaskMasterData();
        return view('templates/header', $this->data)
                . view('masterdata/subtask', $this->data)
                . view('templates/footer', $this->data);
    }

    public function createSubtaskBreakup() {
        if ($this->request->isAJAX()) {
            $taskcity = trim($this->request->getPost('taskcity'));
            $citycomponent = trim($this->request->getPost('citycomponent'));
            $citycomponenttask = trim($this->request->getPost('citycomponenttask'));
            $citycomponentsubtask = trim($this->request->getPost('citycomponentsubtask'));
            $subtaskunit = trim($this->request->getPost('subtaskunit'));
            $subtaskqty = trim($this->request->getPost('subtaskqty'));
            $allowpartial = trim($this->request->getPost('allowpartial'));
            $subtaskbreakup = trim($this->request->getPost('subtaskbreakup'));
            $createarray = array('city_id_city' => $taskcity, 'cm_id_cm' => $citycomponent, 
                'tm_id_tm' => $citycomponenttask, 'sm_id_sm' => $citycomponentsubtask, 
                'subtask_unit' => $subtaskunit, 'subtask_qty' => $subtaskqty, 
                'allowed_partial' => $allowpartial, 'sub_task_breakup' => $subtaskbreakup);
            $this->webModel->createRecordInTable($createarray, 'city_has_component_has_task_has_subtask');
            $data = array('status' => 'success', 'message' => 'Sub Task Breakup Added Successfully');
            echo json_encode($data);
            exit;
        }
    }

    public function reportheader() {
        $this->data['css'] = 'sweetalert,validation';
        $this->data['js'] = 'sweetalert,validation';
        $this->data['includefile'] = 'headervalidation.php';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['headerdata'] = array();
        $this->data['headermaster'] = $this->masterdataModel->getreportheaderMasterData();
        if (!empty($city)) {
            $this->data['headerdata'] = $this->masterdataModel->getCityHeader($city);
        }
        return view('templates/header', $this->data)
                . view('masterdata/reportheader', $this->data)
                . view('templates/footer', $this->data);
    }

    public function createHeaderMapping() {
        if ($this->request->isAJAX()) {
            $taskcity = trim($this->request->getPost('taskcity'));
            $header = trim($this->request->getPost('header'));
            $headervalue = trim($this->request->getPost('headervalue'));
            $createarray = array('city_id_city' => $taskcity, 'rh_id_rh' => $header, 'rh_data' => $headervalue);
            $this->webModel->createRecordInTable($createarray, 'city_has_report_header_data');
            $data = array('status' => 'success', 'message' => 'Header Mapping Added Successfully');

            echo json_encode($data);
            exit;
        }
    }

    public function getCityComponentHasTask() {
        if ($this->request->isAJAX()) {
            $city = trim($this->request->getPost('cityid'));
            $component = trim($this->request->getPost('componentid'));
            $task = $this->masterdataModel->getCityComponentHasTask($city, $component);
            $data = array('status' => 'success', 'message' => 'data retrived successfully', 'data' => $task);
            echo json_encode($data);
            exit;
        }
    }
    public function getCityHasComponent() {
        if ($this->request->isAJAX()) {
            $city = trim($this->request->getPost('cityid'));            
            $component = $this->masterdataModel->getCityHasComponent($city);
            $data = array('status' => 'success', 'message' => 'data retrived successfully', 'data' => $component);
            echo json_encode($data);
            exit;
        }
    }
    
    public function getCityHasComponentHasTaskHasSubtask(){
        if ($this->request->isAJAX()) {
            $city = trim($this->request->getPost('cityid'));
            $component = trim($this->request->getPost('componentid'));
            $task = trim($this->request->getPost('taskid'));
            $subtask = $this->masterdataModel->getCityComponentHasTaskHasSubtask($city, $component,$task);
            $data = array('status' => 'success', 'message' => 'data retrived successfully', 'data' => $subtask);
            echo json_encode($data);
            exit;
        }
    }
    public function createCity() {
        if ($this->request->isAJAX()) {
            $cityname = trim($this->request->getPost('cityname'));
            $contractcost = trim($this->request->getPost('contractcost'));
            $headervalue = trim($this->request->getPost('headervalue'));
            $createarray = array('city_name' => $cityname, 'contract_cost' => $contractcost);
            $this->webModel->createRecordInTable($createarray, 'cities_master');
            $data = array('status' => 'success', 'message' => 'City Added Successfully');

            echo json_encode($data);
            exit;
        }
    }
    
    

}
