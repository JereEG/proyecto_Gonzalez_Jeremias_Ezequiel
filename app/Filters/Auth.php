<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //Si el usuario no esta inicio sesión 
        if(! session()->get('logged_in')) {
            //entonces redirectiona la pagina de iniciar sesión
            return redirect()->to('logged_in');
        }
    }
    //-----------------------------------------
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //Hacer algo
    }
}
    