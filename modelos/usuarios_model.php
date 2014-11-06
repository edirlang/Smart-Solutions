<?php 
require_once "modelos/conexion.php";

function usuarios(){
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

function crear_usuario($cedula,$nombre,$apellido,$telefono,$salario,$pension,$eps,$fondo,$rol,$contrasena){
	$conexion = conectar_base_datos();
	$salt = md5(time());
	$contrasena_encrip = crypt($contrasena,"sha542");
	$contrasena_encrip=$contrasena_encrip.$salt;
	$consulta  = "INSERT INTO usuarios values('$cedula','$nombre','$apellido','$telefono','$salario' ,'$pension' ,'$eps','$fondo','$rol','$contrasena_encrip','$salt')";
	mysqli_query($conexion,$consulta);
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);
	return 1;
}

function consultar_empleado($cedula){
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM usuarios where Cedula = '".$cedula."'";

	$resultado = mysqli_query($conexion,$consulta);

	$usuario = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		$usuario = $fila;
	}
	cerrar_conexion_db($conexion);
	return $usuario;
}

function actualizar_usuario($cedula,$nombre,$apellido,$telefono,$salario,$pension,$eps,$fondo,$cargo){
	$conexion = conectar_base_datos();
	$consulta  = "UPDATE usuarios Set Nombre='$nombre', Apellido='$apellido', Telefono='$telefono', salario_basico='$salario',pension='$pension',eps='$eps',fondo_emple='$fondo' ,Rol = '$cargo' Where Cedula='$cedula'";
	mysqli_query($conexion,$consulta);
	cerrar_conexion_db($conexion);
}

function eliminar_usuario($cedula){
		$conexion = conectar_base_datos();
		$consulta = "DELETE FROM usuarios where Cedula = '$cedula'";
		
		$resultado = mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);
		
		return true;
}

?>