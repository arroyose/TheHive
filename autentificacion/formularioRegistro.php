<?php
    //Creacion de las variables de seccion utiles para la autentificacion y el almacenamiento de datos claves
    session_start();    
    require ("../bd/conexion.php");
    require ("../utilidades/encriptacion.php");
    
    if (isset($_SESSION['autentificado'])) {
        ?>
            <meta http-equiv="Refresh" content="1;url=/panelAdministracion.php">
        <?
    }else{
    
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO -->
    <title>The Hive</title>
    <meta name="description" content="Aplicacion web diseñada para la administracion y gestion de comunidades de propietarios" />
    <meta name="keywords" content="comunidades, comunidades de vecinos, propietarios, comunidades de propietarios, gestion automatica" />
    <link type="text/plain" rel="author" href="humans.txt" />
    
    <link href="../img/iconoTheHive.png" rel="icon" type="image/png" />
    
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,700%7cBitter:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 3.1.0 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- Flexslider 2 -->
    <link href="../css/flexslider.css" rel="stylesheet" />
    <!-- venobox -->
    <link href="../css/venobox.css" rel="stylesheet">
    <!-- ionicons font -->
    <link href="../css/ionicons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet" />

    <link href="../css/otrosEstilos.css" rel="stylesheet" />
    <link href="../css/color/blue.css" rel="stylesheet" />
  </head>
  <body>
    <div class="main-wrapper">
      <header>
        <div class="container">
          <div class="row">

            <div id="logo-region" class="logo col-md-3 text-center-sm">
              <a href="../index.html"><img src="../img/logo.png" alt="logo" class="img-responsive" /></a>
            </div> <!-- /logo-region -->

            <div id="menu-region" class="col-md-9">
              <nav class="navbar nestor-main-menu" role="navigation">
                <!-- Menu button for mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">MENU</button>
                </div>
            
                <!-- Navigation links -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-right navbar-nav">
                    <li class="dropdown">
                      <a href="../index.php">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="../info.php">+ Información</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modulos</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Módulo Central</a></li>
                        <li><a href="#">Módulo Gestión Administrativa</a></li>
                        <li><a href="#">Módulo Contable</a></li>
                        <li><a href="#">Módulo de Juntas</a></li>
                        <li><a href="#">Módulo de Incidencias</a></li>
                        <li><a href="#">Módulo Gestión de Reservas</a></li>
                      </ul>
                      </li>
                    <li><a href="../contacto.php">Contacto</a></li>
                  </ul>
                </div> <!-- /navbar-collapse -->
              </nav>
            </div> <!-- /menu-region -->

          </div> <!-- /row -->
        </div> <!-- container -->
      </header>

      <div class="container-fluid bg-image-Registro p-0" id="bannerRegistro">
          <div class="container-fluid cover_blue">
            <div class="row centrado_100">
            <div class="container text-color-light">
                    <h1>Registro de nuevos usuarios</h1>
                    <p>Crea una cuenta gratuita y disfruta de esta aplicación</p>
                </div> <!-- /container -->
            </div>
          </div>
      </div>
        
      <div id="content-region" class="content region">
        <div id="panels-4-block" class="panels-4 block">
          <div class="container">
            <div class="row">
                <h1>Información sobre registro</h1>
                <p>Para usar nuestra aplicación es necesario adquirir el curso de Gestión de Propiedad Horizontal</p>
                <p>Si desea más información sobre nuestro proceso de registro escribanos a nuestro correo de información hello@thehivecommunity.eu</p>
                <p>Puede examinar nuestra aplicacion y su uso con nuestro usuario de prueba:</p>
                <br/>
                <p><b>Usuario:</b>prueba<br/><b>Password:</b>prueba<br/></p>
            </div>
        </div>
      </div>
      </div>

        <div id="footer-columns-region" class="footer-columns region-30 block-30 bg-color-grayDark2 text-color-light">
        <div class="container">
          <div class="row">

            <div id="footer-first-column-region" class="footer-first-column col-xs-12 col-md-4 text-center">
              <div class="region">

                <div id="footer-address-block" class="footer-address block">
                  <i class="icon ion-ios7-location-outline size-32 margin-bottom-20"></i>
                  <p>London</p><br/>
                  <p>España</p>
                </div> <!-- /footer-address-block -->

              </div> <!-- /region -->
            </div> <!-- /footer-first-column-region -->

            <div id="footer-second-column-region" class="footer-second-column col-xs-12 col-md-4 text-center">
              <div class="region">

                <div id="footer-mail-block" class="footer-mail block">
                  <i class="icon ion-ios7-email-outline size-32 margin-bottom-20"></i>
                  <p><a href="mailto:info@thehive.com">info@thehive.com</a><br /><a href="mailto:support@thehive.com">support@thehive.com</a></p>
                </div> <!-- /footer-mail-block -->

              </div> <!-- /region -->
            </div>  <!-- /footer-second-column-region -->

            <div id="footer-third-column-region" class="footer-third-column col-xs-12 col-md-4 text-center">
              <div class="region">

                <div id="footer-phone-block" class="footer-phone block">
                  <i class="icon ion-ios7-telephone-outline size-32 margin-bottom-20"></i>
                  <p>+34 605880818 <br />+44 072226786</p>
                </div> <!-- /footer-phone-block -->

              </div> <!-- /region -->
            </div>  <!-- /footer-third-column-region -->

          </div> <!-- /row -->
        </div> <!-- /container -->
      </div> <!-- /footer-columns-region -->

      <footer class="region-10 block-10 bg-color-grayDark1 text-color-light">
        <div class="container">
          <div class="row">

            <div id="footer-left-region" class="footer-left region-bottom-sm-0 col-xs-12 col-md-6 text-center-sm">
              <div class="region">

                <div id="copyright-block" class="block">
                  <p>Developed by <a href="#">The hive</a></p>
                </div> <!-- /copyright-block -->

              </div> <!-- /region -->
            </div> <!-- /footer-left-region -->

            <div id="footer-right-region" class="footer-right region-top-sm-0 col-xs-12 col-md-6 text-right text-center-sm">
              <div class="region">

                <div id="social-networks-footer-block" class="social-networks-footer block">
                  <a href="http://facebook.com"><i class="icon ion-social-facebook"></i></a>
                  <a href="http://twitter.com"><i class="icon ion-social-twitter"></i></a>
                  <a href="http://linkedin.com"><i class="icon ion-social-linkedin"></i></a>
                  <a href="http://pinterest.com"><i class="icon ion-social-pinterest"></i></a>
                  <a href="http://vimeo.com"><i class="icon ion-social-vimeo"></i></a>
                  <a href="http://github.com"><i class="icon ion-social-github"></i></a>
                </div> <!-- /social-networks-footer -->

              </div> <!-- /region -->
            </div> <!-- /footer-right-region -->

          </div> <!-- /row -->
        </div> <!-- /container -->
      </footer>
    </div> <!-- /main-wrapper -->

   
    <!-- Back to top button -->
    
    <div id="back-to-top">
      <i class="ion-ios7-arrow-up"></i>
    </div>

    <!-- End of Back to top button -->
    
    <!-- jQuery 1.10.2 -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- jQuery Plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexverticalcenter.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/app.js"></script>
    <!-- Demo Switcher -->
    <script src="js/demo-switcher.js"></script>
  </body>
</html>
<?php
} //Cierre del bloque else "Si el usuario no esta autenticado"
?>


