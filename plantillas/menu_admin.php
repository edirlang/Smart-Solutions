<nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="panel_admin.php"><span class="glyphicon glyphicon-home"></span>  HOME</a>
    <ul class="nav navbar-nav">
      <li ><a href="inventario"><span class="glyphicon glyphicon-book"></span>  Inventario</a></li>
      <li><a href="clientes"><span class="glyphicon glyphicon-list"></span>  Clientes</a></li>
      <li><a href="empleados"><span class="glyphicon glyphicon-briefcase"></span>  Empleados</a></li>
      <li><a href="proveedores"><span class="glyphicon glyphicon-folder-open"></span>   Proveedores</a></li>
      <li><a href="facturas"><span class="glyphicon glyphicon-folder-open"></span>   Facturas</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-stats"></span>
           Estados Financieros<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Ventas</a></li>
          <li><a href="#">Compras</a></li>
          <li class="divider"></li>
          <li><a href="#">Balance General</a></li>
          <li><a href="#">P y G</a></li>
          <li><a href="#">Gastos</a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Mi Cuenta</a></li>
            <li><a href="salir"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
          </ul>
        </li>
      </ul>
  </nav>