<?php 
	include '../conexion.php';
	$id = $_GET['id'];
	$producto;
	$sql = 'SELECT * FROM productos';
	$resultado = mysql_query($sql,$cn);
	while ($row = mysql_fetch_assoc($resultado)) {
		if($row['Codigo'] == $id){
			$producto=$row;
		}
	}                    
	mysql_close($cn);
?>