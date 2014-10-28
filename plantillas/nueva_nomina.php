<?php ob_start(); ?>

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

    <label for="">Fondo de empleados</label>
    <input type="number" class="form-control" id="fondo" name="fondo" placeholder="Porcentaje de ayuda al fondo de empleados">

    <label for="">Embargo Judicial</label>
    <input type="number" class="form-control" id="embargo" name="embargo" placeholder="Valor de embargo judicial">
  </div>
  <button type="submit" class="btn btn-primary">Generar</button>
</form>

<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>