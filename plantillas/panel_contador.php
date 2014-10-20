<?php ob_start(); ?>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="jumbotron">
        <div class="container">
          <h1>Inventario</h1>
          <p>Productos para vender</p>
          <p>
            <a class="btn btn-primary btn-lg" href="Productos.php">Ir</a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="jumbotron">
        <div class="container">
          <h1>Libro de transaciones</h1>
          <p>Registros de cuentas contables</p>
          <p>
            <a class="btn btn-primary btn-lg" href="Transacion-manual.php">Ir</a>
          </p>
        </div>
      </div>
    </div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>