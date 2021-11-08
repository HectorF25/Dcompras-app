<?php
include ('../../../../App/model/chatModel.php');

error_reporting(0);
session_start();
$chat = new Chat();
$loggedUser = $chat->getUserDetails($_SESSION['idUsuario']);

$idUsuario = $_SESSION["idUsuario"];
$correoUsuario = $_SESSION['correo'];
$idPerfilUsuario = $_SESSION["idPerfilUsuario"];
if (!isset($correoUsuario) || $idPerfilUsuario != 1 ) {
    echo '<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente o no tiene permisos para acceder a la misma");
    window.location.href="../../index";
    </script>'; 
     } else{
    $conex = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conex, 'imake');

$log = mysqli_query($conex, "SELECT * FROM Usuario INNER JOIN perfilusuario pf on usuario.idPerfilUsuario = pf.idPerfilUsuario
    WHERE idUsuario='$idUsuario'");
    if (mysqli_num_rows($log) > 0) {
        $row = mysqli_fetch_array($log);

        $_SESSION["nombreUsuario"] = $row['nombreUsuario'];
        $_SESSION["idUsuario"] = $row['idUsuario'];
        $_SESSION["apellidoUsuario"] = $row['apellidoUsuario'];
        $_SESSION["nombrePerfilUsuario"] = $row['nombrePerfilUsuario'];


    $consulta=mysqli_query($conex,"select imgUsuario from usuario where idUsuario = $idUsuario");                  
    while($filas=mysqli_fetch_array($consulta)){
         $img=$filas['imgUsuario'];                           
}
    }
/*
$sesion = true;

if($sesion){
$codigo = 6;


*/
?>
<!DOCTYPE html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dcompras | Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img
                        src="../assets/images/Recurso 1LogoDcompras-svg-img.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="../assets/images/Recurso 1LogoD-svg-img.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="xd">
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
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src=".<?php echo $img ?>">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">
                                    <?php echo $_SESSION["nombreUsuario"] . " " . $_SESSION["apellidoUsuario"] ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item"
                                href="index.php?c=administrador&a=editarPerfilUsuario&idUsuario=<?php echo $idUsuario; ?>">
                                <i class="mdi mdi-account mr-2 text-primary"></i> Editar perfil </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../administrador/Backup">
                                <i class="mdi mdi-content-save mr-2 text-success"></i> Backup BD </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../../../App/controller/logoutController.php">
                                <i class="mdi mdi-logout mr-2 text-danger"></i> Cerrar Sesión </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Mensajes</h6>
                            <div class="dropdown-divider"></div>

                            <?php
                        
                            $mensajesNuevos = $chat->getUnreadMessages($_SESSION['idUsuario']);
                            foreach($mensajesNuevos as $mensaje){
                            echo '<a class="dropdown-item preview-item" href="chat.php">';
                            echo '<div class="preview-thumbnail">';
                            echo '<img src="../perfiladmin/administrador/'.$mensaje['imgUsuario'].'" alt="" class="profile-pic" />';
                            echo '</div>';
                            echo '<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">';
                            echo  '<h6 class="preview-subject ellipsis mb-1 font-weight-normal" style="color: #000;">'.$mensaje["message"].'</h6>';
                            echo  '<p class="text-gray mb-0">'.$mensaje["nombreUsuario"].' - '.$mensaje["hora"].' </p>';
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
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
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
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
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
                                <img src=".<?php echo $img ?>" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span
                                    class="font-weight-bold mb-2"><?php echo $_SESSION["nombreUsuario"] . " " . $_SESSION["apellidoUsuario"] ?></span>
                                <span
                                    class="text-secondary text-small"><?php echo $_SESSION["nombrePerfilUsuario"]  ?></span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../PerfilAdmin">
                            <span class="menu-title">Inicio</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Negocios</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-store menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../administrador/index.php?c=negocios&a=negocios">Negocios
                                        Registrados</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="pages/ui-features/typography.html">Peticiones de Negocios</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?c=administrador&a=modificionusuarios">
                            <span class="menu-title">Usuarios</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="descargaPDF.php">
                            <span class="menu-title">Reportes</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">
                            <span class="menu-title">Estadisticas</span>
                            <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat.php">
                            <span class="menu-title">Atención al cliente</span>
                            <i class="mdi mdi-worker menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

            <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="../assets/vendors/chart.js/Chart.min.js"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="../assets/js/off-canvas.js"></script>
            <script src="../assets/js/hoverable-collapse.js"></script>
            <script src="../assets/js/misc.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="../assets/js/dashboard.js"></script>
            <script src="../assets/js/todolist.js"></script>
            <?php
                }
            ?>