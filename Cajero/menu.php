<?php 
session_start();

  if($_SESSION['rol'] !='cajero' ){
    header("location: ../index.html");
  }else{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smart-Solutions</title>

	<script src="../js/jquery.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" href="panel_cajero.php"><span class="glyphicon glyphicon-home"></span>HOME</a>
		<ul class="nav navbar-nav">
			<li class="active"><a href="Factura.php"><span class="glyphicon glyphicon-shopping-cart"></span>Factura</a></li>
			<li><a href="Clientes.php"><span class="glyphicon glyphicon-list"></span>Clientes</a></li>
			<li><a href="Catalogo.php"><span class="glyphicon glyphicon-book"></span>Catalogo</a></li>
		</ul>

		<ul class="nav navbar-right">
			<li><a href="../salir.php"><span class="glyphicon glyphicon-cog"></span>Salir</a></li>
		</ul>
	</nav>
<?php } ?>