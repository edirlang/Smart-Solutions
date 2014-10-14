<?php include("menu.php"); ?>
<?php include("clientesBD.php"); ?>
<div class="container container-fluid">
  <div class="row">

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Clientes</h3>
        </div>
        <div class="panel-body">
          <table class="table table-condensed table-hover">
           <thead>
             <tr>
               <th>Cedula</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Telefono</th>
             </tr>
           </thead>
           <tbody id="Filas">
             <?php while($row = mysqli_fetch_assoc($Clientes)){ ?>
             <tr>
               <td><?php echo $row['Cedula']; ?></td>
               <td><?php echo $row['Nombre']; ?></td>
               <td><?php echo $row['Apellido']; ?></td>
               <td><?php echo $row['Telefono']; ?></td>
               <td><a class="btn btn-success" href="editar_cliente.php?id=<?php echo $row['Cedula'] ?>"><span class="glyphicon glyphicon-edit"></span>Editar</a> </td>
             </tr>
             <?php } 
             mysqli_close($cn)?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
   
   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <div class="panel panel-success">
       <div class="panel-heading">
         <h3 class="panel-title">Nuevo Cliente</h3>
       </div>
       <div class="panel-body">

        <form id="formulario" name="formulario" role="form" method="post">
         <div class="form-group">
          <label for="">Cedula</label>
          <input type="text" class="form-control" id="Cedula"  name="Cedula" placeholder="Cedula">
          <label for="">Nombre</label>
          <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="primer nombre">
          <label for="">Apellido</label>
          <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="primer apellido">
          <label for="">Telefono</label>
          <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="telefono">
        </div>
        <button id="Enviar" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
      </form>  

    </div>
  </div>
</div>  
</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/clientes.js"></script>
</body>
</html>