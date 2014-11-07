<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
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
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Nueva Nomina</h3>
    </div>
    <div class="panel-body">
      <form action="nueva_nomina" method="POST" role="form">
        <legend>Nueva Nomina</legend>

        <div class="form-group">
          <label for="">Empleado</label>
          <select class="form-control" id="empleado" name="empleado">
            <?php foreach ($empleados as $key => $empleado): ?>
            <option value="<?php echo $empleado['Cedula'] ?>"><?php echo $empleado['Nombre']." ".$empleado['Apellido']; ?></option>
          <?php endforeach ?>
        </select>
        
        <label for="">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Dias Trabajados">

        <label for="">Dias Trabajados</label>
        <input type="number" class="form-control" id="dias" name="dias" placeholder="Dias Trabajados">

        <label for="">Horas Extra</label>
        <input type="number" class="form-control" id="extras" name="extras" placeholder="Numero de horas extra">

        <label for="">Comisiones</label>
        <input type="number" class="form-control" id="comision" name="comision" placeholder="Comiciones Otorgadas">

        <label for="">Bonificaciones</label>
        <input type="number" class="form-control" id="bonificacion" name="bonificacion" placeholder="Bonoficacion otorgada">

        <label for="">libranzas</label>
        <input type="number" class="form-control" id="libranzas" name="libranzas" placeholder="Libranzas a empleado">

        <label for="">Embargo Judicial</label>
        <input type="number" class="form-control" id="embargo" name="embargo" placeholder="Valor de embargo judicial">
      </div>
      <button type="submit" class="btn btn-primary">Generar</button>
    </form>
  </div>
</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>