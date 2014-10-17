<?php 
	include("../conexion.php");
	$cliente = array($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono']);
	
	$sqlUpdate = mysqli_query($cn,"UPDATE clientes Set Cedula='$cliente[0]', Nombre='$cliente[1]', Apellido='$cliente[2]', Telefono='$cliente[3]' Where Cedula='$cliente[0]'");
	
	mysqli_close($cn);
	
 ?>