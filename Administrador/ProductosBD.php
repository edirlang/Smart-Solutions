<meta charset="utf-8">
<?php 
include("../conexion.php");

$productos = mysqli_query($cn,"SELECT * FROM productos");
while($row = mysqli_fetch_row($productos)){ 
   $alerta;
   if ($row[6]<2) {
      $alerta="danger";
  }elseif ($row[6]>2 && $row[6]<6) {
      $alerta="info";
  }else{
      $alerta="success";
  }
  echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
  <div class='panel panel-".$alerta."'>
  <div class='panel-heading'>
  <h4>".$row[1]."</h4>
  </div>
  <div class='panel-body'>
  <p>Codigo: ".$row[0]."</p>
  <p>Valor Compra $ ".$row[4]."</p>
  <p>Valor para la venta $ ".$row[5]."</p>
  <p>Cantidad: ".$row[6]."</p>
  <p>
  <a class='btn btn-primary' href='DetallesProducto.php?id=".$row[0]."'>Detalles</a>
  <a class='btn btn-primary' href='EditarProducto.php?id=".$row[0]."'>Editar</a>
  <a class='btn btn-danger' href='EliminarProducto.php?id=".$row[0]."'>Eliminar</a>
  </p>
  </div>
  </div>
  </div>";
}
mysqli_close($cn);
?>