<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apimodel extends CI_Model{

		  function __construct()
  {
    parent::__construct();
 
	
  }

   public function optenerUsuarios(){

   	$query = $this->db->get('users');
   	$myquery = $query->result();
   	return $myquery;

   }

   public function optenerProductos(){
   	$query = $this->db->get('productos');
   	$myquery = $query->result();
   	return $myquery;

   }

   public function userPost($data){
   	$this->db->insert('users', $data);


   }

   public function productoPost($data){
	$this->db->insert('productos', $data);

   }
   public function userGet($data){
    $this->db->insert('users', $data);


   }

   public function productoGet($data){
  $this->db->insert('productos', $data);

   }

   public function userGetMobile($username, $password, $direccion){

      $data = array(

          'username' => $username,
          'password' => $password,
          'direccion'=> $direccion

        );


    return $this->db->insert('users', $data);

   }

   public function buscarUsuarios($username, $password)
    {
       $myquery = $this->db->get_where('users', array
        (
          'username'=>$username, 
          'password'=>$password
          
          ));
       $query = $myquery;
       return $query->row();
    }

    public function getProductos()
    {
        $query=$this->db
        ->select("id,sku,nombre,nombre,descripcion,cantidad,precio_individual,precio_total")
        ->from("productos")
        ->order_by("id","desc")
        ->get();
        return $query->result_array();
    }
    public function getProductosPorId($id)
    {
        $where=array("id"=>$id);
        $query=$this->db
        ->select("id,sku,nombre,nombre,descripcion,cantidad,precio_individual,precio_total")
        ->from("productos")
        ->where($where)
        ->get();
        return $query->row();
    }
  
    
    public function eliminar($id)
    {
        $this->db->delete('productos', array('id' => $id));
        
    }



}