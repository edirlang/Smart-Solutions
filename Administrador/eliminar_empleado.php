<?php 
	include("../conexion.php");
	$id = $_GET['id'];
	mysql_query($cn,"DELETE FROM usuarios where Cedula='$id'");
	echo mysqli_error();
	mysqli_close($cn);
	
	header("Location: Empleados.php");

 ?>