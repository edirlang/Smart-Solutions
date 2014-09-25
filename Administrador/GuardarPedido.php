<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	session_start();
	$datos = json_decode($_POST['jdatos'], true);
	$forma_pago = $_POST['pago'];

	$i=0;
	include("../conexion.php");
	foreach ($datos as $llave => $valor) {
		$result =mysql_query("SELECT * FROM `inventario` WHERE codigo='Acer AOD2' order by fecha desc limit 1",$cn);
		$subtotal=$valor[3]*$valor[4];
		while ($row = mysql_fetch_assoc($result)) {
			if($row['codigo']==$valor[2]){
				$cantidad = $row['cantidad']+$valor[3];
				$total = $row['total']+$subtotal;
				$vlr_unidad=$total/$cantidad;
				$sql = "INSERT INTO inventario VALUES (null,'".$valor[2]."','Compra','".$valor[1]."','".$cantidad."','".$vlr_unidad."','".$total."')";
				$i=1;
			}
		}
		if ($i==0) {
			$sql = "INSERT INTO inventario VALUES (null,'".$valor[2]."','Compra','".$valor[1]."','".$valor[3]."','".$valor[4]."','".$subtotal."')";
		}
		mysql_query($sql,$cn);
		
		$iva = (($valor[5]*$valor[4])/100)*$valor[3];
		$total = $subtotal+$iva;

		mysql_query("INSERT INTO activo1 VALUES (NULL,'".$_SESSION['usuario']."','14','".$valor[1]."','D','Inventario ','".$subtotal."')",$cn);
		mysql_query("INSERT INTO pasivo VALUES (NULL,'".$_SESSION['usuario']."','2804','".$valor[1]."','D','IVA','".$iva."')",$cn);
		if($forma_pago=="contado"){
			mysql_query("INSERT INTO activo1 VALUES (NULL,'".$_SESSION['usuario']."','1105','".$valor[1]."','C','Caja pago ','".$total."')",$cn);
		}else{
			mysql_query("INSERT INTO pasivo VALUES (NULL,'".$_SESSION['usuario']."','2205','".$valor[1]."','C','Pedido por pagar','".$total."')",$cn);
		}

	}

	echo mysql_error();
	mysql_close($cn);
	echo 1;
}else{
	echo 0;
}
?>