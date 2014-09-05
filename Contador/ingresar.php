<?php 
 include("consultar-usuario.php");

 include("../conexion.php");

 $transacion1= array($usuario,$_POST['Codigo1'],$_POST['Fecha'],"D",$_POST['descripcion1'],$_POST['Valor1']);
 $transacion2= array($usuario,$_POST['Codigo2'],$_POST['Fecha'],"C",$_POST['descripcion2'],$_POST['Valor2']);
 $sql=null;
 $activos = array(31,1105,1120,112005,12,1205,123005,131505,131520,133005,133010,133015,134010,134515,134520,134595,139935,139945,14,1405,1455,151670,1520,154005); 
 $pasivos = array(21,2105,2145,23,2305,233540,236540,25,2505,2615,263010,263515,270505);
 $gastos = array(5140,510503,510506,510518,510548,511510,5220,512015,513535,514525,520515,521030);
 $ingresos = array(4135,413556,421005,4235,470590,423530,413554);
 $costos = 6205;

for ($i=0; $i < 23; $i++) { 
	if ($transacion1[1]==$activos[$i]) {
		$sql = "INSERT INTO activo1 VALUES (NULL,'".$transacion1[0]."','".$transacion1[1]."','".$transacion1[2]."','D','".$transacion1[4]."','".$transacion1[5]."')";
		mysql_query($sql,$cn);
		
	}
	if ($transacion2[1]==$activos[$i]) {
		$sql = "INSERT INTO activo1 VALUES (NULL,'".$transacion2[0]."','".$transacion2[1]."','".$transacion2[2]."','C','".$transacion2[4]."','".$transacion2[5]."')";
		mysql_query($sql,$cn);
		
	}
}

for ($i=0; $i < 13; $i++) { 
	if ($transacion1[1]==$pasivos[$i]) {
		$sql = "INSERT INTO pasivo VALUES (NULL,'".$transacion1[0]."','".$transacion1[1]."','".$transacion1[2]."','D','".$transacion1[4]."','".$transacion1[5]."')";
		mysql_query($sql,$cn);
		
	}
	if ($transacion2[1]==$pasivos[$i]) {
		$sql = "INSERT INTO pasivo VALUES (NULL,'".$transacion2[0]."','".$transacion2[1]."','".$transacion2[2]."','C','".$transacion2[4]."','".$transacion2[5]."')";
		mysql_query($sql,$cn);
		
	}
}

for ($i=0; $i < 12; $i++) { 
	if ($transacion1[1]==$gastos[$i]) {
		$sql = "INSERT INTO gasto VALUES (NULL,'".$transacion1[0]."','".$transacion1[1]."','".$transacion1[2]."','D','".$transacion1[4]."','".$transacion1[5]."')";
		mysql_query($sql,$cn);
		
	}
	if ($transacion2[1]==$gastos[$i]) {
		$sql = "INSERT INTO gasto VALUES (NULL,'".$transacion2[0]."','".$transacion2[1]."','".$transacion2[2]."','C','".$transacion2[4]."','".$transacion2[5]."')";
		mysql_query($sql,$cn);
		
	}
}

for ($i=0; $i < 7; $i++) { 
	if ($transacion1[1]==$ingresos[$i]) {
		$sql = "INSERT INTO ingresos VALUES (NULL,'".$transacion1[0]."','".$transacion1[1]."','".$transacion1[2]."','D','".$transacion1[4]."','".$transacion1[5]."')";
		mysql_query($sql,$cn);
		
	}
	if ($transacion2[1]==$ingresos[$i]) {
		$sql = "INSERT INTO ingresos VALUES (NULL,'".$transacion2[0]."','".$transacion2[1]."','".$transacion2[2]."','C','".$transacion2[4]."','".$transacion2[5]."')";
		mysql_query($sql,$cn);
		
	}
}
	if ($transacion1[1]==$costos) {
		$sql = "INSERT INTO costos VALUES (NULL,'".$transacion1[0]."','".$transacion1[1]."','".$transacion1[2]."','D','".$transacion1[4]."','".$transacion1[5]."')";
		mysql_query($sql,$cn);
		
	}
	if ($transacion2[1]==$costos) {
		$sql = "INSERT INTO costos VALUES (NULL,'".$transacion2[0]."','".$transacion2[1]."','".$transacion2[2]."','C','".$transacion2[4]."','".$transacion2[5]."')";
		mysql_query($sql,$cn);
		
	}


if (mysql_error()) {
	echo  mysql_error();
}else{
	header("Location: Transacion-manual.php");
}
mysql_close($cn);
 ?>