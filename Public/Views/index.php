<?php
include '../../Config/appConfig.php';
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from templates.g5plus.net/thedir/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 18:25:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>𝗗𝗰𝗼𝗺𝗽𝗿𝗮𝘀 | 𝗕𝗶𝗲𝗻𝘃𝗲𝗻𝗶𝗱𝗼</title>

    <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="./vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="./vendors/slick/slick.css">
    <link rel="stylesheet" href="./vendors/animate.css">
    <link rel="apple-touch-icon" href="../../App/assets/img/Recurso 1LogoD.png">
    <link rel="shortcut icon" href="../../App/assets/img/Recurso 1LogoD.png">
    <link rel="stylesheet" href="<?= APP_DIR; ?>assets/css/styleIndex.css">
    <link rel="stylesheet" href="<?= APP_DIR; ?>assets/css/style.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

    <div id="site-wrapper" class="site-wrapper home-main">

    <?php
    require_once 'modules/headerIndex.php';
    ?>

        <div class="content-wrap">

            <section id="section-01" class="home-main-intro">
                <div class="home-main-intro-container">
                    <div class="container">

                        <div class="heading mb-9">

                            <h1 class="mb-7">
                                <span class="d-block" data-animate="slideInLeft"><span class="org2">D</span><span class="ngr2">'compras</span></span>
                            </h1>
                            <h3 class="mb-7">
                                <span class="font-weight-light d-block" data-animate="fadeInRight"><strong><span class="ngr"><span class="typed"></span></span>
                                </span>
                                </strong>
                            </h3>
                        </div>
                        <div class="form-search form-search-style-02 pb-9" data-animate="fadeInDown">
                            <form>
                                <div class="row align-items-end no-gutters">
                                    <div class="col-xl-6 mb-4 mb-xl-0 py-3 px-4 bg-white border-right-0 border-right-xl position-relative rounded form-search-item">
                                        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">¿Qué buscas?</label>
                                        <div class="input-group dropdown show">
                                            <input type="text" autocomplete="off" id="key-word" class="form-control form-control-mini border-0 px-0" placeholder="Ej: comida, servicio, ropa" data-toggle="dropdown" aria-haspopup="true">
                                            <a href="#" class="input-group-append text-decoration-none">
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word">
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                                        <span class="font-size-md">Comida y Restaurantes</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-bed">
<use xlink:href="#icon-bed"></use>
</svg>
                                                        <span class="font-size-md">Moda y descuentos</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-pharmaceutical">
<use xlink:href="#icon-pharmaceutical"></use>
</svg>
                                                        <span class="font-size-md">Comida saludable</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-cog">
<use xlink:href="#icon-cog"></use>
</svg>
                                                        <span class="font-size-md">Servicios</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 mb-4 mb-xl-0 py-3 px-4 bg-white position-relative rounded form-search-item">
                                        <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Barrio</label>
                                        <div class="input-group dropdown show">
                                            <input type="text" autocomplete="off" id="region" class="form-control form-control-mini border-0 px-0" placeholder="Policarpa" data-toggle="dropdown" aria-haspopup="true">
                                            <a href="#" class="input-group-append text-decoration-none">
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu form-search-ajax" aria-labelledby="region">
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Las cruces
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Restrepo
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Ciudad Jardín
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Policarpa
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
San Antonio
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Calvo Sur
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Ciudad Berna
</a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
Sevilla
</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 button">
                                        <button type="submit" class="btn btn-primary"><i class="fal fa-search"></i>Buscar
</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="font-size-lg mb-4"><span class="bln">
O busca por categoría:
</span>
                        </div>
                        <div class="list-inline pb-8 flex-wrap my-n2">
                            <div class="list-inline-item py-2">
                                <a href="./catalogo" class="card border-0 icon-box-style-01 link-hover-dark-white">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Comida rápida
</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="./catalogo" class="card border-0 icon-box-style-01 link-hover-dark-white">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-bed">
<use xlink:href="#icon-bed"></use>
</svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Productos
</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="./catalogo" class="card border-0 icon-box-style-01 link-hover-dark-white">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-brush2">
<use xlink:href="#icon-brush2"></use>
</svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Servicios
</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="./catalogo" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-pharmaceutical">
<use xlink:href="#icon-pharmaceutical"></use>
</svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Medicinas
</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-inline-item py-2">
                                <a href="./catalogo" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-cog">
<use xlink:href="#icon-cog"></use>
</svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Soporte
</span>
                                    </div>
                                </a>
                            </div>

                            <div class="list-inline-item py-2">
                                <a href="./catalogo" class="card border-0 link-hover-dark-white icon-box-style-01">
                                    <div class="card-body p-0">
                                        <svg class="icon icon-car">
<use xlink:href="#icon-car"></use>
</svg>
                                        <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Accesorios
</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="home-main-how-it-work bg-white pt-11">
                        <div class="container">
                            <h2 class="mb-8">
                                <span class="font-weight-light">Mira</span>
                                <span class="font-weight org">como trabajamos</span>
                            </h2>
                            <div class="row no-gutters pb-11">
                                <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                                    <div class="media icon-box-style-02" data-animate="fadeInDown">
                                        <div class="d-flex flex-column align-items-center mr-6">
                                            <i class="far fa-check-circle fa-3x" style="color:#F17C12; width:6; height:6;" /></i>
                                            <span class="number h1 font-weight-bold">1</span>
                                        </div>
                                        <div class="media-body lh-14">
                                            <h5 class="mb-3 lh-1">
                                                Elige qué hacer
                                            </h5>
                                            <p class="font-size-md text-gray mb-0 text-muted">
                                                Buscando un restaurante para deleitar una deliciosa comida, o accesorios para tu auto, o quizás comida saludable?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                                    <div class="media icon-box-style-02" data-animate="fadeInDown">
                                        <div class="d-flex flex-column align-items-center mr-6">
                                            <i class="far fa-check-circle fa-3x" style="color:#F17C12; width:6; height:6;" /></i>
                                            <span class="number h1 font-weight-bold">2</span>
                                        </div>
                                        <div class="media-body lh-14">
                                            <h5 class="mb-3 lh-1">
                                                Encuentra lo que buscas
                                            </h5>
                                            <p class="font-size-md text-gray mb-0 text-muted">
                                                Busque y filtre cientos de listados, lea reseñas, explore fotos y encuentra el producto perfecto.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                                    <div class="media icon-box-style-02" data-animate="fadeInDown">
                                        <div class="d-flex flex-column align-items-center mr-6">
                                            <i class="far fa-check-circle fa-3x" style="color:#F17C12; width:6; height:6;" /></i>
                                            <span class="number h1 font-weight-bold">3</span>
                                        </div>
                                        <div class="media-body lh-14">
                                            <h5 class="mb-3 lh-1">
                                                Disfruta de tus productos
                                            </h5>
                                            <p class="font-size-md text-gray mb-0 text-muted">
                                                Nuestra promesa contigo es sorprenderte, y por eso el tiempo de entrega de los pedidos es de máximo 20 minutos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom"></div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="section-02" class="pb-8 feature-destination pt-85">
                <div class="container">
                    <div class="mb-8">
                        <h2 class="mb-0">
                            <span class="font-weight-light">Barrios </span>
                            <span class="org">destacados</span>
                        </h2>

                    </div>
                    <div class="slick-slider arrow-center" data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
                        <div class="box" data-animate="zoomIn">
                            <div class="card border-0">
                                <a class="hover-scale" href="explore-sidebar-grid.html">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/policarp.jpg" alt="Policarpa" class="image">
                                </a>
                                <div class="card-body px-0 pt-4">
                                    <h5 class="card-title mb-0">
                                        <a href="explore-sidebar-grid.html" class="font-size-h5 link-hover-dark-primary">
Policarpa</a>
                                    </h5>
                                    <span class="card-text font-size-md">
20 Negocios
</span>
                                </div>
                            </div>
                        </div>
                        <div class="box" data-animate="zoomIn">
                            <div class="card border-0">
                                <a class="hover-scale" href="explore-sidebar-grid.html">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/cjar.jpg" alt="Ciudad Jardín" class="image">
                                </a>
                                <div class="card-body px-0 pt-4">
                                    <h5 class="mb-0 card-title">
                                        <a href="explore-sidebar-grid.html" class="font-size-h5 link-hover-dark-primary">
