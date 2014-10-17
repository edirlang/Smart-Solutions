<?php 
	include("../conexion.php");
	
	$producto = array($_POST['Codigo'],$_POST['Nombre'],$_POST['Descripcion'],$_POST['Especificaciones'],$_POST['ValorComp'],$_POST['ValorVen'],$_POST['Cantidad']);
	
	$sqlUpdate = mysqli_query($cn,"UPDATE productos Set ValorVenta='$producto[5]', Cantidad='$producto[6]' Where Codigo='$producto[0]'");
	
	mysqli_close($cn);
	
	header("Location: Productos.php");

 ?>