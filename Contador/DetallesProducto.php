<?php 
include '../conexion.php';
$id = $_GET['id'];
$producto;
$sql = 'SELECT * FROM productos';
$resultado = mysqli_query($cn,$sql);
while ($row = mysqli_fetch_assoc($resultado)) {
	if($row['Codigo'] == $id){
		$producto=$row;
	}
}                    
mysqli_close($cn);
?>
<?php include("menu.php"); ?>    

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class='panel-heading'>
					<h3><?php echo $producto['Nombre']; ?></h3>
				</div>
				<div class="panel-body">
					<p>Codigo: <?php echo $producto['Codigo']; ?></p>
					<p>Nombre: <?php echo $producto['Nombre']; ?></p>
					<p>Descripcion: <?php echo $producto['Descripcion']; ?></p>
					<p>Especificaciones: <?php echo $producto['Especificaciones']; ?></p>
					<p>ValorCompra: <?php echo $producto['ValorCompra']; ?></p>
					<p>ValorVenta: <?php echo $producto['ValorVenta']; ?></p>
					<p>Cantidad: <?php echo $producto['Cantidad']; ?></p>
				</div>
			</div>
		</div>
		
	</div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>