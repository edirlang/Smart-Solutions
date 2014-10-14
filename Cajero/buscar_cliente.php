<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$cedula = $_POST['cc'];
	
	$result = mysqli_query($cn,"SELECT * FROM clientes where Cedula = '".$cedula."'");
	
	$nombre;
	
	while ($row = mysqli_fetch_assoc($result)) {
		$nombre = $row['Nombre']." ".$row['Apellido'];
	}
	mysqli_close($cn); 
	echo $nombre;
}else{
	echo "No hay Resultados";
}
 ?>