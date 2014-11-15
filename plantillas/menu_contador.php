<nav class="navbar navbar-inverse">
			<a class="navbar-brand" href="contador"><span class="glyphicon glyphicon-home"></span> HOME</a>
			<ul class="nav navbar-nav">
				<li><a href="inventario"><span class="glyphicon glyphicon-tasks"></span> Inventario</a></li>
				<li class="dropdown">
					<a href="Transacion-manual" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span> Transaciones manuales<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="Transacion-manual"><span class="glyphicon glyphicon-book"></span>	Libro Contable</a></li>
						<li><a href="nueva_contabilidad"><span class="glyphicon glyphicon-list-alt"></span> Ingresar Nueva Transacion</a></li>
						<li><a href="Codigos"><span class="glyphicon glyphicon-list"></span>	Codigos-PUC</a></li>
					</ul>
				<li><a href="cierre"><span class="glyphicon glyphicon-list"></span>	Cierre Contables</a></li>
				<li><a href="ajustes_contables"><span class="glyphicon glyphicon-list"></span>	Ajustes Contables</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-file"></span> Reportes<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="estado de situacion financiera">Estado de situacion financiera</a></li>
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