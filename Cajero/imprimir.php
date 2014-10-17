<?php include("menu.php") ?>
<div class='container container-fluid'>
	<div class='row'>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href='Factura.php' class='hidden-print btn btn-primary'>Regresar</a>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="../Imagenes/bac.gif" alt=""></img>
		</div>
		<font size='3' face='Verdana'>
			<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center'>
				<p>Smart-Solutions</p>
				<p>Nit: 1069748845-5 Regimen Comun</p>
				<p>Cra 6 # 7-49 CC. La Hacienda Local 201 </p>
				<p>Tel: 867 2290</p>
				<br>
				<p>Fecha  ".$fecha."	Hora ".$hora."</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<hr size="10" ></hr>
			</div>
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
				<table class="table table-border table-condense">
						<tr>
							<th>Factura:</th>
						</tr>
					
						<tr>
							<td>".$numero."</td>
						</tr>
				</table>
			</div>
			<div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
				<table class="table table-border table-condense">
						<tr>
							<th>Cliente</th>
							<th></th>
						</tr>
					
						<tr>
							<td>Cliente: </td>
							<td>".$nom_cliente."</td>
						</tr>
						<tr>
							<td>CC o NIT: </td>
							<td>".$cedula."</td>
						</tr>
				</table>
			</div>
			<div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
				<table class="table table-hover">
						<tr>
							<th>Vendedor</th>
							<th></th>
						</tr>
						<tr>
							<td>Vendedor: </td>
							<td>".$nom_cajero."</td>
						</tr>
						<tr>
							<td>CC o Nit </td>
							<td>".$cajero."</td>
						</tr>
				</table>
			</div>
				
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<hr size="10" ></hr>
			</div>

			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center'>
				<table class='table table-responsive table-condensed table-border'>
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Cant.</th>
							<th>vlr. unid.</th>
							<th>iva</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>".$producto[0]."</td>
							<td>".$producto[5]."</td>
							<td>".$producto[1]."</td>
							<td>$ ".$producto[3]."</td>
							<td>".$producto[2]."%</td>
							<td>$ ".$producto[4]."</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<hr size="10" ></hr>
			</div>
			<div align='right' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<table>
					<tr>
						<td>Subtotal</td>
						<td> $ ".$subtotal."</td>
					</tr>
					<tr>
						<td>IVA</td>
						<td> $ ".$iva."</td>
					</tr>
					<tr>
						<td>Total </td>
						<td> $ ".$total."</td>
					</tr>
					<tr>
						<td>Efectivo </td>
						<td> $ ".$Efectivo."</td>
					</tr>
					<tr>
						<td>Cambio</td>
						<td> $ ".$Cambio."</td>
					</tr>
				</table>
			</div>

			<div align='center' class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<p>Resolucion</p>
			</div>
		</font>
	</div>
</div>