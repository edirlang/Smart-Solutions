<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$codigo = $_POST['codigo'];
	$fecha = $_POST['fecha'];
	$documento = $_POST['documento'];

	$transacion=array();
	$transaciones=null;
	include("../conexion.php");

	if($fecha != null && $codigo != null && $documento != null){
		
		$cuentas = mysqli_query($cn,"SELECT * FROM codigotransacion where Codigo = '".$codigo."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			
			switch ($row['Tipo']) {
				case 'activo':
				$transaciones =  mysqli_query($cn,"SELECT * FROM activo1 WHERE Documento = '".$documento."' and Codigo = '".$codigo."' and Fecha = '".$fecha."'");
				break;

				case 'pasivo':
				$transaciones =  mysqli_query($cn,"SELECT * FROM pasivo WHERE Documento = '".$documento."' and Codigo = '".$codigo."' and Fecha = '".$fecha."'");
				break;

				case 'ingreso':
				$transaciones =  mysqli_query($cn,"SELECT * FROM ingresos WHERE Documento = '".$documento."' and Codigo = '".$codigo."' and Fecha = '".$fecha."'");
				break;

				case 'costo':
				$transaciones =  mysqli_query($cn,"SELECT * FROM costos WHERE Documento = '".$documento."' and Codigo = '".$codigo."' and Fecha = '".$fecha."'");
				break;

				case 'gasto':
				$transaciones =  mysqli_query($cn,"SELECT * FROM gasto WHERE Documento = '".$documento."' and Codigo = '".$codigo."' and Fecha = '".$fecha."'");
				break;
			}
		}
	}elseif($codigo != null && $documento != null){
		$cuentas =  mysqli_query($cn,"SELECT * FROM codigotransacion where Codigo='".$codigo."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			switch ($row['Tipo']) {
				case 'activo':
				$transaciones =  mysqli_query($cn,"SELECT * FROM activo1 WHERE Documento = '".$documento."' and Codigo = '".$codigo."'");
				break;

				case 'pasivo':
				$transaciones =  mysqli_query($cn,"SELECT * FROM pasivo WHERE Documento = '".$documento."' and Codigo = '".$codigo."'");
				break;

				case 'ingreso':
				$transaciones =  mysqli_query($cn,"SELECT * FROM ingresos WHERE Documento = '".$documento."' and Codigo = '".$codigo."'");
				break;

				case 'costo':
				$transaciones = mysqli_query($cn,"SELECT * FROM costos WHERE Documento = '".$documento."' and Codigo = '".$codigo."'");
				break;

				case 'gasto':
				$transaciones = mysqli_query($cn,"SELECT * FROM gasto WHERE Documento = '".$documento."' and Codigo = '".$codigo."'");
				break;
			}
		} 
	}elseif($fecha != null && $documento != null){
		$cuentas = mysqli_query($cn,"SELECT * FROM documentado where cod_documento='".$documento."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			$transaciones = mysqli_query($cn,"SELECT * FROM activo1 WHERE Documento = '".$documento."' and Fecha = '".$fecha."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM pasivo WHERE Documento = '".$documento."' and Fecha = '".$fecha."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones =mysqli_query($cn,"SELECT * FROM ingresos WHERE Documento = '".$documento."' and Fecha = '".$fecha."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM costos WHERE Documento = '".$documento."' and Fecha = '".$fecha."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM gasto WHERE Documento = '".$documento."' and Fecha = '".$fecha."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
		}
	}elseif($fecha!=null && $codigo!=null ){
		$cuentas = mysqli_query($cn,"SELECT * FROM codigotransacion where Codigo='".$codigo."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			switch ($row['Tipo']) {
				case 'activo':
				$transaciones = mysqli_query($cn,"SELECT * FROM activo1 where Codigo like'".$codigo."' and Fecha like '".$fecha."'");
				break;

				case 'pasivo':
				$transaciones = mysqli_query($cn,"SELECT * FROM pasivo where Codigo like'".$codigo."' and Fecha like '".$fecha."'");
				break;

				case 'ingreso':
				$transaciones = mysqli_query($cn,"SELECT * FROM ingresos where Codigo like'".$codigo."' and Fecha like '".$fecha."'");
				break;

				case 'costo':
				$transaciones = mysqli_query($cn,"SELECT * FROM costos where Codigo like'".$codigo."' and Fecha like '".$fecha."'");
				break;

				case 'gasto':
				$transaciones = mysqli_query($cn,"SELECT * FROM gasto where Codigo like'".$codigo."' and Fecha like '".$fecha."'");
				break;
			}
		}
	}elseif($codigo != null){
		$cuentas = mysqli_query($cn,"SELECT * FROM codigotransacion where Codigo='".$codigo."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			switch ($row['Tipo']) {
				case 'activo':
				$transaciones = mysqli_query($cn,"SELECT * FROM activo1 where Codigo like'".$codigo."'");
				break;

				case 'pasivo':
				$transaciones =mysqli_query($cn,"SELECT * FROM pasivo where Codigo like'".$codigo."'");
				break;

				case 'ingreso':
				$transaciones = mysqli_query($cn,"SELECT * FROM ingresos where Codigo like'".$codigo."'");
				break;

				case 'costo':
				$transaciones = mysqli_query($cn,"SELECT * FROM costos where Codigo like'".$codigo."'");
				break;

				case 'gasto':
				$transaciones = mysqli_query($cn,"SELECT * FROM gasto where Codigo like'".$codigo."'");
				break;
			}
		}
	}elseif($fecha != null){
		$cuentas = mysqli_query($cn,"SELECT * FROM codigotransacion where Codigo='".$codigo."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			switch ($row['Tipo']) {
				case 'activo':
				$transaciones = mysqli_query($cn,"SELECT * FROM activo1 where Fecha like '".$fecha."'");
				break;

				case 'pasivo':
				$transaciones = mysqli_query($cn,"SELECT * FROM pasivo where Fecha like '".$fecha."'");
				break;

				case 'ingreso':
				$transaciones = mysqli_query($cn,"SELECT * FROM ingresos where Fecha like '".$fecha."'");
				break;

				case 'costo':
				$transaciones = mysqli_query($cn,"SELECT * FROM costos where Fecha like '".$fecha."'");
				break;

				case 'gasto':
				$transaciones = mysqli_query($cn,"SELECT * FROM gasto where Fecha like '".$fecha."'");
				break;
			}
		}
	}elseif($documento != null){
		$cuentas = mysqli_query($cn,"SELECT * FROM documentado where cod_documento='".$documento."'");
		while ($row = mysqli_fetch_assoc($cuentas)) {
			$transaciones = mysqli_query($cn,"SELECT * FROM activo1 WHERE Documento = '".$documento."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM pasivo WHERE Documento = '".$documento."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM ingresos WHERE Documento = '".$documento."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM costos WHERE Documento = '".$documento."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
			$transaciones = mysqli_query($cn,"SELECT * FROM gasto WHERE Documento = '".$documento."'");
			while ($row = mysqli_fetch_assoc($transaciones)) {
				array_push($transacion, $row);
			}
		}
	}else{
		$cuentas = mysqli_query($cn,"SELECT * FROM codigotransacion");
		$transaciones = mysqli_query($cn,"SELECT * FROM activo1 ");
		while ($row = mysqli_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysqli_query($cn,"SELECT * FROM pasivo ");
		while ($row = mysqli_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysqli_query($cn,"SELECT * FROM ingresos");
		while ($row = mysqli_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysqli_query($cn,"SELECT * FROM costos ");
		while ($row = mysqli_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
		$transaciones = mysqli_query($cn,"SELECT * FROM gasto");
		while ($row = mysqli_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
	}
	if($codigo != null){
		while ($row = mysqli_fetch_assoc($transaciones)) {
			array_push($transacion, $row);
		}
	}
	$mensaje = json_encode($transacion);

	echo $mensaje;

}else{	
	echo "No se puede acceder";
}
?>