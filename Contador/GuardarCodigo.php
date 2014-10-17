<?php 
	$Codigo = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Tipo']);

	include("../conexion.php");
	
	$sql = "INSERT INTO codigotransacion VALUES ('".$Codigo[0]."','".$Codigo[1]."','".$Codigo[2]."')";
	mysql_query($cn,$sql);
	mysql_close($cn);
	echo mysql_error();
	header("Location: Codigos.php");
 ?>