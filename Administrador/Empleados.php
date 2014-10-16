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
             <?php while($row = mysqli_fetch_row($Usuarios)){ ?>
             <tr id="<?php echo $row[0]; ?>">
               <td><?php echo $row[0]; ?></td>
               <td id="-1"><?php echo $row[1]; ?></td>
               <td id="-2"><?php echo $row[2]; ?></td>
               <td id="-3"><?php echo $row[3]; ?></td>
               <td id="-4"><?php echo $row[5]; ?></td>
               <td>
                <a class="btn btn-success" data-toggle="modal" data-target="#ventana" id="<?php echo $row[0]; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                <script language="JavaScript" type="text/javascript">
                $("#<?php echo $row[0]; ?>").click(function(){
                
                  $.post('consultar_empleado.php',{
                    id: <?php echo $row[0]; ?>
                  },function(datos){
                      alert(datos);
                      datos = $.parseJSON(datos);

                      document.getElementById('cedula').value =datos['Cedula'];
                      document.getElementById('nombre').value =datos['Nombre'];
                      document.getElementById('apellido').value =datos['Apellido'];
                      document.getElementById('telefono').value =datos['Telefono'];
                      document.getElementById('cargo').value =datos['Rol'];
                      }
                    )
                  }
                );
                </script>
               </td>
                <td><a class="btn btn-danger" href="eliminar_empleado.php?id=<?php echo $row['Cedula'] ?>"><span class="glyphicon glyphicon-trash blue"></span></a> </td>
             </tr>
             <?php } 
              mysqli_close($cn);
             ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>


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
          <label for="">Cargo</label>
          <select  class="form-control" id="rol" name="rol">
            <option value="admin">Administrador</option>
            <option value="contador">Auxiliar Contables</option>
            <option value="cajero">Cajero</option>
          </select>
          <label for="">Contraseña</label>
          <input type="password" class="form-control" id="Contrasena" name="Contrasena">
        </div>
        <button id="Enviar"  class="btn btn-primary">Guardar</button>
      </form>  

    </div>
  </div>
</div> 
</div>
</div>

<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Editar Empleado</h4>
      </div>

      <div class="modal-body">
       <form action="actualizar_empleado.php" method="post">
        <div class="form-group">
          <label for="">Cedula</label>
          <input type="text" name="cedula" class="form-control"  id="cedula" placeholder="Codigo de Producto" readonly="readonly"/>

          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de Producto" />

          <label for="">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido"/>

          <label for="">Telefono</label>
          <input type="text" class="form-control" name="telefono" id="telefono">

          <label for="">Cargo</label>
          <select  class="form-control" id="cargo" name="rol">
            <option value="admin">Administrador</option>
            <option value="contador">Auxiliar Contables</option>
            <option value="cajero">Cajero</option>
          </select>
        </div>
      </form>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" id="guardar" data-dismiss="modal">Actualizar</button>
      <button type="submit" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/empleado.js"></script>
</body>
</html>