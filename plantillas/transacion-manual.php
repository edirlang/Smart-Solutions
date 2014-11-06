<?php ob_start(); ?>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Libro Contable</h3>
    </div>
    <div class="panel-body">
      <div class="panel panel-success">
        <div class="panel-body">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <label>Documento: </label>
                <input type="text" name="documento" id="documento" class="form-control">
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Cuenta: </label>
                <input type="text" name="cuenta" id="cuenta" class="form-control">
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Fecha: </label>
                <input type="date" name="fecha" id="fecha" class="form-control">
              </div>
            </div>
            <button type="input" class="btn btn-primary" id="buscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
            <a type="button" class="btn btn-primary" href="nueva_contabilidad"><span class="glyphicon glyphicon-plus"></span> Nueva transaccion</a>
          </div>
        </div>
      </div>
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Documento</th>
            <th>Tramitador</th>
            <th>Codigo</th>
            <th>Fecha</th>
            <th>Naturaleza</th>
            <th>Descripcion</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody id="filas">


          <?php 
          $total_c=0;
          $total_d=0;
          foreach ($transaciones as $valor) {
            $tramitador = consultar_empleado($valor['Cedula']);
            if ($valor['Naturaleza']=='D') {
              $total_d+=$valor['Valor'];
            }else{
              $total_c+=$valor['Valor'];
            } ?>
            <tr>
              <td><?php echo $valor['Documento']; ?></td>
              <td><?php echo $tramitador['Nombre']."" .$tramitador['Apellido']; ?></td>
              <td><?php echo $valor['Codigo']; ?></td>
              <td><?php echo $valor['Fecha']; ?></td>
              <td><?php if($valor['Naturaleza'] == 'C'){
                          echo 'Credito';
                        }else{
                          echo "Debito";
                        }?></td>
              <td><?php echo $valor['Descripcion']; ?></td>
              <td><?php echo $valor['Valor']; ?></td>
            </tr> 
          <?php } ?>
          <tr>
            <td><h5>Total Debito</h5></td>
            <td><h5><?php echo money_format('%(#0n', $total_d); ?></h5></td>
            <td><h5>Total Credito</h5></td>
            <td><h5><?php echo money_format('%(#0n', $total_c); ?></h5></td>
            <td><h5>Estado de Cuenta</h5></td>
            <td><h5><?php echo money_format('%(#0n',($total_d-$total_c)); ?></h5></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<script type="text/javascript" src="/Smart-Solutions/js/buscar_transaciones.js"></script>
  <?php $contenido = ob_get_clean(); ?>
  <?php include "plantilla_base.php"; ?>