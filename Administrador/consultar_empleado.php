<?php 
	include '../conexion.php';
	$id = $_POST['id'];
	
	$empleado=array();
	
	$sql = 'SELECT * FROM usuarios';
	$resultado = mysqli_query($cn,$sql);
	
	while ($row = mysqli_fetch_assoc($resultado)) {
		if($row['Cedula'] == $id){
			$empleado=$row;
		}
	} 
	$json = json_encode($empleado);
	echo $json;
	
	mysqli_close($cn);
?>