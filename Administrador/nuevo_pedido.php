<?php 
include("menu.php"); 
require("consultar_proveedor.php"); 
$proveedor = consultar($_GET['id']);
$productos = Productos($proveedor);
?>
<div class="container">
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div id="Mensaje" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
			</div>
			<div id="ventana" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
			</div>

			<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
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
									<?php while($row = mysqli_fetch_assoc($productos)){ ?>
									<option value='<?php echo $row['cod_poducto']; ?>'><?php echo $row['cod_poducto']; ?></option>
									<?php } ?>
								</select>

								<label for="">Cantidad</label>
								<input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Unidades recibidas">

								<label for="">Valor unidad</label>
								<input type="number" class="form-control" name="vlr_unidad" id="vlr_unidad" placeholder="Valor de unidad">

								<label for="">IVA</label>
								<input type="number" class="form-control" name="iva" id="iva" placeholder="IVA de producto">
							</div>
							<button class="btn btn-primary btn-block" id="boton1"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
						</form>
						<a class="btn btn-success form-control" data-toggle="modal" data-target="#from_nuevo"><span class="glyphicon glyphicon-asterisk"></span> Nuevo producto</a>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Productos</h3>
					</div>
					<div class="panel-body">
						<p>Provedor: <?php echo $proveedor ?></p>
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
						<h3>Total = $ <label name="total" id="total" value="0" placeholder="" /></h3>
						<label>Forma de pago</label>
						<div class="form-group">
							<select class="form-control" name="pago" id="pago" value="contado">
								<option value='contado'>Contado</option>
								<option value='credito'>Credito</option>
							</select>
						</div>
						<button class="btn btn-success" id="Enviar"><span class="glyphicon glyphicon-share-alt"></span> Enviar</button>
						<a type="button" class="btn btn-danger" href="Proveedor.php"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="from_nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>Nuevo Producto</h4>
				</div>

				<div class="modal-body">
					<form id="fomr_producto" role="form">
						<div class="form-group">
							<label for="">Proveedor</label>
							<input type="text" class="form-control" name="proveedor" id="proveedor" value="<?php echo $_GET['id']; ?>">

							<label for="">Codigo</label>
							<input type="text" class="form-control" name="cod_nuevo" placeholder="Codigo de Producto" id="cod_nuevo">

							<label for="">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Codigo de Producto">

							<label for="">Descripcion</label>
							<textarea rows="4" cols="50" class="form-control" name="descripcion" id="descripcion"> </textarea>

							<label for="">Especificaciones</label>
							<textarea rows="4" cols="50" class="form-control" name="especificaciones" id="especificaciones"> </textarea>

							<label for="">Valor para la Venta</label>
							<input type="number" name="vlr_ven" id="vlr_ven" class="form-control" >

							<label for="">Valor comprado</label>
							<input type="number" name="vlr_comp" id="vlr_comp" class="form-control" >

							<label for="">IVA</label>
							<input type="number" name="iva_nuevo" id="iva_nuevo" class="form-control" value="" min="{5"} max="" step="" required="required" title="">

							<label for="">Cantidad</label>
							<input type="number" name="cant" id="cant" class="form-control" value="" min="{5"} max="" step="" required="required" title="">

						</div>
						<form id="fomr_producto" role="form">
							<div class="form-group">
								<label for="">Imagen</label>
								<input type="file" class="form-control" name="foto" id="foto" >
							</div>
						</form>
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-success" id="Guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
						<button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.validate.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/pedido.js"></script>
</body>
</html>