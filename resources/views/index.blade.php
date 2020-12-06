<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>2º DAW- Mario Alexander</title>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- CSS propio -->
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/carrusel.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/navbar.css') !!}" type="text/css">
    <!-- Favicon -->
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
</head>

<body>
    <header id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="#">+34 123 485 712</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#">alexmonu2000@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">
                    <ul class="social_links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <h1><a class="navbar-brand" href="#">
                    <!--<img src="../images/sap-logo.jpg" class="logo-brand" alt="logo"> -->Desarrollo Aplicaciones Web</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" id="home" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="login" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="carouselcontrol" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="fill" class="d-block w-100" src="../images/banner-slide-1.jpg" alt="First slide">
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Servicio de Auditoria de riesgos SAP</h1>
                    <p class="banner_txt">Evaluacion de segregación funcional en SAP a nivel de ACCESOS y AUTORIZACIONES</p>
                </div>
            </div>
            <div class="carousel-item">
                <img id="fill" class="d-block w-100" src="../images/banner-slide-2.jpg" alt="Second slide">
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">SOLUCION AAM para la creación automática de roles</h1>
                    <p class="banner_txt">Reingienería de roles siempre seguros</p>
                    <p class="banner_txt">Automatización de la creacion de roles</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <!-- <main id="myCarousel" class="carousel slide">
         Indicators
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

         Wrapper for slides
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image: url('../images/banner-slide-1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Servicio <span>de Auditoria de riesgos </span>SAP</h1>
                    <p class="banner_txt">Evaluacion de segregación funcional en SAP a nivel de ACCESOS y AUTORIZACIONES</p>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image: url('../images/banner-slide-1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">SOLUCION AAM <span>para la creacion automaica de </span>roles</h1>
                    <p class="banner_txt">Reingienería de roles siempre seguros</p>
                    <p class="banner_txt">Automatización de la creacion de roles</p>
                    <p class="banner_txt">Reducción del 85% de los costes tecnicos </p>
                </div>
            </div>
        </div>

         Left and right controls

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </main> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
