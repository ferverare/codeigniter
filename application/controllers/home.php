<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model('guardarModel');

  }

  function index()


  {
    if($this->session->userdata('logged_in'))
    { 
      $this->load->library("table");

      $session_data = $this->session->userdata('logged_in');
      $data['productos'] = $this->db->get('productos');
      $data['username'] = $session_data['username'];
      $this->load->view('home_view', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }

  public function agregar(){
  $this->load->view("agregar");

  }
  public function guadar(){
    

    $data = array(

      'sku'               => $this->input->post('sku',TRUE),
      'nombre'            => $this->input->post('nombre',TRUE),
      'descripcion'       => $this->input->post('descripcion',TRUE),
      'cantidad'          => $this->input->post('cantidad',TRUE),
      'precio_individual' => $this->input->post('precio_individual',TRUE),
      'precio_total'      => $this->input->post('precio_total',TRUE)
      


    );
      if ($this->form_validation->run() == FALSE)
          {
            $this->index();
          }
          else
          {
            $this->load->view('formsuccess');
          }


          $this->guardarModel->guardar($data);
          redirect('index.php/home/agregar');

  }

  public function validar(){

    $this->form_validation->set_rules('sku', 'Sku', 'required');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
    $this->form_validation->set_rules('cantidad', 'Cantidad', 'required');
    $this->form_validation->set_rules('cantidad', 'Cantidad', 'required');
    $this->form_validation->set_rules('precio_individual', 'Precio Individual', 'required');
    $this->form_validation->set_rules('precio_total', 'Precio Total', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->index();
    }
    else
    {
      $this->load->view('formsuccess');
    }
  }

  public function ver(){    
    $data = array(
      'enlaces' => $this->guardarModel->verTodo(),
      'dump'    => 0
    );

    
    $this->load->view('ver', $data);
   
  }

}