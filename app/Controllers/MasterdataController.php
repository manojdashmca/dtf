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
        $this->data['title'] = 'Component Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        $this->data['includefile'] = 'componentvalidation.php';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['component'] = array();
        $this->data['componentmaster'] = $this->masterdataModel->getcomponentMasterData();
        if (!empty($city)) {
            $this->data['component'] = $this->masterdataModel->getCityComponent($city);
        }
        $this->data['activemenu']=array('amenuactive'=>'or','divshow'=> 'or','aliactive'=> 'orcomponentmaster');
        return view('templates/header', $this->data)
                . view('masterdata/component', $this->data)
                . view('templates/footer', $this->data);
    }

    public function createComponentkbreakup() {
        if ($this->request->isAJAX()) {
            $taskcity = trim($this->request->getPost('taskcity'));
            $citycomponent = trim($this->request->getPost('citycomponent'));
            $componentbreakup = trim($this->request->getPost('componentbreakup'));
            $breakupalreadyadded = $this->masterdataModel->getComponentBreakUpPercent($taskcity);
            $count = $this->masterdataModel->getCityComponentRecordCount($taskcity);
            if (($breakupalreadyadded + $componentbreakup) <= 100) {
                $createarray = array('cc_record_sl' => ($count + 1), 'city_id_city' => $taskcity, 'cm_id_cm' => $citycomponent, 'component_breakup' => $componentbreakup);
                $insid = $this->webModel->createRecordInTable($createarray, 'city_has_component_breakup');
                if (!empty($insid)) {
                    $data = array('status' => 'success', 'message' => 'Component Breakup Added Successfully, ' . $breakupalreadyadded + $componentbreakup . '% allocated');
                } else {
                    $data = array('status' => 'error', 'message' => 'Unable To Add Component Breakup');
                }
            } else {
                $data = array('status' => 'error', 'message' => 'Maximum Percentage Allocated');
            }
            echo json_encode($data);
            exit;
        }
    }

    public function updateComponentkbreakup() {
        if ($this->request->isAJAX()) {
            $chcbid = trim($this->request->getPost('chcbid'));
            $componentbreakup = trim($this->request->getPost('componentbreakup'));
            $tabledata = $this->masterdataModel->getTableData('city_id_city,component_breakup', 'city_has_component_breakup', 'chcb_id=' . $chcbid);
            $breakupalreadyadded = $this->masterdataModel->getComponentBreakUpPercent($tabledata->city_id_city);

            if ((($breakupalreadyadded - $tabledata->component_breakup) + $componentbreakup) <= 100) {
                $updarray = array('component_breakup' => $componentbreakup);
                $this->webModel->updateRecordInTable($updarray, 'city_has_component_breakup', 'chcb_id', $chcbid);
                $data = array('status' => 'success', 'message' => 'Component Breakup updated Successfully');
            } else {
                $data = array('status' => 'error', 'message' => 'Maximum Percentage Allocated');
            }
            echo json_encode($data);
            exit;
        }
    }

    public function task() {
        $this->data['title'] = 'Task Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['task'] = array();
        $this->data['component'] = array();
        $this->data['includefile'] = 'taskvalidation.php';
        if (!empty($city)) {
            $this->data['task'] = $this->masterdataModel->getCityComponentTask($city);
            $this->data['component'] = $this->masterdataModel->getCityComponent($city);
        }
        $this->data['activemenu']=array('amenuactive'=>'or','divshow'=> 'or','aliactive'=> 'ortask');
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
            $breakupalreadyadded = $this->masterdataModel->getTaskBreakUpPercent($taskcity, $citycomponent);
            $count = $this->masterdataModel->getCityComponentTaskRecordCount($taskcity, $citycomponent);
            if (($breakupalreadyadded + $taskbreakup) <= 100) {
                $createarray = array('task_sl_no' => ($count + 1), 'city_id_city' => $taskcity, 'cm_id_cm' => $citycomponent, 'tm_id_tm' => $citycomponenttask, 'task_breakup' => $taskbreakup);
                $insid = $this->webModel->createRecordInTable($createarray, 'city_has_component_has_task');
                if (!empty($insid)) {
                    $data = array('status' => 'success', 'message' => 'Task Breakup Added Successfully, ' . $breakupalreadyadded + $taskbreakup . '% allocated');
                } else {
                    $data = array('status' => 'error', 'message' => 'Unable To Add Task Breakup');
                }
            } else {
                $data = array('status' => 'error', 'message' => 'Maximum Percentage Allocated');
            }

            echo json_encode($data);
            exit;
        }
    }

    public function subtask() {
        $this->data['title'] = 'Subtask Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
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
        $this->data['activemenu']=array('amenuactive'=>'or','divshow'=> 'or','aliactive'=> 'orsubtask');
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
            $breakupalreadyadded = $this->masterdataModel->getSubTaskBreakUpPercent($taskcity, $citycomponent, $citycomponenttask);
            $count = $this->masterdataModel->getCityComponentTaskSubtaskRecordCount($taskcity, $citycomponent, $citycomponenttask);

            if (($breakupalreadyadded + $subtaskbreakup) <= 100) {
                $createarray = array('subtask_sl_no' => ($count + 1), 'city_id_city' => $taskcity, 'cm_id_cm' => $citycomponent,
                    'tm_id_tm' => $citycomponenttask, 'sm_id_sm' => $citycomponentsubtask,
                    'subtask_unit' => $subtaskunit, 'subtask_qty' => $subtaskqty,
                    'allowed_partial' => $allowpartial, 'sub_task_breakup' => $subtaskbreakup);
                $insid = $this->webModel->createRecordInTable($createarray, 'city_has_component_has_task_has_subtask');
                if (!empty($insid)) {
                    $data = array('status' => 'success', 'message' => 'Sub Task Breakup Added Successfully, ' . $breakupalreadyadded + $subtaskbreakup . '% allocated');
                } else {
                    $data = array('status' => 'error', 'message' => 'Unable To Add Sub Task Breakup');
                }
            } else {
                $data = array('status' => 'error', 'message' => 'Maximum Percentage Allocated');
            }
            echo json_encode($data);
            exit;
        }
    }

    public function reportheader() {
        $this->data['title'] = 'Report Header';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        $this->data['includefile'] = 'headervalidation.php';
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['headerdata'] = array();
        $this->data['headermaster'] = $this->masterdataModel->getreportheaderMasterData();
        if (!empty($city)) {
            $this->data['headerdata'] = $this->masterdataModel->getCityHeader($city);
            $this->data['cc'] = $this->masterdataModel->getCityContractCost($city);
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

    public function getCityHasComponentHasTaskHasSubtask() {
        if ($this->request->isAJAX()) {
            $city = trim($this->request->getPost('cityid'));
            $component = trim($this->request->getPost('componentid'));
            $task = trim($this->request->getPost('taskid'));
            $subtask = $this->masterdataModel->getCityComponentHasTaskHasSubtask($city, $component, $task);
            $data = array('status' => 'success', 'message' => 'data retrived successfully', 'data' => $subtask);
            echo json_encode($data);
            exit;
        }
    }

    public function createCity() {
        if ($this->request->isAJAX()) {
            $cityname = trim($this->request->getPost('cityname'));
            $contractcost = trim($this->request->getPost('contractcost'));
            $division = trim($this->request->getPost('division'));
            #$headervalue = trim($this->request->getPost('headervalue'));
            $createarray = array('division_id'=>$division,'city_name' => $cityname, 'contract_cost' => $contractcost);
            $cityid = $this->webModel->createRecordInTable($createarray, 'cities_master');
            $this->masterdataModel->createMockComponent($cityid);
            $this->masterdataModel->createMockComponentTask($cityid);
            $this->masterdataModel->createMockComponentTaskSubtask($cityid); 
            $data = array('status' => 'success', 'message' => 'City Added Successfully');

            echo json_encode($data);
            exit;
        }
    }

    public function updateCity() {
        if ($this->request->isAJAX()) {
            $cityname = trim($this->request->getPost('cityname'));
            $contractcost = trim($this->request->getPost('contractcost'));
            $cityid = trim($this->request->getPost('cityid'));
            $updarray = array('city_name' => $cityname, 'contract_cost' => $contractcost);
            $this->webModel->updateRecordInTable($updarray, 'cities_master', 'city_id', $cityid);
            $data = array('status' => 'success', 'message' => 'City data updated Successfully');

            echo json_encode($data);
            exit;
        }
    }

    public function createNewComponent() {
        if ($this->request->isAJAX()) {

            $component = trim($this->request->getPost('componentname'));
            $createarray = array('component' => $component);
            $insid = $this->webModel->createRecordInTable($createarray, 'component_master_data');

            if (!empty($insid)) {
                $data = array('status' => 'success', 'message' => 'Component Added Successfully');
            } else {
                $data = array('status' => 'error', 'message' => 'Unable To create Component');
            }

            echo json_encode($data);
            exit;
        }
    }

    public function createNewTask() {
        if ($this->request->isAJAX()) {
            $task = trim($this->request->getPost('taskname'));
            $createarray = array('task_name' => $task);
            $insid = $this->webModel->createRecordInTable($createarray, 'task_master_data');
            if (!empty($insid)) {
                $data = array('status' => 'success', 'message' => 'Task Added Successfully');
            } else {
                $data = array('status' => 'error', 'message' => 'Unable To create Task');
            }

            echo json_encode($data);
            exit;
        }
    }

    public function createNewSubtask() {
        if ($this->request->isAJAX()) {
            $subtask = trim($this->request->getPost('subtaskname'));
            $createarray = array('subtask' => $subtask);
            $insid = $this->webModel->createRecordInTable($createarray, 'subtask_master_data');
            if (!empty($insid)) {
                $data = array('status' => 'success', 'message' => 'Subtask Added Successfully');
            } else {
                $data = array('status' => 'error', 'message' => 'Unable To create Subtask');
            }

            echo json_encode($data);
            exit;
        }
    }

    public function createNewReportHeader() {
        if ($this->request->isAJAX()) {
            $header = trim($this->request->getPost('headername'));
            $createarray = array('header' => $header);
            $insid = $this->webModel->createRecordInTable($createarray, 'report_header_master');
            if (!empty($insid)) {
                $data = array('status' => 'success', 'message' => 'Report Header Added Successfully');
            } else {
                $data = array('status' => 'error', 'message' => 'Unable To create Report Header');
            }

            echo json_encode($data);
            exit;
        }
    }
}
