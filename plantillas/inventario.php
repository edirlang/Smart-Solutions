<?php ob_start(); ?>
<div class="panel panel-success">
	<div class="panel-body">
		<form action="inventario" method="POST" class="form-inline" role="form">

			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="form-group">
					<label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">Codigo Producto</label>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">
						<input type="text" class="form-control input-sm" id="codigo" name="codigo" >
					</div>

				</div>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="form-group">
					<label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">Fecha</label>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label">
						<input type="date" class="form-control input-sm" id="fecha" name="fecha" >
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Buscar</button>
			</div>
		</form>
	</div>
</div>
<?php 
foreach ($productos as $key => $valor) { ?>
<div id="productos" class='panel panel-danger'>
	<div class='panel-heading'>
		<center><h1>Inventario <?php echo $valor; ?></h1></center>
	</div>
	<div class='panel-body'>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img class='img-rounded img-responsive' height="100" width="100" src='/Smart-Solutions/Imagenes/<?php echo $valor; ?>.png'/>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<form action="guardar_imagen" method="POST" enctype='multipart/form-data' role="form">
				<div class="form-group">
					<input class='hide' type="text" name="codigo" value="<?php echo $valor; ?>">
					<label class="col-xs-12 col-sm-4 col-md-4 col-lg-4 control-label">Cambiar Foto</label>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<input type="file" class="form-control input-sm" id="foto" name='foto' >
					</div>
					<button type="submit" class="btn btn-success input-sm col-xs-12 col-sm-4 col-md-4 col-lg-4">Cambiar</button>
				</div>
			</form>
		</div>
		<table class="table table-condensed table-bordered table-hover">
			<thead>
				<tr>
					<th colspan="4" class="text-center"></th>
					<th colspan="2" class="text-center">Operacion</th>
					<th colspan="3" class="text-center">Saldo</th>
				</tr>
				<tr>
					<th>Fecha</th>
					<th>Descripcion</th>
					<th>Cod_Producto</th>
					<th>Vlr_Unid.</th>
					<th>Cantidad</th>
					<th>Total</th>
					<th>Cantidad</th>
					<th>Vlr_Unid.</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$consulta; 
				if(isset($_POST['fecha']) && $_POST['fecha'] != null){
					$consulta = inventario_consultar2_action($valor,$_POST['fecha']);
				}else{
					$consulta = inventario_consultar_action($valor);
				}
				

				foreach($consulta as $producto) {	?>
				<tr>
					<td><?php echo $producto['fecha']; ?></td>
					<td><?php echo $producto['descripcion']; ?></td>
					<td><?php echo $producto['codigo']; ?></td>

					<td><?php echo $producto['vlr_inicial']; ?></td>
					<td><?php echo $producto['cant_inicial']; ?></td>
					<td><?php echo $producto['vlr_inicial']*$producto['cant_inicial']; ?></td>

					<td><?php echo $producto['cantidad']; ?></td>
					<td><?php echo $producto['vlr_unidad']; ?></td>
					<td><?php echo $producto['total']; ?></td>
				</tr> 
				<?php } ?>
			</tbody>
		</table>
		
	</div>
</div>
<?php } ?>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>