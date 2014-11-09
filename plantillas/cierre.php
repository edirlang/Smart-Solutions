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
                <?php 
                $total_d = 0;
                $total_c = 0;
                foreach ($cuentas_cierre as $cuenta) {
                    $total_c += $cuenta['credito'];
                    $total_d += $cuenta['debito'];
                    ?>
                <tr>
                    <td><?php echo $cuenta['cuenta']; ?></td>
                    <td><?php echo $cuenta['debito']; ?></td>
                    <td><?php echo $cuenta['credito']; ?></td>
                    <td><?php echo $cuenta['estado']; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td><h3>Total</h3></td>
                    <td><h3><?php echo $total_d; ?></h3></td>
                    <td><h3><?php echo $total_c; ?></h3></td>
                    <td><h3><?php echo ($total_d-$total_c); ?></h3></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>