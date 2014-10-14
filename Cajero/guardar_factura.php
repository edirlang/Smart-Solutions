<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	include "pdf.php";
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
	foreach ($productos as $key => $row) {
		$total+=$row[4]+($row[2]*$row[1]);
	}


	$sql = "INSERT INTO factura VALUES ('".$numero."','".$cedula."','".$fecha."','".$hora."','".$cajero."','".$total."')";
	mysqli_query($cn,$sql);
	
	mysqli_query($cn,"INSERT INTO documentado VALUES (NULL,'Factura+".$numero."')");
	$documentos = mysqli_query($cn,"SELECT * FROM documentado order by `cod_documento` desc limit 1");
	$documento=0;
	while ($row = mysqli_fetch_row($documentos)) {
		$documento = $row[0];
	}
	foreach ($productos as $key => $row) {
			$iva = $row[1]*$row[2];
		
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

	$subtotal = $total-$iva;
	$Cambio = $Efectivo-$total;

	$factura = "<div class='container-fluid'>
	<div class='row'>
		<a href='Factura.php' class='hidden-print btn btn-primary'>Regresar</a>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
			<h4>Smart-Solutions</h4>
			<h4>Centro Comercial la hacienda Local 201 </h4>
			<h4>Tel: 867 2290</h4>
			<h4>Nit: 1069748845-5</h4>
			<h4>Regimen Comun</h4>
		</div>
		<font size='2' face='Verdana'>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<p>Factura: ".$numero."</p>
			<p>Fecha  ".$fecha."	Hora ".$hora."</p>
			<p>Cliente: ".$nom_cliente."	CC o NIT: ".$cedula."</p>
			<p>Vendedor: ".$nom_cajero."	CC o Nit ".$cajero."</p>
		</div>

		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
			<table class='table table-hover'>
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Cantd.</th>
						<th>vlr. unid.</th>
						<th>iva</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>";
	foreach ($productos as $producto) {
		$factura = $factura."<tr>
					<td>".$producto[0]."</td>
					<td>".$producto[5]."</td>
					<td>".$producto[1]."</td>
					<td>".$producto[2]."</td>
					<td>".$producto[3]."</td>
					<td>".$producto[4]."</td>
					</tr>";
	}
	$factura = $factura."
				</tbody>
			</table>
		</div>

		<div align='right' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<p>Subtotal $ ".$subtotal."</p>
			<p>IVA $ ".$iva."</p>
			<p>Total $ ".$total."</p>
			<p>Efectivo $ ".$Efectivo."</p>
			<p>Cambio $ ".$Cambio."</p>
		</div>

		<div align='center' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<p>Resolucion</p>
		</div>
		</font>
	</div>
</div>
";
	echo $factura;

	//crear_factura($cn,$numero, $fecha, $hora, $cedula, $cajero, $productos, $subtotal, $iva, $total, $Efectivo,$pago);

	mysqli_close($cn);
}else{
	echo "No hay Resultados";
} 
?>