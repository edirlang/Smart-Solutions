<?php  
	include("../conexion.php");

	$facturas = mysql_query("SELECT * FROM factura",$cn);

	$numero=0;
	while($row = mysql_fetch_assoc($facturas)){ 
    	$numero = $row['num_factura']+1;
  	}
  	echo mysql_error();
	mysql_close($cn);
 ?>