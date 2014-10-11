<?php 
	include '../conexion.php';
	$id = $_GET['id'];
	$producto;
	$sql = 'SELECT * FROM productos';
	$resultado = mysqli_query($cn,$sql);
	while ($row = mysqli_fetch_assoc($resultado)) {
		if($row['Codigo'] == $id){
			$producto=$row;
		}
	}
	echo mysqli_error();                    
	mysqli_close($cn);
?>