<?php 
  include("../conexion.php");

  if(isset($_POST['id'])){
  	$result = mysql_query("SELECT * FROM clientes");

  	$cedulas = array();
  	while($row = mysql_fetch_assoc($result)){
  		array_push($cedulas, $row['Cedula']);
  	}
  	$json = json_encode($cedulas); 
	echo $json;

	echo mysql_error();
	mysql_close();
  }else{
	$Clientes = mysql_query("SELECT * FROM clientes");
  }
 ?>