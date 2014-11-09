<?php ob_start(); ?>
<div class="<?php echo $tamano; ?>">

  <div class="panel panel-success">
    <div class="panel-heading">
      <center><h3 class="panel-title">Proveedores Registrados</h3></Center>
    </div>
    <div class="panel-body">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          foreach ($proveedores as $row) { ?>
            <tr>
              <td><?php echo $row['codigo']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['direccion']; ?></td>
              <td><a class='btn btn-success' id='<?php echo $row['codigo']; ?>' href='nuevo_pedido?id=<?php echo $row['codigo']; ?>'><span class='glyphicon glyphicon-edit'></span> Ingresar Pedido</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<form action="nuevo_pedido" name="formu" method="post" class="visible-print">
  <input type="text" name="codigo" id="codigo">
  <input type="submit" id="env">
</form>

<?php if($_SESSION['rol']=='admin'){ ?>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <center><h3 class="panel-title">Nuevo Proveedor</h3></center>
    </div>
    <div class="panel-body">
      <form action="crear_proveedor" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Codigo</label>
          <input type="text" class="form-control" name="codigo" placeholder="Codigo de Proveedor">

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombre">

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono" placeholder="Telefono de contacto">

          <label for="">Direccion</label>
          <input type="text" class="form-control" name="direccion" placeholder="dirrecion de envio">

        </div>
        <center><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span> Enviar</button>
        <a href="proveedores" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Limpiar</a></Center>
      </form>
    </div>
  </div>
</div>
<?php } ?>

<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>