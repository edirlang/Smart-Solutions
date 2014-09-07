var x;
x=$(document);
x.ready(inicializarEventos);
var transacion=[];
function inicializarEventos()
{
  var x;
  transaciones= new Array();
  x=$("#boton1");
  x.click(presionBoton)
  
  $("#Enviar").click(EnviarBD)
}

function presionBoton()
{
  $('#formulario').validate({
      rules: {
           'Cedula': 'required',
           'Codigo': 'required',
           'Fecha': 'required',
           'Naturaleza': 'required',
           'Descripcion': 'required',
           'Valor': { required: true, number: true }
           },
       messages: {
           'Cedula': 'Debe ingresar su usuario',
           'Codigo': 'Debe ingresar el codigo de transacion',
           'Fecha': 'Debe ingresar una fecha valida',
           'Naturaleza': 'Selecione una Naturaleza',
           'Descripcion': 'Descripcion de la transacion invalida',
           'Valor': 'Digite el valor de la transacion'
       },
       //errorElement: 'div',
       //errorContainer: $('#errores'),
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
          
       }
    });
}

function VaciarFormulario(){
  $("#Cedula").val()="";
  $("#Codigo").val()="";
  $("#Fecha").val()="";
  $("#Naturaleza").val()="";
  $("#Descripcion").val()="";
  $("#Valor").val()="";
}

function EnviarBD(){
  
  var jdatos = JSON.stringify(transacion); 
  $.post("Provar.php",{
    jdatos: jdatos
  },procesar); 
}

function procesar(datos){
   if(datos==1){
      alert("Correpto");
      setTimeout("location.href='Transacion-manual.php'", 50);
   }else{
      alert(datos);
   }
}