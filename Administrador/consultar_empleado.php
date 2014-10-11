<?php 
	include '../conexion.php';
	$id = $_POST['id'];
	
	$empleado=array();
	
	$sql = 'SELECT * FROM usuarios';
	$resultado = mysql_query($sql,$cn);
	
	while ($row = mysql_fetch_assoc($resultado)) {
		if($row['Cedula'] == $id){
			$empleado=$row;
		}
	} 
	$json = json_encode($empleado);
	echo $json;
	echo mysql_error();
	mysql_close($cn);
?>