<?php 
	include '../conexion.php';
	$id = $_GET['id'];
	
	$empleado=null;
	
	$sql = 'SELECT * FROM usuarios';
	$resultado = mysql_query($sql,$cn);
	
	while ($row = mysql_fetch_assoc($resultado)) {
		if($row['Cedula'] == $id){
			$empleado=$row;
		}
	} 
	
	echo mysql_error();
	mysql_close($cn);
?>