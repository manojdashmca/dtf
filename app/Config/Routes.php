<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->match(['get', 'post'], '/', 'Home::login');
$routes->match(['get', 'post'], 'login', 'Home::login');
$routes->get('logout', 'Home::logout');
$routes->match(['get', 'post'], 'forgot-password', 'Home::forgotpassord');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('users-list', 'UserController::index');
$routes->get('physical-progress', 'PhysicalprogressController::index');
$routes->get('financial-progress', 'FinancialprogressController::index');
$routes->get('project-clearance', 'ProjectclearanceController::index');
$routes->get('progress-entry', 'ProgressentryController::index');
$routes->get('photo-gallery', 'PhotogalleryController::index');
$routes->get('configuration', 'ConfigurationController::index');
$routes->get('component-master', 'MasterdataController::component');
$routes->get('task-master', 'MasterdataController::task');
$routes->get('sub-task-master', 'MasterdataController::subtask');
$routes->get('report-header', 'MasterdataController::reportheader');
$routes->match(['get', 'post'],'user-profile', 'UserController::userprofile');

//-----------stop commandline---
$routes->cli('login', 'Home::commandlineblocked');
$routes->cli('forgot-password', 'Home::commandlineblocked');
$routes->cli('/', 'Home::commandlineblocked');
//----ajaxcall-------
$routes->match(['get', 'post'], 'check-mobile', 'Home::checkMobileExist');
$routes->match(['get', 'post'], 'check-email', 'Home::checkEmailExist');

$routes->match(['get', 'post'], 'create-task-breakup', 'MasterdataController::createTaskbreakup');
$routes->match(['get', 'post'], 'create-component-breakup', 'MasterdataController::createComponentkbreakup');
$routes->match(['get', 'post'], 'create-new-component', 'MasterdataController::createNewComponent');
$routes->match(['get', 'post'], 'create-new-task', 'MasterdataController::createNewTask');
$routes->match(['get', 'post'], 'create-new-subtask', 'MasterdataController::createNewSubtask');
$routes->match(['get', 'post'], 'create-new-reportheader', 'MasterdataController::createNewReportHeader');

$routes->match(['get', 'post'], 'create-header-mapping', 'MasterdataController::createHeaderMapping');
$routes->match(['get', 'post'], 'create-sub-task-breakup', 'MasterdataController::createSubtaskBreakup');
$routes->match(['get', 'post'], 'get-city-component-task', 'MasterdataController::getCityComponentHasTask');
$routes->match(['get', 'post'], 'get-city-component', 'MasterdataController::getCityHasComponent');
$routes->match(['get', 'post'], 'get-city-component-task-subtask', 'MasterdataController::getCityHasComponentHasTaskHasSubtask');
$routes->match(['get', 'post'], 'create-city', 'MasterdataController::createCity');


$routes->post('cancel-booking', 'UserController::cancelbooking');
$routes->post('reschedule-booking-s1', 'UserController::reschedulebookingcetting');
//-----------------------------
//
//
//--------------------Autometic jobs--------
$routes->get('/jobs/publish-email', 'WebController::sendPendingEmails');

//----------------------------------------

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Additional Routing For Modules
 * --------------------------------------------------------------------
 */
$modules_path = ROOTPATH . 'Modules/';
$modules = scandir($modules_path);

foreach ($modules as $module) {
    if ($module === '.' || $module === '..') {
        continue;
    }

    if (is_dir($modules_path) . '/' . $module) {
        $routes_path = $modules_path . $module . '/Config/Routes.php';
        if (file_exists($routes_path)) {
            require $routes_path;
        } else {
            continue;
        }
    }
}
