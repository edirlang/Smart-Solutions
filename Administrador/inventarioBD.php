<?php 
  include("../conexion.php");

  $inventario = mysql_query("SELECT * FROM inventario",$cn);
  
  $productos = array();
  
  while ($row = mysql_fetch_assoc($inventario)) {
  	$aux1=$row['codigo'];
  	$i=0;
    foreach ($productos as $key => $valor) {
      if($aux1 == $valor){
        $i=1;
      }
    }
    if($i==0){
      array_push($productos, $row['codigo']);
      echo $row['codigo'];
    }
  }
 ?>