Ciudad jardín
</a>
                                    </h5>
                                    <span class="card-text font-size-md">
6 Negocios
</span>
                                </div>
                            </div>
                        </div>
                        <div class="box" data-animate="zoomIn">
                            <div class="card border-0">
                                <a class="hover-scale" href="explore-sidebar-grid.html">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/cjardin.jpg" alt="Restrepo" class="image">
                                </a>
                                <div class="card-body px-0 pt-4">
                                    <h5 class="mb-0 card-title">
                                        <a href="explore-sidebar-grid.html" class="font-size-h5 link-hover-dark-primary">
Restrepo
</a>
                                    </h5>
                                    <span class="card-text font-size-md">
12 Negocios
</span>
                                </div>
                            </div>
                        </div>
                        <div class="box" data-animate="zoomIn">
                            <div class="card border-0">
                                <a class="hover-scale" href="explore-sidebar-grid.html">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/san.jpg" alt="San Antonio" class="image">
                                </a>
                                <div class="card-body px-0 pt-4">
                                    <h5 class="mb-0 card-title">
                                        <a href="explore-sidebar-grid.html" class="font-size-h5 link-hover-dark-primary">
San Antonio
</a>
                                    </h5>
                                    <span class="card-text font-size-md">
4 Negocios
</span>
                                </div>
                            </div>
                        </div>


            </section>
            <br>



            <section id="section-03" class="pb-8 our-directory">
                <div class="container">
                    <div class="mb-7">
                        <h2 class="mb-0">
                            <span class="font-weight-light">Nuestros </span>
                            <span class="org">socios</span>
                        </h2>
                    </div>
                    <div class="d-flex align-items-center pb-8">
                        <ul class="nav nav-pills tab-style-01" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Todos</a>
                            </li>
                        </ul>
                        <div class="ml-auto d-flex slick-custom-nav pl-5">
                            <div class="arrow slick-prev disabled" id="previous"><i class="fas fa-chevron-left"></i></div>
                            <div class="arrow slick-next" id="next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>


                <div class="container container-1720">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                            <div class="slick-slider arrow-top full-slide custom-nav equal-height" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-gallery.html">
                                                <img src="<?= APP_DIR; ?>assets/css/images/shop/tienda1.jpeg" alt="store 1" class="card-img-top rounded-0">
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Destacado</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex w-lg show-link">
                                                    <a href="<?= APP_DIR; ?>assets/css/images/shop/tienda1.jpeg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Vista rapida" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fal fa-bookmark"></i></a>
                                                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Comparar">
                                                        <svg class="icon icon-chart-bars">
<use xlink:href="#icon-chart-bars"></use>
</svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Restaurante
Kraft</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 reseñas</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">Envio</span><span class="text-danger font-weight-semibold">$2.000</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                                        <span>Comida</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                </a>
                                                <div class="media-body lh-14 font-size-sm">Un restaurante con una comida increible! para chuparse los dedos! envio rapido y barato
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
<i class="fal fa-map-marker-alt">
</i>
</span>
                                                <a href="#" class="text-secondary text-decoration-none link-hover-secondary-blue">
Policarpa</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Abierto ahora!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-gallery.html">
                                                <img src="<?= APP_DIR; ?>assets/css/images/shop/tienda2.jpg" alt="store 2" class="card-img-top rounded-0">
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Mejor calificación</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="<?= APP_DIR; ?>assets/css/images/shop/tienda2.jpg" data-gtf-mfp="true" class="item viewing" data-toggle="tooltip" data-placement="top" title="Vista rapida">
                                                        <svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Pastelería Moffis</span>
<span class="check">
<svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
</span>
</a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>8 reseñas</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">Envío</span><span class="text-danger font-weight-semibold">$1.200</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                                        <span>Comida</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle">
                                                </a>
                                                <div class="media-body lh-14 font-size-sm">Aquí venden los mejores postres de la ciudad. Recomendado al 100%
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1">
<i class="fal fa-map-marker-alt">
</i>
</span>
                                                <a href="#" class="text-secondary text-decoration-none address">Restrepo</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Cerrado ahora!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>




                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-gallery.html">
                                                <img src="<?= APP_DIR; ?>assets/css/images/shop/tienda3.jpg" alt="store 1" class="card-img-top rounded-0">
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Mas vista</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="<?= APP_DIR; ?>assets/css/images/shop/tienda3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Vista rápida" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Supermercado Don Juan</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span>4 reseñas</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">Envio</span><span class="text-danger font-weight-semibold">$750</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                                        <span>Comida</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-5.png" alt="testimonial" class="rounded-circle">
                                                </a>
                                                <div class="media-body lh-14 font-size-sm">En esta tienda encuentras de todo, servicio muy rapido.
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                                <a href="#" class="text-secondary text-decoration-none address">Ciudad jardín</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Cerrado ahora!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-gallery.html">
                                                <img src="<?= APP_DIR; ?>assets/css/images/shop/shop-4.jpg" alt="store 1" class="card-img-top rounded-0">
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Destacado</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="<?= APP_DIR; ?>assets/css/images/shop/full-shop-4.jpg" class="item viewing" data-toggle="tooltip" data-gtf-mfp="true" data-placement="top" title="Quick view">
                                                        <svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Red Wings Shoes Store</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>6 rating</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$75.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-bag">
<use xlink:href="#icon-bag"></use>
</svg>
                                                        <span>Shopping</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-3.png" alt="testimonial" class="rounded-circle">
                                                </a>
                                                <div class="media-body lh-14 font-size-sm">Established in 1895, these style merchants have set the standard in Sydney suiting for generations...
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                                <a href="#" class="text-secondary text-decoration-none address">
Paris, France</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-gallery.html">
                                                <img src="<?= APP_DIR; ?>assets/css/images/shop/shop-5.jpg" alt="store 1" class="card-img-top rounded-0">
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">AD</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="<?= APP_DIR; ?>assets/css/images/shop/full-shop-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" data-gtf-mfp="true" title="Quick view">
                                                        <svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Packing & Delivery Service</span>
<span class="check">
<svg class="icon icon-check-circle"><use xlink:href="#icon-check-circle"></use></svg>
</span>
</a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.5</span><span>2 rating</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="text-danger font-weight-semibold">Get a quote</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-cog">
<use xlink:href="#icon-cog"></use>
</svg>
                                                        <span>Service</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-2.png" alt="testimonial" class="rounded-circle">
                                                </a>
                                                <div class="media-body lh-14 font-size-sm">Most items can be packed securely in these boxes, which are available in several sizes...
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                            <li class="list-inline-item">
                                                <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                                <a href="#" class="text-secondary text-decoration-none address">New
York, USA</a>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item">
                                                <span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box" data-animate="fadeInUp">
                                    <div class="store card border-0 rounded-0">
                                        <div class="position-relative store-image">
                                            <a href="listing-details-full-gallery.html">
                                                <img src="<?= APP_DIR; ?>assets/css/images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                            </a>
                                            <div class="image-content position-absolute d-flex align-items-center">
                                                <div class="content-left">
                                                    <div class="badge badge-primary">Destacado</div>
                                                </div>
                                                <div class="content-right ml-auto d-flex show-link">
                                                    <a href="<?= APP_DIR; ?>assets/css/images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                        <svg class="icon icon-expand">
<use xlink:href="#icon-expand"></use>
</svg>
                                                    </a>
                                                    <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 pb-0 pt-3">
                                            <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman
