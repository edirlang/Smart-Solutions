<?php include("menu.php"); ?>
<?php include("usuarios.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
     <div class="panel panel-success">
       <div class="panel-heading">
         <h3 class="panel-title">Empleados</h3>
       </div>
       <div class="panel-body">
         <table class="table table-condensed table-hover">
           <thead>
             <tr>
               <th>Cedula</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Telefono</th>
               <th>Cargo</th>
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody id="Filas">
             <?php while($row = mysql_fetch_row($Usuarios)){ ?>
             <tr>
               <td><?php echo $row[0]; ?></td>
               <td><?php echo $row[1]; ?></td>
               <td><?php echo $row[2]; ?></td>
               <td><?php echo $row[3]; ?></td>
               <td><?php echo $row[5]; ?></td>
                <td><a class="btn btn-success" href="editar_empleado.php?id=<?php echo $row[0] ?>"><span class="glyphicon glyphicon-edit"></span></a> </td>
               <td><a class="btn btn-danger" href="eliminar_empleado.php?id=<?php echo $row['Cedula'] ?>"><span class="glyphicon glyphicon-trash blue"></span></a> </td>
             </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>

   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
          <label for="">Cargo</label>
          <select  class="form-control" id="rol" name="rol">
            <option value="admin">Administrador</option>
            <option value="contador">Auxiliar Contables</option>
            <option value="cajero">Cajero</option>
          </select>
          <label for="">Contraseña</label>
          <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="contraseña">
        </div>
        <button id="Enviar"  class="btn btn-primary">Guardar</button>
      </form>  

    </div>
  </div>
</div> 
 </div>
</div>

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/empleado.js"></script>
</body>
</html>