
<?php include("menu.php"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Codigos Registrados</h3>
				</div>
				<div class="panel-body">
					<table class="table table-condensed table-hover ">
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Descripcion</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							include("../conexion.php");
							$result = mysql_query("SELECT * FROM codigotransacion", $cn);
							while ($row = mysql_fetch_row($result)) {
								echo "<tr>";
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "</tr>";
							}
							echo mysql_error();
							mysql_close($cn);
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Codigo</h3>
				</div>
				<div class="panel-body">
					<form action="GuardarCodigo.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Codigo</label>
							<input type="text" class="form-control" name="Codigo" placeholder="Codigo de Producto">

							<label for="">Descripcion</label>
							<input type="text" class="form-control" name="Nombre" placeholder="Codigo de Producto">

							<label for="">Tipo</label>
							<select class="form-control" name="Tipo" value="activo" id="Tipo">
								<option value="activo">Activos</option>
								<option value="pasivo">Pasivos</option>
								<option value="patrimonio">Patrimonio</option>
								<option value="ingreso">Ingresos</option>
								<option value="gasto">Gastos</option>
								<option value="costo">Costos</option>
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Enviar</button>
						<a href="Codigos.php.php" class="btn btn-primary">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>