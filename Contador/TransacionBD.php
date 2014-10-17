<?php 
include("../conexion.php");

$transaciones  = array();

$result1 = mysqli_query($cn,"SELECT * FROM documentado");

while ($fila = mysqli_fetch_assoc($result1)) {
	
	$result = mysqli_query($cn,"SELECT * FROM activo1 where Documento='".$fila['cod_documento']."'");
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysqli_query($cn,"SELECT * FROM pasivo where Documento='".$fila['cod_documento']."'");

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysqli_query($cn,"SELECT * FROM gasto where Documento='".$fila['cod_documento']."'");

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysqli_query($cn,"SELECT * FROM ingresos where Documento='".$fila['cod_documento']."'");

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}

	$result = mysqli_query($cn,"SELECT * FROM costos where Documento='".$fila['cod_documento']."'");

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($transaciones, $row);

	}
}
return $transaciones;
mysqli_close($cn);
?>