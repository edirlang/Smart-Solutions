<?php 
session_start();
  if($_SESSION['rol'] !='admin' ){
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
    <a class="navbar-brand" href="panel_admin.php"><span class="glyphicon glyphicon-home"></span>  HOME</a>
    <ul class="nav navbar-nav">
      <li ><a href="Productos.php"><span class="glyphicon glyphicon-book"></span>  Inventario</a></li>
      <li><a href="Clientes.php"><span class="glyphicon glyphicon-list"></span>  Clientes</a></li>
      <li><a href="Empleados.php"><span class="glyphicon glyphicon-briefcase"></span>  Empleados</a></li>
      <li><a href="Proveedor.php"><span class="glyphicon glyphicon-folder-open"></span>   Proveedores</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-stats"></span>
           Estados Financieros<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Ventas</a></li>
          <li><a href="#">Compras</a></li>
          <li class="divider"></li>
          <li><a href="#">Activos</a></li>
          <li><a href="#">Pasivos</a></li>
          <li><a href="#">Gastos</a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Mi Cuenta</a></li>
            <li><a href="../salir.php"><span class="glyphicon glyphicon-cog"></span> Salir</a></li>
          </ul>
        </li>
      </ul>
  </nav>
  <?php } ?>