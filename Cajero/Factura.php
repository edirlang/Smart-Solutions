<?php
include("menu.php"); 
include("clientesBD.php");
include("Consultar_factura.php");
date_default_timezone_set("America/Bogota");
?>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/Agregar-producto.js"></script>
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" src="../css/jquery-ui.css" />

<div id="imp">
	
</div>

<div id="factura" class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<div class="ui-widget">
									<label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">N° Factura</label>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">
										<input type="text" class="form-control input-sm" id="numero" value="<?php echo $numero; ?>" >
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Fecha</label>
								<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
									<input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("y/m/d"); ?>" >
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Hora: </label>
								<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
									<input type="text" class="form-control input-sm" id="hora" value="<?php echo date('h:m'); ?>" >
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Cajero: </label>
								<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
									<input type="text" class="form-control input-sm" id="cajero"  value="<?php echo $_SESSION['usuario']; ?>">	
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
								<label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label">Nombre Cliente:</label>
								<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
									<input type="text" class="form-control input-sm" id="nom_cliente" placeholder="Nombre de Cliente">	
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
							<div class="form-group">
								<label class="col-xs-12 col-sm-4 col-md-3 col-lg-3 control-label">C.C. o Nit</label>
								<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
									<select name="cc_cliente" class="form-control input-sm" id="cc_cliente">
										<?php while($row = mysqli_fetch_row($Clientes)){ ?>
										<option value='<?php echo $row[0]; ?>'><?php echo $row[0]; ?></option>
										<?php } ?>
									</select>	
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<a class="btn btn-success form-control" data-toggle="modal" data-target="#nuevo_cliente">Nuevo Cliente</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form name="formulario" id="formulario" class="form-horizontal" role="form">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
									<div class="ui-widget">
										<label class="col-xs-12 col-sm-6 col-md-3 col-lg-3 control-label">Codigo:</label>
										<div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
											<input type="text" class="form-control" id="tags">
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
									<label class="col-xs-12 col-sm-6 col-md-3 col-lg-3 control-label">Cantidad:</label>
									<div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
										<input type="text" class="form-control" id="cantidad" placeholder="Digite Cantidad" value="1">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<button type="submit" class="btn btn-primary form-control" id="agregar">Agregar</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-responsive table-condensed">
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Nombre</th>
								<th>Cantidad</th>
								<th>Vlr Unidad</th>
								<th>IVA</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody id="Filas">

						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="panel">
				<div class="panel-body">
					<h3>SubTotal: $ <label id="subtotal"></label></h3>
					<h3>IVA: $ <label id="iva"></label></h3>
					<h3>Total: $ <label id="total"></label></h3>
					<a class="btn btn-success" data-toggle="modal" href="#cerar_venta">Registrar</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="nuevo_cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4>Nuevor Cliente</h4>
			</div>

			<div class="modal-body">
				<form id="editar" name="editar" action="actualizar_cliente.php" method="post">
					<div class="form-group">
						<label for="">Cedula</label>
						<input type="text" name="cedula" class="form-control"  id="cedula"  readonly="readonly"/>

						<label for="">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" />

						<label for="">Apellido</label>
						<input type="text" class="form-control" name="apellido" id="apellido"/>

						<label for="">Telefono</label>
						<input type="text" class="form-control" name="telefono" id="telefono">
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" id="l_guardar" data-dismiss="modal">Actualizar</button>
				<button type="submit" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="cerar_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4>Registrar venta</h4>
			</div>

			<div class="modal-body">
				<form id="editar" name="editar" action="actualizar_cliente.php" method="post">
					<div class="form-group">
						<label for="">Total</label>
						<input type="text" name="cedula" class="form-control"  id="cedula"  readonly="readonly"/>

						<label for="">Efectivo</label>
						<input type="text" class="form-control" name="nombre" id="nombre" />

						<label for="">Cambio</label>
						<input type="text" class="form-control" name="apellido" id="apellido"/>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" id="Enviar" data-dismiss="modal">Actualizar</button>
				
			</div>
		</div>
	</div>
</div>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>