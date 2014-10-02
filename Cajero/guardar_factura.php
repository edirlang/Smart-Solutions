<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$productos = json_decode($_POST['jdatos'], true);
	$numero = $_POST['num_fact'];
	$fecha = $_POST['fecha'];
	$cedula = $_POST['cliente'];
	$cajero = $_POST['cajero'];
	$total=0;

	foreach ($productos as $key => $row) {
		$total+=$row[4]+($row[2]*$row[1]);
	}


	$sql = "INSERT INTO factura VALUES ('".$numero."','".$cedula."','".$fecha."','','".$cajero."','".$total."')";
	mysql_query($sql,$cn);
	echo "bien";

}else{
	echo "No hay Resultados";
} 
?>