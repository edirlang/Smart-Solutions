<?php ob_start(); ?>
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
   <div class='panel panel-success'>
     <div class='panel-heading'>
         <h4>Cierre contable</h4>
     </div>
    
    <div class='panel-body'>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Cuenta</th>
                    <th>Debito</th>
                    <th>Credito</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cuentas_cierre as $cuenta) { ?>
                <tr>
                    <td><?php echo $cuenta['debito']; ?></td>
                    <td><?php echo $cuenta['debito']; ?></td>
                    <td><?php echo $cuenta['credito']; ?></td>
                    <td><?php echo $cuenta['estado']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>