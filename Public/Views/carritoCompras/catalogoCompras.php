<?php
include '../../../Config/appConfig.php';
include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosCatalogo();
$registros = contarRegistros();
session_start();
$idUsuario = $_SESSION["idUsuario"];
    $nombreUsuario = $_SESSION['nombreUsuario'];
    $apellidoUsuario = $_SESSION['apellidoUsuario'];
    $correoUsuario = $_SESSION['correo'];
    $nombrePerfilUsuario = $_SESSION["nombrePerfilUsuario"];
    $imgUsuario = $_SESSION["imgUsuario"];
    $estado = $_SESSION["estadoUsuario"];
if(!isset($correoUsuario)){
    echo'<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente");
    window.location.href="../index";
    </script>';
} else {
    $conexion = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conexion, 'imake');	 
    $consulta=mysqli_query($conexion,"select imgUsuario from usuario where idUsuario = $idUsuario");                  
    while($filas=mysqli_fetch_array($consulta)){
         $img=$filas['imgUsuario'];                           
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dcompras</title>
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dcompras | Usuario</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
    <div class="container-scroller">




        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="assets/img/Recurso 1LogoDcompras-svg-img.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/img/Recurso 1LogoD-svg-img.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar...">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="../perfiladmin/administrador<?php echo $img ?>">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"><?php echo  $nombreUsuario . " " . $apellidoUsuario ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="./administrador/index.php?c=administrador&a=editarPerfilUsuario&idUsuario=<?php echo $idUsuario; ?>">
                                <i class="mdi mdi-cached mr-2 text-success"></i> Editar perfil </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../../App/controller/logoutController.php">
                                <i class="mdi mdi-logout mr-2 text-primary"></i> Cerrar sesión </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="assets/img/faces/face4.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="assets/img/faces/face2.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="assets/img/faces/face3.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="../../../App/controller/logoutController.php">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="../perfiladmin/administrador<?php echo $img ?>" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2"><?php echo $nombreUsuario . " " . $apellidoUsuario ?></span>
                                <span class="text-secondary text-small"><?php echo $nombrePerfilUsuario ?></span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogoCompras">
                            <span class="menu-title">Comprar</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <span class="menu-title">Tiendas</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Tiendas cercanas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./administrador/index.php?c=administrador&a=modificionusuarios">
                            <span class="menu-title">Productos</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="menu-title">Resumen de compras</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li>

                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi mdi-home"></i>
                            </span> ¿Que vas a pedir hoy?
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Resumen <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>

        <section class="mt-3">
            <div class="container filter">
                <div class="cap">
                    <h4>FILTROS</h4>
                </div>
                <div class="sort">
                  <div class="text-dark font-weight-semibold font-size-md mb-4 mb-lg-0"><?php echo $registros ?> Resultados encontrados.</div>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <div class="container product-selection">
                <div class="select">
                  <button class="accordion font-weight-bold mb-3">PERSONALIZAR</button>
                  <div class="panel">
                    <button class="accordion font-weight-bold mb-3">CATEGORIAS</button>
                    <div class="panel">
                      <p><a href="#">Lacteos</a></p>
                      <p><a href="#">Vegetales</a></p>
                      <p><a href="#">Comida rápida</a></p>
                      <p><a href="#">Despensa</a></p>
                    </div>
                    
                    <button class="accordion font-weight-bold mb-3">PRECIOS</button>
                    <input type="range" class="custom-range p-4" id="customRange" name="points1">


                    <button class="accordion font-weight-bold mb-3">MARCA</button>
                    <div class="panel">
                      <p><a href="#">Corona</a></p>
                      <p><a href="#">Quaker</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">LACTEOS</button>
                    <div class="panel">
                      <p><a href="#">Alquería</a></p>
                      <p><a href="#">Sto Domingo</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">VEGETALES</button>
                    <div class="panel">
                      <p><a href="#">Fresco</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">COMIDA RÁPIDA</button>
                    <div class="panel size">
                      <p><a href="#">Hamburguesa</a></p>
                      <p><a href="#">Pizza</a></p>
                      <p><a href="#">Empanada</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">DESPENSA</button>
                    <div class="panel">
                      <p><a href="#">Arroz</a></p>
                      <p><a href="#">Harina</a></p>
                      <p><a href="#">Pasta</a></p>
                      <p><a href="#">Aceite</a></p>
                      <p><a href="#">Café</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">POSTRES</button>
                    <div class="panel">
                      <p><a href="#">Pasabocas</a></p>
                      <p><a href="#">Tres leches</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">LIMPIEZA</button>
                    <div class="panel">
                      <p><a href="#">Ajax</a></p>
                      <p><a href="#">Mr Musculo</a></p>
                      <p><a href="#">Fabuloso</a></p>
                    </div>

                </div>
                </div>

          
                   
                  <?php foreach ($productos as $producto) { ?>
                    <div class="col-lg-6 mb-6">
                                        <div class="store card border-0 rounded-0">
                                            <div class="position-relative store-image">
                                                <a href="./detallesProductos">
                                                    <img src="<?= APP_DIR_FILES; ?>assets/img/productos/<?php echo $producto->imgProducto ?>.jpg" alt="store 1" class="card-img-top rounded-0 prod">
                                                </a>
                                                <div class="image-content position-absolute d-flex align-items-center">
                                                    <div class="content-right ml-auto d-flex">
                                                        <a href="<?= APP_DIR_FILES; ?>assets/css/images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                            <svg class="icon icon-expand">
                                                                <use xlink:href="#icon-expand"></use>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pb-4">
                                                <center><a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2" style="text-align: center;"><span class="letter-spacing-25" "><?php echo $producto->nombreProducto." "?></span><span class="badge badge-success mr-1 d-inline-block">4.8</span></a></center>
                                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                <center> <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><center><span class="mr-1" style="text-align: center;">Desde</span><span class="text-danger font-weight-bold" style="text-align: center;">$<?php echo number_format($producto->precioProducto, 0) ?></span></center></li> 
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="text-green" style="text-align: center; color: green;">Abierto ahora!</span></li></center>
                                                </ul>

                                                <div class="media">
                                                    <a href="#" class="d-inline-block mr-3"><img src="<?= APP_DIR_FILES; ?>assets/css/images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body lh-14 font-size-sm">
                                                        <?php echo $producto->especificacionProducto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                                <div class="border-top pt-3">
                                                    <form action="../../../App/controller/agregar_al_carrito.php" method="post">
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->idProducto ?>">
                                                        <input type="hidden" name="precioProductoNegocio" value="<?php echo $producto->precioProductoNegocio ?>">
                                                        <input type="hidden" name="cantidadProducto" value="<?php echo $producto->cantidadProducto ?>">
                                                        <a href="javascript:void(0);">
                                                            <button class="btn btn-gradient-primary" agregar-carrito">
                                                                <i class="fa fa-cart-plus"></i>Agregar al carrito
                                                            </button></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
              <?php } ?>
        </section>

  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/product.js"></script>
</body>
</html>