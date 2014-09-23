<?php include("menu.php"); ?>
<?php include("consultar-usuario.php"); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div id="Mensaje" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Nueva Transacion</h3>
					</div>
					<div class="panel-body">
						<form id="formulario" name="formulario" method="POST" role="form" on>
							<div class="form-group">

								<label for="">Tramitador</label>
								<input type="number" class="form-control" name="Cedula" id="Cedula" value="<?php echo $usuario; ?>" disabled>

								<label for="">Fecha</label>
								<input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="dd/mm/aaaa" required title="Ingrese la Fecha">

								<label for="">Codigo</label>
								<input type="text" class="form-control" name="Codigo" id="Codigo" placeholder="Codigo de transacion" required title="Ingrese codigo de operacion">

								<label for="">Descripcion</label>
								<input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripcion de actividad" required title="Ingrese la descripcion">

								<label for="">Naturaleza</label>
								<select class="form-control" name="Naturaleza" value="D" id="Naturaleza">
									<option value="D">D</option>
									<option value="C">C</option>
								</select>

								<label for="">Valor</label>
								<input type="number" class="form-control" name="Valor" id="Valor" placeholder="Valor a tramitar" required title="Ingrese el valor">

							</div>
							<button class="btn btn-primary btn-block" id="boton1">Agregar</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Transaciones</h3>
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
							<tbody id="Filas">
								
							</tbody>
						</table>
						<button class="btn btn-success" id="Enviar">Enviar</button>
						<a type="button" class="btn btn-danger" href="Transacion-manual.php">Cancelar</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/Transaciones.js"></script>
</body>
</html>