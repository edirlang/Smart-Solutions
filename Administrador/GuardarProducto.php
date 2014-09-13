<?php 
	$Producto = array($_POST['Codigo'] , $_POST['Nombre'] , $_POST['Descripcion'] , $_POST['Especificaciones'] ,$_POST['ValorComp'],$_POST['ValorVen'],$_POST['Cantidad']);

	include("../conexion.php");
	
	$sql = "INSERT INTO productos VALUES ('".$Producto[0]."','".$Producto[1]."','".$Producto[2]."','D','".$Producto[4]."','".$Producto[5]."','".$Producto[6]."')";
	mysql_query($sql,$cn);
	echo mysql_error();
	mysql_close($cn);

	$ruta="../Imagenes/"; 
	$uploadfile_temporal=$_FILES['foto']['tmp_name']; 
	$uploadfile_nombre=$ruta.$Producto[0].".png"; 

	if (is_uploaded_file($uploadfile_temporal)) 
	{ 
	    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
	    return true; 
	} 
	header("Location: Productos.php");

 ?>