<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$result = mysqli_query($cn,"SELECT * FROM productos");
	
	$productos = array();
	
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($productos, $row['Codigo']);
	}
	mysqli_close($cn);
	$json = json_encode($productos); 
	echo $json;
}else{
	echo "No hay Resultados";
}
?>