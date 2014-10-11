<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$datos = json_decode($_POST['jdatos'], true);
	
	include("../conexion.php");
	
	mysqli_query($cn,"INSERT INTO usuarios VALUES ('".$datos[0]."','".$datos[1]."','".$datos[2]."','".$datos[3]."','".$datos[4]."','".$datos[5]."')");
	
	mysqli_close($cn);
	echo 1;
}else{
	echo 0;
}
?>