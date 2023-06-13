<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {   
        //dd($_SESSION['logged_in'] = session()->get('logged_in'));
        //Si el usuario no esta inicio sesión 
        $session = \Config\Services::session();
        //dd(!$_SESSION['perfil_id'] == "1");
        if(!$session->get('logged_in')) {
            //entonces redirectiona la pagina de iniciar sesión
            return redirect()->to('ingreso')->with('msg', [
                'type' => 'warning',
                'body' => 'Debes iniciar sesión para acceder a esta página.'
            ]);
        }
        //dd($_SESSION['perfil_id'] != "1");
        if ($_SESSION['perfil_id'] != "1") {
            return redirect()->to('')->with('msg', [
                'type' => 'warning',
                'body' => 'No tienes los permisos para acceder a esa funcionalidad.'
            ]);
        }
    }
    //-----------------------------------------
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //Hacer algo
    }
}
    