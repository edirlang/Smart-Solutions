<?php include("menu.php"); ?>
<?php include("clientesBD.php"); ?>
<div class="container container-fluid">
  <div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <table class="table table-condensed table-hover">
       <thead>
         <tr>
           <th>Cedula</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Telefono</th>
         </tr>
       </thead>
       <tbody>
         <?php while($row = mysql_fetch_assoc($Clientes)){ ?>
         <tr>
           <td><?php echo $row['Cedula']; ?></td>
           <td><?php echo $row['Nombre']; ?></td>
           <td><?php echo $row['Apellido']; ?></td>
           <td><?php echo $row['Telefono']; ?></td>
         </tr>
         <?php } 
         mysql_close()?>
       </tbody>
     </table>
     
   </div> 
 </div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>