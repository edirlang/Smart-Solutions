	<?php include("menu.php"); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Debe/Debito</h3>
					</div>
					<div class="panel-body">
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
							<tbody>
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

				<a type="button" class="btn btn-primary" href="ingresar-transacion.php">Ingresar</a>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>