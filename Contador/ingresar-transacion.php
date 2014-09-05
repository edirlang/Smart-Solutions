<?php include("consultar-usuario.php"); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Smart-Solutions</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		
		<!-- jQuery -->
		<script type="text/javascript" src="../js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="../js/Transaciones.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="panel_contador.php">Home</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="producto.php">Inventario</a></li>
					<li><a href="Transacion-manual.php">Transaciones manuales</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Activos</a></li>
							<li><a href="#">Pasivos</a></li>
						</ul>
					</li>
				</ul>
				<!--<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../salir.php">Salir</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					
				</div>

				<div class="col-xs-8 col-sm-8 col-md-6 col-lg-8">
					<form action="ingresar.php" method="POST" role="form">
						<legend>Nueva Transacion</legend>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="form-group">
									<label for="">Fecha</label>
									<input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="dd/mm/aaaa" required title="Ingrese la Fecha">
								</div>
							</div>

							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="form-group">
									<label for="">Tramitador</label>
									<input type="number" class="form-control" name="Cedula" id="Cedula" value="<?php echo $usuario; ?>" disabled>
								</div>
							</div>
						</div>
						
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="form-group">
								<h1 class="text-center">Debito/Debe</h1>
								
								<label for="">Codigo</label>
								<input type="text" class="form-control" name="Codigo" id="Codigo" placeholder="Codigo de transacion" required title="Ingrese codigo de operacion">

								<label for="">Descripcion</label>
								<input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripcion de actividad" required title="Ingrese la descripcion">

								<label for="">Naturaleza</label>
								<select class="form-control" name="Naturaleza" value="D" id="Naturaleza">
  									<option value="D">D</option>
  									<option value="C">C</option>
								</select>

								<label for="">Valor</label>
								<input type="number" class="form-control" name="Valor" id="Valor" placeholder="Valor a tramitar" required title="Ingrese el valor">
							</div>
							<button type="submit" class="btn btn-primary">Enviar</button>
							<a type="button" class="btn btn-primary" href="Transacion-manual.php">Cancelar</a>
						</div>
						
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="btn btn-primary" id="boton1">Agregar</div>
						</div>

						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<table class="table table-condensed table-hover table-bordered">
						<thead>
							<tr>
								<th class="text-center" colspan="6">Debe/Dedito</th>
							</tr>
							<tr>
								<th>Tramitador</th>
								<th>Codigo</th>
								<th>Fecha</th>
								<th>Naturaleza</th>
								<th>Descripcion</th>
								<th>Valor</th>
							</tr>
						</thead>
						<tbody id="Filas">
							
						</tbody>
					</table>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		
		
	</body>
</html>