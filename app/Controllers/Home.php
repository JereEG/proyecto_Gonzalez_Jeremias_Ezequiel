<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view("nueva_plantilla.php");
        //return view("plantilla.php");
        //return view("principal.html");
        //return view('welcome_message');    
    }
}


