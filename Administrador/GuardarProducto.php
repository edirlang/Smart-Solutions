<?php 
$Producto = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Descripcion'] , $_POST['Especificaciones'] ,$_POST['iva'],$_POST['ValorVen']);
$iva=$_POST['iva'];

include("../conexion.php");

$result = mysqli_query($cn,"SELECT * FROM productos WHERE Codigo='".$Producto[0]."'") or die (mysqli_error());

echo mysqli_num_rows($result);

if(mysqli_num_rows($result) >= 1){
	mysqli_query($cn,"UPDATE productos Set Nombre='".$Producto[1]."', Descripcion ='".$Producto[2]."',Especificaciones='".$Producto[3]."', iva= '".$Producto[4]."', ValorVenta='".$Producto[5]."' Where Codigo='".$Producto[0]."'");	
}else{
	mysqli_query($cn,"INSERT INTO productos VALUES ('".$Producto[0]."','".$Producto[1]."','".$Producto[2]."','".$Producto[3]."','".$Producto[4]."','".$Producto[5]."')");
}

mysqli_query($cn,"INSERT INTO producto_proveedor VALUES ('".$_POST['proveedor']."','".$Producto[0]."',0)");

mysqli_close($cn);
echo $Producto[0];
?>