<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Principal';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/home');
        echo view('front/footer_view');


        //return view("nueva_plantilla.php");
        //return view("plantilla.php");
        //return view("principal.html");
        //return view('welcome_message');    
    }
    public function contacto()
    {
        $data['titulo'] = 'Contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo'] = '¿Quienes Somos?';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    
    public function comercializacion()
    {
        $data['titulo'] = 'Comercialización';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/comorcializacion');
        echo view('front/footer_view');

    }

    public function sitio_en_construccion()
    {
        $data['titulo'] = 'Sitio en Contruccion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/sitio_en_construccion');
        echo view('front/footer_view');

    }


}


