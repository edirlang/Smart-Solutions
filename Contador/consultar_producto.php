<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$codigo=$_POST['codigo'];
		$cantidad=$_POST['cantidad'];
	}else{
		echo "Acceso no permitido";
	}
 ?>