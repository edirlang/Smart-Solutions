<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart-Solutions</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("menu.php"); ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <?php include('ConsultarProducto.php'); ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Editar <?php echo $producto['Nombre']; ?></h3>
            </div>
              <div class="panel-body">
                <form action="ActulizarProducto.php" method="post">
                  <legend>Nuevo Producto</legend>
                      
                  <div class="form-group">
                    <label for="">Codigo</label>
                    <input type="text" name="Codigo" class="form-control"  id="Codigo" placeholder="Codigo de Producto" value="<?php  echo $producto['Codigo'];?>" readonly="readonly"/>

                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre de Producto" value="<?php  echo $producto['Nombre'];?>" readonly="readonly"/>

                    <label for="">Descripcion</label>
                    <textarea rows="4" cols="50" class="form-control" name="Descripcion" readonly="readonly"><?php  echo $producto['Descripcion'];?></textarea>

                    <label for="">Especificaciones</label>
                    <textarea rows="4" cols="50" class="form-control" name="Especificaciones" readonly="readonly"><?php  echo $producto['Especificaciones'];?></textarea>

                    <label for="">Valor de Compra</label>
                    <input type="number" name="ValorComp" id="inputValorComp" class="form-control" value="<?php  echo $producto['ValorCompra']; ?>" readonly="readonly"/>

                    <label for="">Valor para la Venta</label>
                    <input type="number" name="ValorVen" id="inputValorVen" class="form-control" min="{5}" max="" step="" required="required" value="<?php  echo $producto['ValorVenta'];?>" />

                    <label for="">Cantidad</label>
                    <input type="number" name="Cantidad" id="inputCantidad" class="form-control" min="{5}" max="" step="" required="required" title="" value="<?php  echo $producto['Cantidad'];?>" />

                  </div>

                  <button type="submit" class="btn btn-primary">Actualizar</button>
                  <a href="Productos.php" class="btn btn-primary">Cancelar</a>
                </form>
              </div>
            </div>   
        </div> 
      </div>
    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>