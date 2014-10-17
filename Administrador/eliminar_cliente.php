<?php 
	include("../conexion.php");
	$id = $_GET['id'];
	mysqli_query($cn,"DELETE FROM clientes where Cedula='$id'");
	echo mysqli_error();
	mysqli_close($cn);
	
	header("Location: Clientes.php");

 ?>