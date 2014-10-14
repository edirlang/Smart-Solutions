var productos=[];
var total=0;
var iva_t=0;

$(document).ready(inicializarEventos);

$(function() {
  var codigos=[];
  $.post("buscar_producto.php",
    function(datos){
      datos=$.parseJSON(datos);
      for(var i in datos)
        codigos[i]=datos[i];
    }
    );
  $( "#tags" ).autocomplete({
    source: codigos
  });
});

function inicializarEventos() {
  $("#agregar").click(presionBoton);
  $("#Enviar").click(EnviarBD);
  $("#cc_cliente").change(buscar_cliente);
  
  $("#cerrar_v").click(cerar);
  $("#nuevo").click(function(){
    $("#nuevo_cliente").modal();
  })
}

function cerar(){
  $("#total_v").val($("#total").text());
  $("#efectivo_v").keypress(calcular_cambio);
  $("#cerar_venta").modal();

}

function calcular_cambio(){
  
  var efectivo = $("#efectivo_v").val();
  alert(efectivo)
}

function buscar_cliente(){
  var op = $("#cc_cliente option:selected").val();
  $.post("buscar_cliente.php",{
    cc: op
  },function(datos){
    $("#nom_cliente").val(datos);
  }
  );
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
    selecion = $('input#tags').val();

    $.post("consultar_producto.php",{
      codigo: selecion
    }, Consultar_Producto);
  }});
}

function Consultar_Producto(dato){
  var datos=[];
  datos=$.parseJSON(dato);

  if(datos.length){
    var iva = (datos[2]*datos[3])/100;
    var vlr_unid = datos[3];
    var subtotal = (vlr_unid*1)*($("#cantidad").val()*1);
    var producto = new Array($("#tags").val(),$("#cantidad").val(),iva,vlr_unid,subtotal,datos[1]);
    productos.push(producto);

    $("<tr>").append(
      $('<td>', { text: datos[0]
      }), $('<td>', { text: datos[1]
      }), $('<td>', { text:  $("#cantidad").val()
    }), $('<td>', { text: vlr_unid 
    }), $('<td>', { text: datos[2]  
    }), $('<td>', { text: subtotal  
    })
    ).hide().appendTo('#Filas').fadeIn('slow');
    VaciarFormulario();
    iva_t += iva*($("#cantidad").val()*1);
    total += subtotal;
    
    $("#subtotal").text(total);
    $("#iva").text(iva_t);
    $("#total").text(total*1+iva*1);
  }else{
    alert("producto no registrado");
  }

  }

  function VaciarFormulario(){
    $('#formulario').each (function(){
      this.reset();
    });

  }

  function EnviarBD(){
    var Efectivo = prompt("Efectivo");

    var jdatos = JSON.stringify(productos); 

    $.post("guardar_factura.php",{
      num_fact: $("#numero").val(),
      fecha: $("#fecha").val(),
      hora: $("#hora").val(),
      cliente: $("#cc_cliente").val(),
      cajero: $("#cajero").val(),
      Efectivo: Efectivo,
      pago: 'contado',
      jdatos: jdatos
    },procesar); 
  }

  function procesar(datos){
    $("#factura").remove();
    document.getElementById("imp").innerHTML = datos;
    window.print();
    setTimeout("location.href='Factura.php?"+datos+"'", 10);
  }