
var x = $(document).ready(inicializarEventos);

function inicializarEventos()
{
  $("#Enviar").click(presionBoton);
  $("#guardar").click(actualizar);
}

function actualizar(){
    $.post("actualizar_cliente.php",{
      cedula: $("#cedula").val(),
      nombre: $("#nombre").val(),
      apellido: $("#apellido").val(),
      telefono: $("#telefono").val()
    },function(datos){
      
      $("#"+$("#cedula").val()+" #1").text($("#nombre").val());
      $("#"+$("#cedula").val()+" #2").text($("#apellido").val());
      $("#"+$("#cedula").val()+" #3").text($("#telefono").val());
    });  
}

function presionBoton()
{
  $('#formulario').validate({
    rules: {
     'Cedula': 'required',
     'Nombre': 'required',
     'Apellido': 'required',
     'Telefono': 'required'
   },
   messages: {
     'Cedula': 'Debe ingresar cedula del cliente',
     'Nombre': 'Debe ingresar el nombre del cliente',
     'Apellido': 'Debe ingresar el apellido del cliente',
     'Telefono': 'ingrese telefono'
   }, submitHandler: function(form){

    var datos = new Array($("#Cedula").val(),$("#Nombre").val(),$("#Apellido").val(),$("#Telefono").val());
    var jdatos = JSON.stringify(datos); 
    $.post("GuardarClienta.php",{
      jdatos: jdatos
    },procesar); 
  }
});
}

function procesar(datos){
 if(datos==1){
  alert("Correcto");
  setTimeout("location.href='Clientes.php'", 50);
}else{
  alert("No se pudo crear debido a: "+datos);
}
}