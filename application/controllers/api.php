<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller{

		  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
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

  public function viewPost(){
  	$this->load->view('api/view_post');

  }
  public function viewGet(){
    $this->load->view('api/view_get');

  }
  public function viewGetMobile(){
    $this->load->view('api/view_GetMobile');

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
      $this->viewPost();
    }
    else
    {
      $this->load->view('formsuccess');
    }

  	$this->apimodel->userPost($data);

//Agregando productos con el metodo POST
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
      $this->viewPost();
    }
    else
    {
      $this->load->view('formsuccess');
    }

  	$this->apimodel->productoPost($data);

    
  }
//Agregando usuarios con el metodo GET

    public function userGet(){

    $data = array(

      'username' => $this->input->get('username', TRUE),
      'password' => md5($this->input->get('password',TRUE)),
      'direccion'=> $this->input->get('direccion',TRUE),
      'creacion' => date('Y/m/d h:m')

    );
     if ($this->form_validation->run() == FALSE)
    {
      $this->viewGet();
    }
    else
    {
      $this->load->view('formsuccess');
    }

    $this->apimodel->userGet($data);

//Agregando productos con el metodo GET
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
      $this->viewGEt();
    }
    else
    {
      $this->load->view('formsuccess');
    }

    $this->apimodel->productoGet($data);

    
  }
/*
  public function userGetMobile(){

    

        $this->form_validation->set_rules('username','Usuario','required|min_length[3]');
        $this->form_validation->set_rules('password','Contraseña','required|min_length[3]');
        $this->form_validation->set_rules('direccion','Direccion','required|min_length[3]');
       

       
  
       if ($this->form_validation->run() == FALSE)
        {

         $username = $this->input->get('username');
         $password = $this->input->get('password');
         $direccion = $this->input->get('direccion');
         
           
         
         $this->apimodel->userGetMobile($username, $password, $direccion);
      
       }
       else
       {

       echo "Error al añadir registro";

        } */
           

  public function insertarUsuario(){


    $this->form_validation->set_rules('username','Usuario','required|min_length[3]');
    $this->form_validation->set_rules('password','Contraseña','required|min_length[3]');
    $this->form_validation->set_rules('direccion','Direccion','required|min_length[3]');
   

   

   if ($this->form_validation->run() == FALSE)
    {

      echo "Error al añadir registro!!";
     
   }
   else
   {

     $username = $this->input->post('username');
     $password = md5($this->input->post('password'));
     $direccion = $this->input->post('direccion');
      
     $this->apimodel->insertarUsuario($username, $password, $direccion);

    
     echo "El registro se añadio correctamente!!";

    }

  }
                     
   public function login(){

        $this->form_validation->set_rules('username','Usuario','required|min_length[3]');
        $this->form_validation->set_rules('password','Contraseña','required|min_length[3]'); 

           if ($this->form_validation->run() == FALSE)
        {

          echo "Checa que los datos esten completos";
         
       }
       else
       {

          $username = $this->input->get('username');
          $password = $this->input->get('password');


          $resultado = $this->apimodel->login($username,$password);
          echo json_encode($resultado);


       }

//CRUD
       }

       public function getProductos()
        {
          
              $datos = $this->apimodel->getProductos();
              echo json_encode($datos);
        }

      public function getProductosPorId($id=null)

        {

              $this->form_validation->set_rules('id','id','required');
            

              if ($this->form_validation->run() == FALSE)
              {

                echo "Por favor ingrese un ID de pruducto";
               
             }
             else
             {

                $id = $this->input->post('id');
                $resultado = $this->apimodel->getProductosPorId($id);
                echo json_encode($resultado);
               


             } 

          
              $datos=$this->apimodel->getProductosPorId($id);
              echo json_encode($datos);
        }
    
      public function eliminar()
        {
              $this->form_validation->set_rules('id','id','required');
            

                 if ($this->form_validation->run() == FALSE)
              {

                echo "No se pudo eliminar el registro";
               
             }
             else
             {

                $id = $this->input->post('id');
                $resultado = $this->apimodel->eliminar($id);

                echo "El registro se eliminó correctamente!!";


             } 

            
        }

        public function usando_join()
        {
          
              $datos=$this->apimodel->getUsuariosConProductos();
              echo json_encode($datos);
        }

         public function insertar()
    {

        
        $datos=array
        (
            "username"=>"Esteban",
            "password"=>"123",
            "direccion"=>"direccion de esteban",
            "creacion"=>date('Y/m/d h:m')
        );
        $this->apimodel->insertar_usuario($datos);
        echo json_encode($datos);
    }

    public function modificar()
    {
          $this->form_validation->set_rules('id','id','required'); 
          $this->form_validation->set_rules('username','Usuario','required');
          $this->form_validation->set_rules('password','Contraseña','required');
          $this->form_validation->set_rules('direccion','Direccion','required');
         

         if ($this->form_validation->run() == FALSE)
          {

            echo "Error al modificar registro";
           
         }
         else
         {

            $id        = $this->input->post("id");
            $username  = $this->input->post("username");
            $password  = $this->input->post("password");
            $direccion = $this->input->post("direccion");
            
           $this->apimodel->modificar_usuario($id, $username, $password, $direccion);
           
           echo "El registro se modifico correctamente!!";

        }
 
           
         
    }
    
}