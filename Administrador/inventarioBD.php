<?php 
  include("../conexion.php");

  $inventario = mysql_query("SELECT * FROM `inventario` order by `codigo` asc");
  
 ?>