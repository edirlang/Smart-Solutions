<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	session_start();
	$datos = json_decode($_POST['jdatos'], true);
	$forma_pago = $_POST['pago'];

	$i=0;
	include("../conexion.php");
	foreach ($datos as $llave => $valor) {
		$result =mysqli_query($cn,"SELECT * FROM `inventario` WHERE codigo like '".$valor[2]."' order by fecha desc limit 1");
		$subtotal=$valor[3]*$valor[4];
		while ($row = mysqli_fetch_assoc($result)) {
			if($row['codigo']==$valor[2]){
				$cantidad = $row['cantidad']+$valor[3];
				$total = $row['total']+$subtotal;
				$vlr_unidad=$total/$cantidad;
				$sql = "INSERT INTO inventario VALUES (null,'".$valor[2]."','Compra','".$valor[1]."','".$valor[3]."','".$valor[4]."','".$cantidad."','".$vlr_unidad."','".$total."','C')";
				
				$produc = "UPDATE productos SET iva = '".$valor[5]."' where Codigo = '".$valor[2]."')";
				mysqli_query($cn,$produc);

				$i=1;
			}
		}
		if ($i==0) {
			$sql = "INSERT INTO inventario VALUES (null,'".$valor[2]."','Compra','".$valor[1]."','".$valor[3]."','".$valor[4]."','".$valor[3]."','".$valor[4]."','".$subtotal."','C')";
		}
		mysqli_query($cn,$sql);

		mysqli_query($cn,"INSERT INTO documentado VALUES (NULL,'Compra')");
		$documentos = mysqli_query($cn,"SELECT * FROM documentado order by `cod_documento` desc limit 1");
		$documento=0;
		while ($row = mysqli_fetch_row($documentos)) {
			$documento = $row[0];
		}
		
		$iva = (($valor[5]*$valor[4])/100)*$valor[3];
		$total = $subtotal+$iva;

		mysqli_query($cn,"INSERT INTO activo1 VALUES ('".$documento."','".$_SESSION['usuario']."','14','".$valor[1]."','D','Inventario ','".$subtotal."')");
		mysqli_query($cn,"INSERT INTO pasivo VALUES ('".$documento."','".$_SESSION['usuario']."','2804','".$valor[1]."','D','IVA','".$iva."')");
		if($forma_pago=="contado"){
			mysqli_query($cn,"INSERT INTO activo1 VALUES ('".$documento."','".$_SESSION['usuario']."','1105','".$valor[1]."','C','Caja pago ','".$total."')");
		}else{
			mysqli_query($cn,"INSERT INTO pasivo VALUES ('".$documento."','".$_SESSION['usuario']."','2205','".$valor[1]."','C','Pedido por pagar','".$total."')");
		}

	}

	mysqli_close($cn);
	echo 1;
}else{
	echo 0;
}

?>