var x = $(document).ready(inicializarEventos);

function inicializarEventos()
{
  $("#Enviar").click(presionBoton);
}

function presionBoton()
{
  $('#formulario').validate({
    rules: {
     'cedula': 'required',
     'nombre': 'required',
     'apellido': 'required',
     'telefono': 'required',
   },
   messages: {
     'cedula': 'Debe ingresar cedula del cliente',
     'nombre': 'Debe ingresar el nombre del cliente',
     'apellido': 'Debe ingresar el apellido del cliente',
     'telefono': 'ingrese telefono',
   },
   submitHandler: function(form){
    var datos = new Array($("#cedula").val(),$("#nombre").val(),$("#apellido").val(),$("#telefono").val());
    var jdatos = JSON.stringify(datos); 
    $.post("GuardarClienta.php",{
      jdatos: jdatos
    },procesar); 
    alert("si")
    $("<tr>").append(
      $('<td>', { text: $("#cedula").val()
    }), $('<td>', { text: $("#nombre").val()
  }), $('<td>', { text: $("#apellido").val() 
}), $('<td>', { text: $("#telefono").val()  
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


function procesar(datos){
 alert(datos);
 if(datos==1){
  alert("Correcto");
}
}