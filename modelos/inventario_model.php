<?php 
require_once "modelos/conexion.php";

function inventario(){
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM inventario";
	$resultado = mysqli_query($conexion,$consulta);

	$productos = array();

	while($row = mysqli_fetch_assoc($resultado)) {
		$aux1=$row['codigo'];
		$i=0;
		foreach ($productos as $key => $valor) {
			if($aux1 == $valor){
				$i=1;
			}
		}
		if($i==0){
			array_push($productos, $row['codigo']);
		}
	}
	cerrar_conexion_db($conexion);
	return $productos;
}

function inventario_consultar($id){
	$conexion = conectar_base_datos();
	$inventario = "SELECT * FROM inventario where codigo='$id' order by fecha";
	$resultado = mysqli_query($conexion,$inventario);

	$producto_inventario= array();
	while($row = mysqli_fetch_assoc($resultado)){
		array_push($producto_inventario, $row);
	}
	cerrar_conexion_db($conexion);
	return $producto_inventario;
}

function inventario_consultar3($id){
	$conexion = conectar_base_datos();
	$inventario = "SELECT * FROM inventario where codigo='$id' order by fecha desc limit 1";
	$resultado = mysqli_query($conexion,$inventario);
	$producto_inventario= array();
	while($row = mysqli_fetch_assoc($resultado)){
		$producto_inventario = $row;
	}
	cerrar_conexion_db($conexion);
	return $producto_inventario;
}

function inventario_consultar2($id,$fecha){
	$conexion = conectar_base_datos();
	$inventario = "SELECT * FROM inventario where codigo='$id' and fecha='$fecha' order by fecha";
	$resultado = mysqli_query($conexion,$inventario);

	$producto_inventario= array();
	while($row = mysqli_fetch_assoc($resultado)){
		array_push($producto_inventario, $row);
	}
	cerrar_conexion_db($conexion);
	return $producto_inventario;
}

function consultar_inventario($numero){
	$conexion = conectar_base_datos();
	$inventario;
	if($numero != null){
		$inventario = "SELECT * FROM inventario where codigo='$numero' order by fecha";
	}else{
		$inventario = "SELECT * FROM inventario";
	}
	
	$resultado = mysqli_query($conexion,$inventario);

	$productos= array();
	while($row = mysqli_fetch_assoc($resultado)){
		$aux1=$row['codigo'];
		$i=0;
		foreach ($productos as $key => $valor) {
			if($aux1 == $valor){
				$i=1;
			}
		}
		if($i==0){
			array_push($productos, $row['codigo']);
		}
	}
	cerrar_conexion_db($conexion);
	return $productos;
}
?>