<?php ob_start(); ?>
<?php 
$total_activos_corientes2 = 0;
$total_activos_corientes1 = 0; 
$total_activos_no_corientes2 = 0;
$total_activos_no_corientes1 = 0;
$total_activos_bancarios2 = 0;
$total_activos_bancarios1 = 0; 
$total_pasivos_corrientes2 = 0;
$total_pasivos_corrientes1 = 0;
$total_pasivos_no_corrientes2 = 0;
$total_pasivos_no_corrientes1 = 0; 
$total_pasivos_bancarios2 = 0;
$total_pasivos_bancarios1 = 0; 
$total_patrimonio2=0;
$total_patrimonio1=0;
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="text-center">
    <h1><?php echo $empresa['nombre']; ?></h1>
    <p>Estado numero <?php echo $estado1['id']; ?></p>
    <p>Fecha <?php echo $estado1['fecha']; ?></p>
    <p>Unidad monetaria: Pesos($)</p>
  </div>
  
  <div class="panel panel-success">

    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr class="success">
            <th></th>
            <th><?php echo $cierre1['fecha']; ?></th>
            <th><?php echo $cierre2['fecha']; ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <td>Activos</td>
           <td></td>
           <td></td>
         </tr>
         <tr>
           <td>Activos Corientes</td>
           <td></td>
           <td></td>
         </tr>
         <tr>
           <td>Efectivo y equivalente a efectivo</td>
           <td>
            <?php 
            $valor=0;
            foreach ($detalles_cierre1 as $detalle) {

             if($detalle['cuenta']=='1105' || $detalle['cuenta']=='112005' || $detalle['cuenta']=='1120'){
              $valor= $valor+$detalle['estado'];  
            }
          }
          echo money_format('%(#0n',$valor);
            $total_activos_corientes1 = $total_activos_corientes1 + $valor;
            ?>
          </td>
          <td>
           <?php 
           $valor=0;
           foreach ($detalles_cierre2 as $detalle) {
            if($detalle['cuenta']=='1105' || $detalle['cuenta']=='112005' || $detalle['cuenta'] =='1120'){
              $valor= $valor+$detalle['estado'];  
            }
          }
          echo money_format('%(#0n',$valor);
            $total_activos_corientes2 = $total_activos_corientes2 + $valor;
            ?>
          </td>
        </tr>
      </tr>
      <tr>
       <td>Otros activos finanacieros corrientes</td>
       <td>
        <?php foreach ($detalles_cierre1 as $detalle) {
         if($detalle['cuenta']=='1205'){
          echo money_format('%(#0n',$detalle['estado']);
            $total_activos_corientes1 = $total_activos_corientes1 + $detalle['estado'];
          }
        } ?>
      </td>
      <td>
       <?php foreach ($detalles_cierre2 as $detalle) {
         if($detalle['cuenta']=='1205'){
          echo money_format('%(#0n',$detalle['estado']);
            $total_activos_corientes2 = $total_activos_corientes2 + $detalle['estado'];
          }
        } ?>
      </td>
    </tr>

    <tr>
     <td>Deudores Comerciales y otras cuentas por cobrar corientes</td>
     <td>
      <?php 
      $valor=0;
      foreach ($detalles_cierre1 as $detalle) {
       if($detalle['cuenta']=='1305' || $detalle['cuenta']=='1365'){
        $valor = $valor+$detalle['estado'];
      }
    } 
    echo money_format('%(#0n',$valor);
      $total_activos_corientes1 = $total_activos_corientes1 + $valor;
      ?>
    </td>
    <td>
     <?php 
     $valor;
     foreach ($detalles_cierre2 as $detalle) {
       if($detalle['cuenta']=='1305' || $detalle['cuenta']=='1365'){
        $valor = $valor+$detalle['estado'];
      }
    }
    echo money_format('%(#0n',$valor);
    $total_activos_corientes2 = $total_activos_corientes2 + $valor; ?>
  </td>
</tr>
<tr>
  <td>Inventarios</td>
  <td>
    <?php foreach ($detalles_cierre1 as $detalle) {
     if($detalle['cuenta']=='14'){
      echo money_format('%(#0n',$detalle['estado']);
        $total_activos_corientes1 = $total_activos_corientes1 + $detalle['estado'];
      }
    } ?>
  </td>
  <td>
   <?php foreach ($detalles_cierre2 as $detalle) {
     if($detalle['cuenta']=='14'){
      echo money_format('%(#0n',$detalle['estado']);
        $total_activos_corientes2 = $total_activos_corientes2 + $detalle['estado'];
      }
    } ?>
  </td>
