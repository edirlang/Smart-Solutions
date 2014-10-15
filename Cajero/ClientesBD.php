<?php 
  include("../conexion.php");

  $Clientes = array();
  $result = mysqli_query($cn,"SELECT * FROM clientes");
  
  while ($row = mysqli_fetch_assoc($result)) {
  	array_push($Clientes, $row);
  }
  
  return $Clientes;
 ?>