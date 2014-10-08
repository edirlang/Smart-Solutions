
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Smart-Solutions</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <div id="1" class="container">
    <div class="row">
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <form id="fomr_producto" role="form">
         <legend>Nuevo Producto</legend>
         
         <div class="form-group">
            <label for="">Proveedor</label>
           <input type="text" class="form-control" name="proveedor" id="proveedor" value="<?php echo $_GET['id']; ?>">

           <label for="">Codigo</label>
           <input type="text" class="form-control" name="cod_nuevo" placeholder="Codigo de Producto" id="cod_nuevo">

           <label for="">Nombre</label>
           <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Codigo de Producto">

           <label for="">Descripcion</label>
           <textarea rows="4" cols="50" class="form-control" name="descripcion" id="descripcion"> </textarea>

           <label for="">Especificaciones</label>
           <textarea rows="4" cols="50" class="form-control" name="especificaciones" id="especificaciones"> </textarea>

           <label for="">Valor para la Venta</label>
           <input type="number" name="vlr_ven" id="vlr_ven" class="form-control" >

           <label for="">Valor comprado</label>
           <input type="number" name="vlr_comp" id="vlr_comp" class="form-control" >

            <label for="">IVA</label>
            <input type="number" name="iva_nuevo" id="iva_nuevo" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
         
            <label for="">Cantidad</label>
            <input type="number" name="cant" id="cant" class="form-control" value="" min="{5"} max="" step="" required="required" title="">

         </div>
         <form id="fomr_producto" role="form">
         <div class="form-group">
            <label for="">Imagen</label>
           <input type="file" class="form-control" name="foto" id="foto" >
         </div>
       </form>

         <button class="btn btn-primary" id="Guardar">Enviar</button>
         <a href="Productos.php" class="btn btn-primary">Cancelar</a>
       </form>
       
     </div> 
   </div>
 </div>

 <script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/pedido.js"></script>
</body>
</html>