<?php 
  include("../conexion.php");

  $inventario = mysqli_query($cn,"SELECT * FROM inventario");
  
  $productos = array();
  
  while ($row = mysqli_fetch_assoc($inventario)) {
  	$aux1=$row['codigo'];
  	$i=0;
    foreach ($productos as $key => $valor) {
      if($aux1 == $valor){
        $i=1;
      }
    }
    if($i==0){
      array_push($productos, $row['codigo']);
    }
  }
 ?>