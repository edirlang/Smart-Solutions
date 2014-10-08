<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$codigo = $_POST['codigo'];
	include("../conexion.php");
	$result = mysql_query("SELECT * FROM codigotransacion where Codigo like '".$codigo."'",$cn);
	
	$Descripcion=null;
	
	while ($row = mysql_fetch_assoc($result)) {
		$Descripcion =  $row['Descripcion'];
	}
	echo mysql_error();
	mysql_close($cn);
	echo $Descripcion;
}else{
	echo "No hay Resultados";
}
?>