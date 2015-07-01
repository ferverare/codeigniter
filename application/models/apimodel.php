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

   public function userGetMobile($data){
    $this->db->insert('users', $data);

   }
}