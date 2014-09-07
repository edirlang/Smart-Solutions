<?php 
	$datos = json_decode($_POST['jdatos'], true);
	$debito = array();
	$credito = array();
	$totalDebito=0;
	$totalCredito=0;
	
	for($i=0;$i<count($datos);$i++) {
		if($datos[$i][3]=="C"){
			$totalCredito+=$datos[$i][5];
			array_push($credito, $datos[$i][0],$datos[$i][1],$datos[$i][2],$datos[$i][3],$datos[$i][4],$datos[$i][5]);
		}else{
			$totalDebito+=$datos[$i][5];
			array_push($debito,$datos[$i][0],$datos[$i][1],$datos[$i][2],$datos[$i][3],$datos[$i][4],$datos[$i][5]);
		}	
	}

	if($totalDebito!=$totalCredito){
		echo 0;
	}else{
		echo 1;
	}
 ?>