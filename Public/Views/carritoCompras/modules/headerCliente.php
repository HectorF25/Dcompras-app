<?php
include '../../../Config/appConfig.php';
include_once "../../../App/model/productosModel.php";
include('../../../App/model/chatModel.php');


$productos = obtenerProductosCatalogo();
$registros = contarRegistros();
session_start();
$chat = new Chat();

$loggedUser = $chat->getUserDetails($_SESSION['idUsuario']);

$idUsuario = $_SESSION["idUsuario"];
$idPerfilUsuario = $_SESSION["idPerfilUsuario"];
$nombreUsuario = $_SESSION['nombreUsuario'];
$apellidoUsuario = $_SESSION['apellidoUsuario'];
$correoUsuario = $_SESSION['correo'];
$nombrePerfilUsuario = $_SESSION["nombrePerfilUsuario"];
$imgUsuario = $_SESSION["imgUsuario"];
$estado = $_SESSION["estadoUsuario"];
if (!isset($correoUsuario) || $idPerfilUsuario != 2) {
    echo '<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente o no tiene permisos para acceder a la misma");
    window.location.href="../index";
    </script>';
} else {
    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
    mysqli_select_db($conexion, DB_NAME);
    $consulta = mysqli_query($conexion, "select imgUsuario from usuario where idUsuario = $idUsuario");
    while ($filas = mysqli_fetch_array($consulta)) {
        $img = $filas['imgUsuario'];
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
    <link rel="stylesheet" href="./assets/css/carrito.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/lib/app.css">
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
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <!-- End layout styles -->
        <link rel="shortcut icon" href="ass3ets/img/favicon.ico" />
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
                                    <img src="../perfiladmin/administrador/<?php echo $img ?>">
                                    <span class="availability-status online"></span>
                                </div>
                                <div class="nav-profile-text">
                                    <p class="mb-1 text-black"><?php echo  $nombreUsuario . " " . $apellidoUsuario ?></p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="./cliente/index.php?c=cliente&a=editarPerfilUsuario&idUsuario=<?php echo $idUsuario; ?>">
                                    <i class="mdi mdi-cached mr-2 text-success"></i> Editar perfil </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../../App/controller/logoutController.php">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Cerrar sesión </a>
                            </div>
                        </li>

                        <li class="nav-item nav-settings d-none d-lg-block nolink">
                            <a class="nav-link count-indicator dropdown-toggle" href="ver_carrito.php">
                                <i class="mdi mdi-cart-outline" style="text-decoration: none;"></i>

                                <strong><?php
                                        include_once "../../../App/model/productosModel.php";
                                        $conteo = cantidadDeProductos();
                                        if ($conteo > 0) {
                                            //printf("(%d)", $conteo);
                                            echo "<sup class='sup'>$conteo</sup>";
                                        }
                                        ?>
                                </strong>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="count-symbol bg-warning"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Mensajes</h6>
                                <div class="dropdown-divider"></div>

                                <?php

                                $mensajesNuevos = $chat->getUnreadMessages($_SESSION['idUsuario']);
                                foreach ($mensajesNuevos as $mensaje) {
                                    echo '<a class="dropdown-item preview-item" href="chat.php">';
                                    echo '<div class="preview-thumbnail">';
                                    echo '<img src="../perfiladmin/administrador/' . $mensaje['imgUsuario'] . '" alt="" class="profile-pic" />';
                                    echo '</div>';
                                    echo '<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">';
                                    echo  '<h6 class="preview-subject ellipsis mb-1 font-weight-normal" style="color: #000;">' . $mensaje["message"] . '</h6>';
                                    echo  '<p class="text-gray mb-0">' . $mensaje["nombreUsuario"] . ' - ' . $mensaje["hora"] . ' </p>';
                                    echo  '</div>';
                                    echo  '</a>';
                                    echo  '<div class="dropdown-divider">';
                                    echo  '</div>';
                                }
                                ?>

                                <div class="dropdown-divider"></div>
                                <h6 class="p-3 mb-0 text-center"><?php echo $chat->getUnreadMessagesCountAll($_SESSION['idUsuario']); ?> nuevos mensajes</h6>
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
                                    <img src="../perfiladmin/administrador/<?php echo $img ?>" alt="profile">
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
                            <a class="nav-link" href="./catalogoCompras.php">
                                <span class="menu-title">Comprar</span>
                                <i class="mdi mdi-shopping menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ver_carrito.php">
                                <span class="menu-title">Mi carrito</span>
                                <i class="mdi mdi-cart menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./administrador/index.php?c=administrador&a=modificionusuarios">
                                <span class="menu-title">Productos</span>
                                <i class="mdi mdi-contacts menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../chat.php">
                                <span class="menu-title">Chatear con soporte</span>
                                <i class="mdi mdi-worker menu-icon"></i>
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
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

                        <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
                        <!-- endinject -->

                        <!-- Plugin js for this page -->
                        <script src="./assets/vendors/chart.js/Chart.min.js"></script>
                        <!-- End plugin js for this page -->
                        <!-- inject:js -->
                        <script src="./assets/js/off-canvas.js"></script>
                        <script src="./assets/js/hoverable-collapse.js"></script>
                        <script src="../assets/js/misc.js"></script>
                        <!-- endinject -->
                        <!-- Custom js for this page -->
                        <script src="./assets/js/dashboard.js"></script>
                        <script src="./assets/js/todolist.js"></script>