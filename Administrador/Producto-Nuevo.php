    <?php include("menu.php"); ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
         <form action="GuardarProducto.php" method="POST" role="form" enctype="multipart/form-data">
           <legend>Nuevo Producto</legend>
           
           <div class="form-group">
             <label for="">Codigo</label>
             <input type="text" class="form-control" name="Codigo" placeholder="Codigo de Producto">

             <label for="">Nombre</label>
             <input type="text" class="form-control" name="Nombre" placeholder="Codigo de Producto">

             <label for="">Descripcion</label>
             <textarea rows="4" cols="50" class="form-control" name="Descripcion"> </textarea>

             <label for="">Especificaciones</label>
             <textarea rows="4" cols="50" class="form-control" name="Especificaciones"> </textarea>

             <label for="">Valor de Commpra</label>
             <input type="number" name="ValorComp" id="inputValorComp" class="form-control" value="" min="{5"} max="" step="" required="required" title="">

             <label for="">Valor par la Venta</label>
             <input type="number" name="ValorVen" id="inputValorVen" class="form-control" value="" min="{5"} max="" step="" required="required" title="">

             <label for="">Cantidad</label>
             <input type="number" name="Cantidad" id="inputCantidad" class="form-control" value="" min="{5"} max="" step="" required="required" title="">

             <label for="">Fotografia del Producto</label>
             <input type="file" name="foto" required/>
             <p class="help-block">Foto para mostrar a clientes.</p>
           </div>

           <button type="submit" class="btn btn-primary">Enviar</button>
           <a href="Productos.php" class="btn btn-primary">Cancelar</a>
         </form>
       </div> 
     </div>
   </div>

   <!-- jQuery -->
   <script src="//code.jquery.com/jquery.js"></script>
   <!-- Bootstrap JavaScript -->
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   <script src="../js/jquery.js"></script>
   <script src="../js/bootstrap.min.js"></script>
 </body>
 </html>