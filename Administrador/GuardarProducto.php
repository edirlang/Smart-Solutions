<?php 
$Producto = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Descripcion'] , $_POST['Especificaciones'] ,$_POST['iva'],$_POST['ValorVen']);
	$iva=$_POST['iva'];

	include("../conexion.php");
	
	$result = mysqli_query($cn,"SELECT * FROM productos WHERE Codigo = '".$Producto[0]."')");

	while ($fila = mysqli_fetch_assoc($result)) {
		if($fila['Codigo']==$Producto[0]){
			$sql = "INSERT INTO productos VALUES ('".$Producto[0]."','".$Producto[1]."','".$Producto[2]."','".$Producto[3]."','".$Producto[4]."','".$Producto[5]."')";	
		}else{
			$sql = "UPDATE productos Set Nombre='".$producto[1]."', Descripcion ='".$producto[2]."',Especificaciones='".$producto[3]."', Iva= '".$producto[4]."', ValorVenta='".$producto[5]."' Where Codigo='".$producto[0]."'";
		}
	}

	mysqli_query($cn,$sql);

	mysqli_query($cn,"INSERT INTO producto_proveedor VALUES ('".$_POST['proveedor']."','".$Producto[0]."',0)");

	mysqli_close($cn);
	echo $Producto[0];
?>