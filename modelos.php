<?php 
function conectar_base_datos(){
	$conexion = mysqli_connect("localhost","root","1994edi","smartsolutions");
	if(!$conexion){
		die("Error no se logro conectar con la base de datos".mysqli_connect_error());
	}
	$conexion->query("SET NAMES 'utf8'");
  	$conexion->query("SET CHARACTER SET utf8");

	return $conexion;
}

function cerrar_conexion_db($conexion){
	mysqli_close($conexion);
}

function cerrar_secion(){
	session_start();
    session_unset();
    session_destroy();
	header("Location: login");
}
function empleados(){
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conexion,$consulta);

	$usuarios = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		array_push($usuarios, $fila);
	}
	cerrar_conexion_db($conexion);
	return $usuarios;
}

function crear_empleado(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();

		$cedula= $_POST['Cedula'];
		$nombre = $_POST['Nombre'];
		$apellido = $_POST['Apellido'];
		$telefono = $_POST['Telefono'];

		$contrasena = $_POST['Contrasena'];
		
		$rol = $_POST['Rol'];

		$salt = md5(time());

		$contrasena_encrip = crypt($contrasena,"sha542");

		$contrasena_encrip=$contrasena_encrip.$salt;

		$consulta  = "INSERT INTO usuarios values('$cedula','$nombre','$apellido','$telefono','$rol','$contrasena_encrip','$salt')";

		mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);

		echo 1;
	}
}

function consultar_empleado($cedula){
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM usuarios where Cedula = '$cedula'";

	$resultado = mysqli_query($conexion,$consulta);

	$usuario = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		$usuario = $fila;
	}
	cerrar_conexion_db($conexion);
	return $usuario;
}

function consultar_empleado1(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$cedula = $_POST['id'];
		$consulta = "SELECT * FROM usuarios where Cedula = '$cedula'";

		$resultado = mysqli_query($conexion,$consulta);

		$usuario = array();

		while ($fila = mysqli_fetch_assoc($resultado)) {
			$usuario = $fila;
		}
		cerrar_conexion_db($conexion);
		echo json_encode($usuario);
	}
}

function actualizar_empleado(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();

		$cedula= $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$cargo = $_POST['cargo'];

		$consulta  = "UPDATE usuarios Set Nombre='$nombre', Apellido='$apellido', Telefono='$telefono', Rol = '$cargo' Where Cedula='$cedula'";

		mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);
	}	
}

function eliminar_empleado(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$cedula = $_POST['id'];
		$consulta = "DELETE FROM usuarios where Cedula = '$cedula'";
		
		$resultado = mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);
		return true;
	}
}

function comprovar_usuario(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		session_start();

		$datos = json_decode($_POST['jdatos'], true);
		
		$usuario = consultar_empleado($datos[0]);

		$contrasena = crypt($datos[1],"sha542");
		$contrasena = $contrasena.$usuario['salt'];

		if ($usuario['Contrasena']==$contrasena) {
			switch ($usuario['Rol']) {
				case 'admin':
				$_SESSION['usuario']=$usuario['Cedula'];
				$_SESSION['rol']='admin';
				$_SESSION['nombre']=$usuario['Nombre'].' '.$usuario['Apellido'];
				$tipo="admin";
				break;
				case 'contador':
				$_SESSION['usuario']=$usuario['Cedula'];
				$_SESSION['rol']='contador';
				$_SESSION['nombre']=$usuario['Nombre'].' '.$usuario['Apellido'];
				$tipo="contador";
				break;

				case 'cajero':
				$_SESSION['usuario']=$usuario['Cedula'];
				$_SESSION['rol']='cajero';
				$_SESSION['nombre']=$usuario['Nombre'].' '.$usuario['Apellido'];
				$tipo="cajero";
				break;
			}	
		}

		echo $usuario['Rol'];
	}
}

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

function clientes(){
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM clientes";
	$resultado = mysqli_query($conexion,$consulta);

	$clientes = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		array_push($clientes, $fila);
	}
	cerrar_conexion_db($conexion);
	return $clientes;
}

function consultar_cliente(){
	$cedula = $_POST['id'];
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM clientes where Cedula = '$cedula'";

	$resultado = mysqli_query($conexion,$consulta);

	$cliente = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		$cliente = $fila;
	}

	cerrar_conexion_db($conexion);

	$json = json_encode($cliente); 

	echo $json;
}

function actualizar_cliente(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();

		$cedula= $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];

		$consulta  = "UPDATE clientes Set Nombre='$nombre', Apellido='$apellido', Telefono='$telefono' Where Cedula='$cedula'";

		mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);
	}	
}

function crear_cliente(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();

		$cedula= $_POST['Cedula'];
		$nombre = $_POST['Nombre'];
		$apellido = $_POST['Apellido'];
		$telefono = $_POST['Telefono'];

		$consulta  = "INSERT INTO clientes values('$cedula','$nombre','$apellido','$telefono')";

		mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);

		echo 1;
	}
}

function eliminar_cliente(){
	$conexion = conectar_base_datos();
	$id = $_POST['id'];	
	mysqli_query($conexion,"DELETE FROM clientes where Cedula='$id'");
	cerrar_conexion_db($conexion);
}