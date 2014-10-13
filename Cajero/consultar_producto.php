<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");

	$codigo=$_POST['codigo'];

	$productos = mysqli_query($cn,"SELECT Codigo,Nombre,iva,ValorVenta FROM productos where Codigo = '".$codigo."'");

	$producto = array();
	while($row = mysqli_fetch_row($productos)){ 
    	$producto = $row;
  	}
	mysqli_close($cn);
	$producto = json_encode($producto); 
	echo $producto;
}else{
	echo "No hay Resultados";
} 
	
 ?>