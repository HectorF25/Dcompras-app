<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dcompras | Vendedor</title>
    <link rel="apple-touch-icon" href="../../../App/assets/img/Recurso 1LogoD.png">
    <link rel="shortcut icon" href="../../../App/assets/img/Recurso 1LogoD.png">

    <script src="https://kit.fontawesome.com/11509ce6e2.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <style>
    #weatherWidget .currentDesc {
        color: #ffffff !important;
    }
    .traffic-chart {
        min-height: 335px;
    }
    #flotPie1 {
        height: 150px;
    }
    #flotPie1 td {
        padding: 3px;
    }
    #flotPie1 table {
        top: 20px !important;
        right: -10px !important;
    }
    .chart-container {
        display: table;
        min-width: 270px;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #flotLine5 {
        height: 105px;
    }
    #flotBarChart {
        height: 150px;
    }
    #cellPaiChart {
        height: 160px;
    }
    </style>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="fas fa-user"></i>Vendedor</a>
                    </li>
                    <li class="menu-title">Menú</li>
                    <li class="menu-item-has-children dropdown">
                       <a href="./vendedor/index.php?c=crearProductos&a=mostrarProductos">Productos</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                    <a href="./vendedor/index.php?c=crearProductos&a=mostrarPedidos">
                         <img src="assets/images/crearPedido.png" alt="Correo:" width="25" height="23"></i> Pedidos</a>
                       
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <img src="assets/images/logoDomicilio.png" alt="Correo:" width="25" height="23"> Domicilios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><img src="assets/images/logoDomicilio.png" alt="Correo:" width="25" height="23"><a href="#"> Crear Domicilios</a></li>
                            <li><img src="assets/images/search.png" alt="Correo:" width="25" height="23"><a href="#"> Consultar Domicilios</a></li>
                            <li><img src="assets/images/real-time.png" alt="Correo:" width="25" height="23"><a href="#"> Actualizar Domicilios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <img src="assets/images/catalogue.png" alt="Correo:" width="25" height="23"> Catalogo</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><img src="assets/images/logoCatalogoCrear.png" alt="Correo:" width="25" height="23"><a href="#"> Crear Catalogo</a></li>
                            <li><img src="assets/images/note.png" alt="Correo:" width="25" height="23"><a href="#"> Actualizar Catalogo</a></li>
                        </ul>
                    </li>
                    <li>
                    <li class="menu-title">Reportes</li>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <img src="assets/images/reportePedido.png" alt="Correo:" width="25" height="23"><a href="#">Pedidos</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><img src="assets/images/report.png" alt="Correo:" width="25" height="23"><a href="#">Domicilios</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="menu.html"><img src="assets/img/logoD.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="menu.html"><img src="assets/img/logoD.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message" align-center>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Hace una semana</span>
                                        <p>Hola, ya llego mi pedido</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">Ayer</span>
                                        <p>Hola, como puedo hacer un reembolso</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">Hace 10 minutos</span>
                                        <p>Hola, mi pedido esta incompleto</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">Justo ahora</span>
                                        <p>Hola, mi pedido ya llego gracias</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="assets/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Mi Perfil</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones<span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Ajustes</a>

                            <a class="nav-link" href="../../../App/controller/logoutController.php"><i class="fa fa-power -off"></i>Cerrar Sesión</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count">23569</span></div>
                                            <div class="stat-heading">Dinero del restaurante</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
                                            <div class="stat-heading">Ventas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">2986</span></div>
                                            <div class="stat-heading">Clientes</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="clearfix"></div>
                    <div class="orders">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="box-title">Pedidos</h4>
                                    </div>
                                    <div class="card-body--">
                                        <div class="table-stats order-table ov-h">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">ID</th>
                                                        <th class="avatar">Imagen</th>
                                                        <th>Nombre</th>
                                                        <th>Productos</th>
                                                        <th>Dirección</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="serial">1.</td>
                                                        <td class="avatar">
                                                            <div class="round-img">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td> <span class="name">Louis Stanley</span> </td>
                                                        <td> <span class="product">iMax</span> </td>
                                                        <td><span class="count">231</span></td>
                                                        <td>
                                                            <span class="badge badge-complete">Complete</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="serial">2.</td>
                                                        <td class="avatar">
                                                            <div class="round-img">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="assets/images/avatar/2.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td> <span class="name">Gregory Dixon</span> </td>
                                                        <td> <span class="product">iPad</span> </td>
                                                        <td><span class="count">250</span></td>
                                                        <td>
                                                            <span class="badge badge-complete">Complete</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="serial">3.</td>
                                                        <td class="avatar">
                                                            <div class="round-img">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="assets/images/avatar/3.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td> <span class="name">Catherine Dixon</span> </td>
                                                        <td> <span class="product">SSD</span> </td>
                                                        <td><span class="count">250</span></td>
                                                        <td>
                                                            <span class="badge badge-complete">Complete</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="serial">4.</td>
                                                        <td class="avatar">
                                                            <div class="round-img">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="assets/images/avatar/4.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td> <span class="name">Mary Silva</span> </td>
                                                        <td> <span class="product">Magic Mouse</span> </td>
                                                        <td><span class="count">250</span></td>
                                                        <td>
                                                            <span class="badge badge-pending">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <tr class=" pb-0">
                                                        <td class="serial">5.</td>
                                                        <td class="avatar pb-0">
                                                            <div class="round-img">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="assets/images/avatar/6.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td> <span class="name">Johnny Stephens</span> </td>
                                                        <td> <span class="product">Monitor</span> </td>
                                                        <td><span class="count">250</span></td>
                                                        <td>
                                                            <span class="badge badge-complete">Complete</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-12">
                                        <div class="chart-container ov-h">
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
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
</body>
</html>