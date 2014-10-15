<?php 
session_start();

if($_SESSION['rol'] !='cajero' ){
	header("location: ../index.html");
}else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Smart-Solutions</title>

		<script src="../js/jquery.js"></script>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/bootstrap.css">

	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="panel_cajero.php"><span class="glyphicon glyphicon-home"></span> HOME</a>
			<ul class="nav navbar-nav">
				<li class="active"><a href="Factura.php"><span class="glyphicon glyphicon-shopping-cart"></span> Factura</a></li>
				<li><a href="Clientes.php"><span class="glyphicon glyphicon-list"></span> Clientes</a></li>
				<li><a href="Catalogo.php"><span class="glyphicon glyphicon-book"></span> Catalogo</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre']; ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Mi Cuenta</a></li>
						<li><a href="../salir.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
					</ul>
				</li>
			</ul>
			
		</nav>
		<?php } ?>