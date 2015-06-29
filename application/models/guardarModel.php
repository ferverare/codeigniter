<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class guardarModel extends CI_Model {

  function __construct() {
    parent::__construct();

  }
    
    function guardar($data){
      $this->db->insert('productos', $data);
    }
   function verTodo($limite = 0){
  	$query = $this->db->get('productos');
  	if ($query->num_rows() > 0){
  		return $query;
  	}else{
  		return FALSE;
  	}
  }
}

  