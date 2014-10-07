<?php 
session_start();

  if($_SESSION['rol'] !='contador' ){
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
    
</head>
<body>
<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="panel_contador.php">HOME</a>
			<ul class="nav navbar-nav">
				<li><a href="Productos.php">Inventario</a></li>
				<li class="dropdown">
					<a href="Transacion-manual.php" class="dropdown-toggle" data-toggle="dropdown">Transaciones manuales<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="Transacion-manual.php">Transaciones</a></li>
						<li><a href="ingresar-transacion.php">Ingresar Nueva Transacion</a></li>
						<li><a href="Codigos.php">Codigos</a></li>
					</ul>
				</li>
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
<?php } ?>