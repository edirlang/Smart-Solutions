<?php ob_start(); ?>

      <div class="page-header text-center">
        <h1>Smart-Solutions<br><small>“El equipo para la persona correcta”</small></h1>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="wowslider-container1">
          <div class="ws_images">
            <ul>
              <li>
                <img src="/Smart-Solutions/data1/images/13745asusrepublicofgamers1920x1080computerwallpaper.jpg" alt="13745-asus-republic-of-gamers-1920x1080-computer-wallpaper" title="13745-asus-republic-of-gamers-1920x1080-computer-wallpaper" id="wows1_0"/>
              </li>
              <li>
                <img src="/Smart-Solutions/data1/images/aceraspireserieslogohdwallpaperdesktop.jpg" alt="Acer-Aspire-Series-Logo-HD-Wallpaper-Desktop" title="Acer-Aspire-Series-Logo-HD-Wallpaper-Desktop" id="wows1_1"/>
              </li>
              <li>
                <a href="http://wowslider.com/vf">
                  <img src="/Smart-Solutions/data1/images/maxresdefault.jpg" alt="full screen slider" title="maxresdefault" id="wows1_2"/></a>
              </li>
              <li>
                <img src="/Smart-Solutions/data1/images/msi_2wallpaper1920x1080.jpg" alt="msi_2-wallpaper-1920x1080" title="msi_2-wallpaper-1920x1080" id="wows1_3"/>
              </li>
            </ul>
          </div>
          <div class="ws_bullets">
            <div>
              <a href="#" title="13745-asus-republic-of-gamers-1920x1080-computer-wallpaper"><img src="/Smart-Solutions/data1/tooltips/13745asusrepublicofgamers1920x1080computerwallpaper.jpg" alt="13745-asus-republic-of-gamers-1920x1080-computer-wallpaper"/>1</a>
              <a href="#" title="Acer-Aspire-Series-Logo-HD-Wallpaper-Desktop"><img src="/Smart-Solutions/data1/tooltips/aceraspireserieslogohdwallpaperdesktop.jpg" alt="Acer-Aspire-Series-Logo-HD-Wallpaper-Desktop"/>2</a>
              <a href="#" title="maxresdefault"><img src="/Smart-Solutions/data1/tooltips/maxresdefault.jpg" alt="maxresdefault"/>3</a>
              <a href="#" title="msi_2-wallpaper-1920x1080"><img src="/Smart-Solutions/data1/tooltips/msi_2wallpaper1920x1080.jpg" alt="msi_2-wallpaper-1920x1080"/>4</a>
            </div>
          </div>
          <script type="text/javascript" src="/Smart-Solutions/engine1/wowslider.js"></script>
          <script type="text/javascript" src="/Smart-Solutions/engine1/script.js"></script>      
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
       </div>  
       <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <h4 align="justify">Bienvenido a Smart Solutions, una empresa dedicada a la venta de computadores segun la necesidad de los consumidores, tenemos desde la gama mas baja hasta la mas alta segun la necesidad. Podemos encontrar equipos para usuarios basicos, diseñadores, arquitectos, gamers, entre otros. Trabajamos fuertemente para que nuestros usuarios queden satisfechos con nuestros productos. </h4>
      </div>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
    <div class="col-sm-4 col-md-4 col-lg-4">
      <h1 class="text-center">Login</h1>
      <div id="Mensaje">

      </div>
      <form id="Formulario" name="Formulario" role="form" method="post">
        <div class="form-group" action="login.php" method="post">
          <label>Usuario: </label>
          <div class="input-group">
            <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Contrasena">
            <span class="input-group-btn">
              <label class="btn btn-default" id="filter-clear"><span class="glyphicon glyphicon-user"></span></label>
            </span>
          </div>

          <label>Contraseña</label>
          <div class="input-group">
            <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Contrasena">
            <span class="input-group-btn">
              <label class="btn btn-default"  id="filter-clear"><span class="glyphicon glyphicon-lock"></span></label>
            </span>
          </div>

        </div>
        <button id="Enviar" type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Ingresar</button>
      </form>
    </div>
<script language="javascript" type="text/javascript" src="/Smart-Solutions/js/login.js"></script>
<?php $contenido = ob_get_clean(); ?>
<?php include "plantilla_base.php"; ?>