Kraft Hotel</span></a>
                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                                </li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.00</span></li>
                                                <li class="list-inline-item separate"></li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="link-hover-secondary-primary">
                                                        <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                                        <span>Food</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="media">
                                                <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                </a>
                                                <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at this Korean-style pub in Seorae Village. And they use...
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
            </section>
            <section class="home-main-testimonial pt-12 pb-13" id="section-04">
                <div class="container">
                    <h2 class="mb-8">
                        <span class="font-weight-light">Reseñas de</span>
                        <span class="org">clientes</span>
                    </h2>
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-12">
                                <div class="slick-slider testimonials-slider arrow-top" data-slick-options='{"slidesToShow": 2,"autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                                    <div class="box">
                                        <div class="card testimonial h-100 border-0 bg-transparent">
                                            <a href="#" class="author-image">
                                                <img src="<?= APP_DIR; ?>assets/css/images/listing/client-1.png" alt="Testimonial" class="rounded-circle">
                                            </a>
                                            <div class="card-body bg-white">
                                                <div class="testimonial-icon text-right">
                                                    <svg class="icon icon-quote">
<use xlink:href="#icon-quote"></use>
</svg>
                                                </div>
                                                <ul class="list-inline mb-4 d-flex align-items-end flex-wrap">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="font-size-lg text-dark font-weight-semibold d-inline-block">Pedro Rojas
</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="h5 font-weight-light mb-0 d-inline-block ml-1 text-gray">/</span>
                                                    </li>
                                                    <li>
                                                        <span class="text-gray">
Calzado el gamo
</span>
                                                    </li>
                                                </ul>
                                                <div class="card-text text-gray pr-4">Los zapatos de esta tienda son de buena calidad<br> los recomiendo, tambien la pagina Dcompras entrega los productos en buen estado y a tiempo
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="card testimonial h-100 border-0 bg-transparent">
                                            <a href="#" class="author-image">
                                                <img src="<?= APP_DIR; ?>assets/css/images/listing/client-2.png" alt="Testimonial" class="rounded-circle">
                                            </a>
                                            <div class="card-body bg-white">
                                                <div class="testimonial-icon text-right">
                                                    <svg class="icon icon-quote">
<use xlink:href="#icon-quote"></use>
</svg>
                                                </div>
                                                <ul class="list-inline mb-4 d-flex align-items-end flex-wrap">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="font-size-lg text-dark font-weight-semibold d-inline-block">Sandra Peña
</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="h5 font-weight-light mb-0 d-inline-block ml-1 text-gray">/</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-gray">
Almacenes Only
</span>
                                                    </li>
                                                </ul>
                                                <div class="card-text text-gray pr-4">Llevo 5 años comprando ropa para mi familia y estoy satisfecha,
                                                    <br>además la pagina Dcompras es segura y confiable
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="card testimonial h-100 border-0 bg-transparent">
                                            <a href="#" class="author-image">
                                                <img src="<?= APP_DIR; ?>assets/css/images/listing/client-1.png" alt="Testimonial" class="rounded-circle">
                                            </a>
                                            <div class="card-body bg-white">
                                                <div class="testimonial-icon text-right">
                                                    <svg class="icon icon-quote">
<use xlink:href="#icon-quote"></use>
</svg>
                                                </div>
                                                <ul class="list-inline mb-4 d-flex align-items-end flex-wrap">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="font-size-lg text-dark font-weight-semibold d-inline-block">Julian Mendez
</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="h5 font-weight-light mb-0 d-inline-block ml-1 text-gray">/</span>
                                                    </li>
                                                    <li>
                                                        <span class="text-gray">
Relojeria Rufer
</span>
                                                    </li>
                                                </ul>
                                                <div class="card-text text-gray pr-4">Los relojes son de buena calidad y
                                                    <br>la plataforma es facil de usar
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="card testimonial h-100 border-0 bg-transparent">
                                            <a href="#" class="author-image">
                                                <img src="<?= APP_DIR; ?>assets/css/images/listing/client-2.png" alt="Testimonial" class="rounded-circle">
                                            </a>
                                            <div class="card-body bg-white">
                                                <div class="testimonial-icon text-right">
                                                    <svg class="icon icon-quote">
<use xlink:href="#icon-quote"></use>
</svg>
                                                </div>
                                                <ul class="list-inline mb-4 d-flex align-items-end flex-wrap">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="font-size-lg text-dark font-weight-semibold d-inline-block">Sandra Monsalvo
</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="h5 font-weight-light mb-0 d-inline-block ml-1 text-gray">/</span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-gray">
Fruteria y Heladeria Domic
</span>
                                                    </li>
                                                </ul>
                                                <div class="card-text text-gray pr-4">Estoy satisfecha los productos llegan a tiempo
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-05" class="pt-11 pb-11">
                <div class="container">
                    <div class="d-flex align-items-center mb-7 flex-wrap flex-sm-nowrap">
                        <h2 class="mb-3 mb-sm-0">
                            <span class="font-weight-light">Algunas</span>
                            <span class="org">tiendas y artículos</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-4" data-animate="zoomIn">
                            <div class="card border-0">
                                <a href="blog-single-gallery.html" class="hover-scale">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/tienda1.jpg" alt="product 1" class="card-img-top image">
                                </a>
                                <div class="card-body px-0">
                                    <div class="mb-2"><a href="#" class="link-hover-dark-primary">Ropa</a>, <a href="#" class="link-hover-dark-primary">Almacenes Only</a></div>
                                    <h5 class="card-title lh-13 letter-spacing-25">
                                        <a href="blog-single-image.html" class="link-hover-dark-primary text-capitalize">
La ropa con la mejor calidad y al precio justo</a>
                                    </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-0">
                                            <span class="text-gray">Cl. 19 Sur #17-45 sur</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-animate="zoomIn">
                            <div class="card border-0">
                                <a href="blog-single-gallery.html" class="hover-scale">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/tienda2.jpg" alt="product 1" class="card-img-top image">
                                </a>
                                <div class="card-body px-0">
                                    <div class="mb-2"><a href="#" class="link-hover-dark-primary">Mercaderia</a></div>
                                    <h5 class="card-title lh-13 letter-spacing-25"><a href="blog-single-gallery.html" class="link-hover-dark-primary text-capitalize">Encuentra D'todo</a>
                                    </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-0">
                                            <span class="text-gray">Ubicados en el barrio Restrepo
    <br> Cra. 19 #16-56 Sur
</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-animate="zoomIn">
                            <div class="card border-0">
                                <a href="blog-single-gallery.html" class="hover-scale">
                                    <img src="<?= APP_DIR; ?>assets/css/images/listing/tienda3.jpg" alt="product 1" class="card-img-top image">
                                </a>
                                <div class="card-body px-0">
                                    <div class="mb-2"><a href="#" class="link-hover-dark-primary">Almacenes Sanzo</a></div>
                                    <h5 class="card-title lh-13 letter-spacing-25"><a href="blog-single-gallery.html" class="link-hover-dark-primary">MadCap
Ropa para toda la Familia</a>
                                    </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-0">
                                            <span class="text-gray">Cl. 18 Sur #3 Sur</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <?php
    require_once 'modules/footerIndex.php';
    ?>
            </div>
            <div id="login-popup" class="mfp-hide">
                <div class="section">
                    <h6 class="mb-0 pb-3 ah6">
                        <span class="wrd">Iniciar sesión </span>
                        <span class="wrd">Registrarse</span>
                    </h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                    <label for="reg-log"></label>

                    <div class="card-3d-wrap mx-auto">

                        <div class="card-3d-wrapper">

                            <div class="card-front">
                                <div class="center-wrap">
                                <form method="POST" action="<?= APP_DIR; ?>controller/loginController">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Iniciar Sesión</h4>
                                        <div class="form-group">
                                            <input type="email" id="correo" name="correo" class="form-style" placeholder="Tu correo" autocomplete="off" required>
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" id="contraseña" name="contraseña" class="form-style" placeholder="Tu contraseña" autocomplete="off" required>
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button class="btn-1">Iniciar Sesión</button>
                                        <p class="mb-0 mt-4 text-center">
                                            <a href="#0" class="link">¿Olvidaste tu contraseña?</a>
                                        </p>
                                    </div>
                                </form>
                                </div>
                            </div>

                            <div class="card-back">
                                <div class="center-wrap">
                                <form method="POST" action="<?= APP_DIR; ?>controller/registerController">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Registrarse</h4>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-style" placeholder="Nombre" autocomplete="off" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="apellidoUsuario" name="apellidoUsuario" class="form-style" placeholder="Apellido" autocomplete="off" Required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                             </div>
                                            
                                        </div>
                                        <div class="form-group mt-2">
                                            <input  type="email" id="correoUsuario" name="correoUsuario" class="form-style" placeholder="Tu correo" autocomplete="off">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" id="contraseñaUsuario" name="contraseñaUsuario" class="form-style" placeholder="Contraseña" autocomplete="off">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button class="btn-1">Regístrarse</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        <form>
        </form>
        </div>
    </div>
    <div1 id="search-popup" class="mfp-hide">
        <div class="search-popup text-center">
            <h2 class="mb-8">Search</h2>
            <div class="form-search">
                <form>
                    <div class="row align-items-end">
                        <div class="form-search-item col-md-7 mb-4 mb-md-0 text-left bg-white">
                            <label for="key-word-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">What</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="key-word-02" class="form-control bg-transparent border-0 p-0 font-size-md lh-1" data-toggle="dropdown" aria-haspopup="true" placeholder="Ex: food, service, barber, hotel">
                                <button type="submit" class="btn text-dark btn-link input-group-append font-weight-normal p-0">
