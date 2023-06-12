<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
Use App\Models\Perfiles_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller {

	public function __construct() {
           helper(['form', 'url']);

	}
  public function create() {
        
   $dato['titulo']='Registro'; 
    echo view('front/head_view',$dato);
    echo view('front/nav_view');
    echo view('back/usuario/registro');
    echo view('front/footer_view');
  }
 
  public function formValidation() {           
     
    $input = $this->validate([
      'nombre'   => 'required|min_length[3]',
      'apellido' => 'required|min_length[3]|max_length[25]',
      'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
      'usuario'  => 'required|min_length[3]',
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
          'nombre' => $this->request->getVar('nombre'),
          'apellido'=> $this->request->getVar('apellido'),
          'usuario'=> $this->request->getVar('usuario'),
          'email'=> $this->request->getVar('email'),
          'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
          //  password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
          ]);  
          //return $this->response->redirect(site_url(''));

          // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
          session()->setFlashdata('success', 'Usuario registrado con éxito');
          return $this->response->redirect(base_url('/'));
      
       }

    }
  public function cargar_crud($id = null)
  {

    $data['titulo'] = 'CRUD Usuarios';
    $v_usuarios_model = new Usuarios_model();
    $data['usuarios'] = $v_usuarios_model->findAll();

    $v_perfiles_model = new Perfiles_model();
    $data['perfiles'] = $v_perfiles_model->findAll();

    echo view('front\head_view', $data);
    echo view('front\nav_view');
    echo view('back\usuario\usuarios_view', $data);
    echo view('front\footer_view.php');
  }

  public function ver_eliminados($id = null)
  {

    $data['titulo'] = 'Usuarios eliminados';
    $v_usuarios_model = new Usuarios_model();
    $data['usuarios'] = $v_usuarios_model->findAll();

    $v_perfiles_model = new Perfiles_model();
    $data['perfiles'] = $v_perfiles_model->findAll();

    echo view('front\head_view', $data);
    echo view('front\nav_view');
    echo view('back\usuario\usuarios_eliminados_view', $data);
    echo view('front\footer_view.php');
  }

  public function ver_editarUsuario($id = null) 
  {
    $data['titulo'] = 'Editar Usuario';
    $v_usuarios_model = new Usuarios_model();
    $data['usuario'] = $v_usuarios_model->where('id_usuario', $id)->first();

    //$v_perfiles_model = new Perfiles_model();
    //$data['perfiles'] = $v_perfiles_model->findAll();

    echo view('front\head_view', $data);
    echo view('front\nav_view');
    echo view('back\usuario\editar_usuario_view', $data);
    echo view('front\footer_view.php');
  }

  public function editarUsuario($id = null)
  {
    $input = $this->validate(
      [
        'nombre' => 'required|min_length[3]',
        'apellido' => 'required|min_length[3]|max_length[25]',
        'email' => 'required|min_length[4]|max_length[100]|valid_email',
        'usuario' => 'required|min_length[3]',
      ],
    );

    $formModel = new Usuarios_model();

    if (!$input) {
      $data['titulo'] = 'Error en editar usuario';
      echo view('front/head_view', $data);
      echo view('front/nav_view');
      //echo view('back/usuario/registrarse', ['validation' => $this->validator]);
      echo view('back/usuario/editar_usuario_view', ['validation' => $this->validator,
        'usuario' => $formModel->where('id_usuario', $id)->first(),

      ]);
      echo view('front/footer_view');

    } else {
      $array = ([
        'nombre' => $this->request->getVar('nombre'),
        'apellido' => $this->request->getVar('apellido'),
        'usuario' => $this->request->getVar('usuario'),
        'email' => $this->request->getVar('email'),
      ]);

      
      $formModel->update($id, $array);
      return $this->response->redirect(base_url('/crud_usuarios'));

    }
    
  }

  public function eliminarUsuario($id = null)
  {
    $v_usuarioModel = new Usuarios_model();
    $data = [
      'baja' => "SI"
    ];
    $v_usuarioModel->update($id, $data);

    return $this->response->redirect(site_url('/crud_usuarios'));
  }
  public function restaurarUsuario($id = null)
  {
    $v_usuarioModel = new Usuarios_model();
    $data = [
      'baja' => "NO"
    ];
    $v_usuarioModel->update($id, $data);

    return $this->response->redirect(site_url('/crud_usuarios'));
  }

}

