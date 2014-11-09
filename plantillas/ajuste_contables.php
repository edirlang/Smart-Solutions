<?php ob_start(); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div id="Mensaje" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="panel panel-info">
        <div class="panel-heading">
          <center><h3 class="panel-title">Nueva Transacion</h3></center>
      </div>
      <div class="panel-body">
          <form id="formulario" name="formulario" method="POST" role="form" on>
            <div class="form-group">

              <label for="">Cierre numero</label>
              <input type="number" class="form-control" name="id" id="id" value="<?php echo $cierre['id']; ?>" disabled>

              <label for="">Codigo</label>
              <select class="form-control" name="codigo" id="codigo">
                <?php
                foreach ($codigos as $row){  
                    if($row['Codigo'] =='1105' || $row['Codigo'] =='112005' || $row['Codigo']== '530505' || $row['Codigo'] == '4210' || $row['Codigo'] == '1305' || $row['Codigo'] == '4295' || $row['Codigo'] == '5310' || $row['Codigo'] == '28' || $row['Codigo'] == '1365' || $row['Codigo'] == '1399' || $row['Codigo'] == '1592' || $row['Codigo'] == '5160' || $row['Codigo'] == '14' || $row['Codigo'] == '5165') {
                        ?>
                        <option value="<?php echo $row['Codigo']?>"><?php echo $row['Codigo']." - ".$row['Descripcion']?></option>
                        <?php 
                    } } 
                    ?>
                </select>

                <label for="">Naturaleza</label>
                <select class="form-control" name="Naturaleza" value="D" id="Naturaleza">
                  <option value="D">Debito</option>
                  <option value="C">Credito</option>
              </select>

              <label for="">Valor</label>
              <input type="number" class="form-control" name="Valor" id="Valor" placeholder="Valor a tramitar" required title="Ingrese el valor">

          </div>
          <button class="btn btn-primary btn-block" id="boton1"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
      </form>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="panel panel-success">
    <div class="panel-heading">
      <center><h3 class="panel-title">Transaciones</h3></Center>
      </div>
      <div class="panel-body">
          <table class="table table-condensed table-hover">
            <thead>
              <tr>
                <th>num_cierre</th>
                <th>Cuenta</th>
                <th>Naturaleza</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody id="Filas">

        </tbody>
    </table>
    <center><button class="btn btn-success" id="Enviar"><span class="glyphicon glyphicon-share-alt"></span> Enviar</button>
      <a type="button" class="btn btn-danger" href="cierre"><span class="glyphicon glyphicon-remove"></span> Cancelar</a></center>

  </div>
</div>
</div>

</div>

<script>
$(document).ready(inicializarEventos);
var transacion=[];
function inicializarEventos()
{
  transaciones= new Array();
  $("#boton1").click(presionBoton)
  
  $("#Enviar").click(EnviarBD)
}

function presionBoton()
{

  $('#formulario').validate({
    rules: {
     'id': 'required',
     'codigo': 'required',
     'Naturaleza': 'required',
     'Valor': { required: true, number: true }
   },
   messages: {
     'id': '<div class="alert alert-danger" >Debe ingresar su usuario </div>',
     'codigo': '<div class="alert alert-danger" >Debe ingresar el codigo de transacion </div>',
     'Naturaleza': '<div class="alert alert-danger" >Selecione una Naturaleza </div>',
     'Valor': '<div class="alert alert-danger" >Digite el valor de la transacion </div>'
   },
       //errorElement: 'div',
       //errorContainer: $('#errores'),
       submitHandler: function(form){
        var datos = new Array($("#codigo option:selected").val(),$("#Naturaleza").val(),$("#Valor").val());
        transacion.push(datos);

        $("<tr>").append(
          $('<td>', { text: $("#id").val()
        }), $('<td>', { text: $("#codigo option:selected").val()
      }), $('<td>', { text: $("#Naturaleza").val()  
  }),$('<td>', { text: $("#Valor").val()  
})
).hide().appendTo('#Filas').fadeIn('slow');
        VaciarFormulario();
      }
    });
}

function VaciarFormulario(){
  $('#formulario').each (function(){
    this.reset();
  });
}

function EnviarBD(){
  var jdatos = JSON.stringify(transacion); 
  $.post("crear_ajustes_contables",{
    id: $("#id").val(),
    transaciones: jdatos
  },procesar); 
}

function procesar(datos){
 if(datos==1){
  alert("Correcto");
  setTimeout("location.href='cierre'", 50);
}else{
  alert(datos);
  if($('#error').length){
      
  }else{
    
    $('#Mensaje').append("<div id='error' class='alert alert-danger'>Error: No se cumplio la doble partida </div>");
  }
}
}   
</script>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>