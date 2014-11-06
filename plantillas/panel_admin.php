<?php ob_start(); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <h3>¿Quienes Somos?</h3>
      <p class="text-info" align="justify"><?php echo $empresa['somos']; ?></p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3>Datos de la empresa</h3>
        <ul>
          <li class="text-info"><b>Nombre legalizado: </b><?php echo $empresa['nombre']; ?></li>
          <li class="text-info"><b>Constitucion: </b><?php echo $empresa['tipos_empresa']; ?></li>
          <li class="text-info"><b>Regimen: </b><?php echo $empresa['regimen']; ?></li>
          <li class="text-info"><b>Representante legal: </b> Edixon Fabian Hernandez Carrillo</li>
          <li class="text-info"><b>Tarifa de IVA: </b> 16%</li>
        </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3>Objeto Social</h3>
      <p class="text-info" align="justify">
        <?php echo $empresa['objeto']; ?>
      </p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3>Mision</h3>
      <p class="text-info" align="justify">
        <?php echo $empresa['mision']; ?>
      </p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <h3>Vision</h3>
      <p class="text-info" align="justify">
        <?php echo $empresa['vision']; ?>
      </p>
    </div>
  </div>
</div>

<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>