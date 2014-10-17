<?php include("menu.php"); ?>

  <div class="container">
    <div class="row">
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

      </div>
      <?php include('consultar_empleado.php'); ?>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Editar <?php echo $empleado['Nombre']; ?></h3>
          </div>
          <div class="panel-body">
            <form action="actualizar_empleado.php" method="post">
              <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" name="cedula" class="form-control"  id="cedula" placeholder="Codigo de Producto" value="<?php  echo $empleado['Cedula'];?>" readonly="readonly"/>

                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de Producto" value="<?php  echo $empleado['Nombre'];?>"/>

                <label for="">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?php  echo $empleado['Apellido'];?>"/>

                <label for="">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?php  echo $empleado['Telefono'];?>">

                <label for="">Cargo</label>
                <input type="text" class="form-control" name="cargo" value="<?php  echo $empleado['Rol'];?>">
              </div>

              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="Empleados.php" class="btn btn-primary">Cancelar</a>
            </form>
          </div>
        </div>   
      </div> 
    </div>
  </div>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</html>