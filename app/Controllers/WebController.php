<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class WebController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
        $openmethods = array('deleteSystemLogs', 'deleteEmailAttachment', 'login', 'logout', 'forgotpassord', 'resetpassord');
        if (!in_array($this->method, $openmethods)) {
            if ($this->session->has('login')) {                
            } else {
                header("location:/login");
                exit;
            }
        }
        
    }

    
    //deleteing the logfile older than 7 days--- 
    public function deleteSystemLogs() {
        try {
            $counter = 0;
            $logdir = APPPATH . "../writable/logs";
            $files = array_values(array_diff(scandir($logdir), array('..', '.', 'CVS')));
            foreach ($files as $fileInfo) {
                if ($fileInfo != 'index.html') {
                    $file = $logdir . '/' . $fileInfo;
                    if (time() - filemtime($file) >= 60 * 60 * 24 * 7) {
                        $counter++;
                        unlink($file);
                    }
                }
            }
        } catch (Exception $e) {
            
        }
    }

    public function deleteEmailAttachment() {
        try {
            $counter = 0;
            $logdir = APPPATH . "../public/uploads/emailattachments";
            $files = array_values(array_diff(scandir($logdir), array('..', '.', 'CVS')));
            foreach ($files as $fileInfo) {
                if ($fileInfo != 'index.html') {
                    $file = $logdir . '/' . $fileInfo;
                    if (time() - filemtime($file) >= 60 * 60 * 24 * 3) {
                        $counter++;
                        unlink($file);
                    }
                }
            }
        } catch (Exception $e) {
            
        }
    }

//--------------------------
}
