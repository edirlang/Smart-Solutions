<?php ob_start(); ?>
<div class="container-fluid">
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-success">
                <div class="panel-body">
                   
                </div>
            </div>
        </div>
		
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
    			<div class='panel panel-success'>
    		 		<div class='panel-heading'>
    					<h4>Cierre contable</h4>
    		  		</div>

    		  		<div class='panel-body'>
    		  			
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Debito</th>
                                    <th>Credito</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cierres as $cierre) { ?>
                                <tr>
                                    <td><?php echo $cierre['fecha']; ?></td>
                                    <td><?php echo $cierre['debito']; ?></td>
                                    <td><?php echo $cierre['credito']; ?></td>
                                    <td><?php echo $cierre['estado']; ?></td>
                                    <td><a class="btn btn-primary" href="cierre_detalles?id=<?php  echo $cierre['id']; ?>">Detalles</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
    			</div>
     		</div>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>