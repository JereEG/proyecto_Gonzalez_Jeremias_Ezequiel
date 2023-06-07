<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Producto_model;

class Carrito_controller extends Controller {
    public function __construct()
    {
        helper(['form', 'url', 'cart']);

        $session = session();
        $cart = \Config\Services::cart();
        $cart->contents();
    }
    //agrega al carrito
    public function agregar($id = null) 
    {
        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();

        $producto = new Producto_model();
        $producto = $producto->where('id_producto', $id)->first();

        $cart->insert(array(
            'id'    => $producto['id_producto'],
            'qty'   => 1,
            'price' => $producto['precio'],
            'name'  => $producto['descripcion_prod'],
        ));
        //var_dump( $cart);
        //exit();
        // $cart->destroy();
        return redirect()->back()->withInput();

    }
    public function sumar_carrito($id = null){
        $cart = \Config\Services::cart();

        $producto = new Producto_model();
        $id_producto = $cart->getItem($id)["id"];
        $producto = $producto->where('id_producto', $id_producto)->first();

        
        //dd($producto);
        $cantidad = $cart->getItem($id)["qty"];
        $cantidadMax = $producto["stock"];
        
        if($cantidad < $cantidadMax){ 
            $cart->update(array(
                "rowid" => $id,
                "qty" => $cantidad+1
            ));
        }
        return redirect()->back()->withInput();
       // return redirect()->route('panel_carrito');
    }

    public function restar_carrito($id = null){
        $cart = \Config\Services::cart();

        $producto = new Producto_model();
        $id_producto = $cart->getItem($id)["id"];
        $producto = $producto->where('id_producto', $id_producto)->first();

        
        //dd($producto);
        $cantidad = $cart->getItem($id)["qty"];
        $cantidadMin = $producto["stock_min"];
        //dd($cantidadMin);
        if($cantidad > $cantidadMin){ 
            $cart->update(array(
                "rowid" => $id,
                "qty" => $cantidad-1
            ));
        }
        return redirect()->back()->withInput();
       // return redirect()->route('panel_carrito');
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
         //var_dump("hola");
         //exit();
        return redirect()->back()->withInput();

    }
    
    
    public function ver_carrito() {
        

        $data['titulo'] = 'Carrito';
        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\carrito\carrito_view');
        echo view('front\footer_view.php');
    }

    public function catalogo(){
		
        $session=session();
        
        $data['titulo'] = 'Todos los Productos';
        $productoModel = new Producto_Model();
        $data['productos'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();
            
        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\carrito\productos_catalogo_view', $data);
        echo view('front\footer_view.php');
	
	}
}