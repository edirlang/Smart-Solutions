<?php ob_start() ?>
<?php 
  if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 'admin':
      include 'plantillas/menu_admin.php';
      break;
      case 'contador':
      include 'plantillas/menu_contador.php';
      break;
      case 'cajero':
      include 'plantillas/menu_cajero.php';
      break;
    }
  } ?>
<?php $menu = ob_get_clean(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Smart-Solutions</title>
	
  <link rel="stylesheet" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Jquery slider" />
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="/Smart-Solutions/engine1/style.css" />
  <script type="text/javascript" src="/Smart-Solutions/engine1/jquery.js"></script>
  <link rel="stylesheet" href="/Smart-Solutions/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Smart-Solutions/css/bootstrap.css">
</head>

<body>
  <?php echo $menu; ?>
    
    <div class="container">
      <div class="row">
        <?php echo $contenido; ?>
      </div>  
    </div>

    <script language="javascript" type="text/javascript" src="/Smart-Solutions/js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/Smart-Solutions/js/jquery.validate.js"></script>
    <script src="/Smart-Solutions/js/bootstrap.min.js"></script>
  </body>   
  </html>