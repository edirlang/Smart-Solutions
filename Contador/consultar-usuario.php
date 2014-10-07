<?php 
include("../conexion.php");

$result = mysql_query("SELECT * FROM usuarios where Cedula='".$_SESSION['usuario']."'", $cn);
echo mysql_error();
mysql_close($cn);

$usuario;

while ($row = mysql_fetch_row($result)){
    	$usuario= $row[0];	        
   	}

 ?>