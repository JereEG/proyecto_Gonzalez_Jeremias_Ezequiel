<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Principal';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/principal');
        echo view('front/footer_view');


        //return view("nueva_plantilla.php");
        //return view("plantilla.php");
        //return view("principal.html");
        //return view('welcome_message');    
    }
    public function f_catalogo()
    {
        $data['titulo'] = 'Catalogo';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
    }
    /*public function f_registo()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back/registro');
        echo view('front/footer_view');
    }*/
    public function f_contacto()
    {
        $data['titulo'] = 'Contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
    public function f_quienes_somos()
    {
        $data['titulo'] = '¿Quienes Somos?';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    
    public function f_comercializacion()
    {
        $data['titulo'] = 'Comercialización';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/comorcializacion');
        echo view('front/footer_view');

    }

    public function f_sitio_en_construccion()
    {
        $data['titulo'] = 'Sitio en Contruccion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/sitio_en_construccion');
        echo view('front/footer_view');

    }
    public function f_terminos_y_condiciones()
    {
        $data['titulo'] = 'Términos y condiciones';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/terminos_y_condiciones');
        echo view('front/footer_view');
    }


}


