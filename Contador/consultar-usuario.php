<?php 
include("../conexion.php");

$result = mysqli_query($cn,"SELECT * FROM usuarios where Cedula='".$_SESSION['usuario']."'");
echo mysql_error();
mysqli_close($cn);

$usuario;

while ($row = mysqli_fetch_row($result)){
    	$usuario= $row[0];	        
   	}

 ?>