<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Producto_model;
use App\Models\Usuarios_model;
use App\Models\VentasCabecera_model;
use App\Models\VentasDetalle_model;

/***
 * No se usa este controlador
 */
class Facturas_controller extends Controller {
    public function __construct()
    {
        helper(['form', 'url', 'cart']);

        $session = session();
        $cart = \Config\Services::cart();
        $cart->contents();
    }
    //agrega al carrito
    public function mostrar_factura($cabecera_id = null)
    {
        $venta_detalle = new VentasDetalle_model();
        $producto = new Producto_model();

        $venta_cabecera = new VentasCabecera_model();
        $venta_cabecera = $venta_cabecera->where('usuario_id', $cabecera_id)->first();
        
        echo view('\back\facturas\factura_view.php');

    }
}