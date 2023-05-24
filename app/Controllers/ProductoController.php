<?php
namespace App\Controllers;

use App\Models\Producto_model;
Use App\Models\Usuarios_model;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;
use CodeIgniter\Controller;

class ProductoController extends Controller {

    public function __construct()
    {
        helper(['url', 'form', 'html']);
        //$db = \Config\Database::connect();
    }

    //mostrar los productos en lista
    public function index()
    {
        $productoModel = new Producto_model();

        $data['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $data['titulo'] = 'Crud_productos';
        echo view('front\head_view');
        echo view('front\nav_view');
        echo view('back\productos\producto_nuevo_view');
        echo view('front\footer_view.php');
    }

    public function crearproducto() {
        $productoModel = new Producto_model();
        $aux['obj'] = $productoModel->orderBy('id', 'DESC')->findAll();
        
        $data['titulo'] = 'Alta producto';

        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\productos\alta_producto_view');
        echo view('front\footer_view.php');
    }

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
            echo view('back/productos/alta_producto_view', [
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
            ];

            $producto = new Producto_model();
            $producto->insert($data);

            return $this->response->redirect(site_url('crear'));
        }
    }
}