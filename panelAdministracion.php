<?php
    //Creacion de las variables de seccion utiles para la autentificacion y el almacenamiento de datos claves
    session_start();
    $autentificado= $_SESSION['autentificado'];
    $currentUser=$_SESSION['currentUser'];

    require ("./DAO/DAO_usuarios.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO -->
    <title>The Hive - Panel Administrativo</title>
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
    <!-- Fontawesome -->
    <link href="/iconos/css/all.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/otrosEstilos.css" rel="stylesheet" />
    <link href="css/color/blue.css" rel="stylesheet" />


    <!-- JavaScript para para operaciones con estilos-->
    <script type="text/javascript" src="./js/utiles.js"></script>
    <!-- JavaScript para el manejo de contenido-->
    <script type="text/javascript" src="./js/contenidos.js"></script>

</head>
<body>
    <div class="main-wrapper"> 
        <header>
        <div class="container display-flex">
            <div class="row">
                <div id="logo-region" class="logo col-md-3 text-center-sm  margin-bottom-10">
                    <a href="/index.php"><img src="img/logo.png" alt="logo" class="img-responsive" /></a>
                </div> <!-- /logo-region -->
            </div>
            
            <div>
                <a href="/autentificacion/cerrarSeccion.php" class="logout">
                    <div>  Cerrar</div>
                    <div class="ion-log-out size-32 title-color" id="logoLogout"></div>
                </a>
            </div>
            
        </div>
        <div class="container">
            <p class="text-right"> Bienvenido al sistema:  <?=strtoupper($currentUser->alias)?> </p>
            <hr/>
        </div>
        </header>
        <div id="content-region" class="content region">
            <div class="container-fluit botonera">
                <?php
                    //Si hay usuario autentificado muestro el panel de adminstracion.
                    if ($autentificado==1 && $currentUser->permisos==1) { 
                        ?>
                        <div class="container" id="botoneraCentral">
                                <h2 class="title-color text-center">Panel de administración</h2>
                        
                                    <div class="row">
                                        <a href="administracion/adminComunidades.php" class="botonera">
                                            <div class="col-xs-12 col-sm-6 col-md-2 menuUsuario" id="btn_comunidades">
                                                    <h6>Comunidades</h6>
                                                    <i class="fas fa-city"></i> 
                                            </div>
                                        </a>

                                        <a href="#" class="botonera">
                                            <div class="col-xs-12 col-sm-6 col-md-2 menuUsuario" id="btn_fincas">
                                                    <h6>Fincas</h6>
                                                    <i class="fas fa-home"></i> 
                                            </div>
                                        </a>

                                        <a href="#" class="botonera">
                                            <div class="col-xs-12 col-sm-6 col-md-2 menuUsuario" id="btn_residentes">
                                                    <h6>Residentes</h6>
                                                    <i class="fas fa-address-card"></i> 
                                            </div>
                                        </a>

                                        <a href="#" class="botonera">
                                            <div class="col-xs-12 col-sm-6 col-md-2 menuUsuario" id="btn_juntas">
                                                    <h6>Juntas</h6>
                                                    <i class="fas fa-handshake"></i> 
                                            </div>
                                        </a>
                                        <a href="#" class="botonera">
                                            <div class="col-xs-12 col-sm-6 col-md-2 menuUsuario" id="btn_contabilidad">
                                                    <h6>Contabilidad</h6>
                                                    <i class="fas fa-file-invoice-dollar"></i>
                                            </div>
                                        </a>
                                        <a href="#" class="botonera">
                                            <div class="col-xs-12 col-sm-6 col-md-2 menuUsuario" id="btn_otros">
                                                    <h6>Otros</h6>
                                                    <i class="fas fa-grip-horizontal"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container area_trabajo text-center" id="areaTrabajo">
                                    <h2 class="title-color">Tablon de gestión de comunidades</h2>
                                    <h4>Esta es el area de trabajo</h4>
                                </div>     
                            </div>
                        <?php
                    }else if ($autentificado==1 && $currentUser->permisos==2){
                        echo "El usuario ha sido logado con permisos de USUARIO";
                        ?>
                        
                        <?php
                    }else{
                        ?>
                            <meta http-equiv="Refresh" content="1;url=index.php?error='error'">
                        <?
                    }
                ?>
            </div> 
        </div><!--Cierre de la capa content-region-->
        <footer>
            <!-- Apertura de la primera fila del pie-->
            <div id="footer-columns-region" class="footer-columns region-30 block-30 bg-color-grayDark2 text-color-light">
                <div class="container">
                    <div class="row">
                        
                        <div id="footer-first-column-region" class="footer-first-column col-xs-12 col-md-4 text-center">
                            <div class="region">
                                <div id="footer-address-block" class="footer-address block">
                                    <i class="icon ion-ios7-location-outline size-32 margin-bottom-20"></i>
                                    <p>London</p><br>
                                    <p>España</p>
                                </div> <!-- /footer-address-block -->
                            </div> <!-- /region -->
                        </div> <!-- /footer-first-column-region -->

                        <div id="footer-second-column-region" class="footer-second-column col-xs-12 col-md-4 text-center">
                            <div class="region">
                                <div id="footer-mail-block" class="footer-mail block">
                                <i class="icon ion-ios7-email-outline size-32 margin-bottom-20"></i>
                                <p><a href="mailto:info@thehive.com">info@thehive.com</a><br><a href="mailto:support@thehive.com">support@thehive.com</a></p>
                                </div> <!-- /footer-mail-block -->
                            </div> <!-- /region -->
                        </div>  <!-- /footer-second-column-region -->

                        <div id="footer-third-column-region" class="footer-third-column col-xs-12 col-md-4 text-center">
                            <div class="region">
                                <div id="footer-phone-block" class="footer-phone block">
                                    <i class="icon ion-ios7-telephone-outline size-32 margin-bottom-20"></i>
                                    <p>+34 605880818 <br>+44 072226786</p>
                                </div> <!-- /footer-phone-block -->

                            </div> <!-- /region -->
                        </div>  <!-- /footer-third-column-region -->

                    </div> <!-- /row -->
                </div> <!-- /container -->
            </div> <!--Cierre de la capa footer-columns-region primera fila del pie-->

            <!-- Inicio de la segunda fila del pie-->
            <div class="region-10 block-10 bg-color-grayDark1 text-color-light">
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
                </div> 
            </div><!-- Cierre de la capa para la segunda fila del pie -->
        </footer>
    </div><!-- Cierre del main-wrapper contenedor principal de toda la pagina-->
</body>
</html>
