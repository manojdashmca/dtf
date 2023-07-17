-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2023 at 05:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dftm`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_audit`
--

DROP TABLE IF EXISTS `action_audit`;
CREATE TABLE IF NOT EXISTS `action_audit` (
  `aa_id` int(11) NOT NULL AUTO_INCREMENT,
  `moderator` int(11) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `condition_statement` varchar(100) DEFAULT NULL,
  `affected_row` int(11) DEFAULT NULL,
  `transactionid` varchar(56) DEFAULT NULL,
  `transaction_time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`aa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities_master`
--

DROP TABLE IF EXISTS `cities_master`;
CREATE TABLE IF NOT EXISTS `cities_master` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(156) DEFAULT NULL,
  `city_status` tinyint(1) DEFAULT 1,
  `city_create_date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`city_id`),
  UNIQUE KEY `city_name` (`city_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `component_master`
--

DROP TABLE IF EXISTS `component_master`;
CREATE TABLE IF NOT EXISTS `component_master` (
  `cm_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id_city` int(11) DEFAULT NULL,
  `component` varchar(256) DEFAULT NULL,
  `breakup` decimal(5,3) DEFAULT NULL,
  `breakup_cost` bigint(20) DEFAULT NULL,
  `component_added_on` timestamp NULL DEFAULT current_timestamp(),
  `component_updated_on` datetime DEFAULT NULL,
  `component_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1- active,2-deleted',
  PRIMARY KEY (`cm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cron_table`
--

DROP TABLE IF EXISTS `cron_table`;
CREATE TABLE IF NOT EXISTS `cron_table` (
  `cron_id` int(11) NOT NULL AUTO_INCREMENT,
  `cron_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `cron_module` varchar(200) NOT NULL,
  `insert_type` varchar(100) NOT NULL,
  `cron_comment` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cron_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mail_link_keys`
--

DROP TABLE IF EXISTS `mail_link_keys`;
CREATE TABLE IF NOT EXISTS `mail_link_keys` (
  `id_key` bigint(20) NOT NULL AUTO_INCREMENT,
  `key_string` varchar(256) NOT NULL,
  `key_created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `key_expire_time` datetime DEFAULT NULL,
  `key_type` int(2) DEFAULT NULL COMMENT '1-Forgot Password',
  `key_generate_ip` varchar(30) DEFAULT NULL,
  `key_generate_os` varchar(56) DEFAULT NULL,
  `key_generate_browser` varchar(56) DEFAULT NULL,
  `key_status` tinyint(1) DEFAULT 1,
  `log_id_log` bigint(20) DEFAULT NULL,
  `user_id_user` bigint(20) DEFAULT NULL,
  `key_used_ip` varchar(30) DEFAULT NULL,
  `key_used_browser` varchar(156) DEFAULT NULL,
  `key_used_os` varchar(156) DEFAULT NULL,
  `key_used_date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id_key`),
  UNIQUE KEY `key` (`key_string`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `netsicure`
--

DROP TABLE IF EXISTS `netsicure`;
CREATE TABLE IF NOT EXISTS `netsicure` (
  `netsicureid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_user` bigint(20) DEFAULT NULL,
  `user_mobile` bigint(20) DEFAULT NULL,
  `netsicure_code` varchar(8) NOT NULL,
  `generate_date_time` datetime NOT NULL,
  `valid_till` datetime NOT NULL,
  `netsecure_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`netsicureid`),
  UNIQUE KEY `user_id_user` (`user_id_user`,`netsicure_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smtp_email`
--

DROP TABLE IF EXISTS `smtp_email`;
CREATE TABLE IF NOT EXISTS `smtp_email` (
  `smtp_send_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `smtp_email_content` text DEFAULT NULL,
  `smtp_attachment` varchar(256) DEFAULT NULL,
  `smtp_email_type` varchar(256) DEFAULT NULL,
  `smtp_sender_email` varchar(156) DEFAULT NULL,
  `smtp_target_emails` varchar(1056) DEFAULT NULL,
  `smtp_cc_emails` varchar(1056) DEFAULT NULL,
  `smtp_bcc_email` varchar(1056) DEFAULT NULL,
  `smtp_send_status` tinyint(1) NOT NULL DEFAULT 0,
  `smtp_send_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `smtp_deliver_date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`smtp_send_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subtask_master`
--

DROP TABLE IF EXISTS `subtask_master`;
CREATE TABLE IF NOT EXISTS `subtask_master` (
  `sm_id` int(11) NOT NULL AUTO_INCREMENT,
  `tm_id_tm` int(11) DEFAULT NULL,
  `subtask` varchar(256) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `quantity` decimal(8,2) DEFAULT NULL,
  `breakup` decimal(5,3) DEFAULT NULL,
  `breakup_cost` bigint(20) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `entered_progress` decimal(4,2) DEFAULT NULL,
  `allow_partial` tinyint(4) DEFAULT 1 COMMENT '1-Yes,2-No',
  `subtask_created_on` timestamp NULL DEFAULT current_timestamp(),
  `subtask_updated_on` datetime DEFAULT NULL,
  `subtask_status` tinyint(4) DEFAULT 1 COMMENT '1-Active,2-Deleted',
  PRIMARY KEY (`sm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_master`
--

DROP TABLE IF EXISTS `task_master`;
CREATE TABLE IF NOT EXISTS `task_master` (
  `tm_id` int(11) NOT NULL AUTO_INCREMENT,
  `cm_id_cm` int(11) DEFAULT NULL,
  `task` varchar(256) DEFAULT NULL,
  `breakup` decimal(5,3) DEFAULT NULL,
  `breakup_cost` bigint(20) DEFAULT NULL,
  `task_added_on` timestamp NULL DEFAULT current_timestamp(),
  `task_updated_on` datetime DEFAULT NULL,
  `task_status` tinyint(4) DEFAULT 1 COMMENT '1-active,2-deleted',
  PRIMARY KEY (`tm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_code` varchar(30) NOT NULL COMMENT 'USER Type+Current Year + Current MOnth + Id',
  `user_login_name` varchar(30) NOT NULL,
  `user_login_key` varchar(256) NOT NULL,
  `user_session_key` varchar(150) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1-admin,2-doctor,3-patient',
  `user_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1-Active,2-Blocked,3-deleted',
  `registered_source` enum('app','web') DEFAULT 'web',
  `registered_ip` varchar(20) DEFAULT NULL,
  `registered_os` varchar(50) DEFAULT NULL,
  `registered_browser` varchar(100) DEFAULT NULL,
  `registered_platform` varchar(50) DEFAULT NULL,
  `registered_handset` varchar(50) DEFAULT NULL,
  `user_create_date` datetime DEFAULT NULL,
  `user_last_update` datetime DEFAULT NULL,
  `user_last_login_date` datetime DEFAULT NULL,
  `user_name` varchar(156) DEFAULT NULL,
  `user_mobile` varchar(15) DEFAULT NULL,
  `user_email` varchar(156) DEFAULT NULL,
  `user_mobile_is_verified` tinyint(1) DEFAULT 0,
  `user_email_is_verified` tinyint(1) DEFAULT 0,
  `user_profile_pic` varchar(156) DEFAULT NULL,
  `profile_pic_upload_date` datetime DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_bloog_group` varchar(5) DEFAULT NULL,
  `user_address` varchar(256) DEFAULT NULL,
  `user_pincode` varchar(6) DEFAULT NULL,
  `user_district` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_gender` varchar(10) DEFAULT NULL,
  `assigned_clinic_id` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `user_code` (`user_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `ud_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_user` int(11) NOT NULL,
  `department_id_department` int(2) NOT NULL,
  `user_create_date` datetime NOT NULL,
  `user_update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`ud_id`),
  UNIQUE KEY `user_id_user` (`user_id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_failwer_login_attempt`
--

DROP TABLE IF EXISTS `user_failwer_login_attempt`;
CREATE TABLE IF NOT EXISTS `user_failwer_login_attempt` (
  `id_login_attempt` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id_user` varchar(256) DEFAULT NULL,
  `attempt_user_login_id` varchar(120) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `attempt_date_time` datetime DEFAULT NULL,
  `attempt_ip` varchar(30) DEFAULT NULL,
  `attempt_os` varchar(56) DEFAULT NULL,
  `attempt_browser` varchar(100) DEFAULT NULL,
  `failwer_reason` varchar(100) DEFAULT NULL,
  `attempt_status` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id_login_attempt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_log_history`
--

DROP TABLE IF EXISTS `user_log_history`;
CREATE TABLE IF NOT EXISTS `user_log_history` (
  `id_log` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id_user` int(11) NOT NULL,
  `logged_date` timestamp NULL DEFAULT current_timestamp(),
  `logged_ip` varchar(30) DEFAULT NULL,
  `logged_browser` varchar(100) DEFAULT NULL,
  `logged_os` varchar(56) DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
