<?php 
	include '../conexion.php';
	$id = $_POST['id'];
	$cliente;
	$sql = 'SELECT * FROM clientes';
	$resultado = mysqli_query($cn,$sql);
	while ($row = mysqli_fetch_assoc($resultado)) {
		if($row['Cedula'] == $id){
			$cliente=$row;
		}
	}                    
	mysqli_close($cn);

	$json = json_encode($cliente); 
	echo $json;
	
?>