<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Guardar extends CI_Model {

  function __construct() {
    parent::__construct();

  }
    
    function guardar($data){

      $this->db->insert('productos', $data);
    }

}

  