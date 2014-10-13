<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$productos = json_decode($_POST['jdatos'], true);
	$numero = $_POST['num_fact'];
	$fecha = $_POST['fecha'];
	$cedula = $_POST['cliente'];
	$cajero = $_POST['cajero'];
	$total=0;

	foreach ($productos as $key => $row) {
		$total+=$row[4]+($row[2]*$row[1]);
	}


	$sql = "INSERT INTO factura VALUES ('".$numero."','".$cedula."','".$fecha."','','".$cajero."','".$total."')";
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
			mysql_query($cn,$sql);	
		}

		$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$cajero."','14','".$fecha."','C','inventario ".$row[0]."','".$inventario."')";
		mysql_query($cn,$sql);

		$sql = "INSERT INTO costos VALUES ('".$documento."','".$cajero."','613554','".$fecha."','D','Costo ".$row[0]."','".$inventario."')";
		mysql_query($cn,$sql);
	}	

	echo "bien";
	mysqli_close();
}else{
	echo "No hay Resultados";
} 
?>