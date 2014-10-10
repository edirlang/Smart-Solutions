<?php 
$cn = mysql_connect("localhost","root","12345")or die("Error en Conexion");
$db = mysql_select_db("smartsolutions")or die("Error en Db".mysql_error());
return($cn);
return($db);
?>