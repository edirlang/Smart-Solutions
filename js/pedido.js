$(document).ready(inicializarEventos);
var transacion=[];
var fecha;
function inicializarEventos()
{
  var d = new Date();
  fecha = d.getFullYear()+"-"+((d.getMonth()*1)+1)+"-"+d.getDate();
  transaciones= new Array();
  $("#boton1").click(presionBoton)
  $("#Enviar").click(EnviarBD)
  $("#codigo").click(buscar_cliente);
  $("#Guardar").click(GuardarProducto);
}

function buscar_cliente(){
  if($('#codigo').val()=='0'){
    if($('#nuevo').length){

    }else{  
      $("<iframe src='Producto-Nuevo.php?id="+$("#proveedor").val()+"' width='80%' height='700px' id='nuevo'></iframe>").appendTo("#ventana");
    }
  }else{
    $("#nuevo").remove();
  }
}

function presionBoton()
{

  $('#formulario').validate({
    rules: {
     'proveedor': 'required',
     'Codigo': 'required',
     'cantidad': { required: true, number: true },
     'vlr_unidad': { required: true, number: true },
     'iva': 'required'
   },
   messages: {
     'proveedor': '<p class="alert alert-danger">Debe ingresar su usuario</p>',
     'Codigo': '<p class="alert alert-danger">Debe selecionar el codigo de producto</p>',
     'cantidad': '<p class="alert alert-danger">digita la cantidad</p>',
     'vlr_unidad': '<p class="alert alert-danger">Digita el valor de unidad</p>',
     'iva': '<p class="alert alert-danger">Digite el iva</p>'
   },
       //errorElement: 'div',
       //errorContainer: $('#errores'),
       submitHandler: function(form){
        if($('#codigo').val() !='0'){
          $("#nuevo").remove();
          var datos = new Array($("#proveedor").val(),fecha,$("#codigo").val(),$("#cantidad").val(),$("#vlr_unidad").val(),$("#iva").val());
          transacion.push(datos);
          subtotal = $("#cantidad").val()*$("#vlr_unidad").val();

          $("<tr>").append(
            $('<td>', { text: $("#codigo").val()
          }), $('<td>', { text: $("#cantidad").val()
        }), $('<td>', { text: $("#vlr_unidad").val() 
      }), $('<td>', { text: $("#iva").val()  
    }), $('<td>', { text: subtotal  
    })
    ).hide().appendTo('#Filas').fadeIn('slow');
          var cantidad = $("#cantidad").val();
          var iva = $("#iva").val();
          var vlr_unidad = (($("#vlr_unidad").val()*iva)/100)+($("#vlr_unidad").val()*1);
          var subtotal = cantidad*vlr_unidad;
          var total=($("#total").val()*1) + subtotal;
          $("#total").val(total);

          $("#fecha_a").replaceWith($('<p>',{ 
           text:  'Fecha: ' + fecha,
           'id'    : 'fecha_a'
         }));
        }
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
  $.post("GuardarPedido.php",{
    jdatos: jdatos,
    pago: $("#pago").val()
  },procesar); 
}
function procesar(datos){
 if(datos==1){
  alert("Correcto");
  setTimeout("location.href='Proveedor.php'", 50);
}else{
  if($('#error').length){

  }else{
    alert(datos);
    $('#Mensaje').append("<div id='error' class='alert alert-danger'>Error: No se almaceno el pedido </div>");
  }
}
}

function GuardarProducto(){
  
  $.ajax({
    type: 'POST',
    url: "GuardarProducto.php",
    data: {
      Codigo: $("#cod_nuevo").val(),
      Nombre: $("#nombre").val(),
      Descripcion: $("#descripcion").val(),
      Especificaciones: $("#especificaciones").val(),
      ValorComp: $("#vlr_comp").val(),
      ValorVen: $("#vlr_ven").val(),
      Cantidad: $("#cant").val(),
      iva: $("#iva_nuevo").val(),
      proveedor: $("#proveedor").val()
    },beforeSend: function () {
                        alert("Procesando, espere por favor...");
                        var texto = document.getElementById("cod_nuevo").value;
                        var fila = document.createElement("tr");
                        
                        var columna1 = document.createElement("td");
                        var c1 = document.createTextNode(texto+"");
                        columna1.appendChild(c1);
                        
                        var columna2 = document.createElement("td");
                        texto = document.getElementById("cant").value;
                        var c2 = document.createTextNode(texto+"");
                        columna2.appendChild(c2);
                        
                        var columna3 = document.createElement("td");
                        texto = document.getElementById("vlr_comp").value;
                        var c3 = document.createTextNode(texto+"");
                        columna3.appendChild(c3);
                        
                        var columna4 = document.createElement("td");
                        texto = document.getElementById("iva_nuevo").value;
                        var c4 = document.createTextNode(texto);
                        columna4.appendChild(c4);

                        var columna5 = document.createElement("td");
                        var subtotal = document.getElementById("vlr_comp").value*document.getElementById("cant").value;
                        var c5 = document.createTextNode(subtotal);
                        columna5.appendChild(c5);

                        
                        fila.appendChild(columna1);
                        fila.appendChild(columna2);
                        fila.appendChild(columna3);
                        fila.appendChild(columna4);
                        fila.appendChild(columna5);

                        parent.document.getElementById("Filas").appendChild(fila);

                         var iva = ((document.getElementById("iva_nuevo").value*document.getElementById("vlr_comp").value)/100)+(document.getElementById("vlr_comp").value*1);
                        subtotal = iva*document.getElementById("cant").value;

                        total = (parent.document.getElementById("total").value * 1)+subtotal;
                        parent.document.getElementById("total").value =total;
                },
    error: function(){ alert("error");},
    success: function(datos){
      alert("si"+datos);
      parent.document.getElementById("nuevo").remove();
    }
  });
}