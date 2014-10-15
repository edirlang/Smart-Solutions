<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");

	$codigo=$_POST['codigo'];

	$productos = mysqli_query($cn,"SELECT * FROM productos where Codigo = '".$codigo."'");

	$producto = array();
	while($row = mysqli_fetch_assoc($productos)){ 

    	$inventario = mysqli_query($cn ,"SELECT * FROM inventario WHERE codigo like '".$codigo."' order by fecha desc limit 1");
    	
    	while ($fila = mysqli_fetch_assoc($inventario)) {
    		$producto = [$row['Codigo'],$row['Nombre'],$row['iva'],$row['ValorVenta'],$fila['vlr_unidad']];
    	}
  	}
	mysqli_close($cn);
	$producto = json_encode($producto); 
	echo $producto;
}else{
	echo "No hay Resultados";
} 
	
 ?>