<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <a href="nomina" class="btn btn-success hidden-print">Atras</a>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Nomina numero  <?php echo $nomina['id']; ?></h3>
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <tr>
          <td>Codigo</td>
          <td><?php echo $nomina['id']; ?></td>
        </tr>
        <tr>
          <td>Empleado</td>
          <td><?php echo $empleado['Nombre']." ".$empleado['Apellido']; ?></td>
        </tr>
        <tr>
          <td>Fecha</td>  
          <td><?php echo $nomina['fecha']; ?></td>
        </tr>
        <tr>
          <th>Salario Basico</th>
          <td><?php echo $empleado['salario_basico']; ?></td>  
        </tr>
        <tr>
          <th>Dias Trabajados</th>
          <td><?php echo $nomina['dias_trab']; ?></td> 
        </tr>
        <tr>
          <th>Sueldo Basico</th>
          <td><?php echo $nomina['basico']; ?></td>  
        </tr>
        <tr>
          <th>Horas Extras</th>
          <td><?php echo $nomina['horas_extra']; ?></td>
        </tr>
        <tr>
          <th>Comisiones</th>
          <td><?php echo $nomina['comisiones']; ?></td> 
        </tr>
        <tr>
          <th>Bonificaciones</th>
          <td><?php echo $nomina['bonificaciones']; ?></td>
        </tr>
        <tr>
          <th>Auxilio de Trasporte</th>
          <td><?php echo $nomina['auxilio_trasp']; ?></td>
        </tr>
        <tr>
          <th>Auxilio de Alimentacion</th>
          <td><?php echo $nomina['auxilio_alim']; ?></td>
        </tr>
        <tr>
          <th>Total Devengado</th> 
          <td><?php echo ($nomina['basico']+$nomina['horas_extra']+$nomina['comisiones']+$nomina['bonificaciones']+$nomina['auxilio_trasp']+$nomina['auxilio_alim']); ?></td>
        </tr>
        <tr>
          <th>Salud</th>
          <td><?php echo $nomina['salud']; ?></td>
        </tr>
        <tr>
          <th>Pension</th>
          <td><?php echo $nomina['pension']; ?></td>
        </tr>
        <tr>
          <th>Fondo de Empleados</th>
          <td><?php echo $nomina['fondo_emple']; ?></td>
        </tr>
        <tr>
          <th>Libranzas</th>
          <td><?php echo $nomina['libranzas']; ?></td>
        </tr>
        <tr>
          <th>Envargo Judicial</th>
          <td><?php echo $nomina['envargos']; ?></td>
        </tr>
        <tr>
          <th>Retencion en la fuente</th>
          <td><?php echo $nomina['retencion']; ?></td>
        </tr>
        <tr>
          <th>Total Deduciones</th>
          <td><?php echo ($nomina['salud']+$nomina['pension']+$nomina['fondo_emple']+$nomina['libranzas']+$nomina['envargos']+$nomina['retencion']); ?></td>
        </tr>
        <tr>
          <th>Neto a Pagar</th>
          <td><?php echo $nomina['total']; ?></td>    
        </tr>
      </table>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){ window.print(); }); 
</script>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>

