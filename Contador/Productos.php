
<?php include("menu.php"); ?>
<?php include("inventarioBD.php"); ?>

<div class="container">
	<div class="row">
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
						$inventario = mysql_query("SELECT * FROM `inventario` where `codigo` like '".$valor."' order by fecha",$cn);
						while($row = mysql_fetch_assoc($inventario)){ 
							 ?>
							<tr>
								<td><?php echo $row['fecha']; ?></td>
								<td><?php echo $row['descripcion']; ?></td>
								<td><?php echo $row['codigo']; ?></td>

								<td><?php echo $row['vlr_inicial']; ?></td>
								<?php if($row['tipo']=='C'){ ?>
								<td><?php echo $row['cant_inicial']; ?></td>
								<td><?php echo $row['vlr_inicial']*$row['cant_inicial']; ?></td>
								<td>0</td>
								<td>0</td>
								<?php }else{ ?>
								<td>0</td>
								<td>0</td>
								<td><?php echo $row['cant_inicial']; ?></td>
								<td><?php echo $row['vlr_inicial']*$row['cant_inicial']; ?></td>

								<?php } ?>

								<td><?php echo $row['cantidad']; ?></td>
								<td><?php echo $row['vlr_unidad']; ?></td>
								<td><?php echo $row['total']; ?></td>

							</tr> 
							<?php } ?>
					</tbody>
				</table>
				
			</div>
		</div>
		<?php } 
				mysql_close(); ?>
	</div>
</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>