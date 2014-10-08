<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$codigo = $_POST['codigo'];
	$fecha = $_POST['fecha'];

	$transacion=array();
	$transaciones=null;
	include("../conexion.php");
	if($codigo == null || $codigo == '*')
	{
		$cuentas = mysql_query("SELECT * FROM `codigotransacion`",$cn);
		
		$transaciones = mysql_query("SELECT * FROM activo1 ",$cn);
		while ($row = mysql_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysql_query("SELECT * FROM pasivo ",$cn);
		while ($row = mysql_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysql_query("SELECT * FROM ingresos",$cn);
		while ($row = mysql_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysql_query("SELECT * FROM costos ",$cn);
		while ($row = mysql_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysql_query("SELECT * FROM gasto",$cn);
		while ($row = mysql_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
	}else{
		$cuentas = mysql_query("SELECT * FROM `codigotransacion` WHERE `Codigo` LIKE '".$codigo."'",$cn);

		if($fecha!=null && $codigo!=null){
			while ($row = mysql_fetch_assoc($cuentas)) {
				switch ($row['Tipo']) {
					case 'activo':
					$transaciones = mysql_query("SELECT * FROM activo1 where Codigo like'".$codigo."' and Fecha like '".$fecha."'",$cn);
					break;

					case 'pasivo':
					$transaciones = mysql_query("SELECT * FROM pasivo where Codigo like'".$codigo."' and Fecha like '".$fecha."'",$cn);
					break;

					case 'ingreso':
					$transaciones = mysql_query("SELECT * FROM ingresos where Codigo like'".$codigo."' and Fecha like '".$fecha."'",$cn);
					break;

					case 'costo':
					$transaciones = mysql_query("SELECT * FROM costos where Codigo like'".$codigo."' and Fecha like '".$fecha."'",$cn);
					break;

					case 'gasto':
					$transaciones = mysql_query("SELECT * FROM gasto where Codigo like'".$codigo."' and Fecha like '".$fecha."'",$cn);
					break;
				}
			}
		}else{
			if($fecha == null){
				while ($row = mysql_fetch_assoc($cuentas)) {
					switch ($row['Tipo']) {
						case 'activo':
						$transaciones = mysql_query("SELECT * FROM activo1 where Codigo like'".$codigo."'",$cn);
						break;

						case 'pasivo':
						$transaciones = mysql_query("SELECT * FROM pasivo where Codigo like'".$codigo."'",$cn);
						break;

						case 'ingreso':
						$transaciones = mysql_query("SELECT * FROM ingresos where Codigo like'".$codigo."'",$cn);
						break;

						case 'costo':
						$transaciones = mysql_query("SELECT * FROM costos where Codigo like'".$codigo."'",$cn);
						break;

						case 'gasto':
						$transaciones = mysql_query("SELECT * FROM gasto where Codigo like'".$codigo."'",$cn);
						break;
					}
				}
			}
			if($fecha != null){

				while ($row = mysql_fetch_assoc($cuentas)) {
					switch ($row['Tipo']) {
						case 'activo':
						$transaciones = mysql_query("SELECT * FROM activo1 where Fecha like '".$fecha."'",$cn);
						break;

						case 'pasivo':
						$transaciones = mysql_query("SELECT * FROM pasivo where Fecha like '".$fecha."'",$cn);
						break;

						case 'ingreso':
						$transaciones = mysql_query("SELECT * FROM ingresos where Fecha like '".$fecha."'",$cn);
						break;

						case 'costo':
						$transaciones = mysql_query("SELECT * FROM costos where Fecha like '".$fecha."'",$cn);
						break;

						case 'gasto':
						$transaciones = mysql_query("SELECT * FROM gasto where Fecha like '".$fecha."'",$cn);
						break;
					}
				}
			}
		}


		$transacion=array();
		while ($row = mysql_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
	}
	$mensaje = json_encode($transacion);

	echo $mensaje;

}else{
	echo "No se puede acceder";
}
?>