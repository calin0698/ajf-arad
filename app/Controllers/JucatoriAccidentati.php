<?php

namespace App\Controllers;

class JucatoriAccidentati extends BaseController
{
    public function index()
    {
       
        echo view ("header");
        echo view("Dashboard/navbar");
        echo view("JucAccidentati/juc_accidentati");

       
    }

    
}