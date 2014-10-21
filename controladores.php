<?php
function tipo_usuario($usuario){
	
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

function abrir_panel_contador(){
		require "plantillas/panel_contador.php";
}

function abrir_panel_cajero(){
		require "plantillas/panel_cajero.php";
}	

function inventario_action(){
	$rol = "admin";
	if(tipo_usuario($rol) || tipo_usuario('contador')){
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
	if(tipo_usuario('admin') || tipo_usuario('cajero')){
		$clientes = clientes();
		require "plantillas/clientes.php";
	}else{
		header("location: login");
	}
}

function consultar_cliente_action(){
	$cliente = consultar_cliente();
	$json = json_encode($cliente); 
	echo $json;
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

//Proveedores
function proveedores_action(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		$proveedores = proveedores();
		require "plantillas/proveedores.php";
	}else{
		header("location: login");
	}
}

function consultar_proveedor_action(){
	consultar_provedor();
}

function actualizar_proveedor_action(){
		actualizar_provedor();
}

function crear_proveedor_action(){
	crear_provedor();
}

function eliminar_proveedor_action(){
	eliminar_provedor();
}

function pedido_action(){
	$proveedor = $_POST['codigo'];
	$productos = consultar_provedor_producto();

	require "plantillas/nuevo_pedido.php";
}

function prodcuto_nuevo_action(){
	crear_producto();
}

function consultar_inventario_action(){
	consultar_inventario();
}

function procesar_pedido_action(){
	crear_inventario();
}

function contabilidad_action(){
	$transaciones = cuentas_contables();
	require "plantillas/transacion-manual.php";
}

function contabilidad_consultar_action(){
	consultar_cuentas();
}

function contabilidad_nueva_action(){
	$usuario = $_SESSION['usuario'];
	$codigos = codigos();
	require "plantillas/nueva_contabilidad.php";
}

function consultar_codigo_action(){
	consultar_codigo();
}

function crear_contabilidad_action(){
	crear_contabilida();
}
function codigos_action(){
	$codigos = codigos();
	require "plantillas/codigos.php";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		nuevo_codigo();
	}
}

function productos_action(){
	$productos = productos();
	require "plantillas/catalogo.php";
}

function crear_factura_action(){
	date_default_timezone_set("America/Bogota");
	$numero = consltar_num_factura();
	$clientes = clientes();
	require "plantillas/factura.php";
}

function productos_numero_action(){
	$productos =  productos();
	$datos = json_encode($productos);
	echo $datos;
}

function consultar_producto_fact_action(){
	consultar_producto_fact();
}

function guardar_factura_action(){
	crear_factura();
}
?>