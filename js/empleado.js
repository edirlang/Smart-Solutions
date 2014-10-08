var x = $(document).ready(inicializarEventos);

function inicializarEventos()
{
  $("#Enviar").click(presionBoton);
}

function presionBoton()
{
  $('#formulario').validate({
    rules: {
     'Cedula': 'required',
     'Nombre': 'required',
     'Apellido': 'required',
     'Telefono': 'required',
     'rol': 'required',
     'Contrasena': 'required'
   },
   messages: {
     'Cedula': 'Debe ingresar cedula del cliente',
     'Nombre': 'Debe ingresar el nombre del cliente',
     'Apellido': 'Debe ingresar el apellido del cliente',
     'Telefono': 'ingrese telefono',
     'rol': 'selecione el cargo',
     'Contrasena': 'defina contrseña por defaul'
   }, submitHandler: function(form){
    
    var datos = new Array($("#Cedula").val(),$("#Nombre").val(),$("#Apellido").val(),$("#Telefono").val(),$("#Contrasena").val(),$("#rol option:selected").val());
    var jdatos = JSON.stringify(datos); 
    $.post("GuardarEmpleado.php",{
      jdatos: jdatos
    },procesar); 
  }
});
  
}

function procesar(datos){
 if(datos==1){
  alert("Correcto");
  $("<tr>").append(
          $('<td>', { text: $("#Cedula").val()
        }), $('<td>', { text: $("#Nombre").val()
      }), $('<td>', { text: $("#Apellido").val() 
    }), $('<td>', { text: $("#Telefono").val()  
  }), $('<td>', { text: $("#rol").val()  
}),$('<td><a class="btn btn-success" href="editar_empleado.php?id='+$("#Cedula").val()+'">Editar</a></td>'
),$('<td><a class="btn btn-danger" href="eliminar_empleado.php?id='+$("#Cedula").val()+'">Eliminar</a></td>'
)
).hide().appendTo('#Filas').fadeIn('slow');
        VaciarFormulario();
  }else{
    alert("No se pudo crear debido a: "+datos);
  }
}