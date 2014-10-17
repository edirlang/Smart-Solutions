<?php 
  include("../conexion.php");

  if(isset($_POST['id'])){
  	$result = mysqli_query($cn,"SELECT * FROM clientes");

  	$cedulas = array();
  	while($row = mysqli_fetch_assoc($result)){
  		array_push($cedulas, $row['Cedula']);
  	}
  	$json = json_encode($cedulas); 
	echo $json;

	echo mysqli_error();
	mysqli_close($cn);
  }else{
	$Clientes = mysqli_query($cn,"SELECT * FROM clientes");
  }
 ?>