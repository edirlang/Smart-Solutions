<?php 
require_once "modelos/conexion.php";

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

function consultar_cliente($cedula){
	
	$conexion = conectar_base_datos();
	$consulta = "SELECT * FROM clientes where Cedula = '$cedula'";

	$resultado = mysqli_query($conexion,$consulta);

	$cliente = array();

	while ($fila = mysqli_fetch_assoc($resultado)) {
		$cliente = $fila;
	}

	cerrar_conexion_db($conexion);

	return $cliente;
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
function productos(){
	$conexion = conectar_base_datos();
	$productos = array();
	$result = mysqli_query($conexion,"SELECT * FROM productos");
	while ($producto = mysqli_fetch_assoc($result)) {
		array_push($productos, $producto);
	}
	return $productos;
}

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
		$producto=[$row['codigo'],$row['vlr_unidad'],$fila['iva'],$fila['ValorVenta'],$fila['Nombre']];
		return $producto;
	}
}

function consultar_producto2($id){
	$conexion = conectar_base_datos();
	$producto = array();

	$sql = mysqli_query($conexion,"SELECT * FROM productos where Codigo = '".$id."'");
	while ($fila = mysqli_fetch_assoc($sql)) {
		$producto=$fila;
	}
	cerrar_conexion_db($conexion);
	return $producto;
}

function consultar_producto_fact(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		
		$id = $_POST['id'];

		$sql = "SELECT * FROM inventario where codigo = '$id'  order by fecha desc limit 1";
		
		$resultado = mysqli_query($conexion,$sql);

		echo mysqli_error($conexion);
		while ($row = mysqli_fetch_assoc($resultado)) {
			$producto = consultar_producto($row,$conexion);
			$returno = [$producto[0],$producto[1],$producto[2],$producto[3],$row['vlr_unidad'],$producto[4]];
			echo json_encode($returno);
		}
		cerrar_conexion_db($conexion);
	}
}

function actualizar_prodcto($codigo,$iva,$conexion){
	$produc = "UPDATE productos SET iva = '".$iva."' where Codigo = '".$codigo."')";
mysqli_query($conexion,$produc);
}

//Inventario

function crear_inventario(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
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

function cuentas_contables(){
	$documentos = documentos();
	$cuentas = array();
	foreach ($documentos as $documento) {
		$activos = activos_documento($documento['cod_documento']);
		foreach ($activos as $valor) {
			array_push($cuentas,$valor);
		}
		$pasivos = pasivos_documento($documento['cod_documento']);
		foreach ($pasivos as $valor) {
			array_push($cuentas,$valor);
		}
		$ingresos = ingresos_documento($documento['cod_documento']);
		foreach ($ingresos as $valor) {
			array_push($cuentas,$valor);
		}
		$gastos = gastos_documento($documento['cod_documento']);
		foreach ($gastos as $valor) {
			array_push($cuentas,$valor);
		}
		$costos = costos_documento($documento['cod_documento']);
		foreach ($costos as $valor) {
			array_push($cuentas,$valor);
		}
	}
	return $cuentas;
}

function consultar_cuentas(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cuentas = array();
		$activos = consultar_activos();
		$pasivos = consultar_pasivos();
		$ingresos = consultar_ingresos();
		$gastos = consultar_gastos();
		$costos = consultar_costos();
		foreach ($costos as $valor) {
			array_push($cuentas, $valor);
		}
		foreach ($gastos as $valor) {
			array_push($cuentas, $valor);
		}
		foreach ($ingresos as $valor) {
			array_push($cuentas, $valor);
		}
		foreach ($activos as $valor) {
			array_push($cuentas, $valor);
		}
		foreach ($pasivos as $valor) {
			array_push($cuentas, $valor);
		}
		$jdatos = json_encode($cuentas);
		echo $jdatos;
	}
	
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

function documentos(){
	$conexion = conectar_base_datos();
	
	$result = mysqli_query($conexion,"SELECT * FROM documentado");
	$documentos=array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($documentos,$row);
	}
	cerrar_conexion_db($conexion);
	return $documentos;
}

//CRUD Activo
function crear_activo($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO activo1 VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}

