<?php

namespace App\Controllers;

use App\Models\WebModel;
use App\Libraries;

class GalleryController extends WebController {

    public function __construct() {
        parent::__construct();
        $this->webModel = new WebModel();
    }
    
    public function index() {
        $this->data['title'] = 'Gallery';
        $this->data['css']='dashboard';
        $this->data['js']='dashboard';
        return view('templates/header', $this->data)
                . view('gallery/index', $this->data)
                . view('templates/footer', $this->data);
    }

}
