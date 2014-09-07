<?php 
	$datos = json_decode($_POST['jdatos'], true);
	$totalDebito=0;
	$totalCredito=0;
	
	for($i=0;$i<count($datos);$i++) {
		if($datos[$i][3]=="C"){
			$totalCredito+=$datos[$i][5];
		}else{
			$totalDebito+=$datos[$i][5];
		}	
	}

	if($totalDebito!=$totalCredito){
		echo 0;
	}else{
		GuardarBD($datos);
		echo 1;
	}

	function GuardarBD($datos){
		include("../conexion.php");
		$activos = array(1105,1120,112005,12,1205,123005,131505,131520,133005,133010,133015,134010,134515,134520,134595,139935,139945,14,1405,1455,151670,1520,154005); 
 		$pasivos = array(21,2105,2145,23,2305,233540,236540,25,2505,2615,263010,263515,270505);
 		$gastos = array(5140,510503,510506,510518,510548,511510,5220,512015,513535,514525,520515,521030);
 		$ingresos = array(4135,413556,421005,4235,470590,423530,413554);
 		$costos = 6205;
 		$patrimonio = 31;

 		foreach ($datos as $llave => $valor) {
 			foreach ($activos as $llave1 => $codigo) {
 				if($codigo == $valor[1]){
 					$sql = "INSERT INTO activo1 VALUES (NULL,'".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
					mysql_query($sql,$cn);
					break;
 				}
 			}

 			foreach ($pasivos as $llave1 => $codigo) {
 				if($codigo==$valor[1]){
 					$sql = "INSERT INTO pasivo VALUES (NULL,'".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
					mysql_query($sql,$cn);
					break;
 				}
 			}

 			foreach ($gastos as $llave1 => $codigo) {
 				if($codigo==$valor[1]){
 					$sql = "INSERT INTO gasto VALUES (NULL,'".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
					mysql_query($sql,$cn);
					break;
 				}
 			}

 			foreach ($ingresos as $llave1 => $codigo) {
 				if($codigo==$valor[1]){
 					$sql = "INSERT INTO ingresos VALUES (NULL,'".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
					mysql_query($sql,$cn);
					break;
 				}
 			}

 			if($valor[1]==$costos){
 				$sql = "INSERT INTO costos VALUES (NULL,'".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
				mysql_query($sql,$cn);
 			}

 			if($valor[1]==$patrimonio){
 				$sql = "INSERT INTO activo1 VALUES (NULL,'".$valor[0]."','".$valor[1]."','".$valor[2]."','".$valor[3]."','".$valor[4]."','".$valor[5]."')";
				mysql_query($sql,$cn);
 			}
 			
 		}
 		mysql_close($cn);
	}
 ?>