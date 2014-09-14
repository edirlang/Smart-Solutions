<?php include('ConsultarProducto.php'); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart-Solutions</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include("menu.php"); ?>    
	
  <div class="container">
  		<div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    	<div class="panel panel-success">
		    		<div class='panel-heading'>
    					<h3><?php echo $producto['Nombre']; ?></h3>
    		  		</div>
		    		<div class="panel-body">
		    			<div class="container">
		    				<div class="row">
		    					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		    						<p><b>Codigo:</b> <?php echo $producto['Codigo']; ?></p>
								    <p><b>Nombre: </b><?php echo $producto['Nombre']; ?></p>
								    <p><b>Descripcion: </b><?php echo $producto['Descripcion']; ?></p>
								    <p><b>Especificaciones: </b><?php echo $producto['Especificaciones']; ?></p>
								    <p><b>ValorCompra: </b><?php echo $producto['ValorCompra']; ?></p>
								    <p><b>ValorVenta: </b><?php echo $producto['ValorVenta']; ?></p>
								    <p><b>Cantidad: </b><?php echo $producto['Cantidad']; ?></p>
								    <p class="text-center">
								    	<a class='btn btn-primary' href='EditarProducto.php?id=".$producto['Codigo']."'>Editar</a>
             							<a class='btn btn-danger' href='EliminarProducto.php?id=".$producto['Codigo']."'>Eliminar</a>
             						</p>
		    					</div>
		    					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		    						<img class="img-rounded img-responsive" alt="2" src="../Imagenes/<?php echo $producto['Codigo'].".png"; ?>"/>
		    					</div>
		    				</div>
		    			</div>
		    		   	
		    		</div>
		    	</div>
		    </div>
		    
		 </div>
	</div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>