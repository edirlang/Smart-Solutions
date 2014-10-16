<?php 
	include '../conexion.php';
	$id = $_POST['id'];

	$producto;
	
	$sql = "SELECT * FROM inventario where codigo = '".$id."'  order by fecha desc limit 1";
	$resultado = mysqli_query($cn,$sql);
	
	while ($row = mysqli_fetch_assoc($resultado)) {
		$sql = mysqli_query($cn,"SELECT * FROM productos where Codigo = '".$id."'");
		while ($fila = mysqli_fetch_assoc($sql)) {
			$producto=[$row['codigo'],$row['vlr_unidad'],$fila['iva']];
			echo json_encode($producto);
		}
	}
	echo mysqli_error($cn);                    
	mysqli_close($cn);
?>