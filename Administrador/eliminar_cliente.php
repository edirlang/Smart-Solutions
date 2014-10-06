<?php 
	include("../conexion.php");
	$id = $_GET['id'];
	mysql_query("DELETE FROM clientes where Cedula='$id'");
	echo mysql_error();
	mysql_close($cn);
	header("Location: Clientes.php");

 ?>