<?php 
	include("../conexion.php");
	$id = $_GET['id'];
	mysqli_query($cn,"DELETE FROM productos where Codigo='$id'");
	echo mysqli_error();
	mysqli_close($cn);
	header("Location: Productos.php");

 ?>