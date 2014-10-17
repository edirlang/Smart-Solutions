<?php 
	include("../conexion.php");
	
	$cliente = array($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['cargo']);

	$sqlUpdate = mysqli_query($cn,"UPDATE usuarios Set Cedula='$cliente[0]', Nombre='$cliente[1]', Apellido='$cliente[2]', Telefono='$cliente[3]', Rol='$cliente[4]'  Where Cedula='$cliente[0]'");

	mysqli_close($cn);
?>