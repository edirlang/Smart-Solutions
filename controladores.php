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
		require "plantillas/login.php";
	}else{
		$datos = json_decode($_POST['jdatos'], true);

		$usuario = consultar_empleado($datos[0]);
		if(isset($usuario['Cedula'])){
			$contrasena = crypt($datos[1],"sha542");
			$contrasena = $contrasena.$usuario['salt'];
			if ($usuario['Contrasena']==$contrasena) {
				$_SESSION['usuario']=$usuario['Cedula'];
				$_SESSION['rol'] = $usuario['Rol'];
				$_SESSION['nombre']=$usuario['Nombre'];
				echo $_SESSION['rol'];
			}else{
				echo "Login Incorecto Usuario o Contraseña errornea";
			}
		}else{
			echo " No registrado pongase en contacto con el administrador";
		}
	}
}

function cerrar_secion(){
	session_unset();
	session_destroy();
	header("Location: login");
}

function empleados_action(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		$empleados = usuarios();
		$epses = eps();
		$pensiones = pension();
		require "plantillas/empleados.php";
	}else{
		header("location: login");
	}
}

function consultar_empleado_action(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cedula = $_POST['id'];
		$empleado = consultar_empleado($cedula);
		echo json_encode($empleado);
	}
}

function actualizar_empleado_action(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cedula= $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$cargo = $_POST['cargo'];

		actualizar_usuario($cedula,$nombre,$apellido,$telefono,$cargo);
	}
}

function crear_empleado_action(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cedula= $_POST['Cedula'];
		$nombre = $_POST['Nombre'];
		$apellido = $_POST['Apellido'];
		$telefono = $_POST['Telefono'];
		$contrasena = $_POST['Contrasena'];
		$rol = $_POST['Rol'];
		$salario = 1;
		$pension = 1;
		$eps = 1;

		$estado = crear_usuario($cedula,$nombre,$apellido,$telefono,$salario,$pension,$eps,$rol,$contrasena);
		echo 1;
	}
}

function eliminar_empleado_action(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cedula = $_POST['id'];
		return eliminar_usuario($cedula);
	}
}

function abrir_panel_admin(){
	$rol = "admin";
	if(tipo_usuario($rol)){
		$empresa = Empresa();
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
		$productos = array();
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$numero = $_POST['codigo'];
			$productos = consultar_inventario($numero);
		}else{
			$productos = inventario();
		}
		require "plantillas/inventario.php";
	}else{
		header("location: login");
	}
}

function inventario_consultar_action($codigo){
	return $producto = inventario_consultar($codigo);
}
function inventario_consultar2_action($codigo,$fecha){
	return $producto = inventario_consultar2($codigo,$fecha);
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
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cedula = $_POST['id'];
		$cliente = consultar_cliente($cedula);
		$json = json_encode($cliente); 
		echo $json;
	}
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
	if(tipo_usuario('admin') || tipo_usuario('cajero')){
		$proveedores = proveedores();
		$tamano = "col-xs-12 col-sm-12 col-md-12 col-lg-12";
		if($_SESSION['rol']=='admin'){
			$tamano = "col-xs-12 col-sm-12 col-md-8 col-lg-8";
		}
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
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$codigo = $_POST['id'];
		$producto = inventario_consultar3($codigo);
		$producto2 = consultar_producto2($codigo);

		$respuesta = [$producto2['Codigo'],$producto['vlr_unidad'],$producto2['iva']];
		echo json_encode($respuesta);
	}
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

function facturas_action(){
	$facturas = facturas();
	require "plantillas/facturas.php";
}

function consultar_detalles_action(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$numero = $_POST['id'];
		$productos = detalles_factura($numero);
		echo json_encode($productos);
	}
}

function empresa_action(){
	$empresa = Empresa();
	$uvts = uvt();
	$representante = consultar_empleado($empresa['representante']);
	require "plantillas/empresa.php";
}

function nominas_action(){
	$nominas = nomina();
	require "plantillas/nominas.php";	
}

function crear_nomina_action(){
	$empleados = usuarios();
	if(isset($_POST['empleado'])){
		$empleado = $_POST['empleado'];
		$dias = $_POST['dias'];
		$fecha = $_POST['fecha'];
		$extras = $_POST['extras'];
		$comision = $_POST['comision'];
		$bonificacion = $_POST['bonificacion'];
		$libranzas = $_POST['libranzas'];
		$fondo = $_POST['fondo'];
		$embargo = $_POST['embargo'];
		generar_nomina($empleado,$dias,$fecha,$extras,$comision,$bonificacion,$libranzas,$fondo,$embargo);
		header("Location: nomina");
	}
	require "plantillas/nueva_nomina.php";
}

function liquidar_nomina_action(){
	$id = $_GET['id'];
	$nomina_liquidada = liquidar_nomina($id,'contado');
	if($nomina_liquidada){
		$nomina = consultar_nomina_id($id);	
		$empleado = consultar_empleado($nomina['empleado']);
		require "plantillas/liquidar_nomina.php";
	}else{
		nominas_action();
	}
}

function consultar_nomina_action(){
	$id = $_GET['id'];
	$nomina = consultar_nomina_id($id);	
	$empleado = consultar_empleado($nomina['empleado']);
	require "plantillas/liquidar_nomina.php";
}
?>