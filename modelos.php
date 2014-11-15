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

function eliminar_cliente($cedula){
	$conexion = conectar_base_datos();
	mysqli_query($conexion,"DELETE FROM clientes where Cedula='$cedula'");
	cerrar_conexion_db($conexion);
	return true;
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
	if(isset($_GET['id'])){
		$conexion = conectar_base_datos();
		$codigo = $_GET['id'];
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

function crear_provedor_producto($proveedor,$codigo,$valor_ven){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		mysqli_query($conexion,"INSERT INTO producto_proveedor VALUES ('$proveedor','$codigo','$valor_ven')");
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

function crear_producto($proveedor,$codigo,$nombre,$descripcion,$especificaciones,$iva,$valor_ven){
	$conexion = conectar_base_datos();

	$result = mysqli_query($conexion,"SELECT * FROM productos WHERE Codigo='".$codigo."'") or die (mysqli_error());

	if(mysqli_num_rows($result) >= 1){
		mysqli_query($conexion,"UPDATE productos Set Nombre='".$nombre."', Descripcion ='".$descripcion."',Especificaciones='".$especificaciones."', iva= '".$iva."', ValorVenta='".$valor_ven."' Where Codigo='".$codigo."'");	
	}else{
		mysqli_query($conexion,"INSERT INTO productos VALUES ('".$codigo."','".$nombre."','".$descripcion."','".$especificaciones."','".$iva."','".$valor_ven."')");
	}
	cerrar_conexion_db($conexion);

	crear_provedor_producto($proveedor,$codigo,$valor_ven);

	return $codigo;
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

function actualizar_prodcto($codigo,$iva,$vlr_venta,$conexion){
	$produc = "UPDATE productos SET iva = '$iva' ValorVenta='$vlr_venta' where Codigo = '".$codigo."')";
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
			
			actualizar_prodcto($producto[2],$producto[5],$producto[4],$conexion);	

			$result =mysqli_query($conexion,"SELECT * FROM `inventario` WHERE codigo='$producto[2]' order by fecha desc limit 1");
			
			$subtotal=$producto[3]*$producto[4];


			if(mysqli_num_rows($result) == '0'){
				$sql = "INSERT INTO inventario VALUES (null,'".$producto[2]."','Compra','".$producto[1]."','".$producto[3]."','".$producto[4]."','".$producto[3]."','".$producto[4]."','".$subtotal."','C')";
			}else{
				while ($row = mysqli_fetch_assoc($result)) {
					$cantidad = $row['cantidad']+$producto[3];
					$total = $row['total']+$subtotal;
					$vlr_unidad=$total/$cantidad;
					$sql = "INSERT INTO inventario VALUES (null,'".$producto[2]."','Compra','".$producto[1]."','".$producto[3]."','".$producto[4]."','".$cantidad."','".$vlr_unidad."','".$total."','C')";
					$i=1;
				}
			}
			mysqli_query($conexion,$sql);

			crear_documento("Compra",$conexion);

			$documento = consultar_ultimo_documento($conexion);


			$iva = (($producto[5]*$producto[4])/100)*$producto[3];
			$total = $subtotal+$iva;

			crear_cuenta($documento,$_SESSION['usuario'],14,$producto[1],'D','Inventario'.$producto[2],$subtotal,$conexion);

			crear_cuenta($documento,$_SESSION['usuario'],2804,$producto[1],'D','IVA'.$producto[2],$iva,$conexion);

			if($forma_pago=="contado"){
				crear_cuenta($documento,$_SESSION['usuario'],1105,$producto[1],'C','Caja Pago'.$producto[2],$total,$conexion);
			}else{
				crear_cuenta($documento,$_SESSION['usuario'],2205,$producto[1],'C','Pedido por Pagar'.$producto[2],$total,$conexion);
			}
		}
		echo mysqli_error($conexion);
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
		$activos = cuentas_documento($documento['cod_documento']);
		foreach ($activos as $valor) {
			array_push($cuentas,$valor);
		}
		
	}
	return $cuentas;
}

function consultar_cuentas1(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cuentas = array();
		$cuentas_bd = consultar_cuentas();
		
		foreach ($cuentas_bd as $valor) {
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

//CRUD cuentas
function crear_cuenta($documento,$tramitador,$codigo,$fecha,$naturaleza,$descripcion,$valor,$conexion){
	mysqli_query($conexion,"INSERT INTO cuentas VALUES (null,'".$documento."','".$tramitador."','$codigo','".$fecha."','$naturaleza','$descripcion','".$valor."')");
}

function cuentas_documento($documento){
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion,"SELECT * FROM cuentas where  Documento = '$documento'");
	$activos=array();
	while ($row = mysqli_fetch_assoc($result)){
		array_push($activos, $row);
	}
	cerrar_conexion_db($conexion);
	return $activos;
}

function consultar_cuentas(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$conexion = conectar_base_datos();
		$codigo = $_POST['codigo'];
		$fecha = $_POST['fecha'];
		$documento = $_POST['documento'];

		$activos=array();
		
		$resultado;

		if($codigo != null && $documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Documento = '$documento' and Codigo = '$codigo' and Fecha = '$fecha'");	
		}elseif($codigo != null && $documento != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Documento = '$documento' and Codigo = '$codigo'");
		}elseif($codigo != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Codigo = '$codigo' and Fecha = '$fecha'");
		}elseif($documento != null && $fecha != null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Documento = '$documento' and Fecha = '$fecha'");
		}elseif($codigo == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Documento = '$documento'");
		}elseif($documento == null && $fecha == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Codigo = '$codigo'");
		}elseif($documento == null && $codigo == null){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas WHERE Fecha = '$fecha'");
		}else
		echo $documento;
		if($codigo == '' && $documento == '' && $fecha == ''){
			$resultado = mysqli_query($conexion,"SELECT * FROM cuentas");	
		}

		
		while ($row = mysqli_fetch_assoc($resultado)) {
			array_push($activos,$row);
		}
		cerrar_conexion_db($conexion);
		return $activos;
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

function consultar_codigo($id){
	
	$conexion = conectar_base_datos();
	$result = mysqli_query($conexion, "SELECT * FROM codigotransacion where Codigo = '$id'");
	$codigo = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$codigo =  $row;

	}
	
	cerrar_conexion_db($conexion);
	return $codigo;
}

function nuevo_codigo(){
	$cn = conectar_base_datos();
	$Codigo = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Tipo']);
	$sql = "INSERT INTO codigotransacion VALUES ('$Codigo[0]','$Codigo[1]','$Codigo[2]')";
	mysqli_query($cn,$sql);
	cerrar_conexion_db($cn);
}

function crear_contabilida($transaciones){
	
	$conexion = conectar_base_datos();
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
					crear_cuenta($documento,$transacion[0],$transacion[1],$transacion[2],$transacion[3],$transacion[4],$transacion[5],$conexion);
				}	
			}
		}
	}
	cerrar_conexion_db($conexion);	
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

