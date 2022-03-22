<?php

namespace App\Controllers;

//use App\Controllers\BaseController;

class AsistentaMedicala extends BaseController {
    
    
    public function index() {
        
  echo view ("header");
  echo view("Dashboard/navbar");
  echo view("Rapoarte/asistenta_medicala");
    

    }
}