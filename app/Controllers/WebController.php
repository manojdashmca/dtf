<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class WebController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
//        $openmethods = array('generatePrescriptionEmail', 'deleteSystemLogs', 'deleteEmailAttachment', 'generateInvoiceEmail', 'autocancellPendingBooking', 'sendPendingEmails', 'checkMobileExist', 'checkEmailExist', 'homepage', 'termsandcondition', 'privacypolicy', 'aboutus', 'contactus', 'searchdoctor', 'doctorprofile', 'login', 'logout', 'registration', 'forgotpassord', 'resetpassord');
//        $othermemdercanaccess = array('uploadmedicalReport', 'prescriptionprint','prescriptionview','viewmedicalReport');
//        if (!in_array($this->method, $openmethods)) {
//            if ($this->session->has('login')) {
//                if (!in_array($this->method, $othermemdercanaccess)) {
//                    if ($this->session->get('usertype') != 3) {
//                        header("location:/login");
//                        exit;
//                    }
//                }
//            } else {
//                header("location:/login");
//                exit;
//            }
//        }
        
    }

    public function sendPendingEmails() {
        $queuedemail = $this->webModel->getQueuedEmail(5);
        foreach ($queuedemail as $email) {
            $emaildata = array('template' => $email->smtp_email_content, 'to' => $email->smtp_target_emails, 'subject' => $email->smtp_email_type);
            (!empty($email->smtp_attachment)) ? $emaildata['attachment'][] = __DIR__ . '/../../public/uploads/emailattachments/' . $email->smtp_attachment : '';
            $status = sendEmail($emaildata);
            if ($status) {
                $updarray = array('smtp_send_status' => 1, 'smtp_deliver_date_time' => date('Y-m-d H:i:s'));
                $this->blankModel->updateRecordInTable($updarray, 'smtp_email', 'smtp_send_id', $email->smtp_send_id);
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
