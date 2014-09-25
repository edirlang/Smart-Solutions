<?php 
function consultar($id){
	include '../conexion.php';
	
	$sql = 'SELECT * FROM proveedo';
	$resultado = mysql_query($sql,$cn);
	while ($row = mysql_fetch_assoc($resultado)) {
		if($row['codigo'] == $id){
			return $id;
		}
	}                    
	mysql_close($cn);
}
function Productos($proveedor){
	include '../conexion.php';
	$sql = "SELECT * FROM producto_proveedor where cod_proveedor='".$proveedor."' ";
	$resultado = mysql_query($sql,$cn);
	return $resultado;                   
	mysql_close($cn);
}
?>