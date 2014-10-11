<?php 
	session_start();
	require("conexion.php");
	
	$datos = json_decode($_POST['jdatos'], true);
	$usuario = $datos[0];
	$contrasena = $datos[1];
	$result = mysqli_query($cn,"SELECT * FROM usuarios where Cedula='".$usuario."'");
	
	$tipo="null";
	if($result){
		while ($row = mysqli_fetch_row($result)){
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
	mysqli_close($cn);
 ?>