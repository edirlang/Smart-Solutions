<?php
include("menu.php"); 
include("clientesBD.php"); 
?>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/Agregar-producto.js"></script>
<div class="container">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="panel panel-success">
				<div class="panel-body">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<h2>Smart-Solution</h2>
						<h2>Caller nose q</h2>
						<h2>Tel: 0000000000</h2>
						<h2>Nit: 1111111-0</h2>
						<h2>Regimen Comun</h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<label for="">Fecha</label>
								<input type="date" class="form-control" id="fecha" placeholder="Input field">
							</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<label for="">Nombre de Cliente</label>
								<input type="text" class="form-control" id="nom_cliente" placeholder="Input field">
							</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<label for="">C.C. Cliente</label>
								<select name="" class="form-control" id="cc_cliente">
									<?php while($row = mysql_fetch_row($Clientes)){ ?>
   										<option value='<?php echo $row[0]; ?>'><?php echo $row[1]; ?></option>
   									<?php } ?>
									
								</select>
							</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="form-group">
								<label for="">Cajero</label>
								<input type="text" class="form-control" id="cajero" placeholder="Input field">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form action="" method="POST" role="form">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="form-group">
									<label for="">Codigo</label>
									<input type="text" class="form-control" id="codigo" placeholder="Input field">
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="form-group">
									<label for="">Cantidad</label>
									<input type="text" class="form-control" id="cantidad" placeholder="Input field">
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<button type="submit" class="btn btn-primary form-control" id="agregar">Agregar</button>
							</div>
						</form>
					</div>
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
							<tbody>
								<tr>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"></div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<p>SubTotal:</p><p id="subtotal"></p>
						<p>IVA:</p><p id="iva"></p>
						<p>Total:</p><p id="total"></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

</body>
</html>