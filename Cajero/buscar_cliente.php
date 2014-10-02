<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$cedula = $_POST['cc'];
	$result = mysql_query("SELECT * FROM clientes where Cedula = '".$cedula."'",$cn);
	
	$nombre;
	
	while ($row = mysql_fetch_assoc($result)) {
		$nombre = $row['Nombre']." ".$row['Apellido'];
	}
	echo mysql_error();
	mysql_close($cn); 
	echo $nombre;
}else{
	echo "No hay Resultados";
}
 ?>