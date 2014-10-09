x=$(document);
x.ready(inicializarEventos);
function inicializarEventos()
{
  $("#Enviar").click(presionBoton);
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
        $.post("iniciar-sesion.php",{
          jdatos: jdatos
        },procesar); 
      }
    });
}

function procesar(datos){
 switch(datos){
    case 'admin':
      setTimeout("location.href='Administrador/panel_admin.php'", 50);
    break;
    case 'contador':
      setTimeout("location.href='Contador/panel_contador.php'", 50);
    break;
    case 'cajero':
      setTimeout("location.href='Cajero/panel_cajero.php'", 50);
    break;
    case 'null':
      if($('#error').length){

      }else{
        $('#Mensaje').append("<div id='error' class='alert alert-danger'>Error: Login Incorecto </div>");
      }
    break;
  }
}