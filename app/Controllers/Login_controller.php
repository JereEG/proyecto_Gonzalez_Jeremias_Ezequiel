<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Login_controller extends Controller{


    /** Login */
    public function ingreso() {
        helper(['form', 'url', 'html']);

         $dato['titulo']='Ingreso'; 
         echo view('front/head_view',$dato);
         echo view('front/nav_view');
         echo view('back/login/ingreso');
         echo view('front/footer_view');
    }

    public function auth() {
        
        $session = session();
        $model = new Usuarios_model();
        //traemos los datos del formulario 
        $email = $this->request->getVar('email');
        $contrasena = $this->request->getVar('pass');
        
        $data = $model->where('email', $email)->first();
        if($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if($ba == 'SI') {
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/');
            }
            //se verifica los datos ingresados para iniciar, si cumple la verificación inicia la sesión
            $verify_pass = password_verify($contrasena, $pass);
            //var_dump($verify_pass);
            //exit();
            //password_verify determina los requisitos de configuración de la contraseña
            if($verify_pass) {
                $ses_data = [ //array de la sesión 
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                //Si se cumple la verificación inicia la sesión
                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('/');
            } else {
                //no paso la validación de la password 
                $session->setFlashdata('msg', 'Contraseña Incorrecta');
                return redirect()->to('/');
                //puede ir base_url();
            }
        } else {
            $session->setFlashdata('msg', 'No Existe el Email o es Incorrecto');
            return redirect()->to('/');
        }
        
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }


    /*public function formValidationLogin() {
             
        $input = $this->validate([

            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'     => 'required|min_length[3]|max_length[10]'
        ],
        
       );
        $formModel = new Usuarios_model();
     
        if (!$input) {
               $data['titulo']='Registro'; 
                echo view('front/head_view',$data);
                echo view('front/nav_view');
                //echo view('back/usuario/registrarse', ['validation' => $this->validator]);
                echo view('back/usuario/registro', ['validation' => $this->validator]);
                echo view('front/footer_view');

        } else {
            $formModel->save([
              
                'email'=> $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
              //  password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
            ]);  
              //return $this->response->redirect(site_url(''));

            // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
               session()->setFlashdata('success', 'Usuario registrado con éxito');
               return $this->response->redirect(base_url('/registro'));
      
        }
    }*/
}
