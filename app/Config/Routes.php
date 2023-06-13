<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('quienes_somos', 'Home::f_quienes_somos');
$routes->get('contacto', 'Home::f_contacto');
$routes->get('comercializacion', 'Home::f_comercializacion');
$routes->get('sitio_en_construccion', 'Home::f_sitio_en_construccion');
$routes->get('terminos_y_condiciones', 'Home::f_terminos_y_condiciones');


/**
 * Rutas del Registro de Usuarios
 */
$routes->get('registro', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');


/**
 * Rutas del Ingreso de Usuarios
 */
$routes->get('ingreso', 'Login_controller::ingreso');
$routes->post('/enviar-form-login', 'Login_controller::auth');
$routes->get('/cerrar-login', 'Login_controller::logout');
//$routes->get('/principal', 'Home::prueba');


/**
 * Rutas del crud de usuarios
 */
$routes->get('crud_usuarios', 'Usuario_controller::cargar_crud');
$routes->get('ver_usuarios_eliminados', 'Usuario_controller::ver_eliminados');

$routes->get('/ver_editar_usuario/(:num)', 'Usuario_controller::ver_editarUsuario/$1');

$routes->post('/editar_usuario/(:num)', 'Usuario_controller::editarUsuario/$1');

$routes->get('/eliminar_usuario/(:num)', 'Usuario_controller::eliminarUsuario/$1');

$routes->get('/restaurar_usuario/(:num)', 'Usuario_controller::restaurarUsuario/$1');

/**
 * Rutas de Productos
 */
$routes->get('/crud', 'ProductoController::index');
//$routes->get('/agregar', 'ProductoController::index');
$routes->get('/produ-form', 'ProductoController::crearproducto');
$routes->post('/enviar-prod', 'ProductoController::alta_producto');

$routes->get('/vista_editar/(:num)', 'ProductoController::vistaEditarProducto/$1');

$routes->post('/editar/(:num)', 'ProductoController::editarProducto/$1');

$routes->get('/produ-eliminados', 'ProductoController::vista_productos_eliminados');

$routes->get('/produ-eliminar/(:num)', 'ProductoController::eliminarProducto/$1');

$routes->get('/produ-restaurar/(:num)', 'ProductoController::restaurarProducto/$1');



/**
 * Rutas de Categorías
 */
$routes->get('crud_categorias', 'CategoriasController::index');

$routes->get('/categoria_form', 'CategoriasController::crearcategoria');

$routes->post('/enviar_categoria', 'CategoriasController::alta_categoria');

$routes->get('/vista_editar_categoria/(:num)', 'CategoriasController::vistaEditarCategoria/$1');

$routes->get('/categoria_eliminados', 'CategoriasController::vista_categoria_eliminados');

$routes->post('/editar_categoria/(:num)', 'CategoriasController::editarCategoria/$1');

$routes->get('/eliminar_categoria/(:num)', 'CategoriasController::eliminarCategoria/$1');

$routes->get('/restaurar_categoria/(:num)', 'CategoriasController::restaurarCategoria/$1');

/**
 * Rutas del carrito
 */
$routes->get('/carrito', 'Carrito_controller::ver_carrito');
$routes->get('catalogo', 'Carrito_controller::catalogo');
$routes->post('carrito_agregar/(:num)', 'Carrito_controller::agregar/$1');
//$routes->post('carrito_agregar', 'Carrito_controller::agregar',['filter' => 'auth']);
$routes->get('sumar_a_carrito/(:any)', 'Carrito_controller::sumar_carrito/$1');
$routes->get('restar_a_carrito/(:any)', 'Carrito_controller::restar_carrito/$1');
$routes->get('remover_producto/(:any)', 'Carrito_controller::remover_producto/$1');

$routes->get('finalizar_compra', 'Carrito_controller::guardar_compra');


$routes->get('eliminar_carrito', 'Carrito_controller::eliminar_carrito');
/**
 * Rutas de las consultas
 */
//la carga se encarga $routes->get('contacto', 'Home::f_contacto');

$routes->get('consultas_view', 'Consulta_controller::ver_consultas');
$routes->get('ver_consultas_respondidas', 'Consulta_controller::ver_consultas_respondidas');

$routes->post('enviar_consulta', 'Consulta_controller::formValidation');

$routes->get('/responder_consulta/(:num)', 'Consulta_controller::responderConsulta/$1');

$routes->get('/restaurar_consulta/(:num)', 'Consulta_controller::restaurarConsulta/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