</tr>

<tr class="success">
 <td ><strong>Total  activos corientes</strong></td>
 <td><strong><?php echo $total_activos_corientes1; ?></strong></td>
 <td><strong><?php echo $total_activos_corientes2; ?></strong></td>
</tr>
<tr>
 <td ><strong>Activos no Corientes</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td>Otros activos fianacieros no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otros activos no financieros no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Derechos por cobrar no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Derechos por cobrar a entidades relacionadas, no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Inversiones contabilizadas por el metodo de participacion/td>
   <td>
    <?php foreach ($detalles_cierre1 as $detalle) {
     if($detalle['cuenta']=='1105'){
      echo $detalle['estado'];
      $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
    }
  } ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Activos intangibles distintos de la plusvalia</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Plusvalia</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Propiedad Planta y equipo</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='15'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='15'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Propiedad de inversion</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Activos por impuestos diferidos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes1 = $total_activos_no_corientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_no_corientes2 = $total_activos_no_corientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Total  activos no corientes</strong></td>
 <td><strong><?php echo $total_activos_no_corientes1; ?></strong></td>
 <td><strong><?php echo $total_activos_no_corientes2; ?></strong></td>
</tr>
<tr class="success">
 <td ><strong>Total activos no bancarios</strong></td>
 <td><strong><?php echo $total_activos_no_corientes1+$total_activos_corientes1; ?></strong></td>
 <td><strong><?php echo $total_activos_no_corientes2+$total_activos_corientes2; ?></strong></td>
