<?php 
	include("../conexion.php");

	$productos = mysql_query("SELECT * FROM productos");

	while($row = mysql_fetch_row($productos)){ 
    	$alerta;
    	if ($row[8]<2) {
    		$alerta="danger";
    	}elseif ($row[8]>2 && $row[8]<6) {
    		$alerta="info";
    	}else{
    		$alerta="success";
    	}

    	echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
    			<div class='panel panel-".$alerta."'>
    		 		<div class='panel-heading'>
    					<h4>".$row[1]."</h4>
    		  		</div>
    		  		<div class='panel-body'>
    		  			<p>Codigo: ".$row[0]."</p>
           				<p>Valor para la venta $ ".$row[5]."</p>
           				
           				<p>
             				<a class='btn btn-primary btn-lg' href='DetallesProducto.php?id=".$row[0]."'>Mas Informacion</a>
           				</p>
    		  		</div>
    			</div>
     		</div>";

  	}
	mysql_close($cn);
 ?>