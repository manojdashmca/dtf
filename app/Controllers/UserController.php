<?php

namespace App\Controllers;

use App\Libraries;

class UserController extends WebController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['css'] = 'datatable';
        $this->data['js'] = 'datatable';
        return view('templates/header', $this->data)
                . view('users/index', $this->data)
                . view('templates/footer', $this->data);
    }

    public function userprofile() {
        if ($this->request->getMethod() == 'post') {
            $userid = session()->get('userid');
            $actiontype = $this->request->getPost('actiontype');
            if ($actiontype == 'changepassword') {
                $oldpassword = $this->request->getPost('oldpassword');
                $newpassword = $this->request->getPost('newpassword');
                $confirmpassword = $this->request->getPost('confirmpassword');
                if ($newpassword == $confirmpassword) {
                    $userdata = $this->blankModel->getTableData('user_login_key', 'users', 'id_user', $userid);
                    $systempassed = $userdata->user_login_key;
                    $userinput = $this->encryptString($oldpassword);
                    if ($systempassed == $userinput) {
                        $updarray = array('user_login_key' => $this->encryptString($newpassword));
                        $this->blankModel->updateRecordInTable($updarray, 'user_detail', 'id_user', $userid);
                        $this->session->setFlashdata('message', setMessage('Password Changed Successfully', 's'));
                    } else {
                        $this->session->setFlashdata('message', setMessage('Old Password doesnot match', 'e'));
                    }
                } else {
                    $this->session->setFlashdata('message', setMessage('New Passwords and Confirm Password doesnot match', 'e'));
                }
            } else {
                $name = $this->request->getPost('name');
                session()->set('username', $name);
                $updarray = array('user_name' => $name);
                $error = 0;
                if ($_FILES['profilepic']['error'] != 4) {
                    $validationRule = [
                        'pimage' => [
                            'rules' => 'mime_in[profilepic,image/jpg,image/jpeg,image/png,image/webp]'
                            . '|max_size[profilepic,100000]',
                        ],
                    ];
                    if ($this->validate($validationRule)) {
                        $img = $this->request->getFile('profilepic');
                        if (!$img->hasMoved()) {
                            $filename = $userid . '_profile.' . pathinfo($_FILES["profilepic"]["name"], PATHINFO_EXTENSION);
                            $img->move('uploads/images/', $filename, true);
                            $updarray['user_profile_pic'] = $filename;
                            session()->set('img', 'uploads/images/' . $filename);
                        }
                    } else {
                        $error = 1;
                    }
                }

                $this->blankModel->updateRecordInTable($updarray, 'users', 'id_user', $userid);
                if ($error) {
                    $this->session->setFlashdata('message', setMessage("Unable to upload image(" . $this->validator->getErrors()['pimage'] . "), But Profile detail updated Successfully.", 'i'));
                } else {
                    $this->session->setFlashdata('message', setMessage("Profile detail updated Successfully.", 's'));
                }
            }
        }

        $userid = session()->get('userid');
        $this->data['css'] = 'validation,datatable';
        $this->data['js'] = 'validation,datatable';
        $this->data['includefile'] = 'userprofile.php';
        $this->data['title'] = 'Profile';
        $this->data['úserdetail'] = $this->webModel->getUserProfileDetail($userid);

        $this->data['logininfo'] = $this->webModel->getUserLoginInfo($userid);
        return view('templates/header', $this->data)
                . view('users/userprofile', $this->data)
                . view('templates/footer', $this->data);
    }
}
