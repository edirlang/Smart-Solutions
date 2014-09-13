<?php 
	include("../conexion.php");

	$productos = mysql_query("SELECT * FROM productos");
	while($row = mysql_fetch_row($productos)){ 
	   echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
    			<div class='panel panel-success'>
    		 		<div class='panel-heading'>
    					<h4>".$row[1]."</h4>
    		  		</div>

    		  		<div class='panel-body'>
    		  			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                            <p><b>Codigo:</b> ".$row[0]."</p>
                            <p><b>Precio:</b> $ ".$row[5]."</p>
                            <h4>Descripcion: </h4> <p align='justify'>".$row[2]."</p>
                            <h4>Especificaciones: </h4> <p align='justify'>".$row[3]."</p>
                        </div>
                        <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                            <img class='img-rounded img-responsive' alt='2' src='../Imagenes/".$row[0].".png'/>
                        </div>
                    </div>
    			</div>
     		</div>";
	}
 ?>