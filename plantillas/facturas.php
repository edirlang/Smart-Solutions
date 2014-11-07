<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="panel panel-success">
    <div class="panel-heading">
      <center><h1 class="panel-title">Empleados</h1></center>
    </div>
  <div class="panel-body">
    <table class="table table-condensed table-hover">
      <thead>
        <tr>
          <th>Num. Factura</th>
          <th>Cliente</th>
          <th>Vendedor</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Total</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($facturas as $row){ ?>
          <tr id="<?php echo $row['num_factura']; ?>">
            <td id="-1"><?php echo $row['num_factura']; ?></td>
            <td id="-2"><?php echo $row['cliente']; ?></td>
            <td id="-3"><?php echo $row['vendedor']; ?></td>
            <td id="-4"><?php echo $row['fecha']; ?></td>
            <td id="-5"><?php echo $row['hora']; ?></td>
            <td id="-6"><?php echo $row['total']; ?></td>
            <td>
              <a class="btn btn-success" id="<?php echo $row['num_factura'] ?>"><span class="glyphicon glyphicon-list"></span> Detalles</a>
              <script language="JavaScript" type="text/javascript">
                $("#<?php echo $row['num_factura']; ?>").click(function(){
                  
                  $.post('consultar_factura',{
                    id: <?php echo $row['num_factura']; ?>
                  },function(datos){
                      datos = $.parseJSON(datos);
                      var a=document.getElementById("Filas");
                        while(a.hasChildNodes()){
                          a.removeChild(a.firstChild);  
                        }
                      for(var i in datos){
                          $("<tr>").append(
          $('<td>', {text: datos[i]['num_factura']
        }), $('<td>', {text: datos[i]['codigo']
      }), $('<td>', {text: datos[i]['cantidad'] 
    }), $('<td>', {text: datos[i]['vlr_venta']  
  }), $('<td>', {text: datos[i]['total']  
})
).hide().appendTo('#Filas').fadeIn('slow');
                        }
                        $("#detalles").modal();
                      }
                    )
                  }
                
                );
                </script>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="modal fade" id="detalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h1>Detalles de factura</h1></center>
      </div>

      <div class="modal-body">
       <table class="table table-hover">
         <thead>
           <tr>
             <th>Num. Factuara</th>
             <th>Codigo</th>
             <th>Cantidad</th>
             <th>Vlr. Unidad</th>
             <th>Total</th>
           </tr>
         </thead>
         <tbody id="Filas"> 
           
         </tbody>
       </table>
    </div>

    <div class="modal-footer">
      <center><button type="submit" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button></center>
    </div>
  </div>
</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>