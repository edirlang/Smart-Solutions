<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$codigo = $_POST['codigo'];
	include("../conexion.php");
	$result = mysqli_query($cn,"SELECT * FROM codigotransacion where Codigo like '".$codigo."'");
	
	$Descripcion=null;
	
	while ($row = mysqli_fetch_assoc($result)) {
		$Descripcion =  $row['Descripcion'];
	}
	mysqli_close($cn);
	echo $Descripcion;
}else{
	echo "No hay Resultados";
}
?>