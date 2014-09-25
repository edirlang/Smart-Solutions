<?php include("menu.php"); ?>
<?php include('ConsultarProducto.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-success">
				<div class='panel-heading'>
					<h3><?php echo $producto['Nombre']; ?></h3>
				</div>
				<div class="panel-body">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<p><b>Codigo:</b> <?php echo $producto['Codigo']; ?></p>
								<p><b>Nombre: </b><?php echo $producto['Nombre']; ?></p>
								<p><b>Descripcion: </b><?php echo $producto['Descripcion']; ?></p>
								<p><b>Especificaciones: </b><?php echo $producto['Especificaciones']; ?></p>
								<p><b>ValorCompra: </b><?php echo $producto['ValorCompra']; ?></p>
								<p><b>ValorVenta: </b><?php echo $producto['ValorVenta']; ?></p>
								<p><b>Cantidad: </b><?php echo $producto['Cantidad']; ?></p>
								<p class="text-center">
									<a class='btn btn-primary' href='EditarProducto.php?id=".$producto['Codigo']."'>Editar</a>
									<a class='btn btn-danger' href='EliminarProducto.php?id=".$producto['Codigo']."'>Eliminar</a>
								</p>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<img class="img-rounded img-responsive" alt="2" src="../Imagenes/<?php echo $producto['Codigo'].".png"; ?>"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>