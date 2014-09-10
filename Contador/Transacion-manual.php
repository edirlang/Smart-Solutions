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
	<nav class="navbar navbar-inverse ">
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
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
				
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<div class="panel panel-success">
						  <div class="panel-heading">
								<h3 class="panel-title">Debe/Debito</h3>
						  </div>
						  <div class="panel-body">
								<table class="table table-condensed table-hover">
									<thead>
										<tr>
											<th>Tramitador</th>
											<th>Codigo</th>
											<th>Fecha</th>
											<th>Naturaleza</th>
											<th>Descripcion</th>
											<th>Valor</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											include("../conexion.php");
											$result = mysql_query("SELECT * FROM activo1 where Naturaleza='D'", $cn);
											$total=0;
											while ($row = mysql_fetch_row($result)) {
												echo "<tr>";
												echo "<td>".$row[1]."</td>";
												echo "<td>".$row[2]."</td>";
												echo "<td>".$row[3]."</td>";
												echo "<td>".$row[4]."</td>";
												echo "<td>".$row[5]."</td>";
												echo "<td>".$row[6]."</td>";
												echo "</tr>";
												$total+=$row[6];
											}

											$result = mysql_query("SELECT * FROM pasivo where Naturaleza='D'", $cn);
											
											while ($row = mysql_fetch_row($result)) {
												echo "<tr>";
												echo "<td>".$row[1]."</td>";
												echo "<td>".$row[2]."</td>";
												echo "<td>".$row[3]."</td>";
												echo "<td>".$row[4]."</td>";
												echo "<td>".$row[5]."</td>";
												echo "<td>".$row[6]."</td>";
												echo "</tr>";
												$total+=$row[6];
											}
											
											$result = mysql_query("SELECT * FROM gasto where Naturaleza='D'", $cn);
											
											while ($row = mysql_fetch_row($result)) {
												echo "<tr>";
												echo "<td>".$row[1]."</td>";
												echo "<td>".$row[2]."</td>";
												echo "<td>".$row[3]."</td>";
												echo "<td>".$row[4]."</td>";
												echo "<td>".$row[5]."</td>";
												echo "<td>".$row[6]."</td>";
												echo "</tr>";
												$total+=$row[6];
											}

											$result = mysql_query("SELECT * FROM ingresos where Naturaleza='D'", $cn);
											
											while ($row = mysql_fetch_row($result)) {
												echo "<tr>";
												echo "<td>".$row[1]."</td>";
												echo "<td>".$row[2]."</td>";
												echo "<td>".$row[3]."</td>";
												echo "<td>".$row[4]."</td>";
												echo "<td>".$row[5]."</td>";
												echo "<td>".$row[6]."</td>";
												echo "</tr>";
												$total+=$row[6];
											}

											$result = mysql_query("SELECT * FROM costos where Naturaleza='D'", $cn);
											
											while ($row = mysql_fetch_row($result)) {
												echo "<tr>";
												echo "<td>".$row[1]."</td>";
												echo "<td>".$row[2]."</td>";
												echo "<td>".$row[3]."</td>";
												echo "<td>".$row[4]."</td>";
												echo "<td>".$row[5]."</td>";
												echo "<td>".$row[6]."</td>";
												echo "</tr>";
												$total+=$row[6];
											}
											
											echo mysql_error();
											mysql_close($cn);
										 ?>

										 <tr>
											<th class="text-center" colspan="3">Total: </th>
											<th colspan="3">$ <?php echo $total; ?></th>
										</tr>
									</tbody>
								</table>
						  </div>
					</div>

					<a type="button" class="btn btn-primary" href="ingresar-transacion.php">Ingresar</a>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Haber/Credito</h3>
						</div>
						<div class="panel-body">
							<table class="table table-condensed table-hover ">
								<thead>
									<tr>
										<th>Tramitador</th>
										<th>Codigo</th>
										<th>Fecha</th>
										<th>Naturaleza</th>
										<th>Descripcion</th>
										<th>Valor</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										include("../conexion.php");
										$result = mysql_query("SELECT * FROM activo1 where Naturaleza='C'", $cn);
										$total=0;

										while ($row = mysql_fetch_row($result)) {
											echo "<tr>";
											echo "<td>".$row[1]."</td>";
											echo "<td>".$row[2]."</td>";
											echo "<td>".$row[3]."</td>";
											echo "<td>".$row[4]."</td>";
											echo "<td>".$row[5]."</td>";
											echo "<td>".$row[6]."</td>";
											echo "</tr>";
											$total+=$row[6];
										}

										$result = mysql_query("SELECT * FROM pasivo where Naturaleza='C'", $cn);
										
										while ($row = mysql_fetch_row($result)) {
											echo "<tr>";
											echo "<td>".$row[1]."</td>";
											echo "<td>".$row[2]."</td>";
											echo "<td>".$row[3]."</td>";
											echo "<td>".$row[4]."</td>";
											echo "<td>".$row[5]."</td>";
											echo "<td>".$row[6]."</td>";
											echo "</tr>";
											$total+=$row[6];
										}

										$result = mysql_query("SELECT * FROM gasto where Naturaleza='C'", $cn);
										
										while ($row = mysql_fetch_row($result)) {
											echo "<tr>";
											echo "<td>".$row[1]."</td>";
											echo "<td>".$row[2]."</td>";
											echo "<td>".$row[3]."</td>";
											echo "<td>".$row[4]."</td>";
											echo "<td>".$row[5]."</td>";
											echo "<td>".$row[6]."</td>";
											echo "</tr>";
											$total+=$row[6];
										}

										$result = mysql_query("SELECT * FROM ingresos where Naturaleza='C'", $cn);
										
										while ($row = mysql_fetch_row($result)) {
											echo "<tr>";
											echo "<td>".$row[1]."</td>";
											echo "<td>".$row[2]."</td>";
											echo "<td>".$row[3]."</td>";
											echo "<td>".$row[4]."</td>";
											echo "<td>".$row[5]."</td>";
											echo "<td>".$row[6]."</td>";
											echo "</tr>";
											$total+=$row[6];
										}

										$result = mysql_query("SELECT * FROM costos where Naturaleza='C'", $cn);
										
										while ($row = mysql_fetch_row($result)) {
											echo "<tr>";
											echo "<td>".$row[1]."</td>";
											echo "<td>".$row[2]."</td>";
											echo "<td>".$row[3]."</td>";
											echo "<td>".$row[4]."</td>";
											echo "<td>".$row[5]."</td>";
											echo "<td>".$row[6]."</td>";
											echo "</tr>";
											$total+=$row[6];
										}

										echo mysql_error();
										mysql_close($cn);
									 ?>

									 <tr>
										<th class="text-center" colspan="3">Total: </th>
										<th colspan="3">$ <?php echo $total; ?></th>
									</tr>

								</tbody>
							</table>
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