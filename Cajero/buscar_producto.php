<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$result = mysql_query("SELECT * FROM productos",$cn);
	
	$productos = array();
	
	while ($row = mysql_fetch_assoc($result)) {
		array_push($productos, $row['Codigo']);
	}
	echo mysql_error();
	mysql_close($cn);
	$json = json_encode($productos); 
	echo $json;
}else{
	echo "No hay Resultados";
}
?>