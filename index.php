<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OneStorage</title>

    <!-- Librerias CSS -->

    <?php if($_SERVER['SERVER_NAME'] == 'localhost'){  ?>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sweetalert2.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/aos.css">

    <?php }else{ ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.5/sweetalert2.min.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <?php } ?>


        <link rel="stylesheet" href="css/main.css">

</head>

<body>

<div class="container-fluid">


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7ea4a5">
        <button style="background-color: #7ea4a5" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav header-menu">
                <a class="p-2 text-white" href="#nav-home">Inicio</a>
                <a class="p-2 text-white" href="#nav-caracteristicas">Características</a>
                <a class="p-2 text-white" href="#nav-tam">Tamaño</a>
                <a class="p-2 text-white" href="#nav-seguridad">Seguridad</a>
                <a class="p-2 text-white" href="#nav-galeria">Galería</a>
                <a class="p-2 text-white" href="#nav-contacto">Contacto</a>
                <a class="p-2 text-white" href="#nav-ubicacion">Ubicación</a>
            </div>
        </div>

        <div class="number-what">
            <a href="https://wa.me/5491153172062"><img src="img/whatsapp.png" class="img-fluid" style="width: 20px"> (11) 15-5317-2062</a>
        </div>
    </nav>


    <div id="nav-home" class="jumbotron jumbotron-fluid s0 parallax">
        <div class="container">

            <div class="header">

                <div class="row">

                    <div class="col-sm-12 text-center">
                        <h1 data-aos="zoom-in" data-aos-duration="2000" class="title-slogan">Alquiler de Depósitos y Bauleras</h1>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img data-aos="zoom-in" data-aos-duration="1000" src="img/logo.png" class="logo-one img-fluid">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div id="nav-caracteristicas" class="row s1">

        <div class="col-xs-12 col-sm-12 col-md-6 text-center">
            <img src="img/contenedores.png" class="img-fluid img-cont">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">

            <h1 class="display-4 title-caracteristica">Características</h1>

            <div class="card card-tam-dis">
                <div class="card-body" style="background-color: #eee">
                    <ul>
                        <li>Una forma práctica, cómoda y segura para que empresas, comercios y familias almacenen variedad de objetos
                            y mercaderias.
                        </li>
                        <li>Inmejorable accesibilidad desde Ruta 8 Panamericana.</li>
                        <li>Dépositos privados, secos, limpios, y seguros.</li>
                        <li>Facilidad de carga y descarga.</li>
                        <li>Estaciona en la puerta de tu contenedor.</li>
                        <li>Amplia playa de estacionamiento.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="s2 mb-5">

        <div id="nav-tam" class="row mt-4">

            <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                <h1 class="display-4 title-tamdis text-center">TAMAÑOS <span style="color: #5da099 ">DISPONIBLES</span></h1>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 d-flex align-items-center">

                <div class="card box-card">
                    <div class="card-body" style="background-color: #eee">
                        <h1 class="display-5 box-title">BOX 8</h1>
                        <p class="box-text">
                            8 mts<sup>2</sup><br>
                            Largo: 3 mts<br>
                            Ancho: 2,5 mts<br>
                            Alto: 2,40 mts<br>
                        </p>
                        <div class="figura-box"></div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 text-left d-flex align-items-center">

                <img class="img-fluid" data-aos="zoom-in" data-aos-duration="1000" src="img/box8.png">

            </div>

        </div>


        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 d-flex align-items-center">

                <div class="card box-card">
                    <div class="card-body" style="background-color: #eee">
                        <h1 class="display-5 box-title">BOX 15</h1>
                        <p class="box-text">
                            15 mts<sup>2</sup><br>
                            Largo: 6 mts<br>
                            Ancho: 2,5 mts<br>
                            Alto: 2,40 mts<br>
                        </p>
                        <div class="figura-box"></div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 text-left d-flex align-items-center">

                <img class="img-fluid" data-aos="zoom-in" data-aos-duration="1000" src="img/box15.png">

            </div>

        </div>


        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 d-flex align-items-center">

                <div class="card box-card">
                    <div class="card-body" style="background-color: #eee">
                        <h1 class="display-5 box-title">BOX 30</h1>
                        <p class="box-text">
                            30 mts<sup>2</sup><br>
                            Largo: 12 mts<br>
                            Ancho: 2,5 mts<br>
                            Alto: 2,40 mts<br>
                        </p>
                        <div class="figura-box"></div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 text-left d-flex align-items-center">

                <img class="img-fluid" data-aos="zoom-in" data-aos-duration="1000" src="img/box30.png">

            </div>

        </div>


    </div>


    <div id="nav-seguridad" class="row green-bg s3 mx-auto text-center" style="padding: 15px">

        <div class="col-sm-12">

            <div class="text-center mt-5 mb-4">
                <img class="logo-one-2 img-fluid" src="img/onestorage.png">
            </div>

        </div>

        <div class="col-sm-12">
            <h1 class="display-5 green-bg-title">Guardamos tus cosas</h1>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">

            <img class="img-fluid" data-aos="zoom-in-down" data-aos-duration="1000" src="img/ico01.png">
            <h4 class="text-center">Contenedores</h4>
            <p class="text-icon">Marítimos de acero, herméticos, individuales para cada cliente</p>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">

            <img class="img-fluid" data-aos="zoom-in-down" data-aos-duration="1000" src="img/ico02.png">
            <h4 class="text-center">Seguridad</h4>
            <p class="text-icon">Doble cierre de seguridad, llaves de acceso en su poder únicamente</p>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">

            <img class="img-fluid" data-aos="zoom-in-down" data-aos-duration="1000" src="img/ico03.png">
            <h4 class="text-center">Video Remoto</h4>
            <p class="text-icon">Por parte del cliente a través de la APP de su Smartphone (iOS/Android)</p>

        </div>

    </div>



    <div id="nav-galeria" class="mt-5 mb-4 mx-auto">

        <div class="col-sm-12 text-center">
            <h1 class="text-center">Galería</h1>
        </div>

        <div class="gallery">

            <div>
                <img class="img-fluid" src="img/calesita/V1.jpg">
            </div>

            <div>
                <img class="img-fluid" src="img/calesita/V2.jpg">
            </div>

            <div>
                <img class="img-fluid" src="img/calesita/V3.jpg">
            </div>

            <div>
                <img class="img-fluid" src="img/calesita/V4.jpg">
            </div>

            <div>
                <img class="img-fluid" src="img/calesita/V5.jpg">
            </div>

            <div>
                <img class="img-fluid" src="img/calesita/V6.jpg">
            </div>

        </div>


    </div>


    <hr class="text-center mb-2 mt-5" style="width: 60%">


    <div id="nav-contacto" class="row s4">

        <div class="col-xs-12 col-sm-12 col-md-6 mt-4">

            <div class="card mx-auto card-contacto">
                <div class="card-body text-center" style="background-color: #fff">
                    <h1 class="display-5 info-title mb-2">Contacto</h1>
                    <p class="info-text">
                        Lunes a Sabado de 7hs a 21hs.<br><br>

                        <i class="fa fa-envelope" aria-hidden="true"></i> info@onestorage.com.ar<br><br>
                        <i class="fa fa-phone" aria-hidden="true"></i> (11) 15-5317-2062 (Diego)<br>
                        <i class="fa fa-phone" aria-hidden="true"></i> (11) 15-5807-6277 (Viviana)<br>
                        <i class="fa fa-phone" aria-hidden="true"></i> (11) 15-6748-7404 (Javier)<br><br>
                    </p>
                    <div class="figura-box mx-auto"></div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 mt-5">

            <div class="form-contact mx-auto">

                <form id="contact-form" role="form">

                    <h1>Envianos tu consulta</h1>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="c-nombre" type="text" name="c-nombre" class="form-control" placeholder="Ingrese su nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="c-mail" type="text" name="c-mail" class="form-control" placeholder="Ingrese su correo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="c-mensaje" name="c-mensaje" class="form-control" placeholder="Ingrese un mensaje" rows="4"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" id="btn-send-mensaje" class="btn btn-green btn-send btn-block">
                                Enviar mensaje
                            </button>
                        </div>
                    </div>

                </form>

            </div>


        </div>

        <div class="col-sm-12 text-center mt-5">

            Nos encontramos dentro de un predio cerrado y alambrado.<br><br>

            Las Mejores Tarifas del Mercado.<br><br>

            Acceso Ilimitado.

        </div>

    </div>

    <hr class="text-center mb-2 mt-5" style="width: 60%">

    <div class="row mt-5 s5">

        <div class="col-sm-12 text-center">
            <h1 id="nav-ubicacion" class="text-center">Ubicación</h1>
            <i class="fa fa-globe" aria-hidden="true"></i> <b>Ubicación:</b> Los Crisantemos 960, Del Viso, Pilar, Buenos Aires. (5 cuadras de Autopista)<br><br>

            <div id="map"></div>
        </div>

    </div>

    <br><br>

</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTaATiiD1Bwt8NShPxW0W1F3N63NMII-M"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.min.js"></script>

    <?php if($_SERVER['SERVER_NAME'] == 'localhost'){  ?>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/sweetalert2.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/slick.min.js"></script>

    <?php }else{ ?>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.5/sweetalert2.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php } ?>

    <script src="js/main.js"></script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127724155-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127724155-1');
    </script>

</body>
</html>
