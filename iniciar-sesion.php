<?php 
	session_start();
	include("conexion.php");
	$usuario = $_POST['Usuario'];
	$contrasena = $_POST['Contrasena'];
	$result = mysql_query("SELECT * FROM usuarios where Cedula='".$usuario."'", $cn);
	echo mysql_error();
	mysql_close($cn);
	$i=0;
	if($result){
		while ($row = mysql_fetch_row($result)){
            if ($row[4]==$contrasena) {
            	$i=1;
                switch ($row[5]) {
                	case 'admin':
						header("Location: Administrador/panel_admin.php");
						$_SESSION['usuario']=$usuario;
					break;
					case 'contador':
						header("Location: Contador/panel_contador.php");
						$_SESSION['usuario']=$usuario;
					break;

					case 'cajero':
						header("Location: Cajero/panel_cajero.php");
						$_SESSION['usuario']=$usuario;
					break;
				}
				echo "row vale a".$row[5];	
             }
   		}
	}

	if($i!=1){
		header("Location: index.html");
	}
 ?>