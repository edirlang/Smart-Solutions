<?php 

	$datos = json_decode($_POST['jdatos'], true);
	
	function Comprobar($datos){
		include("../conexion.php");
		$result = mysqli_query($cn,"SELECT * FROM codigotransacion");
		mysqli_close($cn);
		$codigo= array();
		
		while($row = mysqli_fetch_row($result)){
			array_push($codigo, $row[0]);
 		}

		Global $totalCredito;
 		Global $totalDebito;

 		foreach ($datos as $llave => $valor) {
 			foreach ($codigo as $llave1 => $row){
				if($row == $valor[1]){
 					if($valor[3]=="C"){
						$totalCredito+=$valor[5];
					}else{
						$totalDebito+=$valor[5];
					}	
 				}
 			}
 		}
	}

	Comprobar($datos);

	if(($totalDebito != $totalCredito) || ($totalCredito == 0)){
		echo 0;
	}else{
		GuardarBD($datos);
		echo 1;
	}

	function GuardarBD($datos){
		include("../conexion.php");
		$result = mysqli_query($cn,"SELECT * FROM codigotransacion");
		$codigo= array();
		
		while($row = mysqli_fetch_row($result)){
			array_push($codigo, $row);
 		}
 		
 		mysqli_query($cn,"INSERT INTO documentado VALUES (NULL,'Transacion')");
		$documentos = mysqli_query($cn,"SELECT * FROM documentado order by `cod_documento` desc limit 1");
		$documento=0;
		while ($row = mysqli_fetch_row($documentos)) {
			$documento = $row[0];
		}

 		foreach ($datos as $llave => $valor) {
 			foreach ($codigo as $llave => $fila) {
 				if($fila[0]==$valor[1]){
 					switch ($fila[2]) {
 						case 'activo':
 								$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
								mysqli_query($cn,$sql);
 							break;
 						case 'pasivo':
 								$sql = "INSERT INTO pasivo VALUES ('".$documento."','".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
								mysqli_query($cn,$sql);
 							break;
 						case 'patrimonio':
 								$sql = "INSERT INTO activo1 VALUES ('".$documento."','".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
								mysqli_query($cn,$sql);
 							break;
 						case 'ingreso':
 								$sql = "INSERT INTO ingresos VALUES ('".$documento."','".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
								mysqli_query($cn,$sql);
 							break;
 						case 'gasto':
 								$sql = "INSERT INTO gasto VALUES ('".$documento."','".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
								mysqli_query($cn,$sql);
 							break;
 						case 'costo':
 								$sql = "INSERT INTO costos VALUES ('".$documento."','".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
								mysqli_query($cn,$sql);
 							break;
 					}
 				}
 			}
 		}
 		mysqli_close($cn);
	}
 ?>