function activos_documento($documento){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion,"SELECT * FROM activo1 where  Documento = '$documento'");
	$activos=array();
	while ($row = mysqli_fetch_assoc($result)){
		array_push($activos, $row);
	}
	cerrar_conexion_db($conexion);
	return $activos;
}

function consultar_activos(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$fecha = $_POST['fecha'];
		$documento = $_POST['documento'];

		$activos=array();
		
		$resultado;

		if($codigo != null && $documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Documento = '$documento' and Codigo = '$codigo' and Fecha = '$fecha'");	
		}elseif($codigo != null && $documento != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Documento = '$documento' and Codigo = '$codigo'");
		}elseif($codigo != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Codigo = '$codigo' and Fecha = '$fecha'");
		}elseif($documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Documento = '$documento' and Fecha = '$fecha'");
		}elseif($codigo == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Documento = '$documento'");
		}elseif($documento == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Codigo = '$codigo'");
		}elseif($documento == null && $codigo == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM activo1 WHERE Fecha = '$fecha'");
		}

		
		while ($row = mysqli_fetch_assoc($resultado)) {
			array_push($activos,$row);
		}
		cerrar_conexion_db($conexion);
		return $activos;
	}
}

//CRUD Pasivo
function crear_pasivo($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO pasivo VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
	echo mysqli_error($conexion);
}

function pasivos_documento($documento){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion,"SELECT * FROM pasivo where  Documento = '$documento'");
	$pasivos=array();
	while ($row = mysqli_fetch_assoc($result)){
		array_push($pasivos, $row);
	}
	cerrar_conexion_db($conexion);
	return $pasivos;
}

function consultar_pasivos(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$fecha = $_POST['fecha'];
		$documento = $_POST['documento'];

		$pasivos=array();
		
		$resultado;
		
		if($codigo != null && $documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Documento = '$documento' and Codigo = '$codigo' and Fecha = '$fecha'");	
		}elseif($codigo != null && $documento != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Documento = '$documento' and Codigo = '$codigo'");
		}elseif($codigo != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Codigo = '$codigo' and Fecha = '$fecha'");
		}elseif($documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Documento = '$documento' and Fecha = '$fecha'");
		}elseif($codigo == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Documento = '$documento'");
		}elseif($documento == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Codigo = '$codigo'");
		}elseif($documento == null && $codigo == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM pasivo WHERE Fecha = '$fecha'");
		}

		
		while ($row = mysqli_fetch_assoc($resultado)) {
			array_push($pasivos,$row);
		}
		cerrar_conexion_db($conexion);
		return $pasivos;
	}
}

//CRUD Ingreso
function crear_ingreso($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO ingresos VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}
function ingresos_documento($documento){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion,"SELECT * FROM ingresos where  Documento = '$documento'");
	$ingresos=array();
	while ($row = mysqli_fetch_assoc($result)){
		array_push($ingresos, $row);
	}
	cerrar_conexion_db($conexion);
	return $ingresos;
}

function consultar_ingresos(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$fecha = $_POST['fecha'];
		$documento = $_POST['documento'];

		$ingresos=array();
		
		$resultado;
		
		if($codigo != null && $documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Documento = '$documento' and Codigo = '$codigo' and Fecha = '$fecha'");	
		}elseif($codigo != null && $documento != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Documento = '$documento' and Codigo = '$codigo'");
		}elseif($codigo != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Codigo = '$codigo' and Fecha = '$fecha'");
		}elseif($documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Documento = '$documento' and Fecha = '$fecha'");
		}elseif($codigo == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Documento = '$documento'");
		}elseif($documento == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Codigo = '$codigo'");
		}elseif($documento == null && $codigo == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM ingresos WHERE Fecha = '$fecha'");
		}

		
		while ($row = mysqli_fetch_assoc($resultado)) {
			array_push($ingresos,$row);
		}
		cerrar_conexion_db($conexion);
		return $ingresos;
	}
}

//CRUD Gasto
function crear_gasto($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO gasto VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}
function gastos_documento($documento){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion,"SELECT * FROM gasto where  Documento = '$documento'");
	$gastos=array();
	while ($row = mysqli_fetch_assoc($result)){
		array_push($gastos, $row);
	}
	cerrar_conexion_db($conexion);
	return $gastos;
}

