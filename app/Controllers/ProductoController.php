<?php
namespace App\Controllers;

use App\Models\Producto_model;
Use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class ProductoController extends Controller {

    public function store() {
        $input = $this->validate([
            'descripcion_prod' => 'required|min_length[2]',
            'cod_categoria' => 'is_not_unique[categorias.id]',
            'precio' => 'required',
            'precio_venta' => 'required',
            'stock' => 'required',
            'stock_min' => 'required',
        ]);

        $productoModel = new Producto_Model();

        if (!$input) {
           $dato['titulo'] = 'Alta';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/usuario/alta_producto_view', [
                'validation' => $this->validator
            ]);
            
        } else {
            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio);

            $data = [
                'descripcion_prod' => $this->request->getVar('descripcion_prod'),
                'imagen' => $img->getName(),
                'cod_categoria' => $this->request->getVar('nombre_categoria'),
                'precio' => $this->request->getVar('precio'),
                'precio_venta' => $this->request->getVar('precio_venta'),
                'stock' => $this->request->getVar('stock'),
                'stock_min' => $this->request->getVar('stock_min'),
                //'eliminado' => NO
            ]

            $producto = new Producto_model();
            $producto->insert($data);

            return $this->response->redirect(site_url('crear'));
        }
    }
}