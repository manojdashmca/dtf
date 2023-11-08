<?php

namespace App\Controllers;

use App\Models\CityLoginModel;
use App\Models\PipelineModel;
use App\Libraries;
use App\Models\MasterdataModel;

class LoginCityController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->CityLoginModel = new CityLoginModel();
        $this->pipelineModel = new PipelineModel();
        $this->masterdataModel = new MasterdataModel();
    }

    public function logincity() {



        if ($this->request->getMethod() == 'post') {
            $this->validateCaptcha();
            if (!$this->validate([
                        'usernamecity' => "required",
                        'passwordinputcity' => 'required',
                    ])) {
                $this->session->setFlashdata('message', setMessage('Missing Required Field', 'e'));
            } else {
                $username = $this->request->getPost('usernamecity');
                $password = $this->request->getPost('passwordinputcity');
                $result = $this->CityLoginModel->getUserdetailByCityUsername($username, $password);
                $remember = $this->request->getPost('remembercity');

                if (!empty($result)) {
                    // $encpassword = $this->encryptString($password);
                    // print_r($password);
                    // print_r(" | ");
                    // print_r($result->user_email);die;
                    if ($result->user_email == $password || $result->user_contact == $password) {
                        if ($result->division_id != NULL) {
                            // $this->createSuccessLogin($result->id_user);
                            // if (!empty($result->user_profile_pic)) {
                            //     $imgpath = '/uploads/images/' . $result->user_profile_pic;
                            // } else {
                            //     $imgpath = '/uploads/images/default.jpg';
                            // }
                            if ($remember == 'on') {
                                setcookie("dftm-city-username", $username, time() + (3600 * 24 * 365));
                                setcookie("dftm-city-password", $password, time() + (3600 * 24 * 365));
                            } else {
                                setcookie("dftm-city-username", $username, time() - 3600);
                                setcookie("dftm-city-password", $password, time() - 3600);
                            }
                            // $this->session->set('img', $imgpath);
                            $this->session->set('citylogin', true);
                            $this->session->set('userlogid', $result->id);
                            $this->session->set('usernamecity', $result->user_name);
                            $this->session->set('usercityemail', $result->user_email);
                            $this->session->set('cityuser_division', $result->division_id);
                            $this->session->set('cityuser_city', $result->city_id);
                            if ($result->division_id != NULL && $result->city_id != NULL) {
                                header("location:" . CUSTOMPATH . "dmadetails");
                                exit;
                            }
                            // $this->session->set('userid', $result->id_user);
                            // $this->session->set('dob', $result->user_dob);


                            exit;
                        } else {

                            $this->createFailwerLogin($username, 'XXXXXX', 'Due to security reason your accout has been blocked', $userid = $result->id_user);
                            $this->session->setFlashdata('message', setMessage('Your account has been blocked, Please contact admin', 'i'));
                        }
                    } else {

                        $this->createFailwerLogin($username, 'XXXXXX', 'Incorrect Password', $userid = $result->id_user);
                        $this->session->setFlashdata('message', setMessage('Invalid Credential', 'e'));
                    }
                } else {

                    $this->createFailwerLogin($username, $password, 'user not available', $userid = 0);
                    $this->session->setFlashdata('message', setMessage('Invalid Credential', 'e'));
                }
            }
        }

        return view('logincity/index', $this->data);
    }

    public function getMeterPipeConnection() {
        $this->data['title'] = 'DMA Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        // $this->data['includefile'] = 'dmazonetable.php';

        $division = $this->request->getVar('division');
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['division'] = $division;
        $citydropdown = [];
        if (!empty($division)) {
            $citydropdown = $this->pipelineModel->getCityOnDivision($division);
        }
        $this->data['citydropdown'] = $citydropdown;
        $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();
        // get session value
        $city_id = session()->get('usercities');
        if(is_numeric($city_id)){
            $this->data['sessiondivision'] = $this->pipelineModel->getDivisionCities($city_id);
        }

        // print_r($division);
        $this->data['alldmadata'] = $this->pipelineModel->getAllStatedataMaster($division,$city);
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puvwhouseconnection');

        return view('templates/header', $this->data)
                . view('logincity/pipemeterconnection', $this->data)
                . view('templates/footer', $this->data);
    }
    public function getMasterJalsathi() {
        $this->data['title'] = 'DMA Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        // $this->data['includefile'] = 'dmazonetable.php';

        $division = $this->request->getVar('division');
       
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['division'] = $division;
        $citydropdown = [];
        if (!empty($division)) {
            $citydropdown = $this->pipelineModel->getCityOnDivision($division);
        }
        $this->data['citydropdown'] = $citydropdown;
        $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();

        $this->data['allJalasathifilter'] = $this->pipelineModel->getJalsathiOnDivisionAndCity($division,$city);
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puvwjalsathi');

        $division = $this->request->getVar('division');       
        $city = $this->request->getVar('city');
        $grivance_year = $this->request->getVar('filter_grievance_year');
        $grivance_month = $this->request->getVar('filter_grievance_month');
        $grivance_week = $this->request->getVar('filter_grievance_week');

        if((!empty($grivance_month)) && (empty($grivance_year))){
            echo '<script>alert("Please Select a Year First")</script>'; 
        }

        $this->data['city'] = $city;
        $this->data['division'] = $division;
        $this->data['filter_grievance_year'] = $grivance_year;
        $this->data['filter_grievance_month'] = $grivance_month;
        $this->data['filter_grievance_week'] = $grivance_week;

        $dataArray = array(
            "grivance_month" => isset($grivance_month) ? $grivance_month : '0',
            "filter_grievance_week" => isset($grivance_week) ? $grivance_week : '0'
        );

        // $citydropdown = [];
        // if (!empty($division)) {
        //     $citydropdown = $this->pipelineModel->getCityOnDivision($division);
        // }
        // $this->data['citydropdown'] = $citydropdown;
        // $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();


        if(!empty($grivance_year)){
            
            $this->data['filtergrievance'] = $this->pipelineModel->getGrivanceFilter($division,$city,$grivance_year,$dataArray);
        }else{
            $this->data['filtergrievance'] = $this->pipelineModel->getGrivanceFilter($division,$city,$grivance_year = "0",$dataArray = "0");
        }

        return view('templates/header', $this->data)
                . view('logincity/getjalasathi', $this->data)
                . view('templates/footer', $this->data);
    }

    public function getMasterRevenueCollection() {
        $this->data['title'] = 'DMA Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';

        $division = $this->request->getVar('division');
       
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['division'] = $division;
        $citydropdown = [];
        if (!empty($division)) {
            $citydropdown = $this->pipelineModel->getCityOnDivision($division);
        }
        $this->data['citydropdown'] = $citydropdown;
        $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();

        $this->data['allrevenuecollectionfilter'] = $this->pipelineModel->getRevenueFilter($division,$city);
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puvwrevenuecollection');
        return view('templates/header', $this->data)
                . view('logincity/getrevenuecollection', $this->data)
                . view('templates/footer', $this->data);
    }

    public function getAllGrievanceCustomer() {
        $this->data['title'] = 'DMA Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';

        $division = $this->request->getVar('division');       
        $city = $this->request->getVar('city');
        $grivance_year = $this->request->getVar('filter_grievance_year');
        $grivance_month = $this->request->getVar('filter_grievance_month');
        $grivance_week = $this->request->getVar('filter_grievance_week');

        if((!empty($grivance_month)) && (empty($grivance_year))){
            echo '<script>alert("Please Select a Year First")</script>'; 
        }

        $this->data['city'] = $city;
        $this->data['division'] = $division;
        $this->data['filter_grievance_year'] = $grivance_year;
        $this->data['filter_grievance_month'] = $grivance_month;
        $this->data['filter_grievance_week'] = $grivance_week;

        $dataArray = array(
            "grivance_month" => isset($grivance_month) ? $grivance_month : '0',
            "filter_grievance_week" => isset($grivance_week) ? $grivance_week : '0'
        );

        $citydropdown = [];
        if (!empty($division)) {
            $citydropdown = $this->pipelineModel->getCityOnDivision($division);
        }
        $this->data['citydropdown'] = $citydropdown;
        $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();


        if(!empty($grivance_year)){
            
            $this->data['filtergrievance'] = $this->pipelineModel->getGrivanceFilter($division,$city,$grivance_year,$dataArray);
        }else{
            $this->data['filtergrievance'] = $this->pipelineModel->getGrivanceFilter($division,$city,$grivance_year = "0",$dataArray = "0");
        }
        
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puvwgrievancered');
        return view('templates/header', $this->data)
                . view('logincity/getgrievancecustomerservice', $this->data)
                . view('templates/footer', $this->data);
    }

    // get Water Quality Page 
    public function getAllWaterQuality() {
        $this->data['title'] = 'DMA Master';
        $this->data['css'] = 'sweetalert,validation,alertify';
        $this->data['js'] = 'sweetalert,validation,alertify';
        // $this->data['includefile'] = 'dmazonetable.php';

        $division = $this->request->getVar('division');       
        $city = $this->request->getVar('city');
        $this->data['city'] = $city;
        $this->data['division'] = $division;
        $citydropdown = [];
        if (!empty($division)) {
            $citydropdown = $this->pipelineModel->getCityOnDivision($division);
        }
        $this->data['citydropdown'] = $citydropdown;
        $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();
        $this->data['alldmadata'] = $this->pipelineModel->getAllStatedataMaster($division,$city);
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puvwwaterqualty');
        return view('templates/header', $this->data)
                . view('logincity/getwaterquality', $this->data)
                . view('templates/footer', $this->data);
    }

    public function logoutCity() {
        header('location:/logincity');
        session()->remove('usernamecity');
        exit;
    }

    public function dmaDetailsHome() {
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';
        $division_id = session()->get('cityuser_division');
        $city_id = session()->get('cityuser_city');
        $this->data['logindmadetails'] = $this->CityLoginModel->getLoginDmadetails($city_id);
        return view('logincity/dmadetails', $this->data);
    }

    public function editDmadetails($dma_id) {
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';
        $this->data['geteditdmadetails'] = $this->CityLoginModel->getEditDmaDetails($dma_id);
        return view('logincity/editdmapage', $this->data);
    }

    public function updateDmaZone($dma_id) {
        try {

            $dma_data = [
                'dma_no' => $this->request->getPost('city_user_dma_name'),
                'nrw' => $this->request->getPost('city_user_nrw'),
                'area_name' => $this->request->getPost('city_user_dma_area_name'),
                'population' => $this->request->getPost('city_user_population'),
                'no_house_holds' => $this->request->getPost('city_user_total_house_hold'),
                'no_house_coction' => $this->request->getPost('city_user_house_connection'),
                'no_house_connection_replaced' => $this->request->getPost('city_user_house_connection_replace'),
                'no_metered_house_connections' => $this->request->getPost('city_user_meter_connection'),
                'dft_complete_m_y' => $this->request->getPost('city_user_dft_complete_m_y'),
                'dft_target_date_completion' => $this->request->getPost('city_user_dft_target_data_complete'),
                'modification_date' => date("Y-m-d")
            ];
            $dmaeditdata = $this->CityLoginModel->updateDmaZoneData($dma_id, $dma_data);
            if ($dmaeditdata) {
                $this->data['geteditdmadetails'] = $this->CityLoginModel->getEditDmaDetails($dma_id);
                return view('logincity/editdmapage', $this->data);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    public function cityJalasathi() {
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';
        $this->data['cityjalasathi'] = $this->CityLoginModel->getCityJalasathi();

        return view('logincity/jalasathi', $this->data);
    }

    public function cityJalasathiAddnew() {
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';
        return view('logincity/cityuserjalasathi', $this->data);
    }

    public function cityUserRevenueCollection() {
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';

        $division_id = session()->get('cityuser_division');
        $city_id = session()->get('cityuser_city');
        $this->data['getDmaCityOnCityuser'] = $this->CityLoginModel->getDmaCityOnCityuser($division_id, $city_id);
        $this->data['getRevenueDataInCityDivision'] = $this->CityLoginModel->getRevenueDataInCityDivision($division_id, $city_id);

        return view('logincity/cityuserrevenuecollected', $this->data);
    }

    public function cityUsergrevanceCustection() {
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';
        return view('logincity/grievancecustomer', $this->data);
    }

    public function citylogwqm() {
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = '';
        $this->data['js'] = '';
        $division_id = session()->get('cityuser_division');
        $city_id = session()->get('cityuser_city');
        $this->data['getDmaCityOnCityuser'] = $this->CityLoginModel->getDmaCityOnCityuser($division_id, $city_id);
        return view('logincity/cityloginwqm', $this->data);
    }

    // City User Master


    public function cityUserMasterData() {
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css'] = 'sweetalert';
        $this->data['js'] = 'sweetalert,divisionmastertable';
        $this->data['jspagination'] = 'divisionmastertable';
        $this->data['includefile'] = 'cityusermastertable.php';

        $this->data['usernewname'] = '';
        $this->data['alldivisionname'] = $this->pipelineModel->getAllDivisionName();
        return view('templates/header', $this->data)
                . view('pipeline/cityusermaster', $this->data)
                . view('templates/footer', $this->data);
    }

    public function addnewcityUser() {
        extract($_POST);
        $res = "";
        if ($citymaster_division == "") {
            $res = array("res" => "enterDivision");
        } elseif ($cityuser_city == "") {
            $res = array("res" => "enterCity");
        } elseif ($user_name == "") {
            $res = array("res" => "userName");
        } elseif ($user_email == "") {
            $res = array("res" => "userId");
        } elseif ($user_contact == "") {
            $res = array("res" => "userContact");
        } else {
            $checkDuplicateCityUser = array();
            $checkDuplicateCityUser = $this->CityLoginModel->checkDuplicateCityUser($cityuser_city, $user_name, $user_email);
            if (!empty($checkDuplicateCityUser)) {
                $res = array("res" => "exist", "user_name" => $user_name);
            } else {
                $insertCityTable = $this->CityLoginModel->insertNewCityUser($citymaster_division, $cityuser_city, $user_name, $user_email, $user_contact);
                if ($insertCityTable) {
                    $res = array("res" => "success", "user_name" => $user_name);
                } else {
                    $res = array("res" => "failed", "user_name" => $user_name);
                }
            }
        }
        echo json_encode($res);
    }

    public function getCityUserData() {
        $cityuser = $this->CityLoginModel->getCityUserData();
        return json_encode($cityuser);
    }

    protected function validateCaptcha() {
        //echo "<pre>";
        //print_r($this->request->getPost());
        $captcha = $this->request->getPost('g-recaptcha-response');
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcdR7oZAAAAAJZY8iAeUDo9KanXAdhH5_h80t-o&response=" . $captcha . "&remoteip=" . $this->request->getIPAddress()), true);
        //echo "<pre>";
        //print_r($response);exit;
        if ($response['success'] == false) {
            $redirecturl = str_replace(base_url(), '', $_SERVER['HTTP_REFERER']);
            header('location:' . $redirecturl);
            $this->session->setFlashdata('message', setMessage('Looks like you are not a legitmate user', 'i'));
            exit;
        }
    }

    public function encryptString($string) {
        $return = '';
        if (!empty($string)) {
            $this->aesObj->setData($string);
            $token = $this->aesObj->encrypt();
            $return = $token;
        }
        return $return;
    }

    public function addCityuserRevenueCollection() {
        extract($_POST);
        $division_id = session()->get('cityuser_division');
        $city_id = session()->get('cityuser_city');
        $userlogid = session()->get('userlogid');
        $insertrevenuecollection = $this->CityLoginModel->insertRevenueCollection($rev_no_of_bill_generated, $rev_nos_bill_distributed, $rev_incentive_paid_to_jalsathi, $rev_total_revenue_collected, $rev_revenue_collected_by_jalasathi, $division_id, $city_id, $userlogid);
        if ($insertrevenuecollection) {
            $res = array("res" => "success");
        } else {
            $res = array("res" => "failed");
        }
        echo json_encode($res);
    }

    public function getRevColCityOnId() {
        try {
            extract($_POST);
            $getrevenuecolc = $this->CityLoginModel->getRevColCityOnId($city_revenue_id);
            return json_encode($getrevenuecolc);
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    public function editCityuserRevenueCollection() {
        extract($_POST);
        $res = "";
        if ($revenue_id) {
            $updateDivisionTable = $this->CityLoginModel->editCityuserRevenueCollection($revenue_id, $rev_no_of_bill_generated, $rev_nos_bill_distributed, $rev_incentive_paid_to_jalsathi, $rev_total_revenue_collected, $rev_revenue_collected_by_jalasathi);
            if ($updateDivisionTable) {
                $res = array("res" => "success");
            } else {
                $res = array("res" => "failed");
            }
        } else {
            $res = array("res" => "failed");
        }
        echo json_encode($res);
    }
    public function filterNrwProgress() {
        extract($_POST);
        $res = "";
        if ($revenue_id) {
            $updateDivisionTable = $this->CityLoginModel->filterNrwprogress();
            if ($updateDivisionTable) {
                $res = array("res" => "success");
            } else {
                $res = array("res" => "failed");
            }
        } else {
            $res = array("res" => "failed");
        }
        echo json_encode($res);
    }

    public function realTimeMonitoring() {
        $this->data['activemenu']=array('amenuactive'=>'pu','divshow'=> 'pu','aliactive'=> 'puvwrtm');
        return view('templates/header', $this->data)
                . view('logincity/realtimemonetring', $this->data)
                . view('templates/footer', $this->data);
    }
}
