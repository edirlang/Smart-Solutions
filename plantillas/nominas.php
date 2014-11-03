<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Nominas de empleados</h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <tr>
          <th>Codigo</th>
          <th>Empleado</th>
          <th>Fecha</th>
          <th>Devengado</th>
          <th>Deducciones</th>
          <th>Neto a Pagar</th>
          <th></th>
        </tr>
        <tbody>
          <?php foreach ($nominas as $nomina): ?>
          <?php $empleado = consultar_empleado($nomina['empleado']); ?>

          <tr>
            <td><?php echo $nomina['id']; ?></td>
            <td><?php echo $empleado['Nombre']." ".$empleado['Apellido']; ?></td>
            <td><?php echo $nomina['fecha']; ?></td>
            <td><?php echo ($nomina['basico']+$nomina['horas_extra']+$nomina['comisiones']+$nomina['bonificaciones']+$nomina['auxilio_trasp']+$nomina['auxilio_alim']); ?></td>
            <td><?php echo ($nomina['salud']+$nomina['pension']+$nomina['fondo_emple']+$nomina['libranzas']+$nomina['envargos']+$nomina['retencion']); ?></td>
            <td><?php echo $nomina['total']; ?></td> 
            <td><?php if($nomina['liquidada']){ ?>
              <a href="consultar_nomina?id=<?php echo $nomina['id']; ?>" class="btn btn-default">Imprimir</a>
              <?php } else{?>
              <a href="liquidar_nomina?id=<?php echo $nomina['id']; ?>" class="btn btn-default">Liquidar</a>
              <?php } ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
</div>

<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>