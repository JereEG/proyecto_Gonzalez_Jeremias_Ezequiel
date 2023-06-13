<?php
namespace App\Controllers;
Use App\Models\Consulta_model;
//Use App\Helpers\ValidationRules;

use CodeIgniter\Controller;

class Consulta_controller extends Controller {

	public function __construct() {
           helper(['form', 'url']);

	}
  /*public function create() {
        
   $dato['titulo']='Registro'; 
    echo view('front/head_view',$dato);
    echo view('front/nav_view');
    echo view('back/usuario/registro');
    echo view('front/footer_view');
  }*/
 
  public function formValidation() {       
      
     
    $input = $this->validate([
      'nombre'   => 'required|min_length[3]',
      'apellido' => 'required|min_length[3]|max_length[25]',
      'email'    => 'required|min_length[4]|max_length[100]|valid_email',
      'telefono' => 'required|min_length[3]|max_length[11]',
      'consulta' => 'required|min_length[3]|max_length[256]',

      ],
     );
    //dd($this->request->getVar('telefono'));
    $formModel = new Consulta_model();

     if (!$input) {
        $data['titulo']='Error en consulta'; 
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        //echo view('back/usuario/registrarse', ['validation' => $this->validator]);
        echo view('front\contacto', ['validation' => $this->validator]);
        echo view('front/footer_view');

      } else {
          $formModel->save([
          'nombre' => $this->request->getVar('nombre'),
          'apellido'=> $this->request->getVar('apellido'),
          'usuario'=> $this->request->getVar('usuario'),
          'email'=> $this->request->getVar('email'),
          'numero_telefonico'=> $this->request->getVar('telefono'),
          'consulta'=> $this->request->getVar('consulta'),

          ]);  
          //return $this->response->redirect(site_url(''));

          // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
          session()->setFlashdata('success', 'Gracias por la consulta');
          return $this->response->redirect(base_url('/'));
      
       }

    }
  public function ver_consultas($id = null)
  {

    $data['titulo'] = 'Consultas';
    $v_consulta_model = new Consulta_model();
    $data['consultas'] = $v_consulta_model->orderBy('id_consulta')->findAll();

    echo view('front\head_view', $data);
    echo view('front\nav_view');
    echo view('back\consultas\consultas_view', $data);
    echo view('front\footer_view.php');
  }

  public function ver_consultas_respondidas($id = null)
  {

    $data['titulo'] = 'Consultas respondidas';
    $v_consulta_model = new Consulta_model();
    $data['consultas'] = $v_consulta_model->orderBy('id_consulta')->findAll();

    echo view('front\head_view', $data);
    echo view('front\nav_view');
    echo view('back\consultas\consultas_respondidas_view', $data);
    echo view('front\footer_view.php');
  }


  public function responderConsulta($id = null)
  {
    $v_consulta_model = new Consulta_model();
    $data = [
      'respondido' => "SI"
    ];
    $v_consulta_model->update($id, $data);

    return $this->response->redirect(site_url('/consultas_view'));
  }
  public function restaurarConsulta($id = null)
  {
    $v_consulta_model = new Consulta_model();
    $data = [
      'respondido' => "NO"
    ];
    $v_consulta_model->update($id, $data);

    return $this->response->redirect(site_url('/consultas_view'));
  }



}

