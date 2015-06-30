<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller{

		  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->model('apimodel');
 
	
  }

   public function usuarios(){

     $resultado = $this->apimodel->optenerUsuarios();
     echo json_encode($resultado);

  }
  public function productos(){

  	$resultado = $this->apimodel->optenerProductos();
  	echo json_encode($resultado);
  }

  public function agregarUsuario(){
  	$this->load->view('api/api');

  }
//Agradando un usuario con el metodo POST
  public function userPost(){

  	$data = array(

  		'username' => $this->input->post('username', TRUE),
  		'password' => md5($this->input->post('password',TRUE)),
  		'direccion'=> $this->input->post('direccion',TRUE),
  		'creacion' => date('Y/m/d h:m')

  	);
  	 if ($this->form_validation->run() == FALSE)
    {
      $this->agregarUsuario();
    }
    else
    {
      $this->load->view('formsuccess');
    }

  	$this->apimodel->userPost($data);


  }
  public function productoPost(){

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
      $this->agregarUsuario();
    }
    else
    {
      $this->load->view('formsuccess');
    }

  	$this->apimodel->productoPost($data);

    
  }

    public function userGet(){

    $data = array(

      'username' => $this->input->get('username', TRUE),
      'password' => md5($this->input->get('password',TRUE)),
      'direccion'=> $this->input->get('direccion',TRUE),
      'creacion' => date('Y/m/d h:m')

    );
     if ($this->form_validation->run() == FALSE)
    {
      $this->agregarUsuario();
    }
    else
    {
      $this->load->view('formsuccess');
    }

    $this->apimodel->userPost($data);


  }
  public function productoGet(){

     $data = array(

      'sku'               => $this->input->get('sku',TRUE),
      'nombre'            => $this->input->get('nombre',TRUE),
      'descripcion'       => $this->input->get('descripcion',TRUE),
      'cantidad'          => $this->input->get('cantidad',TRUE),
      'precio_individual' => $this->input->get('precio_individual',TRUE),
      'precio_total'      => $this->input->get('precio_total',TRUE)
      
      );
       if ($this->form_validation->run() == FALSE)
    {
      $this->agregarUsuario();
    }
    else
    {
      $this->load->view('formsuccess');
    }

    $this->apimodel->productoPost($data);

    
  }

  public function test(){


      
      echo "parametro1"."<br/>";
      echo $_GET = "parametro2"."<br/>";
      echo $_GET = "parametro3";

  }



}