function consultar_factura($numero){
	$conexion = conectar_base_datos();

	$result = mysqli_query($conexion,"SELECT * FROM factura where  num_factura = '$numero'");

	$numero;
	while($row = mysqli_fetch_assoc($result)){ 
		$numero = $row;
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

	$forma_pago=false;
	if($pago=='Credito'){
		$forma_pago=true;
	}

	foreach ($productos as $row) {
		$total+=$row[4]+$row[2];
	}
	$sql = "INSERT INTO factura VALUES ('".$numero."','".$cedula."','".$fecha."','".$hora."','".$cajero."','".$total."','$forma_pago')";
	mysqli_query($conexion,$sql);

	crear_documento("Factura ".$numero,$conexion);
	$documento = consultar_ultimo_documento($conexion);
	foreach ($productos as $producto) {
		$iva = $producto[2];
		
		crear_detalle_factura($numero, $producto[0], $producto[1], $producto[3] ,$producto[4],$conexion);

		crear_cuenta($documento,$cajero,'1105',$fecha,'D','CAJA '.$producto[0],($producto[4]+$iva),$conexion);
		crear_cuenta($documento,$cajero,'2804',$fecha,'C','IVA '.$producto[0],$iva,$conexion);
		crear_cuenta($documento,$cajero,'4135',$fecha,'C','VENTA '.$producto[0],$producto[4],$conexion);
		
		$inventario = consultar_inventario1($documento,$cajero,$fecha,$producto, $conexion);
		crear_cuenta($documento,$cajero,'14',$fecha,'C','Inventario  '.$producto[0],$inventario,$conexion);
		crear_cuenta($documento,$cajero,'613554',$fecha,'D','Costo  '.$producto[0],$inventario,$conexion);
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
	$factura_actual = consultar_factura($numero);

	$nom_cliente = $cliente['Nombre']." ".$cliente['Apellido']; 
	$empleado = consultar_empleado($cajero);
	$nom_cajero = $empleado['Nombre']." ".$empleado['Apellido'];
	
	$total=0;

	$factura = "<div class='container container-fluid'>
	<div class='row'>
	<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
	</div>
	<div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
	<img src='/Smart-Solutions/Imagenes/bac.png'></img>
	</div>
	<font size='3' face='Verdana'>
	<div class='col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center'>
	<h1>Smart-Solutions</h1>
	<p><small>&quot;El equipo correcto para la persona correcta&quot;</small></p>
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

	if($factura_actual['Credito']){
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
		</table>
		</div>

		<div align='center' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
		<p>Resolucion</p>
		</div>
		</font>
		</div>
		</div>";

	}else{

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
	}
	echo $factura;
}

function detalles_factura($numero){
	$conexion = conectar_base_datos();
	$productos = array();
	$result = mysqli_query($conexion,"SELECT * FROM detallefactura where num_factura = '$numero'");
	while ($producto = mysqli_fetch_assoc($result)) {
		array_push($productos, $producto);
	}
	cerrar_conexion_db($conexion); 
	return $productos;
}

function detalles_factura2($numero){
	$conexion = conectar_base_datos();
	$productos = array();
	$result = mysqli_query($conexion,"SELECT * FROM detallefactura where num_factura = '$numero'");
	while ($producto = mysqli_fetch_row($result)) {
		array_push($productos, $producto);
	}
	cerrar_conexion_db($conexion); 
	return $productos;
}

function consultar_facturas_cliente($Cliente){
	$conexion = conectar_base_datos();
	$facturas = array();
	$result = mysqli_query($conexion,"SELECT * FROM factura where cliente = '$Cliente'");
	while ($factura = mysqli_fetch_assoc($result)) {
		array_push($facturas, $factura);
	}
	cerrar_conexion_db($conexion);
	return $facturas;
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
	$result = mysqli_query($conexion,"SELECT * FROM Nomina Order by fecha");
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($nominas, $row);
	}
	cerrar_conexion_db($conexion);
	return $nominas;
}

function generar_nomina($cedula,$dias,$fecha,$extras,$comision,$bonificacion,$libranzas,$embargo){
	$empleado = consultar_empleado($cedula);
	$fondo = $empleado['fondo_emple'];
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
	$result = mysqli_query($conexion,"INSERT INTO Nomina values ('','$fecha','$cedula','$dias','$basico','$vlr_extras','$comision','$bonificacion','$trasporte','$alimentacion','$salud','$pension','$fondo_emple','$libranzas','$embargo','$uvt','$total',false)");
	
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
	crear_cuenta($documento,$_SESSION['usuario'],'510506',$fecha,'D','Sueldos',$basico,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510515',$fecha,'D','Horas extra',$vlr_extras,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510548',$fecha,'D','Bonificaciones',$bonificacion,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510527',$fecha,'D','Auxilio de trasporte',$trasporte,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510545',$fecha,'D','Auxilio de alimentacion',$alimentacion,$conexion);
	
	//Deduciones
	crear_cuenta($documento,$_SESSION['usuario'],'237005',$fecha,'C','Aportes a Salud',$salud,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'238030',$fecha,'C','Fondos de cesantías y/o pensiones',$pension,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237040',$fecha,'C','Cooperativas',$fondo_emple,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237025',$fecha,'C','Embargos Judiciales',$embargo,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237030',$fecha,'C','Libranzas',$libranzas,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'236505',$fecha,'C','Retencion Salarios y pagos laborales',$uvt,$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'2550',$fecha,'C','Obligaciones Laborales',$total,$conexion);
	
	//Apropiaciones
	crear_cuenta($documento,$_SESSION['usuario'],'237005',$fecha,'C','Aportes a Salud',$apropiacion[0],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510569',$fecha,'D','Aportes a Salud',$apropiacion[0],$conexion);

	crear_cuenta($documento,$_SESSION['usuario'],'238030',$fecha,'C','Fondos de cesantías y/o pensiones',$apropiacion[1],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510559',$fecha,'D','Fondos de cesantías y/o pensiones',$apropiacion[1],$conexion);
	
	crear_cuenta($documento,$_SESSION['usuario'],'237006',$fecha,'C','Aportes a administradoras de riesgos profesionales, ARP',$apropiacion[2],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510568',$fecha,'D','Aportes a administradoras de riesgos profesionales, ARP',$apropiacion[2],$conexion);
	
	crear_cuenta($documento,$_SESSION['usuario'],'252021',$fecha,'C','Prima',$apropiacion[3],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510536',$fecha,'D','Prima de servicios',$apropiacion[3],$conexion);
	
	crear_cuenta($documento,$_SESSION['usuario'],'252522',$fecha,'C','Vacaciones',$apropiacion[4],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510539',$fecha,'D','Vacaciones',$apropiacion[4],$conexion);
	
	crear_cuenta($documento,$_SESSION['usuario'],'251023',$fecha,'C','Cesantías',$apropiacion[5],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510530',$fecha,'D','Cesantías',$apropiacion[5],$conexion);
	
	crear_cuenta($documento,$_SESSION['usuario'],'251520',$fecha,'C','Intereces Sobre Cesantías',$apropiacion[6],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510533',$fecha,'D','Intereces Sobre cesantías',$apropiacion[6],$conexion);
	
	crear_cuenta($documento,$_SESSION['usuario'],'237010',$fecha,'C','Aportes al ICBF, SENA y cajas de compensación',($apropiacion[7]+$apropiacion[8]+$apropiacion[9]),$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510578',$fecha,'D','SENA',$apropiacion[7],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510575',$fecha,'D','Aportes a ICBF',$apropiacion[8],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'510572',$fecha,'D','Aportes cajas de compensación familia',$apropiacion[9],$conexion);
	
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);
}

function liquidar_nomina($id,$forma_pago){
	$nomina = consultar_nomina_id($id);
	$apropiacion = consultar_apropiacion_nomina($id);

	$conexion = conectar_base_datos();
	crear_documento("Liquidar-nomina ".$id,$conexion);
	$documento = consultar_ultimo_documento($conexion);
	$parafiscales = $apropiacion['sena']+$apropiacion['icbf']+$apropiacion['ccf'];
	
	crear_cuenta($documento,$_SESSION['usuario'],'2550',date("y-m-d"),'D','Sueldos',$nomina['basico'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237005',date("y-m-d"),'D','Aportes a Salud',($nomina['salud']+$apropiacion['salud']),$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'238030',date("y-m-d"),'D','Fondos de cesantías y/o pensiones',($nomina['pension']+$apropiacion['pension']),$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237040',date("y-m-d"),'D','Cooperativas',$nomina['fondo_emple'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237025',date("y-m-d"),'D','Embargos Judiciales',$nomina['envargos'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237030',date("y-m-d"),'D','Libranzas',$nomina['libranzas'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'236505',date("y-m-d"),'D','Retencion Salarios y pagos laborales',$nomina['retencion'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237006',date("y-m-d"),'D','Aportes a administradoras de riesgos profesionales, ARP',$apropiacion['arl'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'252522',date("y-m-d"),'D','Vacaciones',$apropiacion['vacaciones'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'252521',date("y-m-d"),'D','Prima',$apropiacion['prima'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'251023',date("y-m-d"),'D','Cesantias',$apropiacion['cesantias'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'251520',date("y-m-d"),'D','Intereces Sobre Cesantias',$apropiacion['int_cesantias'],$conexion);
	crear_cuenta($documento,$_SESSION['usuario'],'237006',date("y-m-d"),'D','Aportes al ICBF, SENA y cajas de compensación, ARP',$parafiscales,$conexion);
	
	$codigo_pago = "0";
	if($forma_pago == "contado"){
		$codigo_pago = ["1105","CAJA"];
	}else{
		$codigo_pago = ["1110","Banco"];
	}
	$valor = $nomina['basico']+($nomina['salud']+$apropiacion['salud'])+($nomina['pension']+$apropiacion['pension'])+$nomina['fondo_emple']+$nomina['envargos']+$nomina['libranzas']+$nomina['retencion']+$apropiacion['arl'];
	$valor = $valor + $apropiacion['vacaciones'] + $apropiacion['prima'] + $apropiacion['cesantias'] + $apropiacion['int_cesantias'] + $parafiscales;
	
	crear_cuenta($documento,$_SESSION['usuario'],$codigo_pago[0],date("y-m-d"),'C',$codigo_pago[1],$valor,$conexion);
	
	$result = mysqli_query($conexion,"UPDATE Nomina SET liquidada=true WHERE id='$id'");
	echo mysqli_error($conexion);
	cerrar_conexion_db($conexion);
	return true;
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
	$result = mysqli_query($conexion,"SELECT * FROM apropiaciones where nomina='$id' limit 1");
	while ($row = mysqli_fetch_assoc($result)) {
		$apropiacion = $row;
	}
	cerrar_conexion_db($conexion);
	return $apropiacion;	
}

function generara_cierre(){
	$codigos_transacion  = codigos();
	$id = consultar_id_cierre_ultimo()+1;
	$fecha = strftime('%Y-%m-%d');
	$conexion = conectar_base_datos();
	mysqli_query($conexion,"INSERT INTO cierre values ('$id','$fecha','','','')");
	cerrar_conexion_db($conexion);
	$total_d=0;
	$total_c=0;
	foreach ($codigos_transacion as $codigo) {
		$cuenta = array();
		
		$cuenta = consultar_cuenta_codigo($codigo['Codigo']);
		if(isset($cuenta)){
			$total_debito = 0;
			$total_credito = 0;
			foreach ($cuenta as $transacion) {
				if($transacion['Naturaleza']=='D'){
					$total_debito+=$transacion['Valor'];
				}else{
					$total_credito+=$transacion['Valor'];
				}
			}
			$estado = $total_debito-$total_credito;
			crear_detalle_cierre($id,$codigo['Codigo'],$total_debito,$total_credito,$estado);
			$total_c+=$total_credito;
			$total_d+=$total_debito;
		}
		$estado = $total_d-$total_c;
		$conexion = conectar_base_datos();
		mysqli_query($conexion,"UPDATE cierre set debito='$total_d',credito='$total_c',estado='$estado'");
		cerrar_conexion_db($conexion);	
	}
}

function consultar_id_cierre_ultimo(){
	$conexion = conectar_base_datos();
	$sql=mysqli_query($conexion,"SELECT id from cierre order by id desc limit 1");
	$numero=0;
	while ($id = mysqli_fetch_assoc($sql)) {
		$numero = $id['id'];
	}
	return $numero;
	cerrar_conexion_db($conexion);
}

function consultar_cuenta_codigo($codigo){
	$conexion = conectar_base_datos();
	$activo = array();
	$sql = mysqli_query($conexion,"SELECT * from cuentas where Codigo='$codigo' ");
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($activo, $row);
	}
	cerrar_conexion_db($conexion);
	return $activo; 
}

function todos_cierres_contables(){
	$conexion = conectar_base_datos();
	$cierres = array();
	$sql = mysqli_query($conexion,"SELECT * from cierre");
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($cierres, $row);
	}
	cerrar_conexion_db($conexion);
	return $cierres; 
}

function crear_detalle_cierre($id,$cuenta,$debito,$credito){
	$conexion = conectar_base_datos();
	$estado = $debito-$credito;
	mysqli_query($conexion,"INSERT INTO detalle_cierre values('$id','$cuenta','$debito','$credito','$estado')");
	
	cerrar_conexion_db($conexion); 
}

function consultar_cierres_contables($id){
	$conexion = conectar_base_datos();
	$cierres = array();
	$sql = mysqli_query($conexion,"SELECT * from detalle_cierre where id='$id'");
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($cierres, $row);
	}
	cerrar_conexion_db($conexion);
	return $cierres;
}

function crear_ajuste_contable($id,$cuentas){
	$detalles_cierre = consultar_cierres_contables($id);
	$credito_total=0;
	$debito_total=0;
	$transacion = array();
	foreach ($cuentas as $cuenta) {
		$codigo = $cuenta[0];
		$naturaleza = $cuenta[1];
		$valor = $cuenta[2];
		$fecha_actual = strftime("%Y-%m-%d");
		$codigo_bd = consultar_codigo($codigo);
		$conexion = conectar_base_datos();
		foreach ($detalles_cierre as $detalle_cierre) {
			if($detalle_cierre['cuenta'] == $codigo){
				if($naturaleza=='D'){
					$debito = $detalle_cierre['debito']+$valor;
					$estado = $debito-$detalle_cierre['credito'];
					mysqli_query($conexion,"UPDATE detalle_cierre set debito='$debito', estado='$estado' where id='$id' and cuenta='$codigo'");
					$debito_total =$debito_total + $debito;
					array_push($transacion,[$_SESSION['usuario'],$codigo,$fecha_actual,'D',$codigo_bd['Descripcion'],$valor]);
				}else{
					$credito = $detalle_cierre['credito']+$valor;
					$estado = $detalle_cierre['debito']-$credito;
					mysqli_query($conexion,"UPDATE detalle_cierre set credito='$credito', estado='$estado' where id='$id' and cuenta='$codigo'");
					$credito_total= $credito_total + $credito;
					array_push($transacion,[$_SESSION['usuario'],$codigo,$fecha_actual,'C',$codigo_bd['Descripcion'],$valor]);
				}

			}
		}
	}
	cerrar_conexion_db($conexion);
	actualizar_cierre_contables($id,$debito_total,$credito_total);
	crear_contabilida($transacion);
}

function actualizar_cierre_contables($id,$debito,$credito){
	$cierre = consultar_cierre_contable($id);
	$conexion = conectar_base_datos();
	$debito = $debito + $cierre['debito'];
	$credito = $credito +  $cierre['credito'];
	$estado = $debito-$credito;
	$sql = mysqli_query($conexion,"UPDATE cierre set debito='$debito',credito='$credito', estado='$estado' where id='$id'");
	cerrar_conexion_db($conexion);
}

function consultar_ultimo_cierre_contable(){
	$conexion = conectar_base_datos();
	$cierre = array();
	$sql = mysqli_query($conexion,"SELECT * from cierre order by id desc limit 1");
	while ($row = mysqli_fetch_assoc($sql)) {
		$cierre = $row;
	}
	cerrar_conexion_db($conexion);
	return $cierre; 
}

function consultar_estado_situacion($id){
	$conexion = conectar_base_datos();
	$id2 = $id-1;
	$cierre = array();
	$sql = mysqli_query($conexion,"SELECT * from estado_situacion where id='$id' or id='$id2'");
	while ($row = mysqli_fetch_assoc($sql)) {
		$cierre = $row;
	}
	cerrar_conexion_db($conexion);
	return $cierre; 
}
function consultar_cierre_contable($id){
	$conexion = conectar_base_datos();
	$cierre = array();
	$sql = mysqli_query($conexion,"SELECT * from cierre where id='$id'");
	while ($row = mysqli_fetch_assoc($sql)) {
		$cierre = $row;
	}
	cerrar_conexion_db($conexion);
	return $cierre; 
}