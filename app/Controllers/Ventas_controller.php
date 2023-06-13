<?php
namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Usuarios_model;
use App\Models\VentasCabecera_model;
use App\Models\VentasDetalle_model;

use CodeIgniter\Controller;

class Ventas_controller extends Controller {

	public function __construct() {
           helper(['form', 'url']);

	}
  public function ver_ventas() {
        
   $dato['titulo']='Registro'; 

    $v_ventas_cabecera = new VentasCabecera_model();
    
    $dato['v_ventas_cabecera'] = $v_ventas_cabecera->findAll();

    echo view('front/head_view',$dato);
    echo view('front/nav_view');
    echo view('back\Ventas\lista_ventas_view', $dato);
    echo view('front/footer_view');
  }
 
  public function ver_venta_detalle($id = null) {
    $venta_cabecera = new VentasCabecera_model();
    $venta_cabecera = $venta_cabecera->where('id_ventas_cabecera', $id)->first();

    $v_usuario = new Usuarios_model();
    $v_usuario = $v_usuario->where('id_usuario', $venta_cabecera['usuario_id'])->findAll();

    $venta_detalle = new VentasDetalle_model();
    $producto = new Producto_model();

    $data = array(
      'titulo' => 'Compra Finalizada',
      'ventas_detalle' => $venta_detalle->findAll(),
      'productos' => $producto->orderBy('id_producto', 'DESC')->findAll(),
      'total' => $venta_cabecera['total_ventas'],
    );
    //dd();
    $data['perfil_id'] = $v_usuario[0]['id_usuario'];
    $data['nombre_apellido'] = $v_usuario[0]['nombre'] . " " . $v_usuario[0]['apellido'];
    $data['cabecera_id'] = $id;

    echo view('front/head_view', $data);
    echo view('front/nav_view');
    echo view('back\Ventas\venta_detalle_view', $data);
    echo view('front/footer_view');
  }




}

