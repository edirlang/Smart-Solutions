<?php 
	include '../conexion.php';
	$id = $_GET['id'];
	$producto;
	$sql = 'SELECT * FROM productos';
	$resultado = mysql_query($sql,$cn);
	while ($row = mysql_fetch_assoc($resultado)) {
		if($row['Codigo'] == $id){
			$producto=$row;
		}
	}                    
	mysql_close($cn);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart-Solutions</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <a class="navbar-brand" href="panel_contador.php">HOME</a>
      <ul class="nav navbar-nav">
        <li><a href="producto.php">Inventario</a></li>
        <li><a href="Transacion-manual.php">Transaciones manuales</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Activos</a></li>
            <li><a href="#">Pasivos</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-inverse navbar-right">
          <li><a href="../salir.php">Salir</a></li>
      </ul>
    </nav>    
	<div class="container">
  		<div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    	<div class="panel panel-default">
		    		<div class='panel-heading'>
    					<h3><?php echo $producto['Nombre']; ?></h3>
    		  		</div>
		    		<div class="panel-body">
		    		   	<p>Codigo: <?php echo $producto['Codigo']; ?></p>
					    <p>Nombre: <?php echo $producto['Nombre']; ?></p>
					    <p>Descripcion: <?php echo $producto['Descripcion']; ?></p>
					    <p>Especificaciones: <?php echo $producto['Especificaciones']; ?></p>
					    <p>ValorCompra: <?php echo $producto['ValorCompra']; ?></p>
					    <p>ValorVenta: <?php echo $producto['ValorVenta']; ?></p>
					    <p>Cantidad: <?php echo $producto['Cantidad']; ?></p>
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