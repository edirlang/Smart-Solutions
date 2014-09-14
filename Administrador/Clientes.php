<!DOCTYPE html>
<?php include("clientesBD.php"); ?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart-Solutions</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <?php include("menu.php"); ?>

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
               <?php while($row = mysql_fetch_row($Clientes)){ ?>
               <tr>
                 <td><?php echo $row[0]; ?></td>
                 <td><?php echo $row[1]; ?></td>
                 <td><?php echo $row[2]; ?></td>
                 <td><?php echo $row[3]; ?></td>
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