<?php 
  include("../conexion.php");

  $inventario = mysql_query("SELECT * FROM inventario",$cn);
  
  $productos = array();
  $aux=0;

  while ($row = mysql_fetch_assoc($inventario)) {
  	$aux1=$row['codigo'];
  	if($aux != $aux1){
  		array_push($productos, $row['codigo']);
  	}
  	$aux=$aux1;
  }
 ?>