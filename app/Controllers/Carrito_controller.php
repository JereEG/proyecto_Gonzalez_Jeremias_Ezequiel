<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Carrito_controller extends Controller {
    public function __construct()
    {
        helper(['form', 'url', 'cart']);

        $session = session();
        $cart = \Config\Services::cart();
        $cart->contents();
    }
    //agrega al carrito
    public function agregar() 
    {
        $cart = \Config\Services::Cart();

        $request = \Config\Services::request();

        $cart->insert(array(
            'id'    => $request->getPost('id'),
            'qty'   => 1,
            'price' => $request->getPost('precio_vta'),
            'name'  => $request->getPost('nombre_prod'),
            'options' => array(),
        ));

        // $cart->destroy();
        return redirect()->back()->withInput();

    }
    public function actualizar_carrito() 
    {
        $cart = \Config\Services::Cart();

        $request = \Config\Services::request();

        $cart->update(array(
            'id'    => $request->getPost('id'),
            'qty'   => 1,
            'price' => $request->getPost('precio_vta'),
            'name'  => $request->getPost('nombre_prod'),
        ));

        // $cart->destroy();
        return redirect()->back()->withInput();

    }
    
    public function ver_carrito() {
        

        $data['titulo'] = 'Carrito';
        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\carrito\carrito_view');
        echo view('front\footer_view.php');
    }
}