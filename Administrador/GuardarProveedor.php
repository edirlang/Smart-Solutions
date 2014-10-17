<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("../conexion.php");
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$sql = "INSERT INTO proveedo VALUES ('".$codigo."','".$nombre."','".$telefono."','".$direccion."')";
	mysqli_query($cn,$sql);
	mysqli_close($cn);

}else{
	echo "Acceso no permitido";
}
header("Location: Proveedor.php");

?>