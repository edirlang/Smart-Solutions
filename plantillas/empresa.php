<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1>Datos de la Empresa</h1>
  <table class="table table-hover table-bordered">
    <tbody>
      <tr>
        <td>Nombre Legal</td>
        <td><?php echo $empresa['nombre']; ?></td>
      </tr>
      <tr>
        <td>Tipo de Empresa</td>
        <td><?php echo $empresa['tipos_empresa']; ?></td>
      </tr>
      <tr>
        <td>Regimen</td>
        <td><?php echo $empresa['regimen']; ?></td>
      </tr>
      <tr>
        <td>Representante Legal</td>
        <td><?php echo $representante['Nombre']." ".$representante['Apellido']; ?></td>
      </tr>
      <tr>
        <td>¿Quienes Somos?</td>
        <td><?php echo $empresa['somos']; ?></td>
      </tr>
      <tr>
        <td>Mision</td>
        <td><?php echo $empresa['mision']; ?></td>
      </tr>
      <tr>
        <td>Vision</td>
        <td><?php echo $empresa['vision']; ?></td>
      </tr>
      <tr>
        <td>Salario Minimo</td>
        <td><?php echo $empresa['salario_minimo']; ?></td>
      </tr>
    </tbody>
  </table>
</div>

<h1>Retencion en la Fuente</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <p>Valor UVT: <?php echo $empresa['uvt']; ?></p>
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
      <tr>
        <td><?php echo $uvt['id']; ?></td>
        <td><?php echo $uvt['tarifa']; ?></td>
        <td><?php echo $uvt['desde']; ?></td>
        <td><?php echo $uvt['hasta']; ?></td>
        <td>(Ingreso Laboral Grabado(UVT) menos <?php echo $uvt['menos']; ?>)por <?php echo $uvt['tarifa']; ?>% mas <?php echo $uvt['mas'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>