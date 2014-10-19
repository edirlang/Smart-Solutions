x=$(document);
x.ready(inicializarEventos);
function inicializarEventos()
{
  $("#Enviar").click(presionBoton);
  $(".ws_next").remove();
  $(".ws_prev").remove();
  $(".ws_playpause").remove();
}

function presionBoton()
{
  $('#Formulario').validate({
    rules: {
     'cedula': 'required',
     'contrasena': 'required',
   },
   messages: {
     'cedula': 'Debe ingresar su usuario',
     'contrasena': 'Ingrese su contraseña',
   },
       //errorElement: 'div',
       //errorContainer: $('#errores'),
       submitHandler: function(form){
        var datos = new Array($("#cedula").val(),$("#contrasena").val());
        var jdatos = JSON.stringify(datos); 
        alert(jdatos);
        $.post("login",{
          jdatos: jdatos
        },procesar); 
      }
    });
}

function procesar(datos){
  
 switch(datos){
    case 'admin':
      setTimeout("location.href='admin'", 50);
    break;
    case 'contador':
      setTimeout("location.href='panel_contador'", 50);
    break;
    case 'cajero':
      setTimeout("location.href='panel_cajero'", 50);
    break;
    case 'null':
      if($('#error').length){

      }else{
        $('#Mensaje').append("<div id='error' class='alert alert-danger'>Error: Login Incorecto </div>");
      }
    break;
  }
}