<i class="fal fa-search"></i>
</button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                                            <span class="font-size-md">Foods & Restaurants</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-bed">
<use xlink:href="#icon-bed"></use>
</svg>
                                            <span class="font-size-md">Hotels & Resorts</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pharmaceutical">
<use xlink:href="#icon-pharmaceutical"></use>
</svg>
                                            <span class="font-size-md">Healths & Medicals</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-cog">
<use xlink:href="#icon-cog"></use>
</svg>
                                            <span class="font-size-md">Services</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-car">
<use xlink:href="#icon-car"></use>
 </svg>
                                            <span class="font-size-md">Automotive</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-search-item col-md-5 mb-4 mb-md-0 text-left bg-white">
                            <label for="region-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">Where</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="region-02" class="form-control bg-transparent border-0 p-0 font-size-md lh-1" data-toggle="dropdown" aria-haspopup="true" placeholder="San Francisco">
                                <button type="submit" class="btn text-dark btn-link input-group-append font-weight-normal p-0">
<i class="fal fa-chevron-down"></i>
</button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Austin
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Boston
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Chicago
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Denver
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Los Angeles
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
New York
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
San Francisco
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Seattle
</a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
Washington
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="heading mb-4">
                <div class="pt-8 font-size-lg mb-5">
                    Or browse the highlights
                </div>
            </div>
            <div class="list-inline flex-wrap my-n2">
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-pizza">
<use xlink:href="#icon-pizza"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Foods
</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-bed">
<use xlink:href="#icon-bed"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block ">
Hotels
</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-brush2">
<use xlink:href="#icon-brush2"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Jobs
</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-pharmaceutical">
<use xlink:href="#icon-pharmaceutical"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Medicals
</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-cog">
<use xlink:href="#icon-cog"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Services
</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-bag">
<use xlink:href="#icon-bag"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Shopping
</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-car">
<use xlink:href="#icon-car"></use>
</svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
Automotive
</span>
                        </div>
                    </a>
                </div>
            </div>
            <a href="#" class="d-inline-block button-close mt-11 pt-1 text-dark font-size-lg font-weight-semibold text-decoration-none">
                <span class="d-block"><i class="fal fa-times"></i></span>
                <span class="d-block">Close</span>
            </a>
        </div>
        </div>

        <script src="./vendors/jquery.min.js"></script>
        <script src="./vendors/popper/popper.js"></script>
        <script src="./vendors/bootstrap/js/bootstrap.js"></script>
        <script src="./vendors/hc-sticky/hc-sticky.js"></script>
        <script src="./vendors/isotope/isotope.pkgd.js"></script>
        <script src="./vendors/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="./vendors/slick/slick.js"></script>
        <script src="./vendors/waypoints/jquery.waypoints.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
        <script src="<?= APP_DIR; ?>assets/js1/index/main.js"></script>
        <script src="<?= APP_DIR; ?>assets/js1/index/app.js"></script>

        <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-bed" viewBox="0 0 32 32">
