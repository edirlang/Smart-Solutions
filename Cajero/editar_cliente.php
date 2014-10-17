<?php include("menu.php"); ?>

  <div class="container">
    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

      </div>
      <?php include('consultar_cliente.php'); ?>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Editar <?php echo $cliente['Nombre']; ?></h3>
          </div>
          <div class="panel-body">
            <form action="actualizar_cliente.php" method="post">
              <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" name="cedula" class="form-control"  id="cedula" placeholder="Codigo de Producto" value="<?php  echo $cliente['Cedula'];?>" readonly="readonly"/>

                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de Producto" value="<?php  echo $cliente['Nombre'];?>"/>

                <label for="">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?php  echo $cliente['Apellido'];?>"/>

                <label for="">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?php  echo $cliente['Telefono'];?>">
              </div>
              <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
              <a href="Clientes.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
            </form>
          </div>
        </div>   
      </div> 
    </div>
  </div>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</html>