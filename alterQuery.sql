//-------Dt- 14-09-2022
ALTER TABLE `users` ADD `assigned_clinic_id` INT NULL AFTER `user_gender`;
//-------Dt- 14-09-2022

ALTER TABLE `patient_has_invoice` ADD `invoice_towords` VARCHAR(200) NULL DEFAULT 'Consultation Slot Booking' AFTER `invoice_type`;

//-------Dt- 19-09-2022
ALTER TABLE `rozerpay_refund` ADD `approve_reject_comment` VARCHAR(300) NULL AFTER `refund_initiated_by`;
ALTER TABLE `patient_has_invoice` CHANGE `invoice_type` `invoice_type` INT(2) NOT NULL DEFAULT '1' COMMENT '1-Consultation,2-Registration,3-General Hospitality,4-Refund,5-Na';
ALTER TABLE `rozerpay_refund` CHANGE `refund_status` `refund_status` TINYINT(4) NULL DEFAULT '1' COMMENT '1-Initiated,2-Sent to PG,3-Processed,4-completed,5-Rejected';
ALTER TABLE `payment_transaction` CHANGE `pg_payment_status` `pg_payment_status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0-Initiated,1-Paid,2-Refunded';


//--------------22-09-2022
ALTER TABLE `doctor_has_booking` ADD `booking_from` INT NULL DEFAULT '1' AFTER `booking_comment`;

CREATE TABLE IF NOT EXISTS `department_master` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `department_name` (`department_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
INSERT INTO `department_master` (`department_id`, `department_name`) VALUES
(1, 'Super Admin'),
(2, 'Administrator'),
(3, 'Nursing'),
(4, 'Front Office');

CREATE TABLE IF NOT EXISTS `user_detail` (
  `ud_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_user` int(11) NOT NULL,
  `department_id_department` int(2) NOT NULL,
  `user_create_date` datetime NOT NULL,
  `user_update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`ud_id`),
  UNIQUE KEY `user_id_user` (`user_id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `user_detail` (`ud_id`, `user_id_user`, `department_id_department`, `user_create_date`, `user_update_date`) VALUES
(1, 10000, 1, '2022-09-22 00:00:00', '0000-00-00 00:00:00');


//-----------------------------------------------------
ALTER TABLE `district` CHANGE `state_id_state` `state_id_state` INT(2) NOT NULL;
ALTER TABLE `doctor_has_booking` CHANGE `booking_from` `booking_from` SMALLINT(1) NULL DEFAULT '1';
ALTER TABLE `doctor_has_rating` CHANGE `rating_received` `rating_received` SMALLINT(1) NULL DEFAULT NULL;
ALTER TABLE `patient_has_invoice` CHANGE `phi_id` `phi_id` BIGINT(20) NOT NULL AUTO_INCREMENT, CHANGE `booking_id_booking` `booking_id_booking` BIGINT(20) NULL DEFAULT NULL;
ALTER TABLE `doctor_has_booking` CHANGE `dhb_id` `dhb_id` BIGINT(20) NOT NULL AUTO_INCREMENT, CHANGE `booking_payment_id` `booking_payment_id` BIGINT(20) NULL DEFAULT NULL;
ALTER TABLE `patient_has_invoice_has_service` CHANGE `phihs_id` `phihs_id` BIGINT(20) NOT NULL AUTO_INCREMENT, CHANGE `invoice_id_invoice` `invoice_id_invoice` BIGINT(20) NOT NULL;
ALTER TABLE `payment_transaction` CHANGE `pt_id` `pt_id` BIGINT(20) NOT NULL AUTO_INCREMENT, CHANGE `booking_id` `booking_id` BIGINT(20) NOT NULL;
ALTER TABLE `doctor_has_prescription` CHANGE `dhp_id` `dhp_id` BIGINT(20) NOT NULL AUTO_INCREMENT, CHANGE `dhb_id_dhb` `dhb_id_dhb` BIGINT(20) NULL DEFAULT NULL;
ALTER TABLE `prescription_has_medication` CHANGE `phm_id` `phm_id` BIGINT(11) NOT NULL AUTO_INCREMENT, CHANGE `dhp_id_dhp` `dhp_id_dhp` BIGINT(11) NULL DEFAULT NULL, CHANGE `medication_status` `medication_status` TINYINT(1) NULL DEFAULT NULL;
ALTER TABLE `sms` CHANGE `id` `id` BIGINT(20) NOT NULL AUTO_INCREMENT;
ALTER TABLE `smtp_email` CHANGE `smtp_send_id` `smtp_send_id` BIGINT(20) NOT NULL AUTO_INCREMENT;
ALTER TABLE `specialities` CHANGE `sp_id` `sp_id` INT(3) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users` CHANGE `assigned_clinic_id` `assigned_clinic_id` INT(6) NULL DEFAULT NULL;
ALTER TABLE `clinic_location` CHANGE `cl_id` `cl_id` INT(6) NOT NULL AUTO_INCREMENT;
ALTER TABLE `user_log_history` CHANGE `user_id_user` `user_id_user` INT(11) NOT NULL;
ALTER TABLE `users` CHANGE `user_login_key` `user_login_key` VARCHAR(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

//--------------------------------------------


ALTER TABLE `sms` ADD `send_status` TINYINT NULL DEFAULT '0' AFTER `create_date`;
ALTER TABLE `sms` ADD `send_date_time` DATETIME NULL AFTER `send_status`;
//---------27-12-22
ALTER TABLE `users` ADD `registered_source` ENUM('app','web') NULL DEFAULT 'web' AFTER `user_status`;
ALTER TABLE `users` ADD `registered_platform` VARCHAR(50) NULL AFTER `registered_browser`, ADD `registered_handset` VARCHAR(50) NULL AFTER `registered_platform`;
//--------------done
//-----13-01-2023
ALTER TABLE `apptoken` ADD INDEX( `token`);
ALTER TABLE `apptoken` ADD UNIQUE( `token`);