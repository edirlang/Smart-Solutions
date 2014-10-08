<?php 
	foreach ($_FILES as $key) {
    if($key['error'] == UPLOAD_ERR_OK ){
    	$ruta="../Imagenes/"; 
	$nombre = $key['name'];
	$uploadfile_temporal=$_FILES[$nombre]['tmp_name']; 
	$uploadfile_nombre=$ruta.$_POST['Codigo'].".png"; 
 
	if (is_uploaded_file($uploadfile_temporal)) 
	{ 
	    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
	    return true; 
	}
}
} 
 ?>