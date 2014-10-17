<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
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
	mysqli_query($cn,$sql);
	
	mysqli_query($cn,"INSERT INTO documentado VALUES (NULL,'Factura+".$numero."')");
	$documentos = mysqli_query($cn,"SELECT * FROM documentado order by `cod_documento` desc limit 1");
	$documento=0;
	while ($row = mysqli_fetch_row($documentos)) {
		$documento = $row[0];
	}
	foreach ($productos as $row) {
		$iva = $row[2];
		
		$sql = "INSERT INTO detallefactura VALUES ('".$numero."','".$row[0]."','".$row[1]."','".$row[3]."','".$row[4]."')";
		mysqli_query($cn,$sql);

		$sql = "INSERT INTO ingresos VALUES ('".$documento."','".$cajero."','4135','".$fecha."','C','Venta ".$row[0]."','".$row[4]."')";
		mysqli_query($cn,$sql);

		$sql = "INSERT INTO pasivo VALUES ('".$documento."','".$cajero."','2804','".$fecha."','C','IVA ".$row[0]."','".$iva."')";
		mysqli_query($cn,$sql);

		$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$cajero."','1105','".$fecha."','D','Caja ".$row[0]."','".($row[4]+$iva)."')";
		mysqli_query($cn,$sql);

		$inventario=0;
		$result =mysqli_query($cn,"SELECT * FROM inventario WHERE codigo like '".$row[0]."' order by fecha desc limit 1");
		while ($fila = mysqli_fetch_assoc($result)) {
			$cantidad = $fila['cantidad']-$row[1];
			$total = $fila['vlr_inicial']*$cantidad;
			$sql = "INSERT INTO inventario VALUES (null,'".$fila['codigo']."','Venta','".$fecha."','".$row[1]."','".$fila['vlr_inicial']."','".$cantidad."','".$fila['vlr_inicial']."','".$total."','V')";
			$inventario=$fila['vlr_inicial']*$row[1];
			mysqli_query($cn,$sql);	
		}

		$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$cajero."','14','".$fecha."','C','inventario ".$row[0]."','".$inventario."')";
		mysqli_query($cn,$sql);

		$sql = "INSERT INTO costos VALUES ('".$documento."','".$cajero."','613554','".$fecha."','D','Costo ".$row[0]."','".$inventario."')";
		mysqli_query($cn,$sql);
	}	

	$result = mysqli_query($cn,"SELECT * from clientes where Cedula = '".$cedula."'");
	$nom_cliente;
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['Cedula']==$cedula){
			$nom_cliente = $row['Nombre']." ".$row['Apellido'];
		}
	}

	$result = mysqli_query($cn,"SELECT * from usuarios where Cedula = '".$cajero."'");
	$nom_cajero;
	while ($row = mysqli_fetch_assoc($result)) {
		if($row['Cedula']==$cajero){
			$nom_cajero = $row['Nombre']." ".$row['Apellido'];
		}
	}	

	$total=0;

	$factura = "<div class='container container-fluid'>
	<div class='row'>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<a href='Factura.php' class='hidden-print btn btn-primary'>Regresar</a>
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

	//crear_factura($cn,$numero, $fecha, $hora, $cedula, $cajero, $productos, $subtotal, $iva, $total, $Efectivo,$pago);

	mysqli_close($cn);
}else{
	echo "No hay Resultados";
} 
?>