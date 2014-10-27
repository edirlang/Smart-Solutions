<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1>Devengado</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
      </tr>
      <tr>
        <th>Codigo</th>
        <th>Empleado</th>
        <th>Salario Basico</th>
        <th>Dias Trabajados</th>
        <th>Sueldo Basico</th>
        <th>Horas Extras</th>
        <th>Comisiones</th>
        <th>Bonificaciones</th>
        <th>Auxilio de Trasporte</th>
        <th>Auxilio de Alimentacion</th>
        <th>Total Devengado</th>
      </tr>
    </thead>
    <tbody>
      
      <?php foreach ($nominas as $nomina): ?>
      <tr>
        <td><?php echo $nomina['id']; ?></td>
        <?php $empleado = consultar_empleado($nomina['empleado']); ?>
        <td><?php echo $empleado['Nombre']." ".$empleado['Apellido']; ?></td>
        <td><?php echo $empleado['salario_basico']; ?></td>
        <td><?php echo $nomina['dias_trab']; ?></td>
        <td><?php echo $nomina['basico']; ?></td>
        <td><?php echo $nomina['horas_extra']; ?></td>
        <td><?php echo $nomina['comisiones']; ?></td>
        <td><?php echo $nomina['bonificaciones']; ?></td>
        <td><?php echo $nomina['auxilio_trasp']; ?></td>
        <td><?php echo $nomina['auxilio_alim']; ?></td>
        <td><?php echo ($nomina['basico']+$nomina['horas_extra']+$nomina['comisiones']+$nomina['bonificaciones']+$nomina['auxilio_trasp']+$nomina['auxilio_alim']); ?></td>
      </tr>
    <?php endforeach ?>
    
  </tbody>
</table>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1>Deduciones</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
      </tr>
      <tr>
        <th>Codigo</th>
        <th>Empleado</th>
        <th>Salud</th>
        <th>Pension</th>
        <th>Fondo de Empleados</th>
        <th>Libranzas</th>
        <th>Envargo Judicial</th>
        <th>Retencion en la fuente</th>
        <th>Total Deduciones</th>
      </tr>
    </thead>
    <tbody>
      
      <?php foreach ($nominas as $nomina): ?>
      <tr>
        <td><?php echo $nomina['id']; ?></td>
        <?php $empleado = consultar_empleado($nomina['empleado']); ?>
        <td><?php echo $empleado['Nombre']." ".$empleado['Apellido']; ?></td>
        <td><?php echo $nomina['salud']; ?></td>
        <td><?php echo $nomina['pension']; ?></td>
        <td><?php echo $nomina['fondo_emple']; ?></td>
        <td><?php echo $nomina['libranzas']; ?></td>
        <td><?php echo $nomina['envargos']; ?></td>
        <td><?php echo $nomina['retencion']; ?></td>
        <td><?php echo ($nomina['salud']+$nomina['pension']+$nomina['fondo_emple']+$nomina['libranzas']+$nomina['envargos']+$nomina['retencion']); ?></td>
      </tr>
    <?php endforeach ?>
    
  </tbody>
</table>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <h1>Total</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
      </tr>
      <tr>
        <th>Codigo</th>
        <th>Empleado</th>
        <th>Salario Basico</th>
        <th>Neto a Pagar</th>
      </tr>
    </thead>
    <tbody>
      
      <?php foreach ($nominas as $nomina): ?>
      <tr>
        <td><?php echo $nomina['id']; ?></td>
        <?php $empleado = consultar_empleado($nomina['empleado']); ?>
        <td><?php echo $empleado['Nombre']." ".$empleado['Apellido']; ?></td>
        <td><?php echo $empleado['salario_basico']; ?></td>
        <td><?php echo $nomina['total']; ?></td>
      </tr>
    <?php endforeach ?>
    
  </tbody>
</table>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>