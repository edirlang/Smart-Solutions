<?php 
	include '../conexion.php';
	$id = $_POST['id'];
	$cliente;
	$sql = 'SELECT * FROM clientes';
	$resultado = mysql_query($sql,$cn);
	while ($row = mysql_fetch_assoc($resultado)) {
		if($row['Cedula'] == $id){
			$cliente=$row;
		}
	}                    
	mysql_close($cn);

	$json = json_encode($cliente); 
	echo $json;
	
?>