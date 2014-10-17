<?php 
	include '../conexion.php';
	$id = $_GET['id'];
	$cliente;
	$sql = 'SELECT * FROM clientes';
	$resultado = mysqli_query($cn,$sql);
	while ($row = mysqli_fetch_assoc($resultado)) {
		if($row['Cedula'] == $id){
			$cliente=$row;
		}
	}                    
	mysqli_close($cn);
?>