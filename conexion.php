<?php 
$cn = mysql_connect("localhost","root","")or die("Error en Conexion");
$db = mysql_select_db("smart")or die("Error en Db".mysql_error());
return($cn);
return($db);
?>