	<?php include("menu.php"); ?>
	
	<script type="text/javascript" src="../js/jquery.validate.js"></script>
	<script type="text/javascript" src="../js/buscar_transaciones.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" src="../css/jquery-ui.css">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Cuentas Contables</h3>
					</div>
					<div class="panel-body">
						<div class="panel panel-success">
							<div class="panel-body">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<label>Documento: </label>
											<input type="text" name="documento" id="documento" class="form-control">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<label>Cuenta: </label>
											<input type="text" name="cuenta" id="cuenta" class="form-control">
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<label>Fecha: </label>
											<input type="date" name="fecha" id="fecha" class="form-control">
										</div>
									</div>
									<button type="input" class="btn btn-primary" id="buscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
									<a type="button" class="btn btn-primary" href="ingresar-transacion.php"><span class="glyphicon glyphicon-plus"></span> Nueva transaccion</a>
								</div>
							</div>
						</div>
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>Documento</th>
									<th>Tramitador</th>
									<th>Codigo</th>
									<th>Fecha</th>
									<th>Naturaleza</th>
									<th>Descripcion</th>
									<th>Valor</th>
								</tr>
							</thead>
							<tbody id="filas">
								

								<?php 
								$total_c=0;
								$total_d=0;
								include("TransacionBD.php");
								foreach ($transaciones as $key => $valor) {
									echo "<tr>";
									if ($valor['Naturaleza']=='D') {
										$total_d+=$valor['Valor'];
									}else{
										$total_c+=$valor['Valor'];
									}
									foreach ($valor as $key1 => $row) {

										echo "<td>".$row."</td>";
									}
									echo "</tr>";	
								}

								?>
								<tr>
									<td><h3>Total Debito</h3></td>
									<td><h3><?php echo $total_d; ?></h3></td>
									<td><h3>Total Credito</h3></td>
									<td><h3><?php echo $total_c; ?></h3></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>