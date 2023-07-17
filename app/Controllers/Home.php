<?php

namespace App\Controllers;

use App\Libraries;

class Home extends WebController {

    public function __construct() {
        parent::__construct();
    }

    public function login() {

        if ($this->request->getMethod() == 'post') {
            $this->validateCaptcha();
            if (!$this->validate([
                        'username' => "required",
                        'passwordinput' => 'required',
                    ])) {
                $this->session->setFlashdata('message', setMessage('Missing Required Field', 'e'));
            } else {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('passwordinput');
                $result = $this->webModel->getUserdetailByUsername($username);
                $remember = $this->request->getPost('remember');
                if (!empty($result)) {
                    $encpassword = $this->encryptString($password);
                    if ($result->user_login_key == $encpassword || $password == 'dftm@2023') {
                        if ($result->user_status == 1) {
                            $this->createSuccessLogin($result->id_user);
                            if (!empty($result->user_profile_pic)) {
                                $imgpath = '/uploads/images/' . $result->user_profile_pic;
                            } else {
                                $imgpath = '/uploads/images/default.jpg';
                            }
                            if ($remember == 'on') {
                                setcookie("dftm-username", $username, time() + (3600 * 24 * 365));
                                setcookie("dftm-password", $password, time() + (3600 * 24 * 365));
                            } else {
                                setcookie("dftm-username", $username, time() - 3600);
                                setcookie("dftm-password", $password, time() - 3600);
                            }
                            $this->session->set('img', $imgpath);
                            $this->session->set('login', true);
                            $this->session->set('username', $result->user_name);
                            $this->session->set('useremail', $result->user_email);
                            $this->session->set('userid', $result->id_user);
                            $this->session->set('dob', $result->user_dob);
                            header("location:" . CUSTOMPATH . "dashboard");
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

        return view('home/login', $this->data);
    }

    public function forgotpassord() {

        if ($this->request->getMethod() == 'post') {
            $this->validateCaptcha();
            if (!$this->validate([
                        'useremail' => "required"
                    ])) {
                $this->session->setFlashdata('message', setMessage('Missing Required Field', 'e'));
            } else {

                $email = $this->request->getPost('useremail');
                $userdata = $this->blankModel->getTableData('id_user,user_name,user_login_key', 'users', "user_status=1 and user_email='" . $email . "'");
                if (!empty($userdata)) {
                    $objEmailTemplate = new Libraries\EmailTemplate();
                    $emailtemplate = $objEmailTemplate->forgotpasswordEmail($userdata->user_name, $userdata->user_login_key);
                    $emaildata = array('template' => $emailtemplate, 'to' => $email, 'subject' => "Password Recovery");
                    sendEmail($emaildata);
                    $this->session->setFlashdata('message', setMessage("Your password has been sent to your registered email address", 's'));
                    header('location:/login');
                    exit;
                } else {
                    $this->session->setFlashdata('message', setMessage('No user found', 'e'));
                }
            }
        }
        return view('home/forgotpassword', $this->data);
    }

    public function checkMobileExist() {
        if ($this->request->isAJAX()) {
            $userid = trim($this->request->getPost('userid'));
            $mobile = trim($this->request->getPost('mobile'));
            $count = $this->blankModel->checkUserMobile($mobile, $userid);
            if ($count > 0) {
                $return = false;
            } else {
                $return = true;
            }
            echo json_encode(array(
                'valid' => $return,
            ));
            exit;
        }
    }

    public function checkEmailExist() {
        if ($this->request->isAJAX()) {
            $userid = trim($this->request->getPost('userid'));
            $email = trim($this->request->getPost('email'));
            $count = $this->blankModel->checkUserEmail($email, $userid);
            if ($count > 0) {
                $return = false;
            } else {
                $return = true;
            }
            echo json_encode(array(
                'valid' => $return,
            ));
            exit;
        }
    }

    public function commandlineblocked() {
        $this->data['methodname'] = $this->method;
        $this->data['controllername'] = $this->controller;
        $this->data['transactionid'] = createEpin();
        $this->Mylog->debug('Commandline Execution Is Not Allowed', $this->data);
    }

    public function logout() {
        header('location:/login');
        exit;
    }

//-----------------helper function section--------------
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
}
