<?php 
$datos = json_decode($_POST['jdatos'], true);

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
			$sql = "INSERT INTO inventario VALUES (null,'".$valor[2]."','".$valor[1]."','".$cantidad."','".$vlr_unidad."','".$total."')";
			$i=1;
		}
	}
	if ($i==0) {
		$sql = "INSERT INTO inventario VALUES (null,'".$valor[2]."','".$valor[1]."','".$valor[3]."','".$valor[4]."','".$subtotal."')";
	}
	mysql_query($sql,$cn);
}
echo 1;
echo mysql_error();
mysql_close($cn);

?>