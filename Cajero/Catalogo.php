<!DOCTYPE html>
<?php include("../Administrador/ProductosBD.php"); ?>
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
			<a class="navbar-brand" href="">Menu</a>
			<ul class="nav navbar-nav">
					<li class="active"><a href="Factura.php">Factura</a></li>
					<li><a href="Clientes.php">Clientes</a></li>
					<li><a href="Catalogo.php">Catalogo</a></li>
				</ul>
				
				<ul class="nav navbar-inverse navbar-right">
					<li><a href="../salir.php">Salir</a></li>
				</ul>
		</nav>

		<div class="container-fluid">
			<?php while($row = mysql_fetch_row($productos)){ ?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="thumbnail">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<img class="img-rounded img-responsive" alt="2" src="../Imagenes/<?php echo $row[0].".jpg"; ?>"/>
						</div>
						<div class="caption">
							<h3><?php echo $row[0].". "; echo $row[1]; ?></h3>
							<p>$ <?php echo $row[5]; ?></p>
			        	</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<p>Descripcion: <br><?php echo $row[2]; ?></p>
							<p>Caracteristicas: <br><?php echo $row[3]; ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>