<?php 
include("menu.php"); 
require("consultar_proveedor.php"); 
$proveedor = consultar($_GET['id']);
$productos = Productos($proveedor);
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div id="Mensaje" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Pedido</h3>
					</div>
					<div class="panel-body">
						<form id="formulario" name="formulario" method="POST" role="form" on>
							<div class="form-group">

								<label for="">Proveedor</label>
								<input type="number" class="form-control" name="proveedor" id="proveedor" value="<?php echo $proveedor; ?>" disabled>

								<label for="">Selecione codigo de producto</label>
								<select class="form-control" name="codigo" id="codigo">
									<?php while($row = mysql_fetch_assoc($productos)){ ?>
									<option value='<?php echo $row['cod_poducto']; ?>'><?php echo $row['cod_poducto']; ?></option>
									<?php } ?>
									<option value='0'>Nuevo Producto</option>
								</select>

								<label for="">Cantidad</label>
								<input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Unidades recibidas">

								<label for="">Valor unidad</label>
								<input type="number" class="form-control" name="vlr_unidad" id="vlr_unidad" placeholder="Valor de unidad">

								<label for="">IVA</label>
								<input type="number" class="form-control" name="iva" id="iva" placeholder="IVA de producto">

							</div>
							<button class="btn btn-primary btn-block" id="boton1">Agregar</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Productos</h3>
					</div>
					<div class="panel-body">
						<p>Proveerdor: <?php echo $proveedor ?></p>
						<p id="fecha_a">Fecha: </p>
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>Codigo</th>
									<th>Cantidad</th>
									<th>Val_Unidad</th>
									<th>IVA</th>
									<th>SubTotal</th>
								</tr>
							</thead>
							<tbody id="Filas">
								
							</tbody>
						</table>
						<h3 id="total">Total = $ 0</h3>
						<label>Forma de pago</label>
						<div class="form-group">
							<select class="form-control" name="pago" id="pago" value="contado">
								<option value='contado'>Contado</option>
								<option value='credito'>Credito</option>
							</select>
						</div>
						<button class="btn btn-success" id="Enviar">Enviar</button>
						<a type="button" class="btn btn-danger" href="Proveedor.php">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/pedido.js"></script>
</body>
</html>