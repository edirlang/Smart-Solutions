<?php
include("menu.php"); 
include("clientesBD.php");
include("Consultar_factura.php");
date_default_timezone_set("America/Bogota");
?>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/Agregar-producto.js"></script>
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" src="../css/jquery-ui.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<div class="ui-widget">
								<label class="col-lg-4 control-label">N° Factura</label>
								<div class="col-lg-8">
									<input type="text" class="form-control input-sm" id="numero" value="<?php echo $numero; ?>" >
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label class="col-lg-3 control-label">Fecha</label>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("y/m/d"); ?>" >
							</div>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label class="col-lg-3 control-label">Hora: </label>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<input type="text" class="form-control input-sm" id="hora" value="<?php echo date("h:m"); ?>" >
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label class="col-lg-4 control-label">Nom. Cliente: </label>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
								<input type="text" class="form-control input-sm" id="nom_cliente" placeholder="Nombre de Cliente">	
							</div>
						</div>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label class="col-lg-3 control-label">C.C.: </label>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<select name="cc_cliente" class="form-control input-sm" id="cc_cliente">
									<?php while($row = mysqli_fetch_row($Clientes)){ ?>
									<option value='<?php echo $row[0]; ?>'><?php echo $row[0]; ?></option>
									<?php } ?>
								</select>	
							</div>
						</div>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label class="col-lg-3 control-label">Cajero: </label>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<input type="text" class="form-control input-sm" id="cajero"  value="<?php echo $_SESSION['usuario']; ?>">	
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-success">
					<div class="panel-body">
						<form name="formulario" id="formulario" class="form-horizontal" role="form">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="form-group">
									<div class="ui-widget">
										<label for="ejemplo_email_3" class="col-lg-3 control-label">Codigo:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="tags">
										</div>
									</div>
								</div>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="form-group">
									<label class="col-lg-3 control-label">Cantidad:</label>
									<div class="col-lg-9">
										<input type="text" class="form-control" id="cantidad" placeholder="Digite Cantidad" value="1">
									</div>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<button type="submit" class="btn btn-primary form-control" id="agregar"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<table class="table table-hover">
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
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body">

						<h3>SubTotal: $ <label id="subtotal"></label></h3>
						<h3>IVA: $ <label id="iva"></label></h3>
						<h3>Total: $ <label id="total"></label></h3>
						<button  type="submit" class="btn btn-primary form-control" id="Enviar"><span class="glyphicon glyphicon-share-alt"></span> Enviar</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>