<title>bed</title>
<path d="M28 28.8h-1.6c-0.442 0-0.8-0.358-0.8-0.8s0.358-0.8 0.8-0.8h1.6c0.442 0 0.8 0.358 0.8 0.8s-0.358 0.8-0.8 0.8zM4 28.8h-1.6c-0.442 0-0.8-0.358-0.8-0.8s0.358-0.8 0.8-0.8h1.6c0.442 0 0.8 0.358 0.8 0.8s-0.358 0.8-0.8 0.8zM29.853 18.229l-3.789-11.365c-0.318-0.954-1.229-1.738-2.221-1.984-0.035-0.152-0.074-0.298-0.118-0.432-0.363-1.088-0.986-1.25-1.325-1.25h-6.4c-0.203 0-0.509 0.059-0.8 0.341-0.291-0.282-0.597-0.341-0.8-0.341h-6.4c-0.339 0-0.962 0.163-1.325 1.25-0.045 0.134-0.085 0.278-0.118 0.432-0.994 0.246-1.904 1.029-2.221 1.984l-3.789 11.365c-0.307 0.92-0.547 2.402-0.547 3.371v3.2c0 1.323 1.077 2.4 2.4 2.4h25.6c1.323 0 2.4-1.077 2.4-2.4v-3.2c0-0.97-0.24-2.451-0.547-3.371zM16.251 4.8h5.898c0.112 0.251 0.251 0.822 0.251 1.6s-0.139 1.349-0.251 1.6h-5.898c-0.112-0.251-0.251-0.822-0.251-1.6s0.139-1.349 0.251-1.6zM8.251 4.8h5.898c0.112 0.251 0.251 0.822 0.251 1.6s-0.139 1.349-0.251 1.6h-5.898c-0.112-0.251-0.251-0.822-0.251-1.6s0.139-1.349 0.251-1.6zM5.853 7.371c0.086-0.259 0.296-0.507 0.552-0.686 0.022 0.621 0.115 1.203 0.27 1.666 0.363 1.088 0.986 1.25 1.325 1.25h6.4c0.203 0 0.509-0.059 0.8-0.341 0.291 0.282 0.597 0.341 0.8 0.341h6.4c0.339 0 0.962-0.163 1.325-1.25 0.154-0.462 0.248-1.046 0.27-1.666 0.256 0.181 0.466 0.427 0.552 0.686l1.277 3.829h-21.246l1.277-3.829zM4.043 12.8h22.314l1.978 5.934c0.051 0.152 0.099 0.326 0.146 0.514-0.155-0.032-0.315-0.048-0.48-0.048h-25.6c-0.165 0-0.325 0.016-0.48 0.048 0.046-0.187 0.094-0.362 0.146-0.514l1.979-5.934zM28.8 24.8c0 0.442-0.358 0.8-0.8 0.8h-25.6c-0.442 0-0.8-0.358-0.8-0.8v-3.2c0-0.442 0.358-0.8 0.8-0.8h25.6c0.442 0 0.8 0.358 0.8 0.8v3.2z"></path>
</symbol>
<symbol id="icon-brush2" viewBox="0 0 32 32">
<title>brush2</title>
<path d="M5.6 27.2c-0.211 0-0.418-0.085-0.565-0.235s-0.235-0.355-0.235-0.565 0.085-0.416 0.235-0.565c0.149-0.149 0.355-0.235 0.565-0.235s0.416 0.085 0.565 0.235c0.149 0.149 0.235 0.355 0.235 0.565s-0.085 0.418-0.235 0.565c-0.149 0.149-0.355 0.235-0.565 0.235zM29.834 15.102l-12.938-12.938c-0.453-0.453-1.054-0.701-1.698-0.701s-1.245 0.25-1.698 0.701l-8.138 8.138c-0.862 0.862-1.112 2.394-0.566 3.486l2.57 5.138c0.078 0.158 0.093 0.309 0.038 0.424s-0.178 0.203-0.35 0.243c-0.138 0.034-3.406 0.834-5.418 2.845-1.058 1.058-1.64 2.464-1.64 3.96s0.582 2.902 1.64 3.96c1.058 1.058 2.464 1.64 3.96 1.64 0 0 0 0 0 0 1.496 0 2.902-0.582 3.96-1.64 2.011-2.011 2.813-5.28 2.845-5.418 0.034-0.142 0.131-0.382 0.398-0.382 0.085 0 0.176 0.024 0.27 0.072l5.138 2.57c0.381 0.19 0.827 0.291 1.293 0.291 0.837 0 1.656-0.32 2.192-0.856l8.138-8.138c0.936-0.936 0.936-2.458 0-3.394zM20.566 25.502c-0.235 0.235-0.653 0.387-1.061 0.387-0.219 0-0.419-0.042-0.578-0.122l-5.138-2.57c-0.318-0.16-0.651-0.24-0.986-0.24-0.938 0-1.723 0.646-1.954 1.61-0.006 0.029-0.733 2.973-2.421 4.659-0.755 0.755-1.76 1.171-2.829 1.171s-2.074-0.416-2.829-1.171c-0.755-0.755-1.171-1.76-1.171-2.829s0.416-2.074 1.171-2.829c1.688-1.688 4.63-2.414 4.659-2.421 0.646-0.155 1.166-0.565 1.427-1.123s0.24-1.221-0.058-1.816l-2.57-5.138c-0.24-0.478-0.112-1.261 0.266-1.638l1.502-1.502 14.069 14.069-1.502 1.502zM28.702 17.366l-5.502 5.502-14.069-14.069 5.502-5.502c0.15-0.15 0.35-0.232 0.566-0.232s0.416 0.083 0.566 0.232l12.938 12.938c0.312 0.312 0.312 0.819 0 1.131z"></path>
</symbol>
<symbol id="icon-cog" viewBox="0 0 32 32">
<title>cog</title>
<path d="M12.21 31.523c-0.066 0-0.133-0.008-0.2-0.026-1.437-0.37-2.818-0.939-4.102-1.694-0.373-0.219-0.504-0.694-0.298-1.074 0.254-0.467 0.389-0.995 0.389-1.531 0-1.765-1.435-3.2-3.2-3.2-0.534 0-1.064 0.134-1.531 0.389-0.379 0.206-0.854 0.075-1.074-0.298-0.755-1.286-1.325-2.666-1.694-4.102-0.104-0.406 0.123-0.824 0.52-0.957 1.302-0.438 2.179-1.658 2.179-3.032s-0.875-2.594-2.179-3.032c-0.397-0.134-0.624-0.55-0.52-0.957 0.37-1.437 0.939-2.818 1.694-4.102 0.219-0.373 0.694-0.504 1.074-0.298 0.466 0.254 0.995 0.389 1.531 0.389 1.765 0 3.2-1.435 3.2-3.2 0-0.534-0.134-1.064-0.389-1.531-0.206-0.379-0.075-0.854 0.298-1.074 1.286-0.755 2.666-1.325 4.102-1.694 0.406-0.104 0.824 0.123 0.957 0.52 0.438 1.302 1.658 2.179 3.032 2.179s2.594-0.875 3.032-2.179c0.134-0.397 0.552-0.624 0.957-0.52 1.437 0.37 2.818 0.939 4.102 1.694 0.373 0.219 0.504 0.694 0.298 1.074-0.254 0.467-0.389 0.995-0.389 1.531 0 1.765 1.435 3.2 3.2 3.2 0.534 0 1.064-0.134 1.531-0.389 0.379-0.206 0.854-0.075 1.074 0.298 0.755 1.286 1.325 2.666 1.694 4.102 0.104 0.406-0.123 0.824-0.52 0.957-1.302 0.438-2.179 1.658-2.179 3.032s0.875 2.594 2.179 3.032c0.397 0.134 0.624 0.55 0.52 0.957-0.37 1.437-0.939 2.818-1.694 4.102-0.219 0.373-0.694 0.504-1.074 0.298-0.467-0.254-0.995-0.389-1.531-0.389-1.765 0-3.2 1.435-3.2 3.2 0 0.534 0.134 1.064 0.389 1.531 0.206 0.379 0.075 0.854-0.298 1.074-1.286 0.755-2.666 1.325-4.102 1.694-0.406 0.104-0.824-0.123-0.957-0.52-0.438-1.302-1.658-2.179-3.032-2.179s-2.594 0.875-3.032 2.179c-0.112 0.331-0.422 0.546-0.758 0.546zM16 27.2c1.803 0 3.427 1.005 4.248 2.563 0.832-0.258 1.642-0.59 2.416-0.995-0.173-0.502-0.262-1.034-0.262-1.568 0-2.646 2.154-4.8 4.8-4.8 0.534 0 1.066 0.090 1.568 0.262 0.405-0.774 0.739-1.582 0.995-2.416-1.558-0.819-2.563-2.443-2.563-4.248s1.005-3.427 2.563-4.248c-0.258-0.832-0.59-1.642-0.995-2.416-0.502 0.173-1.034 0.262-1.568 0.262-2.646 0-4.8-2.154-4.8-4.8 0-0.534 0.090-1.066 0.262-1.568-0.774-0.405-1.582-0.739-2.416-0.995-0.819 1.558-2.443 2.563-4.248 2.563s-3.427-1.005-4.248-2.563c-0.832 0.256-1.642 0.59-2.416 0.995 0.173 0.502 0.262 1.034 0.262 1.568 0 2.646-2.154 4.8-4.8 4.8-0.534 0-1.066-0.090-1.568-0.262-0.405 0.774-0.739 1.582-0.995 2.416 1.558 0.819 2.563 2.443 2.563 4.248s-1.005 3.427-2.563 4.248c0.256 0.832 0.59 1.642 0.995 2.416 0.502-0.173 1.034-0.262 1.568-0.262 2.646 0 4.8 2.154 4.8 4.8 0 0.534-0.090 1.066-0.262 1.568 0.774 0.405 1.582 0.739 2.416 0.995 0.819-1.558 2.443-2.563 4.248-2.563zM16 20.8c-2.646 0-4.8-2.154-4.8-4.8s2.154-4.8 4.8-4.8 4.8 2.154 4.8 4.8-2.154 4.8-4.8 4.8zM16 12.8c-1.765 0-3.2 1.435-3.2 3.2s1.435 3.2 3.2 3.2c1.765 0 3.2-1.435 3.2-3.2s-1.435-3.2-3.2-3.2z"></path>
</symbol>
<symbol id="icon-bag" viewBox="0 0 32 32">
<title>bag</title>
<path d="M13.6 27.2c-0.349 0-0.669-0.229-0.77-0.581-0.122-0.426 0.125-0.867 0.549-0.989l11.2-3.2c0.426-0.122 0.867 0.125 0.989 0.549s-0.125 0.867-0.549 0.989l-11.2 3.2c-0.074 0.021-0.147 0.030-0.221 0.030zM28.797 26.333l-1.6-19.2c-0.022-0.274-0.186-0.523-0.438-0.65l-3.2-1.6c-0.395-0.197-0.875-0.037-1.074 0.358s-0.037 0.875 0.358 1.074l1.115 0.557-2.013 0.403c-0.046-0.331-0.099-0.669-0.155-1.006-0.712-4.277-1.79-6.269-3.389-6.269-0.638 0-1.238 0.269-1.731 0.778-1.125 1.158-1.822 3.624-2.133 7.536-0.013 0.152-0.022 0.301-0.034 0.45l-3.933 0.787-2.965-1.976 6.17-1.371c0.432-0.096 0.704-0.523 0.608-0.955s-0.523-0.702-0.955-0.608l-1.64 0.365c0.442-2.154 1.096-3.406 1.813-3.406 0.086 0 0.262 0.115 0.475 0.438 0.243 0.37 0.739 0.472 1.107 0.229s0.472-0.739 0.229-1.107c-0.63-0.96-1.333-1.16-1.813-1.16-0.734 0-1.774 0.355-2.566 2.043-0.39 0.834-0.709 1.955-0.946 3.339l-4.662 1.035c-0.314 0.069-0.554 0.318-0.613 0.634-0.005 0.029-0.008 0.058-0.011 0.085v0l-1.6 20.8c-0.026 0.325 0.149 0.632 0.44 0.778l6.4 3.2c0.112 0.056 0.235 0.085 0.358 0.085 0.070 0 0.141-0.010 0.211-0.029l17.6-4.8c0.373-0.101 0.619-0.454 0.587-0.838zM17.816 1.893c0.254-0.262 0.454-0.293 0.584-0.293s0.482 0.261 0.882 1.246c0.354 0.872 0.666 2.109 0.926 3.674 0.059 0.358 0.114 0.717 0.163 1.070l-4.242 0.848c0.363-4.557 1.213-6.058 1.686-6.546zM6.293 8.624l3.307 2.205v19.077l-4.762-2.381 1.454-18.902zM11.2 30.152v-19.096l3.214-0.643c-0.067 1.803-0.029 3.136-0.027 3.211 0.013 0.434 0.368 0.776 0.798 0.776 0.008 0 0.016 0 0.024 0 0.442-0.013 0.789-0.382 0.776-0.824 0-0.019-0.045-1.53 0.043-3.486l4.539-0.907c0.173 1.614 0.234 2.837 0.234 2.856 0.021 0.442 0.395 0.782 0.837 0.762s0.782-0.395 0.762-0.837c-0.003-0.078-0.067-1.382-0.256-3.094l3.534-0.707 1.47 17.643-15.947 4.349z"></path>
</symbol>
<symbol id="icon-pizza" viewBox="0 0 32 32">
<title>pizza</title>
<path d="M31.92 14.931c-0.072-0.2-0.219-0.363-0.411-0.454l-4.338-2.058c0 0 0 0 0 0s0 0 0 0l-26.029-12.342c-0.306-0.146-0.669-0.082-0.909 0.157s-0.302 0.603-0.157 0.909l12.342 26.029c0 0 0 0 0 0s0 0 0 0l2.056 4.338c0.091 0.192 0.254 0.339 0.454 0.411 0.086 0.030 0.178 0.046 0.269 0.046 0.118 0 0.235-0.026 0.344-0.077 7.146-3.395 12.95-9.2 16.346-16.346 0.091-0.192 0.102-0.411 0.030-0.611zM22.4 12.8c0 0.882-0.718 1.6-1.6 1.6s-1.6-0.718-1.6-1.6 0.718-1.6 1.6-1.6c0.019 0 0.038-0.002 0.058-0.003l1.138 0.539c0.262 0.293 0.405 0.666 0.405 1.064zM18.866 10.253c-0.768 0.586-1.266 1.509-1.266 2.547 0 1.765 1.435 3.2 3.2 3.2s3.2-1.435 3.2-3.2c0-0.038-0.003-0.077-0.010-0.117l1.762 0.835c-2.682 5.25-6.984 9.552-12.234 12.234l-3.139-6.621c0.269 0.046 0.544 0.070 0.822 0.070 2.646 0 4.8-2.154 4.8-4.8s-2.154-4.8-4.8-4.8c-1.261 0-2.451 0.485-3.354 1.365-0.331 0.323-0.608 0.686-0.83 1.078l-4.533-9.56 16.382 7.768zM8.011 14.139c0.131-1.661 1.499-2.939 3.189-2.939 1.765 0 3.2 1.435 3.2 3.2s-1.435 3.2-3.2 3.2c-0.658 0-1.282-0.195-1.816-0.565l-1.373-2.896zM15.576 30.091l-1.373-2.894c5.582-2.84 10.154-7.411 12.994-12.994l2.894 1.373c-3.158 6.246-8.269 11.358-14.515 14.515zM7.2 8h1.6c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-1.6c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8zM18.4 20.8c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8z"></path>
</symbol>
<symbol id="icon-car" viewBox="0 0 32 32">
<title>car</title>
<path d="M32.002 24.816c0-0.018 0-0.037-0.002-0.054-0.010-0.413-0.15-2.933-2.042-3.878-0.274-0.136-0.84-0.419-6.213-0.838-0.195-0.448-0.523-1.17-0.922-1.925-1.246-2.365-2.032-2.907-2.515-3.109-1.691-0.707-6.787-0.867-10.102-0.038-2.075 0.518-3.934 1.741-5.376 3.534-0.821 1.021-1.291 1.957-1.478 2.373-0.475 0.374-0.904 0.81-1.285 1.307-1.371 1.784-2.066 4.277-2.066 7.411 0 0.213 0.085 0.416 0.234 0.566s0.354 0.234 0.566 0.234h1.656c0.398 0 0.736-0.293 0.792-0.686 0.045-0.315 0.122-0.621 0.226-0.912 0.661 1.862 2.44 3.2 4.525 3.2s3.864-1.338 4.525-3.2c0.104 0.293 0.181 0.597 0.226 0.912 0.056 0.394 0.394 0.686 0.792 0.686h9.714c0.398 0 0.736-0.293 0.792-0.686 0.027-0.19 0.067-0.378 0.117-0.56 0.498 1.645 2.027 2.846 3.832 2.846 2.208 0 4.003-1.795 4.003-4.003 0-0.888-0.29-1.714-0.786-2.382 0.435-0.008 0.786-0.362 0.786-0.8zM10.594 16.526c3.062-0.766 7.837-0.565 9.098-0.038 0.061 0.026 0.624 0.307 1.71 2.368 0.195 0.368 0.373 0.733 0.525 1.056-0.968-0.067-2.056-0.138-3.28-0.211-4.95-0.298-9.766-0.499-9.814-0.501-0.011 0-0.022 0-0.034 0-0.994 0-1.91 0.115-2.747 0.344 0.933-1.168 2.403-2.483 4.542-3.018zM8 30.4c-1.765 0-3.2-1.435-3.2-3.2 0-0.131 0.010-0.261 0.024-0.39 0.854-0.754 1.971-1.21 3.176-1.21s2.322 0.456 3.176 1.21c0.016 0.13 0.024 0.259 0.024 0.39 0 1.765-1.435 3.2-3.2 3.2zM22.602 28.8h-8.405c-0.288-1.117-0.877-2.139-1.704-2.955-0.008-0.008-0.018-0.018-0.026-0.026-0.083-0.082-0.17-0.162-0.258-0.238-1.165-1.019-2.661-1.579-4.211-1.579s-3.045 0.562-4.211 1.579c-0.069 0.061-0.136 0.122-0.202 0.186-0.046 0.037-0.088 0.077-0.125 0.123-0.803 0.808-1.378 1.814-1.659 2.912h-0.186c0.168-3.819 1.621-7.992 7.166-8 0.315 0.013 4.933 0.21 9.693 0.494 9.090 0.544 10.541 0.92 10.765 1.021 0.637 0.318 0.923 1.083 1.053 1.685h-1.494c-0.16 0-0.32 0.006-0.478 0.018-0.010 0-0.019 0.002-0.029 0.002-1.042 0.083-2.045 0.418-2.922 0.976-0.010 0.005-0.018 0.011-0.027 0.018-0.264 0.17-0.517 0.358-0.755 0.566-0.976 0.854-1.667 1.979-1.987 3.219zM27.997 30.4c-1.325 0-2.403-1.078-2.403-2.403 0-0.629 0.238-1.216 0.67-1.666 0.621-0.389 1.333-0.64 2.091-0.71 1.171 0.174 2.045 1.182 2.045 2.376 0 1.325-1.078 2.403-2.403 2.403z"></path>
</symbol>
<symbol id="icon-pharmaceutical" viewBox="0 0 32 32">
<title>pharmaceutical</title>
<path d="M25.003 17.956c-3.858 0-6.997 3.139-6.997 6.997s3.139 6.997 6.997 6.997 6.997-3.139 6.997-6.997c-0-3.858-3.139-6.997-6.997-6.997zM25.003 30.588c-3.107 0-5.634-2.528-5.634-5.634s2.528-5.634 5.634-5.634 5.634 2.528 5.634 5.634c-0 3.107-2.528 5.634-5.634 5.634z"></path>
<path d="M27.133 21.498c-0.32-0.197-0.74-0.098-0.938 0.223l-3.545 5.751c-0.198 0.32-0.098 0.74 0.223 0.938 0.111 0.069 0.235 0.102 0.357 0.102 0.229 0 0.452-0.115 0.581-0.324l3.545-5.751c0.198-0.321 0.098-0.74-0.223-0.938z"></path>
<path d="M5.541 27.145l-0.104-0.065c-0.565-0.354-0.959-0.907-1.109-1.559s-0.038-1.322 0.316-1.887c0.2-0.319 0.103-0.74-0.216-0.939s-0.74-0.103-0.939 0.216c-0.547 0.874-0.72 1.909-0.489 2.916s0.84 1.862 1.714 2.409l0.104 0.065c0.112 0.070 0.237 0.104 0.361 0.104 0.227 0 0.449-0.113 0.578-0.32 0.2-0.319 0.103-0.74-0.216-0.939z"></path>
<path d="M19.45 4.692l0.104 0.065c1.169 0.732 1.525 2.278 0.793 3.446-0.2 0.319-0.103 0.74 0.216 0.939 0.112 0.070 0.237 0.104 0.361 0.104 0.227 0 0.449-0.113 0.578-0.32 1.13-1.806 0.581-4.195-1.225-5.325l-0.104-0.065c-0.319-0.2-0.74-0.103-0.939 0.216s-0.103 0.74 0.216 0.939z"></path>
<path d="M18.279 19.538c0-0 0-0 0-0l5.679-9.074c0.958-1.531 1.263-3.343 0.858-5.103s-1.471-3.257-3.002-4.215l-0.104-0.065c-1.077-0.674-2.316-1.031-3.581-1.031-2.348 0-4.493 1.187-5.737 3.175l-11.359 18.148c-0.958 1.531-1.263 3.343-0.858 5.103s1.471 3.257 3.002 4.215l0.104 0.065c1.077 0.674 2.316 1.031 3.582 1.031 2.348 0 4.493-1.187 5.737-3.175l5.679-9.074c0 0 0 0 0 0zM13.547 3.947c0.994-1.587 2.706-2.535 4.582-2.535 1.009 0 1.998 0.285 2.858 0.823l0.104 0.065c1.222 0.765 2.073 1.96 2.397 3.365s0.080 2.852-0.685 4.074l-5.318 8.496-9.256-5.793 5.318-8.496zM11.444 27.889c-0.994 1.587-2.706 2.535-4.582 2.535-1.009 0-1.998-0.285-2.858-0.823l-0.104-0.065c-1.222-0.765-2.073-1.96-2.397-3.365s-0.080-2.852 0.685-4.075l5.318-8.496 9.256 5.793-5.318 8.496z"></path>
</symbol>
<symbol id="icon-checkmark-circle" viewBox="0 0 32 32">
<title>checkmark-circle</title>
<path d="M15.2 32c-4.061 0-7.877-1.581-10.749-4.451s-4.451-6.688-4.451-10.747c0-4.061 1.581-7.877 4.451-10.749s6.688-4.453 10.749-4.453c4.061 0 7.877 1.581 10.749 4.453s4.451 6.688 4.451 10.749-1.581 7.877-4.451 10.747c-2.87 2.87-6.688 4.451-10.749 4.451zM15.2 3.2c-7.499 0-13.6 6.101-13.6 13.6s6.101 13.6 13.6 13.6 13.6-6.101 13.6-13.6-6.101-13.6-13.6-13.6zM12 23.2c-0.205 0-0.41-0.078-0.566-0.234l-4.8-4.8c-0.312-0.312-0.312-0.819 0-1.131s0.819-0.312 1.131 0l4.234 4.234 10.634-10.634c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-11.2 11.2c-0.157 0.157-0.362 0.234-0.566 0.234z"></path>
</symbol>
<symbol id="icon-user-circle-o" viewBox="0 0 28 28">
<title>user-circle-o</title>
<path d="M14 0c7.734 0 14 6.266 14 14 0 7.688-6.234 14-14 14-7.75 0-14-6.297-14-14 0-7.734 6.266-14 14-14zM23.672 21.109c1.453-2 2.328-4.453 2.328-7.109 0-6.609-5.391-12-12-12s-12 5.391-12 12c0 2.656 0.875 5.109 2.328 7.109 0.562-2.797 1.922-5.109 4.781-5.109 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c2.859 0 4.219 2.312 4.781 5.109zM20 11c0-3.313-2.688-6-6-6s-6 2.688-6 6 2.688 6 6 6 6-2.688 6-6z"></path>
</symbol>
<symbol id="icon-expand" viewBox="0 0 32 32">
<title>expand</title>
<path d="M12.566 11.434l-9.834-9.834h6.069c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-8c-0.442 0-0.8 0.358-0.8 0.8v8c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-6.069l9.834 9.834c0.157 0.157 0.362 0.234 0.566 0.234s0.41-0.078 0.566-0.234c0.312-0.312 0.312-0.819 0-1.131zM31.2 0h-8c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h6.069l-9.834 9.834c-0.312 0.312-0.312 0.819 0 1.131 0.157 0.157 0.362 0.234 0.565 0.234s0.41-0.078 0.565-0.234l9.835-9.834v6.069c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-8c0-0.442-0.358-0.8-0.8-0.8zM12.566 19.435c-0.312-0.312-0.819-0.312-1.131 0l-9.834 9.834v-6.069c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v8c0 0.442 0.358 0.8 0.8 0.8h8c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-6.069l9.834-9.835c0.312-0.312 0.312-0.819 0-1.131zM31.2 22.4c-0.442 0-0.8 0.358-0.8 0.8v6.069l-9.835-9.834c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l9.835 9.834h-6.069c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h8c0.442 0 0.8-0.358 0.8-0.8v-8c0-0.442-0.358-0.8-0.8-0.8z"></path>
</symbol>
<symbol id="icon-quote" viewBox="0 0 20 20">
<title>quote</title>
<path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3s1.306 3 2.916 3c2.915 0 0.972 5.799-2.916 5.799v1.4c6.939 0.001 9.658-13.199 2.916-13.199zM13.715 3.401c-1.609 0-2.915 1.343-2.915 3s1.306 3 2.915 3c2.916 0 0.973 5.799-2.915 5.799v1.4c6.938 0.001 9.657-13.199 2.915-13.199z"></path>
</symbol>
<symbol id="icon-google-plus-symbol" viewBox="0 0 32 32">
<title>google-plus-symbol</title>
<path d="M18.413 20.375c-0.34-0.455-0.715-0.879-1.125-1.269s-0.821-0.747-1.231-1.067c-0.41-0.32-0.785-0.628-1.125-0.923s-0.615-0.602-0.827-0.923-0.317-0.647-0.317-0.981c0-0.462 0.148-0.894 0.442-1.298s0.654-0.795 1.077-1.173c0.423-0.378 0.846-0.792 1.269-1.24s0.782-1.042 1.077-1.779c0.295-0.737 0.442-1.58 0.442-2.529 0-1.128-0.25-2.212-0.75-3.25s-1.205-1.846-2.115-2.423h2.596l2.596-1.519h-8.403c-1.192 0-2.391 0.128-3.596 0.385-1.782 0.397-3.282 1.305-4.5 2.721s-1.827 3.022-1.827 4.817c0 1.897 0.683 3.474 2.048 4.731s3.003 1.884 4.913 1.884c0.385 0 0.833-0.032 1.346-0.096-0.026 0.102-0.070 0.24-0.134 0.413s-0.116 0.311-0.154 0.414c-0.038 0.102-0.071 0.227-0.096 0.375s-0.038 0.298-0.038 0.452c0 0.846 0.41 1.801 1.231 2.865-0.974 0.026-1.936 0.112-2.884 0.26s-1.942 0.378-2.981 0.692c-1.038 0.314-1.968 0.769-2.788 1.365s-1.436 1.304-1.846 2.125c-0.474 0.949-0.712 1.814-0.712 2.596 0 0.859 0.192 1.638 0.577 2.337s0.878 1.269 1.481 1.711c0.603 0.443 1.298 0.814 2.087 1.116s1.57 0.516 2.346 0.644c0.776 0.128 1.542 0.192 2.298 0.192 3.436 0 6.128-0.84 8.077-2.519 1.795-1.564 2.692-3.372 2.692-5.423 0-0.731-0.106-1.413-0.317-2.048s-0.487-1.18-0.827-1.635zM11 13.385c-0.654 0-1.276-0.167-1.865-0.5s-1.090-0.766-1.5-1.298c-0.41-0.532-0.769-1.131-1.077-1.798s-0.535-1.333-0.683-2c-0.147-0.666-0.221-1.301-0.221-1.904 0-1.231 0.327-2.288 0.981-3.173s1.577-1.327 2.769-1.327c0.846 0 1.612 0.263 2.298 0.788s1.224 1.192 1.615 2c0.391 0.808 0.692 1.644 0.904 2.509s0.317 1.683 0.317 2.452c0 1.282-0.279 2.311-0.836 3.087s-1.458 1.163-2.702 1.163zM16.317 27.826c-0.352 0.603-0.83 1.074-1.432 1.413s-1.247 0.59-1.933 0.75c-0.686 0.161-1.407 0.241-2.163 0.241-0.821 0-1.635-0.096-2.442-0.289s-1.58-0.484-2.317-0.875c-0.737-0.391-1.333-0.929-1.788-1.615s-0.683-1.465-0.683-2.337c0-0.769 0.173-1.455 0.519-2.058s0.789-1.083 1.327-1.442c0.538-0.359 1.167-0.654 1.885-0.884s1.41-0.391 2.077-0.481c0.666-0.090 1.346-0.134 2.038-0.134 0.423 0 0.744 0.013 0.962 0.038 0.077 0.052 0.272 0.186 0.587 0.404s0.526 0.366 0.635 0.443c0.109 0.077 0.308 0.224 0.596 0.442s0.493 0.381 0.615 0.49c0.121 0.109 0.298 0.272 0.529 0.49s0.401 0.407 0.51 0.567c0.109 0.16 0.244 0.356 0.404 0.586s0.272 0.452 0.337 0.664c0.064 0.212 0.125 0.442 0.182 0.692s0.086 0.51 0.086 0.779c0 0.807-0.176 1.513-0.529 2.115z"></path>
<path d="M27.077 4.923v-4.923h-2.462v4.923h-4.923v2.462h4.923v4.923h2.462v-4.923h4.923v-2.462z"></path>
</symbol>
<symbol id="icon-instagram" viewBox="0 0 20 20">
<title>instagram</title>
<path d="M17 1h-14c-1.1 0-2 0.9-2 2v14c0 1.101 0.9 2 2 2h14c1.1 0 2-0.899 2-2v-14c0-1.1-0.9-2-2-2zM9.984 15.523c3.059 0 5.538-2.481 5.538-5.539 0-0.338-0.043-0.664-0.103-0.984h1.581v7.216c0 0.382-0.31 0.69-0.693 0.69h-12.614c-0.383 0-0.693-0.308-0.693-0.69v-7.216h1.549c-0.061 0.32-0.104 0.646-0.104 0.984 0 3.059 2.481 5.539 5.539 5.539zM6.523 9.984c0-1.912 1.55-3.461 3.462-3.461s3.462 1.549 3.462 3.461-1.551 3.462-3.462 3.462c-1.913 0-3.462-1.55-3.462-3.462zM16.307 6h-1.615c-0.382 0-0.692-0.312-0.692-0.692v-1.617c0-0.382 0.31-0.691 0.691-0.691h1.615c0.384 0 0.694 0.309 0.694 0.691v1.616c0 0.381-0.31 0.693-0.693 0.693z"></path>
</symbol>
<symbol id="icon-bag-1" viewBox="0 0 32 32">
<title>bag-1</title>
<path d="M26.832 7.898h-5.174v-1.684c0-3.426-2.787-6.214-6.214-6.214s-6.213 2.787-6.213 6.214v1.684h-4.458c-0.376 0-0.681 0.305-0.681 0.681l-3.827 22.74c0 0.376 0.305 0.681 0.681 0.681h30.107c0.376 0 0.681-0.305 0.681-0.681l-4.221-22.74c0-0.376-0.305-0.681-0.681-0.681zM10.593 6.214c0-2.675 2.177-4.852 4.852-4.852s4.852 2.177 4.852 4.852v1.684h-9.704v-1.684zM30.373 30.638h-28.746l3.826-21.379h3.777v2.998c-0.329 0.22-0.544 0.594-0.544 1.019 0 0.677 0.548 1.226 1.225 1.226s1.226-0.548 1.226-1.226c0-0.425-0.217-0.799-0.545-1.019v-2.998h9.705v2.998c-0.328 0.22-0.545 0.594-0.545 1.019 0 0.677 0.548 1.226 1.226 1.226s1.226-0.548 1.226-1.226c0-0.425-0.217-0.799-0.545-1.019v-2.998h4.494l4.222 21.379z"></path>
</symbol>
<symbol id="icon-check-circle" viewBox="0 0 24 24">
<title>check-circle</title>
<path d="M21 11.080v0.92c-0.001 2.485-1.009 4.733-2.64 6.362s-3.88 2.634-6.365 2.632-4.734-1.009-6.362-2.64-2.634-3.879-2.633-6.365 1.009-4.733 2.64-6.362 3.88-2.634 6.365-2.633c1.33 0.001 2.586 0.289 3.649 0.775 0.502 0.23 1.096 0.008 1.325-0.494s0.008-1.096-0.494-1.325c-1.327-0.606-2.866-0.955-4.479-0.956-3.037-0.002-5.789 1.229-7.78 3.217s-3.224 4.74-3.226 7.777 1.229 5.789 3.217 7.78 4.739 3.225 7.776 3.226 5.789-1.229 7.78-3.217 3.225-4.739 3.227-7.777v-0.92c0-0.552-0.448-1-1-1s-1 0.448-1 1zM21.293 3.293l-9.293 9.302-2.293-2.292c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l3 3c0.391 0.391 1.024 0.39 1.415 0l10-10.010c0.39-0.391 0.39-1.024-0.001-1.414s-1.024-0.39-1.414 0.001z"></path>
</symbol>
<symbol id="icon-chart-bars" viewBox="0 0 32 32">
<title>chart-bars</title>
<path d="M28 32h-25.6c-1.323 0-2.4-1.077-2.4-2.4v-25.6c0-1.323 1.077-2.4 2.4-2.4h25.6c1.323 0 2.4 1.077 2.4 2.4v25.6c0 1.323-1.077 2.4-2.4 2.4zM2.4 3.2c-0.442 0-0.8 0.358-0.8 0.8v25.6c0 0.442 0.358 0.8 0.8 0.8h25.6c0.442 0 0.8-0.358 0.8-0.8v-25.6c0-0.442-0.358-0.8-0.8-0.8h-25.6zM10.4 27.2h-3.2c-0.442 0-0.8-0.358-0.8-0.8v-14.4c0-0.442 0.358-0.8 0.8-0.8h3.2c0.442 0 0.8 0.358 0.8 0.8v14.4c0 0.442-0.358 0.8-0.8 0.8zM8 25.6h1.6v-12.8h-1.6v12.8zM16.8 27.2h-3.2c-0.442 0-0.8-0.358-0.8-0.8v-19.2c0-0.442 0.358-0.8 0.8-0.8h3.2c0.442 0 0.8 0.358 0.8 0.8v19.2c0 0.442-0.358 0.8-0.8 0.8zM14.4 25.6h1.6v-17.6h-1.6v17.6zM23.2 27.2h-3.2c-0.442 0-0.8-0.358-0.8-0.8v-8c0-0.442 0.358-0.8 0.8-0.8h3.2c0.442 0 0.8 0.358 0.8 0.8v8c0 0.442-0.358 0.8-0.8 0.8zM20.8 25.6h1.6v-6.4h-1.6v6.4z"></path>
</symbol>
</defs>
</svg>
</body>

<!-- Mirrored from templates.g5plus.net/thedir/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 18:28:05 GMT -->

</html>