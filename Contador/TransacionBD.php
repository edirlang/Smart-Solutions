<?php 
include("../conexion.php");
$transaciones  = array();

$result1 = mysql_query("SELECT * FROM documentado", $cn);

while ($fila = mysql_fetch_assoc($result1)) {
	
	$result = mysql_query("SELECT * FROM activo1 where Documento='".$fila['cod_documento']."'", $cn);
	while ($row = mysql_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysql_query("SELECT * FROM pasivo where Documento='".$fila['cod_documento']."'", $cn);

	while ($row = mysql_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysql_query("SELECT * FROM gasto where Documento='".$fila['cod_documento']."'", $cn);

	while ($row = mysql_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysql_query("SELECT * FROM ingresos where Documento='".$fila['cod_documento']."'", $cn);

	while ($row = mysql_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysql_query("SELECT * FROM costos where Documento='".$fila['cod_documento']."'", $cn);

	while ($row = mysql_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}
}
return $transaciones;
echo mysql_error();
mysql_close($cn);
?>