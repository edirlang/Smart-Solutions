<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");

	$codigo=$_POST['codigo'];

	$productos = mysql_query("SELECT Codigo,Nombre,iva,ValorVenta FROM productos where Codigo = '".$codigo."'");

	$producto = array();
	while($row = mysql_fetch_row($productos)){ 
    	$producto = $row;
  	}
  	echo mysql_error();
	mysql_close($cn);
	$producto = json_encode($producto); 
	echo $producto;
}else{
	echo "No hay Resultados";
} 
	
 ?>