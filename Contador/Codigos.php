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
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Codigos Registrados</h3>
							</div>
							<div class="panel-body">
								<table class="table table-condensed table-hover ">
									<thead>
										<tr>
											<th>Codigo</th>
											<th>Descripcion</th>
											<th>Tipo</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										include("../conexion.php");
										$result = mysql_query("SELECT * FROM codigotransacion", $cn);
										while ($row = mysql_fetch_row($result)) {
											echo "<tr>";
											echo "<td>".$row[0]."</td>";
											echo "<td>".$row[1]."</td>";
											echo "<td>".$row[2]."</td>";
											echo "</tr>";
										}
										echo mysql_error();
										mysql_close($cn);
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">Nuevo Codigo</h3>
							</div>
							<div class="panel-body">
								<form action="GuardarCodigo.php" method="POST" role="form" enctype="multipart/form-data">
									<div class="form-group">
										<label for="">Codigo</label>
										<input type="text" class="form-control" name="Codigo" placeholder="Codigo de Producto">

										<label for="">Descripcion</label>
										<input type="text" class="form-control" name="Nombre" placeholder="Codigo de Producto">

										<label for="">Tipo</label>
										<select class="form-control" name="Tipo" value="activo" id="Tipo">
											<option value="activo">Activos</option>
											<option value="pasivo">Pasivos</option>
											<option value="patrimonio">Patrimonio</option>
											<option value="ingreso">Ingresos</option>
											<option value="gasto">Gastos</option>
											<option value="costo">Costos</option>
										</select>
									</div>

									<button type="submit" class="btn btn-primary">Enviar</button>
									<a href="Codigos.php.php" class="btn btn-primary">Cancelar</a>
								</form>
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