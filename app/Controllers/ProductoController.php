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

        $data['productos'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();

        $data['titulo'] = 'Crud_productos';
        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\productos\crud_productos', $data);
        echo view('front\footer_view.php');
    }
    public function vista_productos_eliminados() {
        $productoModel = new Producto_model();
        $data['productos'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();
        
        $data['titulo'] = 'Productos Eliminados';

        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\productos\productos_eliminados_view', $data);
        echo view('front\footer_view.php');
    }

    public function crearproducto() {
        $productoModel = new Producto_model();
        $lista_productos['obj'] = $productoModel->orderBy('id_producto', 'DESC')->findAll();
        
        $data['titulo'] = 'Alta producto';

        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\productos\alta_producto_view', $lista_productos);
        echo view('front\footer_view.php');
    }
    public function vistaEditarProducto($id = null) {

        $productoModel = new Producto_model();
        
        $data['titulo'] = 'Editar producto';

        //$id= $this->request->getPostGet('id');
        //$data['producto'] = $productoModel->where('id', $id)->first();
        $data['old'] = $productoModel->where('id_producto', $id)->first();

        echo view('front\head_view', $data);
        echo view('front\nav_view');
        echo view('back\productos\editar_producto_view', $data);
        echo view('front\footer_view.php');
    }
    public function eliminarProducto($id = null) {
        $producto = new Producto_model();
        $data = [
                    'eliminado' => "SI"
                ];
        $producto->update($id, $data);

        return $this->response->redirect(site_url('/crud'));
    }
    public function restaurarProducto($id = null) {
        $producto = new Producto_model();
        $data = [
                    'eliminado' => "NO"
                ];
        $producto->update($id, $data);

        return $this->response->redirect(site_url('/crud'));
    }

    

    public function alta_producto() {
        //var_dump($this->request->getVar('imagen'));
        //exit();
        //$data = $this->request->getVar('nombre-prod');
        //helper(['form']);
        //var_dump($this->request->getFile('imagen')->getName() === "");
        //exit();

        $rules = [
            'nombre-prod' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'A {field} debes colocar una descripción de al menos 3 letras.',
                ],
            ],
        
            'precio'=> [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar un precio.',
                ],
            ],
            'precio-venta'       => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar un precio de venta.',
                ],
            ],
            'stock' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar el stock.',
                ],
            ],
            'stock-min' =>
            [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar el stock mínimo.',
                ],
            ],
            'imagen' => [
                'rules'  => 'is_image[imagen]',
                'errors' => [
                    'required' => 'A {field} debes subir una imagen.',
                    'is_image[imagen]' => 'A {field} debe ser una imagen.',
                ]
            ],
        ];

        $producto = new Producto_model();
        //var_dump($this->validate($rules));
        //exit();

        if ($this->validate($rules) && !($this->request->getFile('imagen')  === "")) {
            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio);
            //$img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio); en lugar muve asignar ruta
            
            
            


            $data = [
                'descripcion_prod' => $this->request->getVar('nombre-prod'),
                'imagen' => $img->getName(),
                'cod_categoria' => $this->request->getVar('cod_categoria'),
                'precio' => $this->request->getVar('precio'),
                'precio_venta' => $this->request->getVar('precio-venta'),
                'stock' => $this->request->getVar('stock'),
                'stock_min' => $this->request->getVar('stock-min'),
                //'eliminado' => NO
            ];
            //var_dump($data);
            //exit();
            //$producto = new Producto_model();
            $producto->insert($data);


            return $this->response->redirect(site_url('/crud'));

        } else {
            /***Se muestran los errores */
            
            $dato['titulo'] = 'Error en Alta de producto';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/productos/alta_producto_view', [
                'validation' => $this->validator
            ]);
            /*if ($this->request->getVar('imagen') == NULL) {
                echo '<script language="javascript">alert("No se cargo la imagen");</script>'; # code...
            }*/
        }
        
    } /** cierra  */

    

    public function editarProducto($id = null) {
        /**Si tiene un nombre quiere decir que se debe agregar la regla para la imagen también */
         helper(['url', 'form', 'html', 'date']);
     
            $rules = [
            'nombre-prod' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'A {field} debes colocar una descripción de al menos 3 letras.',
                ],
            ],
        
            'precio'=> [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar un precio.',
                ],
            ],
            'precio-venta'       => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar un precio de venta.',
                ],
            ],
            'stock' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar el stock.',
                ],
            ],
            'stock-min' =>
            [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'A {field} debes colocar el stock mínimo.',
                ],
            ],
            
        ];

        
       if (!($this->request->getFile('imagen')->getName() === "")) { 
            $rules['imagen'] = [
                'rules'  => 'is_image[imagen]',
                'errors' => [
                    'required' => 'A {field} debes subir una imagen.',
                    'is_image[imagen]' => 'A {field} debe ser una imagen.',
                ],
                ];
        }
        
        $producto = new Producto_model();
        //var_dump($rules);
        //exit();
        if ($this->validate($rules)) {

            //Si no se subió una imagen se asume que no actualizara imagen
            
            
            if (!($this->request->getFile('imagen')->getName() === "")) {      
                //var_dump($rules);
                //exit();       
                

                $img = $this->request->getFile('imagen');
                $nombre_aleatorio = $img->getRandomName();
                $img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio);

                $data = [
                    'descripcion_prod' => $this->request->getVar('nombre-prod'),
                    'imagen' => $img->getName(),
                    'cod_categoria' => $this->request->getVar('cod_categoria'),
                    'precio' => $this->request->getVar('precio'),
                    'precio_venta' => $this->request->getVar('precio-venta'),
                    'stock' => $this->request->getVar('stock'),
                    'stock_min' => $this->request->getVar('stock-min'),
                    //'eliminado' => NO
                ];

                $producto->update($id, $data);

                return $this->response->redirect(site_url('/crud'));

            } else {
                $data  = [
                    'descripcion_prod' => $this->request->getVar('nombre-prod'),
                    'cod_categoria' => $this->request->getVar('cod_categoria'),
                    'precio' => $this->request->getVar('precio'),
                    'precio_venta' => $this->request->getVar('precio-venta'),
                    'stock' => $this->request->getVar('stock'),
                    'stock_min' => $this->request->getVar('stock-min'),
                    //'eliminado' => NO
                ];

                $producto->update($id, $data);
                
                return $this->response->redirect(site_url('/crud'));
                
            }
        
            

        } else {
            /***Se muestran los errores */
            
            //$producto = new Producto_model();
            //$dato['validation'] = $this->validator;
            //$data['old'] = $producto->where('id_producto', $id)->first();
            
            $dato['titulo'] = 'Editar producto';
            echo view('front/head_view', $dato);
            echo view('front/nav_view');
            echo view('back/productos/editar_producto_view',[
                'validation' => $this->validator,
                'old' => $producto->where('id_producto', $id)->first(),
            ]);
            /*if ($this->request->getVar('imagen') == NULL) {
                echo '<script language="javascript">alert("No se cargo la imagen");</script>'; # code...
            }*/
        }

    

    }
}