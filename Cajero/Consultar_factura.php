<?php  
	include("../conexion.php");

	$facturas = mysqli_query($cn,"SELECT * FROM `factura` order by `num_factura` desc limit 1 ");

	$numero=0;
	while($row = mysqli_fetch_assoc($facturas)){ 
    	$numero = $row['num_factura']+1;
  	}
	mysqli_close($cn);
 ?>