</tr>
<tr>
 <td ><strong>Activos servicios bancarios</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td>Efectivos y depocitos en bancos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Operaciones con liquidacion en curso</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='135520'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='135520'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Instrumentos para negociacion</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='130530'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='130530'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Contratos de derivados financieros</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Creditos y cuentas por cobrar a clientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1305'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1305'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Instrumentos de inversión disponibles para la venta</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Inversiones en sociedades </td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='12'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='12'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Intangibles</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='16'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='16'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Activo fijo</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Impuestos corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='135517'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='135517'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Impuestos diferidos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='135518'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='135518'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otros activos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='18'){
    echo $detalle['estado'];
    $total_activos_bancarios1 = $total_activos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='18'){
    echo $detalle['estado'];
    $total_activos_bancarios2 = $total_activos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Total  activos servicios bancarios</strong></td>
 <td><strong><?php echo $total_activos_bancarios1; ?></strong></td>
 <td><strong><?php echo $total_activos_bancarios2; ?></strong></td>
</tr>
<?php 
$Total_activos1 =$total_activos_bancarios1+$total_activos_corientes1+$total_activos_no_corientes1;
$Total_activos2 =$total_activos_bancarios2+$total_activos_corientes2+$total_activos_no_corientes2;
?>
<tr class="success">
 <td ><strong>Total  activos</strong></td>
 <td><strong><?php echo $Total_activos1; ?></strong></td>
 <td><strong><?php echo $Total_activos2; ?></strong></td>
</tr>

<tr>
 <td ><strong>Patrimonio neto y pasivos</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td ><strong>Negocios no bancarios (Presentación)</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td ><strong>Pasivos, corrientes</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td>Otros pasivos financieros corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='26'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='26'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Cuentas por pagar comerciales y otras cuentas por pagar</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='23'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='23'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Cuentas por pagar a entidades relacionadas, corriente</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otras provisiones a corto plazo</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='2695'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='2695'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Pasivos por Impuestos corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='24'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='24'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Provisiones corrientes por beneficios a los empleados</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1299'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1299'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otros pasivos no financieros corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='28'){
    echo $detalle['estado'];
    $total_pasivos_corrientes1 = $total_pasivos_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='28'){
    echo $detalle['estado'];
    $total_pasivos_corrientes2 = $total_pasivos_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Total Pasivos corrientes</strong></td>
 <td><strong><?php echo $total_pasivos_corrientes1; ?></strong></td>
 <td><strong><?php echo $total_pasivos_corrientes2; ?></strong></td>
</tr>

<tr>
 <td ><strong>Pasivos, no corrientes</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td>Otros pasivos financieros no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Pasivos no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Cuentas por pagar a entidades relacionadas, no corriente</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otras provisiones a largo plazo</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1699'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1699'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Pasivos por Impuestos diferidos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Provisiones no corrientes por beneficios a los empleados</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otros pasivos no financieros no corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes1 = $total_pasivos_no_corrientes1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_no_corrientes2 = $total_pasivos_no_corrientes2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Total Pasivos no corrientes</strong></td>
 <td><strong><?php echo $total_pasivos_no_corrientes1; ?></strong></td>
 <td><strong><?php echo $total_pasivos_no_corrientes2; ?></strong></td>
</tr>
<tr class="success">
 <td ><strong>Total Pasivos de negociaciones no bancarias</strong></td>
 <td><strong><?php echo $total_pasivos_no_corrientes1+$total_pasivos_corrientes1; ?></strong></td>
 <td><strong><?php echo $total_pasivos_no_corrientes2+$total_pasivos_corrientes2; ?></strong></td>
</tr>

<tr>
 <td ><strong>Pasivos servicios bancarios (Presentacion)</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td>Depósitos y otras obligaciones a la vista</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Operaciones con liquidación en curso</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Depósitos y otras captaciones a plazo</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Contratos de derivados financieros</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Obligaciones con bancos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Instrumentos de deuda emitidos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otras obligaciones financieras</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Impuestos corrientes</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Impuestos diferidos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Provisiones</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otros pasivos</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios1 = $total_pasivos_bancarios1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_pasivos_bancarios2 = $total_pasivos_bancarios2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Total Pasivos Servicios Bancarios</strong></td>
 <td><strong><?php echo $total_pasivos_bancarios1; ?></strong></td>
 <td><strong><?php echo $total_pasivos_bancarios2; ?></strong></td>
</tr>
<?php 
$total_pasivos1=$total_pasivos_corrientes1+$total_pasivos_no_corrientes1+$total_pasivos_bancarios1;
$total_pasivos2=$total_pasivos_corrientes2+$total_pasivos_no_corrientes2+$total_pasivos_bancarios2;
?>
<tr class="success">
 <td ><strong>Total Pasivos</strong></td>
 <td><strong><?php echo $total_pasivos1; ?></strong></td>
 <td><strong><?php echo $total_pasivos2; ?></strong></td>
</tr>

<tr>
 <td ><strong>Patrimonio neto</strong></td>
 <td></td>
 <td></td>
</tr>
<tr>
 <td>Capital emitido</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_patrimonio1 = $total_patrimonio1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1120'){
    echo $detalle['estado'];
    $total_patrimonio2 = $total_patrimonio2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Ganancias (pérdidas) acumuladas</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio1 = $total_patrimonio1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio2 = $total_patrimonio2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Primas de emisión</td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio1 = $total_patrimonio1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio2 = $total_patrimonio2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr>
 <td>Otras reservas </td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio1 = $total_patrimonio1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio2 = $total_patrimonio2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Patrimonio atribuible a los propietarios de la controladora</strong></td>
 <td><strong><?php echo $total_patrimonio1; ?></strong></td>
 <td><strong><?php echo $total_patrimonio2; ?></strong></td>
</tr>
<tr>
 <td>Participaciones no controladas </td>
 <td>
  <?php foreach ($detalles_cierre1 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio1 = $total_patrimonio1 + $detalle['estado'];
  }
} ?>
</td>
<td>
 <?php foreach ($detalles_cierre2 as $detalle) {
   if($detalle['cuenta']=='1105'){
    echo $detalle['estado'];
    $total_patrimonio2 = $total_patrimonio2 + $detalle['estado'];
  }
} ?>
</td>
</tr>
<tr class="success">
 <td ><strong>Total Pasivos</strong></td>
 <td><strong><?php echo $total_patrimonio1; ?></strong></td>
 <td><strong><?php echo $total_patrimonio2; ?></strong></td>
</tr>

<tr class="success">
 <td ><strong>Total patrimonio y pasivos</strong></td>
 <td><strong><?php echo $total_patrimonio1+$total_pasivos1; ?></strong></td>
 <td><strong><?php echo $total_patrimonio2+$total_pasivos2; ?></strong></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>