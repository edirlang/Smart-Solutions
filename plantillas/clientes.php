<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <center><h3 class="panel-title">Clientes</h3></center>
    </div>
    <div class="panel-body">
      <table class="table table-condensed table-hover">
        <thead>
         <tr>
           <th>Cedula</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Telefono</th>
           <th></th>
           <th></th>
         </tr>
       </thead>
       <tbody id="Filas">
         <?php foreach($clientes as $row){ ?>
         <tr id='<?php echo $row['Cedula']; ?>'>
           <td><?php echo $row['Cedula']; ?></td>
           <td id="1"><?php echo $row['Nombre']; ?></td>
           <td id="2"><?php echo $row['Apellido']; ?></td>
           <td id="3"><?php echo $row['Telefono']; ?></td>
           <td>
            <center><a class="btn btn-success" data-toggle="modal" data-target="#ventana" id="<?php echo $row['Cedula']; ?>"><span class="glyphicon glyphicon-edit"></span> Editar</a></center>
            <script language="JavaScript" type="text/javascript">
            $("#<?php echo $row['Cedula']; ?>").click(function(){

              $.post('consultar_cliente',{
                id: <?php echo $row['Cedula']; ?>
              },function(datos){
                datos = $.parseJSON(datos);
                document.getElementById('cedula').value =datos['Cedula'];
                document.getElementById('nombre').value =datos['Nombre'];
                document.getElementById('apellido').value =datos['Apellido'];
                document.getElementById('telefono').value =datos['Telefono'];
              }
              )
            }
            );
            </script>
          </td>
          <td>
            <?php if($_SESSION['rol']=='admin'){ ?>
            <a class="btn btn-danger" id="eli<?php echo $row['Cedula']; ?>" href="eliminar_cliente?id=<?php echo $row['Cedula']; ?>"><span class="glyphicon glyphicon-trash blue"></span> Eliminar</a> 
            <?php } ?>
          </td>
          <td><a id="facturas<?php echo $row['Cedula']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-list"></span> Ver Facturas</a></td>
          <script language="JavaScript" type="text/javascript">
          $("#facturas<?php echo $row['Cedula']; ?>").click(function(){
            $.post('consultar_facturas_cliente',{
              id: <?php echo $row['Cedula']; ?>
            },function(datos){
              var a=document.getElementById("Filas-fact");
              while(a.hasChildNodes()){
                a.removeChild(a.firstChild);  
              }
              datos=$.parseJSON(datos);
              datos.forEach(
                function(valor,key){
                  var forma_pago='Contado';
                  if(valor['Credito']==true){
                    forma_pago = 'Credito';
                  }

                  $("<tr>").append(
                    $('<td>', { text: valor['num_factura']
                  }), $('<td>', { text: valor['cliente']
                }), $('<td>', { text: valor['fecha'] 
              }), $('<td>', { text: valor['hora']  
            }), $('<td>', { text: valor['vendedor']  
          }), $('<td>', { text: valor['total']  
        }), $('<td><a type="submit" class="btn btn-success" href="imprimir_factura_cliente?id='+valor['num_factura']+'"><span class="glyphicon glyphicon-print"></span>Imprimir</a></td>')
          ).hide().appendTo('#Filas-fact').fadeIn('slow');
                });
              
              $("#facturas").modal();
            }
            )
}
);
</script>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
 <div class="panel panel-success">
   <div class="panel-heading">
     <center><h3 class="panel-title">Nuevo Cliente</h3></center>
   </div>
   <div class="panel-body">

    <form id="formulario" name="formulario" role="form" method="post">
      <div class="form-group">
        <label for="">Cedula</label>
        <input type="text" class="form-control" id="Cedula"  name="Cedula" placeholder="Cedula">
        <label for="">Nombre</label>
        <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="primer nombre">
        <label for="">Apellido</label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="primer apellido">
        <label for="">Telefono</label>
        <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="telefono">
      </div>
      <center><button id="Enviar" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button></center>
    </form>  
  </div>
</div>
</div> 

<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4>Editar Cliente</h4></center>
      </div>

      <div class="modal-body">
       <form id="editar" name="editar" action="actualizar_cliente.php" method="post">
        <div class="form-group">
          <label for="">Cedula</label>
          <input type="text" name="cedula" class="form-control"  id="cedula"  readonly="readonly"/>

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" />

          <label for="">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido"/>

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono" id="telefono">
        </div>
      </form>
    </div>

    <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" id="guardar" data-dismiss="modal"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="facturas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4>Facturas</h4></center>
      </div>

      <div class="modal-body">
       <table class="table table-hover">
         <thead>
           <tr>
             <th>Num. Factuara</th>
             <th>Cliente</th>
             <th>Fecha</th>
             <th>Hora</th>
             <th>Vendedor</th>
             <th>Total</th>
             <th>Forma Pago</th>
           </tr>
         </thead>
         <tbody id="Filas-fact"> 

         </tbody>
       </table>
     </div>

     <div class="modal-footer">
      <center><button type="submit" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cerrar</button></center>
    </div>
  </div>
</div>
</div> 


<script type="text/javascript" src="/Smart-Solutions/js/clientes.js"></script>

<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>