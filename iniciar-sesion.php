<?php 
	session_start();
	include("conexion.php");
	$datos = json_decode($_POST['jdatos'], true);
	$usuario = $datos[0];
	$contrasena = $datos[1];
	$result = mysql_query("SELECT * FROM usuarios where Cedula='".$usuario."'", $cn);
	echo mysql_error();
	mysql_close($cn);
	$tipo="null";
	if($result){
		while ($row = mysql_fetch_row($result)){
            if ($row[4]==$contrasena) {
            	switch ($row[5]) {
                	case 'admin':
						$_SESSION['usuario']=$usuario;
						$_SESSION['rol']='admin';
						$tipo="admin";
					break;
					case 'contador':
						$_SESSION['usuario']=$usuario;
						$_SESSION['rol']='contador';
						$tipo="contador";
					break;

					case 'cajero':
						$_SESSION['usuario']=$usuario;
						$_SESSION['rol']='cajero';
						$tipo="cajero";
					break;
				}	
             }
   		}
	}
	echo $tipo;
 ?>