function consultar_gastos(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$fecha = $_POST['fecha'];
		$documento = $_POST['documento'];

		$gastos=array();
		
		$resultado;
		
		if($codigo != null && $documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Documento = '$documento' and Codigo = '$codigo' and Fecha = '$fecha'");	
		}elseif($codigo != null && $documento != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Documento = '$documento' and Codigo = '$codigo'");
		}elseif($codigo != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Codigo = '$codigo' and Fecha = '$fecha'");
		}elseif($documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Documento = '$documento' and Fecha = '$fecha'");
		}elseif($codigo == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Documento = '$documento'");
		}elseif($documento == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Codigo = '$codigo'");
		}elseif($documento == null && $codigo == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM gasto WHERE Fecha = '$fecha'");
		}
		
		while ($row = mysqli_fetch_assoc($resultado)) {
			array_push($gastos,$row);
		}
		cerrar_conexion_db($conexion);
		return $gastos;
	}
}

//CRUD Costo
function crear_costo($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO costos VALUES ('".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}
function costos_documento($documento){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion,"SELECT * FROM costos where  Documento = '$documento'");
	$costos=array();
	while ($row = mysqli_fetch_assoc($result)){
		array_push($costos, $row);
	}
	cerrar_conexion_db($conexion);
	return $costos;
}

function consultar_costos(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$fecha = $_POST['fecha'];
		$documento = $_POST['documento'];

		$costos=array();
		
		$resultado;
		
		if($codigo != null && $documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Documento = '$documento' and Codigo = '$codigo' and Fecha = '$fecha'");	
		}elseif($codigo != null && $documento != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Documento = '$documento' and Codigo = '$codigo'");
		}elseif($codigo != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Codigo = '$codigo' and Fecha = '$fecha'");
		}elseif($documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Documento = '$documento' and Fecha = '$fecha'");
		}elseif($codigo == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Documento = '$documento'");
		}elseif($documento == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Codigo = '$codigo'");
		}elseif($documento == null && $codigo == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM costos WHERE Fecha = '$fecha'");
		}

		
		while ($row = mysqli_fetch_assoc($resultado)) {
			array_push($costos,$row);
		}
		cerrar_conexion_db($conexion);
		return $costos;
	}
}

//CRUD codigos
function codigos(){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion, "SELECT * FROM codigotransacion");
	$codigos = array();
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($codigos, $row);
	}
	cerrar_conexion_db($conexion);
	return $codigos;
}

function consultar_codigo(){
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$codigo = $_POST['codigo'];
		$conexion = conectar_base_datos();
		$result = mysqli_query($conexion, "SELECT * FROM codigotransacion where Codigo = '$codigo'");
		$codigo = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$codigo =  $row;
		}
		cerrar_conexion_db($conexion);
		echo $codigo['Descripcion'];
	}
}

function nuevo_codigo(){
	$cn = conectar_base_datos();
	$Codigo = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Tipo']);
	$sql = "INSERT INTO codigotransacion VALUES ('$Codigo[0]','$Codigo[1]','$Codigo[2]')";
	mysqli_query($cn,$sql);
	cerrar_conexion_db($cn);
}

