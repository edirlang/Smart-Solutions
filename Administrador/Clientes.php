<?php include("menu.php"); ?>
<?php include("clientesBD.php"); ?>
<script type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript" src="../js/clientes.js"></script>

<div class="container container-fluid">
  <div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody id="Filas">
             <?php while($row = mysql_fetch_assoc($Clientes)){ ?>
             <tr>
               <td><?php echo $row['Cedula']; ?></td>
               <td><?php echo $row['Nombre']; ?></td>
               <td><?php echo $row['Apellido']; ?></td>
               <td><?php echo $row['Telefono']; ?></td>
               <td><a href="" >Editar</a> </td>
               <td><a href="" >Eliminar</a> </td>
             </tr>
             <?php } 
             mysql_close()?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
      
    </div> 
   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <div class="panel panel-success">
       <div class="panel-heading">
         <h3 class="panel-title">Nuevo Cliente</h3>
       </div>
       <div class="panel-body">

        <form id="formulario" name="formulario" role="form" method="POST" on>
         <div class="form-group">
          <label for="">Cedula</label>
          <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="Cedula">
          <label for="">Nombre</label>
          <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="primer nombre">
          <label for="">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="primer apellido">
          <label for="">Telefono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
        </div>
        <button id="Enviar" type="submit" class="btn btn-primary">Guardar</button>
      </form>  
    </div>
  </div>
</div>  
</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>