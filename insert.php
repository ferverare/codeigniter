<?php 

$conexion = mysql_connect("localhost","codeigniter","codeigniter");

if(!$conexion){die('La conexion ha fallado por:'.mysql_error());}

mysql_select_db("codeigniter",$conexion);
/*
mysql_query("INSERT INTO users(username,password) VALUES ('abigail', md5('12345'))")

*/

$sql = "CREATE TABLE productos (

 id tinyint(4) NOT NULL AUTO_INCREMENT,
 sku varchar(10) NOT NULL,
 nombre varchar(100) NOT NULL,
 descripcion varchar(100) NOT NULL,
 cantidad varchar(100) NOT NULL,
 precio_individual varchar(10) NOT NULL,
 precio_total varchar(10) NOT NULL,
 PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";



mysql_query($sql, $conexion);





 ?>