function crear_contabilida(){
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$conexion = conectar_base_datos();
		$transaciones = json_decode($_POST['jdatos'], true);

		$codigos = codigos();

		$totalCredito = 0;
		$totalDebito = 0;

		foreach ($transaciones as $transacion) {
			foreach ($codigos as $codigo) {
				if($codigo['Codigo'] == $transacion[1]){
					if($transacion[3]=="C"){
						$totalCredito+=$transacion[5];
					}else{
						$totalDebito+=$transacion[5];
					}	
				}	
			}
		}

		if(($totalDebito != $totalCredito) || ($totalCredito == 0)){
			echo 0;
		}else{
			crear_documento("Transacion",$conexion);
			$documento = consultar_ultimo_documento($conexion);

			foreach ($transaciones as $transacion) {
				foreach ($codigos as $codigo) {
					if($codigo['Codigo']==$transacion[1]){
						switch ($codigo['Tipo']) {
							case 'activo':
							crear_activo($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
							break;
							case 'pasivo':
							crear_pasivo($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
							break;
							case 'patrimonio':
							crear_activo($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
							break;
							case 'ingreso':
							crear_ingreso($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
							break;
							case 'gasto':
							crear_gasto($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
							break;
							case 'costo':
							crear_costo($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
							break;
						}
					}	
				}
			}
			echo 1;
		}
		cerrar_conexion_db($conexion);
	}
}

//CRUD Facturas
function facturas(){
	$conexion = conectar_base_datos();
	$facturas = array();
	$result = mysqli_query($conexion,"SELECT * FROM `factura`");

	while ($factura = mysqli_fetch_assoc($result)) {
		array_push($facturas, $factura);
	}
	return $facturas;
	cerrar_conexion_db($conexion);
}

function consltar_num_factura(){
	$conexion = conectar_base_datos();

	$result = mysqli_query($conexion,"SELECT * FROM `factura` order by `num_factura` desc limit 1 ");

	$numero=0;
	while($row = mysqli_fetch_assoc($result)){ 
		$numero = $row['num_factura']+1;
	}
	cerrar_conexion_db($conexion);
	return $numero;
}

function crear_factura(){
	$conexion = conectar_base_datos();
	$productos = json_decode($_POST['jdatos'], true);
	$numero = $_POST['num_fact'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$cedula = $_POST['cliente'];
	$cajero = $_POST['cajero'];
	$Efectivo = $_POST['Efectivo'];
	$pago = $_POST['pago'];
	$total=0;
	$iva=0;

	foreach ($productos as $row) {
		$total+=$row[4]+$row[2];
	}
	$sql = "INSERT INTO factura VALUES ('".$numero."','".$cedula."','".$fecha."','".$hora."','".$cajero."','".$total."')";
	mysqli_query($conexion,$sql);

	crear_documento("Factura ".$numero,$conexion);
	$documento = consultar_ultimo_documento($conexion);
	foreach ($productos as $producto) {
		$iva = $producto[2];
		
		crear_detalle_factura($numero, $producto[0], $producto[1], $producto[3] ,$producto[4],$conexion);

		crear_activo($documento,$cajero,'1105',$fecha,'D','CAJA '.$producto[0],($producto[4]+$iva),$conexion);
		crear_pasivo($documento,$cajero,'2804',$fecha,'C','IVA '.$producto[0],$iva,$conexion);
		crear_ingreso($documento,$cajero,'4135',$fecha,'C','VENTA '.$producto[0],$producto[4],$conexion);
		
		$inventario = consultar_inventario1($documento,$cajero,$fecha,$producto, $conexion);
		crear_activo($documento,$cajero,'14',$fecha,'C','Inventario  '.$producto[0],$inventario,$conexion);
		crear_costo($documento,$cajero,'613554',$fecha,'D','Costo  '.$producto[0],$inventario,$conexion);
	}

	cerrar_conexion_db($conexion);

	generar_factura($numero,$fecha,$hora,$cedula,$cajero,$Efectivo,$iva,$productos);

}

function crear_detalle_factura($numero, $codigo, $cantidad, $valor_ven,$total,$conexion){
	mysqli_query($conexion,"INSERT INTO detallefactura VALUES ('".$numero."','".$codigo."','".$cantidad."','".$valor_ven."','".$total."')");
}

function consultar_inventario1($documento,$cajero,$fecha, $row, $cn){
	$inventario = 0;
	$result =mysqli_query($cn,"SELECT * FROM inventario WHERE codigo like '".$row[0]."' order by fecha desc limit 1");
	while ($fila = mysqli_fetch_assoc($result)) {
		$cantidad = $fila['cantidad']-$row[1];
		$total = $fila['vlr_inicial']*$cantidad;
		$sql = "INSERT INTO inventario VALUES (null,'".$fila['codigo']."','Venta','".$fecha."','".$row[1]."','".$fila['vlr_inicial']."','".$cantidad."','".$fila['vlr_inicial']."','".$total."','V')";
		$inventario=$fila['vlr_inicial']*$row[1];
		mysqli_query($cn,$sql);	
	}
	return $inventario;
}

function generar_factura($numero,$fecha,$hora,$cedula,$cajero,$Efectivo,$iva,$productos){
	$cliente = consultar_cliente($cedula);

	$nom_cliente = $cliente['Nombre']." ".$cliente['Apellido']; 
	$empleado = consultar_empleado($cajero);
	$nom_cajero = $empleado['Nombre']." ".$empleado['Apellido'];
	
	$total=0;

	$factura = "<div class='container container-fluid'>
	<div class='row'>
	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	<a href='factura' class='hidden-print btn btn-primary'>Regresar</a>
	</div>
	<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
	<img src='../Imagenes/bac.gif'></img>
	</div>
	<font size='3' face='Verdana'>
	<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center'>
	<p>Smart-Solutions</p>
	<p>Nit: 1069748845-5 Regimen Comun</p>
	<p>Cra 6 # 7-49 CC. La Hacienda Local 201 </p>
	<p>Tel: 867 2290</p>
	<br>
	<p>Fecha  ".$fecha."	Hora ".$hora."</p>
	</div>
	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	<hr size='10' ></hr>
	</div>
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
	<table class='table table-border table-condense'>
	<tr>
	<th>Factura:</th>
	</tr>

	<tr>
	<td>".$numero."</td>
	</tr>
	</table>
	</div>
	<div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
	<table class='table table-bordered table-condense'>
	<tr>
	<th>Cliente</th>
	<th></th>
	</tr>

	<tr>
	<td>Cliente: </td>
	<td>".$nom_cliente."</td>
	</tr>
	<tr>
	<td>CC o NIT: </td>
	<td>".$cedula."</td>
	</tr>
	</table>
	</div>
	<div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
	<table class='table table-hover table-bordered'>
	<tr>
	<th>Vendedor</th>
	<th></th>
	</tr>
	<tr>
	<td>Vendedor: </td>
	<td>".$nom_cajero."</td>
	</tr>
	<tr>
	<td>CC o Nit </td>
	<td>".$cajero."</td>
	</tr>
	</table>
	</div>

	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	<hr size='10' ></hr>
	</div>

	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
	<table class='table table-responsive table-condensed table-bordered'>
	<thead>
	<tr>
	<th>Codigo</th>
	<th>Nombre</th>
	<th>Cant.</th>
	<th>vlr. unid.</th>
	<th>iva</th>
	<th>Subtotal</th>
	</tr>
	</thead>
	<tbody>";
	foreach ($productos as $producto) {
		$total+=$producto[4]+$producto[2];
		$factura = $factura."<tr>
		<td>".$producto[0]."</td>
		<td>".$producto[5]."</td>
		<td>".$producto[1]."</td>
		<td>$ ".$producto[3]."</td>
		<td>".$producto[2]."%</td>
		<td>$ ".$producto[4]."</td>
		</tr>";
	}
	$subtotal = $total-$iva;
	$Cambio = $Efectivo-$total;
	$factura = $factura."
	</tbody>
	</table>
	</div>
	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	<hr size='10' ></hr>
	</div>
	<div align='right' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	<table>
	<tr>
	<td>Subtotal</td>
	<td> $ ".$subtotal."</td>
	</tr>
	<tr>
	<td>IVA</td>
	<td> $ ".$iva."</td>
	</tr>
	<tr>
	<td>Total </td>
	<td> $ ".$total."</td>
	</tr>
	<tr>
	<td>Efectivo </td>
	<td> $ ".$Efectivo."</td>
	</tr>
	<tr>
	<td>Cambio</td>
	<td> $ ".$Cambio."</td>
	</tr>
	</table>
	</div>

	<div align='center' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	<p>Resolucion</p>
	</div>
	</font>
	</div>
	</div>";
	echo $factura;
}

function detalles_factura($numero){
	$conexion = conectar_base_datos();
	$productos = array();
	$result = mysqli_query($conexion,"SELECT * FROM detallefactura where num_factura = '$numero'");
	while ($producto = mysqli_fetch_assoc($result)) {
		array_push($productos, $producto);
	}
	return $productos;
	cerrar_conexion_db($conexion); 
}

//Pension
function pension(){
	$conexion = conectar_base_datos();
	$pensiones = array();
	$result = mysqli_query($conexion,"SELECT * FROM pension");
	while ($pension = mysqli_fetch_assoc($result)) {
		array_push($pensiones, $pension);
	}
	cerrar_conexion_db($conexion);
	return $pensiones;
}

//Salud
function eps(){
	$conexion = conectar_base_datos();
	$epses = array();
	$result = mysqli_query($conexion,"SELECT * FROM eps");
	while ($eps = mysqli_fetch_assoc($result)) {
		array_push($epses, $eps);
	}
	cerrar_conexion_db($conexion);
	return $epses;
}

function Empresa(){
	$conexion = conectar_base_datos();
	$empresa = array();
	$result = mysqli_query($conexion,"SELECT * FROM empresa limit 1");
	while ($row = mysqli_fetch_assoc($result)) {
		$empresa = $row;
	}
	cerrar_conexion_db($conexion);
	return $empresa;	
}

function uvt(){
	$conexion = conectar_base_datos();
	$uvts = array();
	$result = mysqli_query($conexion,"SELECT * FROM uvt");
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($uvts, $row);
	}
	cerrar_conexion_db($conexion);
	return $uvts;
}

function nomina(){
	$conexion = conectar_base_datos();
	$nominas = array();
	$result = mysqli_query($conexion,"SELECT * FROM Nomina");
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($nominas, $row);
	}
	cerrar_conexion_db($conexion);
	return $nominas;
}

function generar_nomina($cedula,$dias,$fecha,$extras,$comision,$bonificacion,$libranzas,$fondo,$embargo){
	$empleado = consultar_empleado($cedula);
	$empresa = Empresa();
	$uvts = uvt();

	$conexion = conectar_base_datos();
	
	$basico = ($empleado['salario_basico']/30)*$dias;
	
	$hora_base = $empleado['salario_basico']/240;
	
	$vlr_extras = (($hora_base*0.25)+$hora_base)*$extras;
	
	$trasporte = 0;
	if($empleado['salario_basico'] < (2*$empresa['salario_minimo'])){
		$trasporte = $empresa['trasporte'];
	}
	$alimentacion = 0;
	if($empleado['salario_basico'] < 2000000){
		$alimentacion = 5000;
	}

	$total_devengado = $basico + $vlr_extras + $comision + $trasporte + $alimentacion;
	$total_devengado_sin = $basico + $vlr_extras + $comision + $alimentacion;
	$salud = $total_devengado_sin * 0.04;
	$pension = $total_devengado_sin * 0.04;
	$fondo_emple= ($fondo/100) * $empleado['salario_basico'];

	$retencion = 0;
	$uvt_sueldo = 0;
	$a = $empleado['salario_basico'];
	$b = 0;
	$c = 0;
	$d = 0;
	$e = $salud;
	$f = $empleado['salario_basico']*0.1;
	$g = $pension;
	$subtotal = $a-$b-$c-$d-$e-$f-$g;
	$uvt_sueldo = ($subtotal - ($subtotal * 0.25))/$empresa['uvt']; 
	$uvt_valor = 0;
	foreach ($uvts as $uvt) {
		if($uvt_sueldo >= $uvt['desde'] && $uvt_sueldo < $uvt['hasta']){
			$uvt_valor = (($uvt_sueldo - $uvt['menos'])*($uvt['tarifa']/100))+$uvt['mas'];
		}
	}
	$uvt = $uvt_valor*$empresa['uvt'];
	$total_deducciones = ($salud+$pension+$fondo_emple+$libranzas+$embargo+$uvt);
	$total = $total_devengado - $total_deducciones;
	$result = mysqli_query($conexion,"INSERT INTO Nomina values ('','$fecha','$cedula','$dias','$basico','$vlr_extras','$comision','$bonificacion','$trasporte','$alimentacion','$salud','$pension','$fondo_emple','$libranzas','$embargo','$uvt','$total',true)");
	
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);

	$salud_e = $total_devengado_sin*0.085;
	$pension_e = $total_devengado_sin*0.125;	
	$arl = $total_devengado_sin*0.01;

	$vacaciones = $total_devengado * 0.0416;
	$prima = $total_devengado * 0.0833;
	$cesantias = $total_devengado * 0.0833;
	$int_cesantias = $cesantias * 0.01;

	$icbf = $total_devengado * 0.03;
	$ccf = $total_devengado * 0.04;
	$sena = $total_devengado * 0.02;

	$apropiacion = guardar_apropiaciones(consultar_ultima_nomina(),$salud_e,$pension_e,$arl,$vacaciones,$prima,$cesantias,$int_cesantias,$icbf,$ccf,$sena);	
	generar_Contabilidad_nomina(consultar_ultima_nomina(),$fecha,$basico,$vlr_extras,$bonificacion,$trasporte,$alimentacion,$salud,$pension,$fondo_emple,$libranzas,$embargo,$uvt,$apropiacion,$total);
}

function guardar_apropiaciones($nomina,$salud,$pension,$arl,$vacaciones,$prima,$cesantias,$int_cesantias,$icbf,$ccf,$sena){
	$conexion = conectar_base_datos();
	
	$result = mysqli_query($conexion,"INSERT INTO apropiaciones values ('$nomina','$salud','$pension','$arl','$vacaciones','$prima','$cesantias','$int_cesantias','$icbf',',$ccf','$sena')");
	
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);
	$apropiacione = [$salud,$pension,$arl,$vacaciones,$prima,$cesantias,$int_cesantias,$icbf,$ccf,$sena];
	return $apropiacione;
}

function generar_Contabilidad_nomina($nomina,$fecha,$basico,$vlr_extras,$bonificacion,$trasporte,$alimentacion,$salud,$pension,$fondo_emple,$libranzas,$embargo,$uvt,$apropiacion,$total){
	
	$conexion = conectar_base_datos();
	crear_documento("Nomina ".$nomina,$conexion);
	$documento = consultar_ultimo_documento($conexion);

	//Devengado
	crear_gasto($documento,$_SESSION['usuario'],'510506',$fecha,'D','Sueldos',$basico,$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510515',$fecha,'D','Horas extra',$vlr_extras,$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510548',$fecha,'D','Bonificaciones',$bonificacion,$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510527',$fecha,'D','Auxilio de trasporte',$trasporte,$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510545',$fecha,'D','Auxilio de alimentacion',$alimentacion,$conexion);
	
	//Deduciones
	crear_pasivo($documento,$_SESSION['usuario'],'237005',$fecha,'C','Aportes a Salud',$salud,$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'238030',$fecha,'C','Fondos de cesantías y/o pensiones',$pension,$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237040',$fecha,'C','Cooperativas',$fondo_emple,$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237025',$fecha,'C','Embargos Judiciales',$embargo,$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237030',$fecha,'C','Libranzas',$libranzas,$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'236505',$fecha,'C','Retencion Salarios y pagos laborales',$uvt,$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'2550',$fecha,'C','Obligaciones Laborales',$total,$conexion);
	
	//Apropiaciones
	crear_pasivo($documento,$_SESSION['usuario'],'237005',$fecha,'C','Aportes a Salud',$apropiacion[0],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510569',$fecha,'D','Aportes a Salud',$apropiacion[0],$conexion);

	crear_pasivo($documento,$_SESSION['usuario'],'238030',$fecha,'C','Fondos de cesantías y/o pensiones',$apropiacion[1],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510559',$fecha,'D','Fondos de cesantías y/o pensiones',$apropiacion[1],$conexion);
	
	crear_pasivo($documento,$_SESSION['usuario'],'237006',$fecha,'C','Aportes a administradoras de riesgos profesionales, ARP',$apropiacion[2],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510568',$fecha,'D','Aportes a administradoras de riesgos profesionales, ARP',$apropiacion[2],$conexion);
	
	crear_pasivo($documento,$_SESSION['usuario'],'252021',$fecha,'C','Prima',$apropiacion[3],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510536',$fecha,'D','Prima de servicios',$apropiacion[3],$conexion);
	
	crear_pasivo($documento,$_SESSION['usuario'],'252522',$fecha,'C','Vacaciones',$apropiacion[4],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510539',$fecha,'D','Vacaciones',$apropiacion[4],$conexion);
	
	crear_pasivo($documento,$_SESSION['usuario'],'251023',$fecha,'C','Cesantías',$apropiacion[5],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510530',$fecha,'D','Cesantías',$apropiacion[5],$conexion);
	
	crear_pasivo($documento,$_SESSION['usuario'],'251520',$fecha,'C','Intereces Sobre Cesantías',$apropiacion[6],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510533',$fecha,'D','Intereces Sobre cesantías',$apropiacion[6],$conexion);
	
	crear_pasivo($documento,$_SESSION['usuario'],'237010',$fecha,'C','Aportes al ICBF, SENA y cajas de compensación',($apropiacion[7]+$apropiacion[8]+$apropiacion[9]),$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510578',$fecha,'D','SENA',$apropiacion[7],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510575',$fecha,'D','Aportes a ICBF',$apropiacion[8],$conexion);
	crear_gasto($documento,$_SESSION['usuario'],'510572',$fecha,'D','Aportes cajas de compensación familia',$apropiacion[9],$conexion);
	
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);
}

function liquidar_nomina($id,$forma_pago){
	$nomina = consultar_nomina_id($id);
	$apropiacion = consultar_apropiacion_nomina($id);

	$conexion = conectar_base_datos();
	crear_documento("Liquidar-nomina ".$id,$conexion);
	$documento = consultar_ultimo_documento($conexion);

	crear_pasivo($documento,$_SESSION['usuario'],'2550',$fecha,'D','Sueldos',$nomina['basico'],$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237005',$fecha,'D','Aportes a Salud',($nomina['salud']+$apropiacion['salud']),$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'238030',$fecha,'D','Fondos de cesantías y/o pensiones',($nomina['pension']+$apropiacion['pension']),$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237040',$fecha,'D','Cooperativas',$nomina['fondo_emple'],$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237025',$fecha,'D','Embargos Judiciales',$nomina['envargos'],$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237030',$fecha,'D','Libranzas',$nomina['libranzas'],$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'236505',$fecha,'D','Retencion Salarios y pagos laborales',$nomina['retencion'],$conexion);
	crear_pasivo($documento,$_SESSION['usuario'],'237006',$fecha,'D','Aportes a administradoras de riesgos profesionales, ARP',$apropiacion['arl'],$conexion);

	$codigo_pago = "0";
	if($forma_pago == "contado"){
		$codigo_pago = ["1105","CAJA"];
	}else{
		$codigo_pago = ["1110","Banco"];
	}

	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],$nomina['basico'],$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],($nomina['salud']+$apropiacion['salud']),$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],($nomina['pension']+$apropiacion['pension']),$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],$nomina['fondo_emple'],$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],$nomina['envargos'],$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],$nomina['libranzas'],$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],$nomina['retencion'],$conexion);
	crear_activo($documento,$_SESSION['usuario'],$codigo_pago[0],$fecha,'C',$codigo_pago[1],$apropiacion['arl'],$conexion);
	
	$result = mysqli_query($conexion,"UPDATE Nomina SET estado=false WHERE id='$id'");
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);

}

function consultar_ultima_nomina(){
	$conexion = conectar_base_datos();
	$numero_nomina = array();
	$result = mysqli_query($conexion,"SELECT * FROM Nomina order by id desc limit 1");
	while ($row = mysqli_fetch_assoc($result)) {
		$numero_nomina = $row['id'];
	}
	cerrar_conexion_db($conexion);
	return $numero_nomina;	
}

function consultar_nomina_id($id){
	$conexion = conectar_base_datos();
	$nomina = array();
	$result = mysqli_query($conexion,"SELECT * FROM Nomina where id='$id' limit 1");
	while ($row = mysqli_fetch_assoc($result)) {
		$nomina = $row;
	}
	cerrar_conexion_db($conexion);
	return $nomina;	
}

function consultar_apropiacion_nomina($id){
	$conexion = conectar_base_datos();
	$apropiacion = array();
	$result = mysqli_query($conexion,"SELECT * FROM apropiacion where nomina='$id' limit 1");
	while ($row = mysqli_fetch_assoc($result)) {
		$apropiacion = $row;
	}
	cerrar_conexion_db($conexion);
	return $apropiacion;	
}