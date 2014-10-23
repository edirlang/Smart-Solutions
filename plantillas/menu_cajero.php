<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="panel_cajero.php"><span class="glyphicon glyphicon-home"></span> HOME</a>
			<ul class="nav navbar-nav">
				<li class="active"><a href="factura"><span class="glyphicon glyphicon-shopping-cart"></span> Factura</a></li>
				<li><a href="clientes"><span class="glyphicon glyphicon-list"></span> Clientes</a></li>
				<li><a href="catalogo"><span class="glyphicon glyphicon-book"></span> Catalogo</a></li>
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