<?php
session_start();
$idUsuario = $_SESSION["idUsuario"];
$imgUsuario = $_SESSION["imgUsuario"];
$correoUsuario = $_SESSION['correo'];
if(!isset($correoUsuario)){
    echo'<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente");
    window.location.href="../../Login.php";
    </script>';
}else{

}
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <title>Dcompras | Administrador</title>
    <link rel="apple-touch-icon" href="../../../../App/assets/img/Recurso 1LogoD.png">
    <link rel="shortcut icon" href="../../../../App/assets/img/Recurso 1LogoD.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="apple-touch-icon" href="../assets/img/Logo_Nuevo.png">
    <link rel="shortcut icon" href="../assets/img/Logo_Nuevo.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/formularioStyles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../PerfilAdmin.php"><i class="menu-icon fa fa-laptop"></i>Administador</a>
                    </li>
                    <li class="menu-title">Elementos de Consulta</li>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Funciones</a>
                        
                            <li><i class="fa fa-user"></i><a href="./index.php?c=administrador&a=modificionusuarios">Usuarios Registrados</a></li>
                            <li><i class="fa fa-building"></i><a href="./index.php?c=negocios&a=negocios">Negocios Registrados</a></li>
                            
                            <li><i class="fa fa-pencil-square"></i><a href="./index.php?c=administrador&a=modificionusuarios">Modificacion Usuarios</a></li>
                            <li><i class="fa fa-archive"></i><a href="ui-badges.html">Negocios Inactivos</a></li>

                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Fallas en el sistema</a></li>


                        
                    </li>
                    
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="PerfilAdministrador.php"><img src="../assets/img/logoD.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../assets/img/Logo_Nuevo.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Que quieres Buscar?" aria-label="Buscar">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">Tienes 3 Notificaciones</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Pedido Aceptado</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Pedido en Procceso.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Pedido Denegado.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">Tienes 4 Mensajes</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="../img/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Ochoa</span>
                                        <span class="time float-right">Justo ahora</span>
                                        <p>Hola, como puedo realizar un cambio de producto</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="../img/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Carlos Martinez</span>
                                        <span class="time float-right">hace 5 minutos</span>
                                        <p>Buenas Tardes, como puedo salicitar un reembolso</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="../img/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Manuel Lopez</span>
                                        <span class="time float-right">hace 10 minutos</span>
                                        <p>Hola, como puedo registrar una tienda</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="../img/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Hector Flores</span>
                                        <span class="time float-right">hace 15 minutos </span>
                                        <p>Buenas tardes, por favor me puede colaborar con reestablecer una contraseña</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       
                            <img class="user-avatar rounded-circle" src="images/usuarios/<?php echo $imgUsuario ?>.png" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="../administrador/index.php?c=administrador&a=ajustesPerfil"><i class="fa fa- user"></i>Mi Perfil! <?php echo  ' ' .strtoupper($_SESSION[ 'correo']); ?></a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones <span class="count">13</span></a>
                            <a class="nav-link" id="btn-abrir-popup" href="?c=administrador&a=ajustesPerfil&idUsuario=<?php echo $idUsuario; ?>" class="btn-abrir-popup">Modificar</a>
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Configuraciones</a>

                            <a class="nav-link" href="../../../../App/controller/logoutController.php"><i class="fa fa-power -off"></i>Cerrar Sesión</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- Header-->