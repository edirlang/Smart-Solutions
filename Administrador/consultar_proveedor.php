<?php 
function consultar($id){
	include '../conexion.php';
	
	$sql = 'SELECT * FROM proveedo';
	$resultado = mysqli_query($cn,$sql);
	while ($row = mysqli_fetch_assoc($resultado)) {
		if($row['codigo'] == $id){
			return $id;
		}
	}                    
	mysqli_close($cn);
}
function Productos($proveedor){
	include '../conexion.php';
	$sql = "SELECT * FROM producto_proveedor where cod_proveedor='".$proveedor."' ";
	$resultado = mysqli_query($cn,$sql);
	return $resultado;                   
	mysqli_close($cn);
}
?>