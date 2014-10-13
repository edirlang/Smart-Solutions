<?php 
$Producto = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Descripcion'] , $_POST['Especificaciones'] ,$_POST['iva'],$_POST['ValorVen']);
	$iva=$_POST['iva'];

	include("../conexion.php");
	
	$sql = "INSERT INTO productos VALUES ('".$Producto[0]."','".$Producto[1]."','".$Producto[2]."','".$Producto[3]."','".$Producto[4]."','".$Producto[5]."')";
	mysqli_query($cn,$sql);

	mysqli_query($cn,"INSERT INTO producto_proveedor VALUES ('".$_POST['proveedor']."','".$Producto[0]."',0)");

	mysqli_close($cn);
	echo $Producto[0];
?>