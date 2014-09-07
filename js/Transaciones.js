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

function EnviarBD(){
  
  var jdatos = JSON.stringify(transacion); 
  $.post("Provar.php",{
    jdatos: jdatos
  },procesar); 
}

function procesar(datos){
   if(datos==1){
      setTimeout("location.href='Transacion-manual.php'", 50);
   }else{
      alert("No hay partida doble");
   }
    
   
}