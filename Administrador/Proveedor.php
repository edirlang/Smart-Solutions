
<?php include("menu.php"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Proveedores Registrados</h3>
				</div>
				<div class="panel-body">
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Nombre</th>
								<th>Telefono</th>
								<th>Direccion</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php 
							require("proveedorBD.php");
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>".$row['codigo']."</td>";
								echo "<td>".$row['nombre']."</td>";
								echo "<td>".$row['telefono']."</td>";
								echo "<td>".$row['direccion']."</td>";
								echo "<td><a class='btn btn-success' href='nuevo_pedido.php?id=".$row['codigo']."''><span class='glyphicon glyphicon-edit'></span> Ingresar Pedido</a></td>";
								echo "</tr>";
							}
							mysqli_close($cn);
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
					<h3 class="panel-title">Nuevo Proveedor</h3>
				</div>
				<div class="panel-body">
					<form action="GuardarProveedor.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Codigo</label>
							<input type="text" class="form-control" name="codigo" placeholder="Codigo de Proveedor">

							<label for="">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Nombre">

							<label for="">Telefono</label>
							<input type="text" class="form-control" name="telefono" placeholder="Telefono de contacto">

							<label for="">Direccion</label>
							<input type="text" class="form-control" name="direccion" placeholder="dirrecion de envio">
							
						</div>

						<button type="submit" class="btn btn-primary">Enviar</button>
						<a href="Proveedor.php" class="btn btn-primary">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>