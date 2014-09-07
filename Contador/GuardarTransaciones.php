<?php 
	$debito;
	if ($debito==null) {
		$debito = array();
	}
	header('Content-Type: text/html; charset=ISO-8859-1');
	$transacion= array($_POST['Cedula'],$_POST['Codigo'],$_POST['Fecha'],$_POST['Naturaleza'],$_POST['Descripcion'],$_POST['Valor']);
	array_push($debito,$transacion); 

	 ?>