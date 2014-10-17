<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	session_start();
	$datos = json_decode($_POST['jdatos'], true);
	
	include("../conexion.php");
	
	mysqli_query($cn,"INSERT INTO clientes VALUES ('".$datos[0]."','".$datos[1]."','".$datos[2]."','".$datos[3]."')");
	
	mysqli_close($cn);
	echo 1;
}else{
	echo 0;
}
?>