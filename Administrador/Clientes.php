<!DOCTYPE html>
<?php include("clientesBD.php"); ?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart-Solutions</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="panel_admin.php">HOME</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="Productos.php">Inventario</a></li>
      <li><a href="Clientes.php">Clientes</a></li>
      <li><a href="Empleados.php">Empleados</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
      <li><a href="../salir.php">Salir</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
       <table class="table table-condensed table-hover">
         <thead>
           <tr>
             <th>Cedula</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Telefono</th>
           </tr>
         </thead>
         <tbody>
           <?php while($row = mysql_fetch_row($Clientes)){ ?>
           <tr>
             <td><?php echo $row[0]; ?></td>
             <td><?php echo $row[1]; ?></td>
             <td><?php echo $row[2]; ?></td>
             <td><?php echo $row[3]; ?></td>
           </tr>
           <?php } ?>
         </tbody>
       </table>
       
     </div> 
  </div>
</div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>