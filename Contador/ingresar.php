<?php 
 include("consultar-usuario.php");

 include("../conexion.php");

 $transacion1= array($usuario,$_POST['Codigo1'],$_POST['Fecha'],"D",$_POST['descripcion1'],$_POST['Valor1']);
 $transacion2= array($usuario,$_POST['Codigo2'],$_POST['Fecha'],"C",$_POST['descripcion2'],$_POST['Valor2']);
 $sql=null;

 $query=mysql_query("SELECT MAX(ID) as ID FROM activo1");
	$id=mysql_fetch_array($query); //$id["id"] = el ultimo id (mayor)

switch ($transacion1[1]) {
	case 1105:
			$sql = "INSERT INTO activo1 VALUES (NULL,'".$transacion1[0]."','".$transacion1[1]."','".$transacion1[2]."','D','".$transacion1[4]."','".$transacion1[5]."')";
		break;
}
mysql_query($sql,$cn);
switch ($transacion2[1]) {
	case 1105:
			$sql = "INSERT INTO activo1 VALUES (NULL,'".$transacion2[0]."','".$transacion2[1]."','".$transacion2[2]."','C','".$transacion2[4]."','".$transacion2[5]."')";
		break;
} 
mysql_query($sql,$cn);

if (mysql_error()) {
	echo  mysql_error();
}else{
	header("Location: Transacion-manual.php");
}
mysql_close($cn);
 ?>