var x;
x=$(document);
x.ready(inicializarEventos);
var transacion=[];
function inicializarEventos()
{
  
  transaciones= new Array();
  $("#agregar").click(presionBoton);
  $("#Enviar").click(EnviarBD);
  $("#codigo").keypress(BuscarProductos);
}

function BuscarProductos(ev){
  $.post("buscar_producto.php",{
    busqueda: $("#codigo").val()
  },mostrarCodigos);
}

function mostrarCodigos(datos){
  var codigos = $.parseJSON(datos);
  alert(codigos[0]);
}

function presionBoton()
{
  $('#formulario').validate({
      rules: {
           'codigo': 'required',
           'cantidad' : { required: true, number: true }
           },
       messages: {
           'codigo': 'Debe ingresar el codigo de transacion',
           'cantidad': 'Digite el valor de la transacion'
       },
       
       submitHandler: function(form){
          var datos = new Array($("#Cedula").val(),$("#Codigo").val(),$("#Fecha").val(),$("#Naturaleza").val(),$("#Descripcion").val(),$("#Valor").val());
          transacion.push(datos);
  
          $("<tr>").append(
            $('<td>', { text: $("#Cedula").val()
            }), $('<td>', { text: $("#Codigo").val()
            }), $('<td>', { text: $("#Fecha").val() 
            }), $('<td>', { text: $("#Naturaleza").val()  
            }), $('<td>', { text: $("#Descripcion").val()  
            }), $('<td>', { text: $("#Valor").val()  
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
  $.post("Provar.php",{
    jdatos: jdatos
  },procesar); 
}

function procesar(datos){
   if(datos==1){
      alert("Correcto");
      setTimeout("location.href='Transacion-manual.php'", 50);
   }else{
    $('#Mensaje').append("<div class='alert alert-danger'>Error: No se cumplio la doble partida </div>");
   }
}