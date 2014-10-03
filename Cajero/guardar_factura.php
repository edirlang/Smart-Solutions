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
	mysql_query($sql,$cn);
	
	mysql_query("INSERT INTO documentado VALUES (NULL,'Factura+".$numero."')",$cn);
	$documentos = mysql_query("SELECT * FROM documentado order by `cod_documento` desc limit 1",$cn);
	$documento=0;
	while ($row = mysql_fetch_row($documentos)) {
		$documento = $row[0];
	}
	foreach ($productos as $key => $row) {
			$iva = $row[1]*$row[2];
		
		$sql = "INSERT INTO detallefactura VALUES ('".$numero."','".$row[0]."','".$row[1]."','".$row[3]."','".$row[4]."')";
		mysql_query($sql,$cn);

		$sql = "INSERT INTO ingresos VALUES ('".$documento."','".$cajero."','4135','".$fecha."','C','Venta ".$row[0]."','".$row[4]."')";
		mysql_query($sql,$cn);

		$sql = "INSERT INTO pasivo VALUES ('".$documento."','".$cajero."','2804','".$fecha."','C','IVA ".$row[0]."','".$iva."')";
		mysql_query($sql,$cn);

		$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$cajero."','1105','".$fecha."','D','Caja ".$row[0]."','".($row[4]+$iva)."')";
		mysql_query($sql,$cn);

		$inventario=0;
		$result =mysql_query("SELECT * FROM inventario WHERE codigo like '".$row[0]."' order by fecha desc limit 1",$cn);
		while ($fila = mysql_fetch_assoc($result)) {
			$cantidad = $fila['cantidad']-$row[1];
			$total = $fila['vlr_inicial']*$cantidad;
			$sql = "INSERT INTO inventario VALUES (null,'".$fila['codigo']."','Venta','".$fecha."','".$row[1]."','".$fila['vlr_inicial']."','".$cantidad."','".$fila['vlr_inicial']."','".$total."','V')";
			$inventario=$fila['vlr_inicial']*$row[1];
			mysql_query($sql,$cn);	
		}

		$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$cajero."','14','".$fecha."','C','inventario ".$row[0]."','".$inventario."')";
		mysql_query($sql,$cn);

		$sql = "INSERT INTO costos VALUES ('".$documento."','".$cajero."','613554','".$fecha."','D','Costo ".$row[0]."','".$inventario."')";
		mysql_query($sql,$cn);
	}	

	echo "bien";
	echo mysql_error();
	mysql_close();
}else{
	echo "No hay Resultados";
} 
?>