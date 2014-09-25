
<?php include("menu.php"); ?>
<?php include("inventarioBD.php"); ?>

<div class="container">
	<div class="row">
		<div class='panel panel-".$alerta."'>
			<div class='panel-heading'>
				<h4>Kardex</h4>
			</div>
			<div class='panel-body'>
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Cod_Producto</th>
							<th>Descripcion</th>
							<th>Cantidad</th>
							<th>Vlr_Unid.</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysql_fetch_assoc($inventario)){ ?>
						<tr>
							<td><?php echo $row['fecha']; ?></td>
							<td><?php echo $row['codigo']; ?></td>
							<td><?php echo $row['descripcion']; ?></td>
							<td><?php echo $row['cantidad']; ?></td>
							<td><?php echo $row['vlr_unidad']; ?></td>
							<td><?php echo $row['total']; ?></td>
						</tr>
						<?php } 
						mysql_close()?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>