<?php

namespace App\Controllers;

use App\Models\CityLoginModel;
use App\Libraries;

class LoginCityController extends WebController {
    public function __construct() {
        parent::__construct();
        $this->CityLoginModel = new CityLoginModel();
    }    
   
    
    public function home(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('logincity/index', $this->data);
    }

     public function dmaDetailsHome(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['logindmadetails']=$this->CityLoginModel->getLoginDmadetails();
        return view('logincity/dmadetails', $this->data);

    }

    public function editDmadetails($dma_id){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['geteditdmadetails']=$this->CityLoginModel->getEditDmaDetails($dma_id);
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
            $dmaeditdata = $this->CityLoginModel->updateDmaZoneData($dma_id,$dma_data); 
if($dmaeditdata){
    $this->data['geteditdmadetails']=$this->CityLoginModel->getEditDmaDetails($dma_id);
    return view('logincity/editdmapage', $this->data);

    
}
            
        } catch (Exception $e) {
            error_log($e->getMessage());
            return json_encode(['error' => 'An error occurred']);
        }
    }

    public function cityJalasathi(){
        $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        $this->data['cityjalasathi']=$this->CityLoginModel->getCityJalasathi();

        return view('logincity/jalasathi', $this->data);
    }

    public function cityJalasathiAddnew(){
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('logincity/cityuserjalasathi', $this->data);
    }

    public function cityUserRevenueCollection(){
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('logincity/cityuserrevenuecollected', $this->data);
    }

    public function cityUsergrevanceCustection(){
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('logincity/grievancecustomer', $this->data);
    }

    public function citylogwqm(){
        // $this->data['title'] = 'Pipeline Dashboard';
        $this->data['css']='';
        $this->data['js']='';
        return view('logincity/cityloginwqm', $this->data);
    }

    
}
