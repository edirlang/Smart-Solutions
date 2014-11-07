<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <center><h1>Datos de la Empresa</h1></center>
  <table class="table table-hover table-bordered">
    <tbody>
      <tr>
        <td>Nombre Legal</td>
        <td id="nombre"><?php echo $empresa['nombre']; ?></td>
      </tr>
      <tr>
        <td>Tipo de Empresa</td>
        <td id="tipo"><?php echo $empresa['tipos_empresa']; ?></td>
      </tr>
      <tr>
        <td>Regimen</td>
        <td id="regimen"><?php echo $empresa['regimen']; ?></td>
      </tr>
      <tr>
        <td>Representante Legal</td>
        <td id="representante"><?php echo $representante['Nombre']." ".$representante['Apellido']; ?></td>
      </tr>
      <tr>
        <td>¿Quienes Somos?</td>
        <td id="quienes"><?php echo $empresa['somos']; ?></td>
      </tr>
      <tr>
        <td>Mision</td>
        <td id="mision"><?php echo $empresa['mision']; ?></td>
      </tr>
      <tr>
        <td>Vision</td>
        <td id="vision"><?php echo $empresa['vision']; ?></td>
      </tr>
      <tr>
        <td>Salario Minimo</td>
        <td id="salario"><?php echo $empresa['salario_minimo']; ?></td>
      </tr>
    </tbody>
  </table>
</div>

<h1>Retencion en la Fuente</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h3>Valor UVT: $ <label id="uvt"><?php echo $empresa['uvt']; ?></label></h3>
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tarifa Tributaria</th>
        <th>Desde</th>
        <th>Hasta</th>
        <th>Impuesto</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($uvts as $uvt) { ?>
      <tr id="<?php echo $uvt['id']; ?>">
        <td id="id"><?php echo $uvt['id']; ?></td>
        <td id="tarifa"><?php echo $uvt['tarifa']; ?></td>
        <td id="desde"><?php echo $uvt['desde']; ?></td>
        <td id="hasta"><?php echo $uvt['hasta']; ?></td>
        <td id="formula">(Ingreso Laboral Grabado(UVT) menos <?php echo $uvt['menos']; ?>)por <?php echo $uvt['tarifa']; ?>% mas <?php echo $uvt['mas'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4>Editar Empresa</h4></Center>
      </div>

      <div class="modal-body">
       <form action="actualizar_empleado.php" method="post">
        <div class="form-group">
          <label id="campo">Cedula</label>
          <input type="text" name="valor" class="form-control"  id="valor"/>

        </div>
      </form>
    </div>

    <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button></center>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="ventana_uvt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4>Editar Empresa</h4></center>
      </div>

      <div class="modal-body">
       <form action="actualizar_empleado.php" method="post">
        <div class="form-group">
          <label id="campo">ID</label>
          <input type="text" name="identificador" class="form-control"  id="identificador"/>

          <label id="campo">Tarifa Tributaria</label>
          <input type="text" name="tarifa_t" class="form-control"  id="tarifa_t"/>

          <label id="campo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 control-label">Rango</label>

          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <input type="text" class="form-control" id="menor">
          </div>
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <label>a</label>
          </div>
          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <input type="text" class="form-control" id="mayor">
          </div>
          <label id="campo">Formula</label>
          <input type="text" name="ecuacion" class="form-control"  id="ecuacion"/>

        </div>
      </form>
    </div>

    <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"> Actualizar</button>
      <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Cerrar</button></center>
    </div>
  </div>
</div>
</div>
<script language="javascript" type="text/javascript" src="/Smart-Solutions/js/empresa.js"></script>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>