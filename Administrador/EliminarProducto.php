<?php 
	include("../conexion.php");
	$id = $_GET['id'];
	mysql_query("DELETE FROM productos where Codigo='$id'");
	echo mysql_error();
	mysql_close($cn);
	header("Location: Productos.php");

 ?>