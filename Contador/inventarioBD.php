<?php 
  include("../conexion.php");

  $inventario = mysqli_query($cn,"SELECT * FROM inventario");
  
  $productos = array();
  $aux=0;

  while ($row = mysqli_fetch_assoc($inventario)) {
  	$aux1=$row['codigo'];
  	if($aux != $aux1){
  		array_push($productos, $row['codigo']);
  	}
  	$aux=$aux1;
  }
 ?>