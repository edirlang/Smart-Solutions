<?php  

	$facturas = mysqli_query($cn,"SELECT * FROM `factura` order by `num_factura` desc limit 1 ");

	$numero=0;
	while($row = mysqli_fetch_assoc($facturas)){ 
    	$numero = $row['num_factura']+1;
  	}
  	echo mysqli_error($cn);
	mysqli_close($cn);
 ?>