<?php ob_start(); ?>
<?php 
foreach ($productos as $key => $valor) { ?>
<div id="productos" class='panel panel-danger'>
	<div class='panel-heading'>
		<h1>Inventario <?php echo $valor; ?></h1>
	</div>
	<div class='panel-body'>
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th colspan="4" class="text-center"></th>
					<th colspan="2"class="text-center">Entrada</th>
					<th colspan="2" class="text-center">Salida</th>
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
					<th>Total</th>
					<th>Cantidad</th>
					<th>Vlr_Unid.</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$consulta = inventario_consultar_action($valor);
				
				foreach($consulta as $producto) {	?>
					<tr>
						<td><?php echo $producto['fecha']; ?></td>
						<td><?php echo $producto['descripcion']; ?></td>
						<td><?php echo $producto['codigo']; ?></td>

						<td><?php echo $producto['vlr_inicial']; ?></td>
						<?php if($producto['tipo']=='C'){ ?>
						<td><?php echo $producto['cant_inicial']; ?></td>
						<td><?php echo $producto['vlr_inicial']*$producto['cant_inicial']; ?></td>
						<td>0</td>
						<td>0</td>
						<?php }else{ ?>
						<td>0</td>
						<td>0</td>
						<td><?php echo $producto['cant_inicial']; ?></td>
						<td><?php echo $producto['vlr_inicial']*$producto['cant_inicial']; ?></td>

						<?php } ?>

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