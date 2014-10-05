<?php
	$cc=null;
	if($_SERVER['REQUEST_METHOD']=="GET"){
	if(isset($_GET['cedula'])){
		$cc = $_GET['cedula'];
		include("../conexion.php");
		$cliente = mysql_query("SELECT * FROM clientes where Cedula like '".$cc."'")
	}else{

	}
}
 ?>