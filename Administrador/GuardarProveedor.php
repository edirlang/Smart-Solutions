<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$sql = "INSERT INTO proveedo VALUES ('".$codigo."','".$nombre."','".$telefono."','".$direccion."')";
	mysql_query($sql,$cn);
	echo mysql_error();
	mysql_close($cn);

}else{
	echo "Acceso no permitido";
}
header("Location: Proveedor.php");

?>