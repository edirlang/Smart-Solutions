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
 //CRUP Proveedores
function proveedores(){
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM proveedo";
	$resultado = mysqli_query($conexion,$consulta);

	$proveedores = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		array_push($proveedores, $fila);
	}
	cerrar_conexion_db($conexion);
	return $proveedores;
}

function crear_provedor(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();

		$codigo= $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];

		$consulta  = "INSERT INTO proveedo values('$codigo','$nombre','$telefono','$direccion')";

		mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);

		header("location: proveedores");
	}
}

function consultar_provedor(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['id'];
		$consulta = "SELECT * FROM proveedo where codigo = '$codigo'";

		$resultado = mysqli_query($conexion,$consulta);

		$usuario = array();

		while ($fila = mysqli_fetch_assoc($resultado)) {
			$usuario = $fila;
		}
		cerrar_conexion_db($conexion);
		echo json_encode($usuario);
	}
}

function eliminar_provedor(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['id'];
		$consulta = "DELETE FROM proveedo where codigo = '$codigo'";
		
		$resultado = mysqli_query($conexion,$consulta);

		cerrar_conexion_db($conexion);
		return true;
	}
}

//Producto-proveedor
function consultar_provedor_producto(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$consulta = "SELECT * FROM producto_proveedor where cod_proveedor = '$codigo'";

		$resultado = mysqli_query($conexion,$consulta);

		$productos = array();

		while ($fila = mysqli_fetch_assoc($resultado)) {
			array_push($productos, $fila['cod_poducto']);
		}
		cerrar_conexion_db($conexion);
		return $productos;
	}
}

function crear_provedor_producto(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		mysqli_query($conexion,"INSERT INTO producto_proveedor VALUES ('".$_POST['proveedor']."','".$_POST['Codigo']."','".$_POST['ValorVen']."')");
		cerrar_conexion_db($conexion);
	}
}

//CRUD Producto
function crear_producto(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		
		$codigo = $_POST['Codigo'];
		$nombre = $_POST['Nombre'];
		$descripcion = $_POST['Descripcion'];
		$especificaciones = $_POST['Especificaciones'];
		$iva = $_POST['iva'];
		$valor_ven = $_POST['ValorVen'];

		$result = mysqli_query($conexion,"SELECT * FROM productos WHERE Codigo='".$codigo."'") or die (mysqli_error());

		if(mysqli_num_rows($result) >= 1){
			mysqli_query($conexion,"UPDATE productos Set Nombre='".$nombre."', Descripcion ='".$descripcion."',Especificaciones='".$especificaciones."', iva= '".$iva."', ValorVenta='".$valor_ven."' Where Codigo='".$codigo."'");	
		}else{
			mysqli_query($conexion,"INSERT INTO productos VALUES ('".$codigo."','".$nombre."','".$descripcion."','".$especificaciones."','".$iva."','".$valor_ven."')");
		}
		cerrar_conexion_db($conexion);

		crear_provedor_producto();

		echo $codigo;
	}
}

function consultar_producto($row,$conexion){
	$id = $_POST['id'];

	$producto;

	$sql = mysqli_query($conexion,"SELECT * FROM productos where Codigo = '".$id."'");
	while ($fila = mysqli_fetch_assoc($sql)) {
		$producto=[$row['codigo'],$row['vlr_unidad'],$fila['iva']];
		echo json_encode($producto);
		
	}
}

function actualizar_prodcto($codigo,$iva,$conexion){
	$produc = "UPDATE productos SET iva = '".$iva."' where Codigo = '".$codigo."')";
	mysqli_query($conexion,$produc);
}

//Inventario
function consultar_inventario(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		
		$id = $_POST['id'];

		$sql = "SELECT * FROM inventario where codigo = '$id'  order by fecha desc limit 1";
		
		$resultado = mysqli_query($conexion,$sql);

		echo mysqli_error($conexion);
		while ($row = mysqli_fetch_assoc($resultado)) {
			consultar_producto($row,$conexion);
		}
		cerrar_conexion_db($conexion);
	}
}

function crear_inventario(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		session_start();
		$conexion = conectar_base_datos();
		
		$productos = json_decode($_POST['jdatos'],true);
		$forma_pago = $_POST['pago'];

		foreach ($productos as $llave => $producto) {
			$i=0;
			$result =mysqli_query($conexion,"SELECT * FROM `inventario` WHERE codigo like '".$producto[2]."' order by fecha desc limit 1");
			$subtotal=$producto[3]*$producto[4];
			while ($row = mysqli_fetch_assoc($result)) {
				$cantidad = $row['cantidad']+$producto[3];
				$total = $row['total']+$subtotal;
				$vlr_unidad=$total/$cantidad;
				$sql = "INSERT INTO inventario VALUES (null,'".$producto[2]."','Compra','".$producto[1]."','".$producto[3]."','".$producto[4]."','".$cantidad."','".$vlr_unidad."','".$total."','C')";
				$i=1;

			}
				if ($i==0) {
				$sql = "INSERT INTO inventario VALUES (null,'".$producto[2]."','Compra','".$producto[1]."','".$producto[3]."','".$producto[4]."','".$producto[3]."','".$producto[4]."','".$subtotal."','C')";
			}

			mysqli_query($conexion,$sql);

			actualizar_prodcto($producto[2],$producto[5],$conexion);

			crear_documento("Compra",$conexion);

			$documento = consultar_ultimo_documento($conexion);


			$iva = (($producto[5]*$producto[4])/100)*$producto[3];
			$total = $subtotal+$iva;

			crear_activo($documento,$_SESSION['usuario'],14,$producto[1],'D','Inventario'.$producto[2],$subtotal,$conexion);

			crear_pasivo($documento,$_SESSION['usuario'],2804,$producto[1],'D','IVA'.$producto[2],$iva,$conexion);
						
			if($forma_pago=="contado"){
				crear_activo($documento,$_SESSION['usuario'],1105,$producto[1],'C','Caja Pago'.$producto[2],$total,$conexion);
			}else{
				crear_pasivo($documento,$_SESSION['usuario'],2205,$producto[1],'C','Pedido por Pagar'.$producto[2],$total,$conexion);
			}
		}
		cerrar_conexion_db($conexion);
		echo "1";
	}else{
		echo "0";
	}

}

function consultar_ultimo_inventario($codigo){

}

//CRUD Documento
function crear_documento($descripcion,$conexion){
	mysqli_query($conexion,"INSERT INTO documentado VALUES (NULL,'$descripcion')");
}

function consultar_ultimo_documento($conexion){
	$documentos = mysqli_query($conexion,"SELECT * FROM documentado order by `cod_documento` desc limit 1");
	$documento=0;
	while ($row = mysqli_fetch_row($documentos)) {
		$documento = $row[0];
	}
	return $documento;
}

//CRUD Activo
function crear_activo($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO activo1 VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}

//CRUD Pasivo
function crear_pasivo($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO pasivo VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}

//CRUD Ingreso

//CRUD Gasto

//CRUD Costo