<?php include("usuarios.php"); ?>
<?php include("menu.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <table class="table table-condensed table-hover">
       <thead>
         <tr>
           <th>Cedula</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Telefono</th>
           <th>Rol</th>
         </tr>
       </thead>
       <tbody>
         <?php while($row = mysql_fetch_row($Usuarios)){ ?>
         <tr>
           <td><?php echo $row[0]; ?></td>
           <td><?php echo $row[1]; ?></td>
           <td><?php echo $row[2]; ?></td>
           <td><?php echo $row[3]; ?></td>
           <td><?php echo $row[5]; ?></td>
         </tr>
         <?php } ?>
       </tbody>
     </table>
     
   </div> 
 </div>
</div>

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>