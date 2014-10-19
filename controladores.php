<?php
function tipo_usuario($usuario){
	session_start();
	if($_SESSION['rol'] == $usuario){
		return true;
	}else{
		return false;
	}
}

function login(){
	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		comprovar_usuario();
		require "plantillas/login.php";
	}else{
		comprovar_usuario();
	}
}

function empleados_action(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		$empleados = empleados();
		require "plantillas/empleados.php";
	}else{
		header("location: login");
	}
}

function consultar_empleado_action(){
	consultar_empleado1();
}

function actualizar_empleado_action(){
		actualizar_empleado();
}

function crear_empleado_action(){
	crear_empleado();
}

function eliminar_empleado_action(){
	eliminar_empleado();
}

function abrir_panel_admin(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		require "plantillas/panel_admin.php";
	}else{
		header("location: login");
	}
}

function inventario_action(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		$productos = inventario();
		require "plantillas/inventario.php";
	}else{
		header("location: login");
	}
}

function inventario_consultar_action($codigo){
	return $producto = inventario_consultar($codigo);
	}

function clientes_action(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		$clientes = clientes();
		require "plantillas/clientes.php";
	}else{
		header("location: login");
	}
}

function consultar_cliente_action(){
	consultar_cliente();
}

function actualizar_cliente_action(){
		actualizar_cliente();
}

function crear_cliente_action(){
	crear_cliente();
}

function eliminar_cliente_action(){
	eliminar_cliente();
}

?>