<?php
    //Creacion de las variables de seccion utiles para la autentificacion y el almacenamiento de datos claves
    session_start();    
    //require ("bd/conexion.php");
    //require ("DAO/TDA.php");
    require_once ("./utilidades/encriptacion.php");
    require_once ("./DAO/DAO_usuarios.php");
    
    if (isset($_SESSION['autentificado'])) {
        ?>
            <meta http-equiv="Refresh" content="1;url=panelAdministracion.php">
        <?
    }else{
    
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO -->
    <title>The Hive</title>
    <meta name="description" content="Aplicacion web diseñada para la administracion y gestion de comunidades de propietarios" />
    <meta name="keywords" content="comunidades, comunidades de vecinos, propietarios, comunidades de propietarios, gestion automatica" />
    <link type="text/plain" rel="author" href="humans.txt" />
    
    <link href="img/iconoTheHive.png" rel="icon" type="image/png" />
    
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,700%7cBitter:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 3.1.0 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Flexslider 2 -->
    <link href="css/flexslider.css" rel="stylesheet" />
    <!-- venobox -->
    <link href="css/venobox.css" rel="stylesheet">
    <!-- ionicons font -->
    <link href="css/ionicons.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/color/blue.css" rel="stylesheet" />
    <link href="css/otrosEstilos.css" rel="stylesheet" />
  </head>
  <body>
    
    <div class="main-wrapper">
      <header>
        <div class="container">
          <div class="row">

            <div id="logo-region" class="logo col-md-3 text-center-sm  margin-bottom-10">
              <a href="index.php"><img src="img/logo.png" alt="logo" class="img-responsive logoBarnner" /></a>
            </div> <!-- /logo-region -->
<?php
        
        if($_GET){ ?>
<form action="index.php" id="formularioAutentificacion" name="formularioAutentificacion" method="post">
    <div id="menu-region" class="col-md-9">
        <nav class="navbar nestor-main-menu" role="navigation">
            <!-- Menu button for mobile display -->
            <div class="navbar-header">
                <br/>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">Entrar en mi cuenta</button>
            </div>
            <!-- Navigation links -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button> <strong>Error!</strong> Algo en tu autenticacion no fue bien. </div>
                <ul class="nav navbar-right navbar-nav">
                    <li class="dropdown">
                        <label class="form-control margin-left-10 margin-top-10" id="lab-usuario">Usuario</label>
                    </li>
                    <li class="dropdown">
                        <input type="text" class="form-control margin-left-10 margin-top-10" name="usuario" placeholder="Usuario"> </li>
                    <li class="dropdown">
                        <label class="form-control margin-left-10 margin-top-10" id="lab-pasword">Pasword</label>
                    </li>
                    <li class="dropdown">
                        <input type="password" class="form-control margin-left-10 margin-top-10" name="passwordIntro" placeholder="pasword"> </li>
                    <li class="dropdown">
                        <input type="submit" class="btn btn-primary btn-sm margin-left-10 margin-top-10" id="submit" name="submit" value="Send" /> </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- /Menu -->
</form>
<?
            }else if($_POST){
              echo "ENTOR POS ANTES DE LLAMAR A DAO";
              //Objeto de la calse DAO usuarios para la manipulacion de datos,
              $DaoUser= new DAO_usuarios();
              echo "ENTOR POS DESPUES DE LLAMAR A DAO";
              // Modelo Usuarios para el almacenaje de este tipo de objetos
              $currentUser= new Usuarios();
              //Almaceno en currentuser el Objeto usuario completo en el caso de que exista, sino devuelve null
              // Todo esto lo realizo gracias al metodo usuarioPorAlias de la clase DAO_usuario
              echo "ANtes de llamar a DAO";
              $currentUser=$DaoUser->usuarioPorAlias($_POST['usuario']);
              echo "DESPUES de llamar a DAO";
              //Comprobacion de autenticacion
              
              if($currentUser!=null){ 
                // Si currentUser es distinto de null quiere decir que la funcion anterior
                //a devuelto algun valor. Por lo que el siguiente paso sera comprobar si la contraseña
                //que introdujo el usuario es la misma
                if (password_verify($_POST['passwordIntro'],$currentUser->password)){
                    // de tener la misma contraseña envio el flujo al panel de administracion creando las vairbles de seecion

                    $_SESSION['autentificado']=1;
                    $_SESSION['currentUser']=$currentUser;

                    ?>
                      <meta http-equiv="Refresh" content="1;url=panelAdministracion.php">
                    <?php
                  
                }else{
                  // En caso de que la contraseña no sea correcta envio el flujo al index con error
                  ?>
                  <meta http-equiv="Refresh" content="1;url=index.php?error='error'">
                  <?php
                }
              }else{
                //Si el alias no existe el valor de currentUser sera null y envio el flujo al index con error
                ?>
                  <meta http-equiv="Refresh" content="1;url=index.php?error='error'">
                <?php
                
              }

               
            }else{
            
            ?>
            <form action="index.php" id="formularioAutentificacion" name="formularioAutentificacion" method="post" >
            <div id="menu-region" class="col-md-9">
              <nav class="navbar nestor-main-menu" role="navigation">
                 <!-- Menu button for mobile display -->
                <div class="navbar-header">
                    <br/>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">Entrar en mi cuenta</button>
                </div>
            
                <!-- Navigation links -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-right navbar-nav">
                    <li class="dropdown">
                        <label class="form-control margin-left-10 margin-top-10" id="lab-usuario">Usuario</label>
                    </li>
                    <li class="dropdown">
                        <input type="text" class="form-control margin-left-10 margin-top-10" name="usuario" placeholder="Usuario">
                    </li>
                    <li class="dropdown">
                        <label class="form-control margin-left-10 margin-top-10" id="lab-pasword">Pasword</label>
                    </li>
                    <li class="dropdown">
                        <input type="password" class="form-control margin-left-10 margin-top-10"  name="passwordIntro" placeholder="password">
                    </li>
                      <li class="dropdown">
                        <input type="submit" class="btn btn-primary btn-sm margin-left-10 margin-top-10" id="submit" name="submit" value="Send" />
                    </li>
                    </ul>
                  </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-right navbar-nav">
        
                        <li><a href="autentificacion/formularioRegistro.php" class="margin-left-10">No estoy registrado</a></li>
                        </ul>
                </div>
              </nav>
            </div><!-- /Menu -->
            </form>
              
              
            <?
            } // Cierre del if que comprueba si hay parametros de respuesta o no.
            ?>
              
              
          </div> <!-- /row -->
        </div> <!-- container -->
      </header>

      <div id="highlighted-region" class="highlighted text-color-light">
        <div id="highlighted-slider-1-block" class="highlighted-slider-1 position-relative bg-image-edificio1" data-stellar-background-ratio="0.7">
          <div class="overlay">
            <div class="flex-bullet-slider vertical-center text-center">
              <div class="container">
                <ul class="slides"><!--ESTA CLASE ES POR QUE TENIA UN VISORR DE IMAGENES CON TIEMPO CADA ITEN DE LA LISTA PASARA CADA X TIEMPO -->
                  <li>
                    <h1 class="slider-title">Welcome to The Hive</h1>
                    <p class="slider-description">Administra y gestiona tu comunidad con facilidad.</p>
                       <a href="index1.php" class="btn btn-default">+ Información</a>
                </ul>
              </div> <!-- /container -->
            </div> <!-- /flex-bullet-slider -->
          </div> <!-- /overlay -->
        </div> <!-- /highlighted-slider-1-block -->
      </div> <!-- /highlighted-region -->

      
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

<? 
    }
?>