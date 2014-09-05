var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#boton1");
  x.click(presionBoton)
}

function presionBoton()
{

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
