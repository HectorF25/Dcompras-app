<?php
include '../../../Config/Conexion.php';
require_once '../../../Config/Conexion.php';

if(!isset($correoUsuario)){
    echo'<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente");
    window.location.href="../index";
    </script>';
}else{
    session_start();
    $correoUsuario = $_SESSION['correo'];
    $estado = $_SESSION["estadoUsuario"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="./assets/css/sweetalert2.min.css">

    <title>Carrito Compras en JavaScript y LocalStorage</title>
</head>

<body>

   
<header>

    <a href="#" class="logo"><img src="./assets/img/Recurso 3LogoCompleto.png" alt=""></a>

    <div id="menu-bar" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">Comida rapida</a></li>
            <li><a href="#menu">Saludable</a></li>
            <li><a href="#popular">Popular</a></li>
            <li><a href="#gallery">Galeria</a></li>
           <li>                        <a href="ver_carrito.php" class="button is-success">
                            <strong><?php
                                                include_once "../../../App/model/productosModel.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fas fa-shopping-cart fa-lg cart_anchor"></i></strong>
                    </a>
                    </li>     
        </ul>
    </nav>

</header>
<script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">