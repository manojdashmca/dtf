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
$routes->match(['get', 'post'], '/', 'pipeLineDashboardController::pipeDashboard');
$routes->match(['get', 'post'], 'pipe-dashboard', 'pipeLineDashboardController::pipeDashboard');
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
$routes->match(['get', 'post'], 'update-component-breakup', 'MasterdataController::updateComponentkbreakup');
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
$routes->match(['get', 'post'], 'update-city', 'MasterdataController::updateCity');



$routes->post('cancel-booking', 'UserController::cancelbooking');
$routes->post('reschedule-booking-s1', 'UserController::reschedulebookingcetting');

//-----------------------------By Chitta for pipeline
$routes->match(['get', 'post'], 'pipeline-dashboard', 'PipelineController::dashboard');
$routes->match(['get', 'post'], 'division-dashboard', 'pipeLineDashboardController::divisionDishboard');
$routes->match(['get', 'post'], 'city-dashboard', 'pipeLineDashboardController::cityDishboard');

$routes->match(['get', 'post'], 'pipe-divisions-master', 'PipelineController::divisionMaster');

$routes->match(['get', 'post'], 'pipe-dashboard', 'pipeLineDashboardController::pipeDashboard');

$routes->match(['get', 'post'], 'waterprogress-dashboard', 'pipeLineDashboardController::waterProgressDashboard');
$routes->match(['get', 'post'], 'pipeconnection', 'pipeLineDashboardController::waterMeterConnection');
$routes->match(['get', 'post'], 'jalasathi', 'pipeLineDashboardController::getJalasathi');
$routes->match(['get', 'post'], 'nrw', 'pipeLineDashboardController::getNrw');
$routes->match(['get', 'post'], 'revewnuecolected', 'pipeLineDashboardController::getRevewnuecolected');
$routes->match(['get', 'post'], 'grievance', 'pipeLineDashboardController::getGrievance');
$routes->match(['get', 'post'], 'wqm', 'pipeLineDashboardController::getWqm');
$routes->match(['get', 'post'], 'reportgeneration', 'pipeLineDashboardController::reportGeneration');
$routes->match(['get', 'post'], 'reviewmetting', 'pipeLineDashboardController::reviewMetting');
$routes->match(['get', 'post'], 'rtm', 'pipeLineDashboardController::getRtm');

$routes->match(['get', 'post'], 'getPipeMeterConDivision', 'pipeLineDashboardController::getPipeMeterConDivision');
$routes->match(['get', 'post'], 'getCitiesinDivision', 'pipeLineDashboardController::getCitiesinDivision');
$routes->match(['get', 'post'], 'getPipeMeterConCityes', 'pipeLineDashboardController::getPipeMeterConCityes');
$routes->match(['get', 'post'], 'getJalsathiConCity', 'pipeLineDashboardController::getJalsathiConCity');
$routes->match(['get', 'post'], 'getJalsathiConDivision', 'pipeLineDashboardController::getJalsathiConDivision');

$routes->match(['get', 'post'], 'getHomePipeMeterConDivision', 'pipeLineDashboardController::getHomePipeMeterConDivision');
$routes->match(['get', 'post'], 'getCityDashboardById', 'pipeLineDashboardController::getCityDashboardById');

//-----------------------------By chitta for pipeline
//-----------------------------City Master-------------
$routes->match(['get', 'post'], 'cityTablePage', 'PipelineController::cityTablePage');
$routes->match(['get', 'post'], 'addnewcity', 'PipelineController::addNewCity');
$routes->match(['get', 'post'], 'getDmaInfo', 'PipelineController::getDmaInfo');
$routes->match(['get', 'post'], 'DmaInfoPage', 'PipelineController::getDmaInfoPage');
// edit 
$routes->match(['get', 'post'], 'getCityDetailsOnId', 'PipelineController::getCityDetailsOnId');
$routes->match(['get', 'post'], 'editCityDataInId', 'PipelineController::editCityDataInId');
$routes->match(['get', 'post'], 'deleteCity', 'PipelineController::deleteCity');

// -----------------------Division-------------------

$routes->match(['get', 'post'], 'dmaZoneDashboard', 'pipeLineDashboardController::dmaZoneDashboard');
$routes->match(['get', 'post'], 'homeTab', 'pipeLineDashboardController::homeTabs');

