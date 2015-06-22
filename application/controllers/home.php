<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();

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

      'sku' => $this->input->post('sku',TRUE),
      "nombre" => $this->input->post('nombre',TRUE),
      "descripcion" => $this->input->post('descripcion',TRUE),
      "cantidad" => $this->input->post('cantidad',TRUE),
      "precio_individual" => $this->input->post('precio_individual',TRUE),
      "precio_total" => $this->input->post('precio_total',TRUE)
      

    );

    $this->guardar->guardar($data);
    redirect('index.php/home/agregar');

  }

}

?>