$routes->match(['get', 'post'], 'getAllDmaInfoDashboardOnCity', 'pipeLineDashboardController::getAllDmaInfoDashboardOnCity');
$routes->match(['get', 'post'], 'getAllDmaInfoOnCity', 'pipeLineDashboardController::getAllDmaInfoOnCity');
// Get table 
$routes->match(['get', 'post'], 'getAllDivision', 'PipelineController::getDivision');
$routes->match(['get', 'post'], 'addDivision', 'PipelineController::addDivision');
// Edit 
$routes->match(['get', 'post'], 'getDivisionDetailsOnId', 'PipelineController::getDivisionDetailsOnId');
$routes->match(['get', 'post'], 'editDivisionDataInId', 'PipelineController::editDivisionDataInId');
// Dma Master 
$routes->match(['get', 'post'], 'addnewdmainfo', 'PipelineController::InsertDmaData');
$routes->match(['get', 'post'], 'getnrwDataWithDmaId', 'PipelineController::getnrwDataWithDmaId');
$routes->match(['get', 'post'], 'getDmaDetailsOnId', 'PipelineController::getDmaDetailsOnId');
$routes->match(['get', 'post'], 'getCitiesinDivision', 'pipeLineDashboardController::getCitiesinDivision');
// nrw 
$routes->match(['get', 'post'], 'getNrwProgressCitywise', 'PipelineController::getNrwProgressCitywise');
$routes->match(['get', 'post'], 'getNrwProgressDivisionwise', 'PipelineController::getNrwProgressDivisionwise');
$routes->match(['get', 'post'], 'dateBetweenNrwfromto', 'PipelineController::dateBetweenNrwfromto');
$routes->match(['get', 'post'], 'updatenewdmainfo', 'PipelineController::updateDmaDataInId');

// Login City Controller
$routes->match(['get', 'post'], 'logincity', 'LoginCityController::logincity');
// $routes->match(['get', 'post'], 'dmadetails', 'LoginCityController::dmaDetailsHome');
$routes->get('dmadetails', 'LoginCityController::dmaDetailsHome');
$routes->get('editdmapage/(:any)', 'LoginCityController::editDmadetails/$1');
$routes->post('updateDmaDetails/(:any)', 'LoginCityController::updateDmaZone/$1');
$routes->match(['get', 'post'], 'cityJalasathi', 'LoginCityController::cityJalasathi');
$routes->match(['get', 'post'], 'cityJalasathiAddnew', 'LoginCityController::cityJalasathiAddnew');
$routes->get('cityLoginrevenuecoll', 'LoginCityController::cityUserRevenueCollection');
$routes->get('cityLogingrevanceCust', 'LoginCityController::cityUsergrevanceCustection');
$routes->get('citylogwqm', 'LoginCityController::citylogwqm');
$routes->match(['get', 'post'], 'getPipeMeterConnection', 'LoginCityController::getMeterPipeConnection');
$routes->match(['get', 'post'], 'getAlljalsathi', 'LoginCityController::getMasterJalsathi');

// City User Master
$routes->match(['get', 'post'], 'cityUserMaster', 'LoginCityController::cityUserMasterData');
$routes->match(['get', 'post'], 'addnewcityUser', 'LoginCityController::addnewcityUser');
$routes->match(['get', 'post'], 'getCityUserData', 'LoginCityController::getCityUserData');
$routes->get('logoutcity', 'LoginCityController::logoutCity');
$routes->match(['get', 'post'], 'addCityuserRevenueCollection', 'LoginCityController::addCityuserRevenueCollection');
$routes->match(['get', 'post'], 'getRevColCityOnId', 'LoginCityController::getRevColCityOnId');
$routes->match(['get', 'post'], 'editCityuserRevenueCollection', 'LoginCityController::editCityuserRevenueCollection');

$routes->match(['put', 'post'], 'update-task-progress-entry', 'ProgressentryController::updateTaskProgressEntry');
// $routes->match(['get', 'post'], 'getCityTableData', 'PipelineController::getCityTableData');

//
//
//--------------------Autometic jobs--------
$routes->get('/jobs/publish-email', 'WebController::sendPendingEmails');
// get dam master table data 
$routes->match(['get', 'post'], 'getDmamasterTable', 'PipelineController::getAllDmaMasterDataFunction');
$routes->match(['get', 'post'], 'addDmaMaster', 'PipelineController::InsertDmaMaster');
$routes->match(['get', 'post'], 'getDmaMasterDetailsOnId', 'PipelineController::getDmaMasterDetailsOnId');
$routes->match(['get', 'post'], 'updatenewdmamasterinfo', 'PipelineController::updateDmamasterDataInId');


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
