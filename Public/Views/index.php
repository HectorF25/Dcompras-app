<?php
include '../../Config/appConfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D compras | Home Page</title>
    <link rel="apple-touch-icon" href="../../App/assets/img/Recurso 1LogoD.png">
    <link rel="shortcut icon" href="../../App/assets/img/Recurso 1LogoD.png">
    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= APP_DIR; ?>assets/css/styleIndex.css">

</head>

<body>
    <?php
    require_once 'modules/headerIndex.php';
    ?>
    <section class="home" id="home">

        <div class="content" data-aos="fade-right">
            <img src="../../App/assets/img/Recurso 3LogoCompleto.png" alt="" srcset="">
            <p>Ahora puedes hacer un pedido a la tienda mas cercana sin necesidad de salir de casa, suena bien, no? Porque no lo pruebas ahora mismo!</p>
            <a href="#"><button class="btn">¡Estoy hambriento!</button></a>
        </div>

        <div class="image" data-aos="fade-up">
            <img src="<?= APP_DIR; ?>assets/css/images/Recurso 2shop-index-img.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image" data-aos="fade-right"></div>

        <div class="content" data-aos="fade-left">
            <h3>Acerca de Nosotros</h3>
            <p>¿Cansado de largos periodos de espera tras ordenar comida online?</p>
            <p>No te preocupes, ya hemos llegado y la tenemos clara! Entendemos a nuestro público y sabemos que lo que mereces ahora mismo es un cupón de descuento!</p>
            <a href="#"><button class="btn">¡Click aquí!</button></a>
        </div>

    </section>

    <!-- about section ends -->

    <section class="menu" id="menu">

        <h1 class="heading"> Nuestro grandioso <span>menú</span> </h1>

        <ul class="list" data-aos="fade-down">
            <li class="btn" data-src="<?= APP_DIR; ?>assets/css/images/menu1.jpg">Desayuno</li>
            <li class="btn active" data-src="<?= APP_DIR; ?>assets/css/images/menu2.jpg">Almuerzo</li>
            <li class="btn" data-src="<?= APP_DIR; ?>assets/css/images/menu3.jpg">Cena</li>
            <li class="btn" data-src="<?= APP_DIR; ?>assets/css/images/menu4.jpg">Antojos</li>
        </ul>

        <div class="row" data-aos="fade-right">

            <div class="image" data-aos="fade-left">
                <img src="<?= APP_DIR; ?>assets/css/images/menu2.jpg" id="menu-img" alt="">
            </div>

            <div class="content">
                <div class="info">
                    <h3> <span>01.</span> Entrega RAPIDISIMA </h3>
                    <p>Te antojaste pero lo quieres YA?, No te preocupes nuestros productos son entregados en menos de 15 minutos!</p>
                </div>
                <div class="info">
                    <h3> <span>02.</span> Calidad del producto </h3>
                    <p>Tranquilo! Tu producto esta a salvo! Los productos son empacados y transportados con todas las medidad de bioseguridad y el mayor cuidado posible.</p>
                </div>
                <div class="info">
                    <h3> <span>03.</span> Soporte 24/7 </h3>
                    <p>¡Porque te mereces lo mejor! Nuestro equipo estara atendiendo tus dudas y resolviendo tus problemas toda la semana las 24 horas del día</p>
                </div>
            </div>

        </div>

    </section>

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> Lo <span>mas</span> popular </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-right">
                <img src="<?= APP_DIR; ?>assets/css/images/product-1.jpg" alt="">
                <h3>Un gran almuerzo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$35.000</div>
                <a href="#"><button class="btn">Agregar al carrito</button></a>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="<?= APP_DIR; ?>assets/css/images/product-2.jpg" alt="">
                <h3>Jugos naturales</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$22.000</div>
                <a href="#"><button class="btn">Agregar al carrito</button></a>
            </div>

            <div class="box" data-aos="fade-right">
                <img src="<?= APP_DIR; ?>assets/css/images/product-3.jpg" alt="">
                <h3>Burritos! 🤤</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$15.000</div>
                <a href="#"><button class="btn">Agregar al carrito</button></a>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="<?= APP_DIR; ?>assets/css/images/product-4.jpg" alt="">
                <h3>Espagueti</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.0000</div>
                <a href="#"><button class="btn">Agregar al carrito</button></a>
            </div>

        </div>

    </section>

    <!-- popular section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading"> Nuestra galeria <span>de comida</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-up">
                <img src="<?= APP_DIR; ?>assets/css/images/img1.jpg" alt="">
                <h3>Delicioso!</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="<?= APP_DIR; ?>assets/css/images/img2.jpg" alt="">
                <h3>Increible!</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="<?= APP_DIR; ?>assets/css/images/img3.jpg" alt="">
                <h3>De otro planeta!</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="<?= APP_DIR; ?>assets/css/images/img4.jpg" alt="">
                <h3>Que delicia!</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="<?= APP_DIR; ?>assets/css/images/img5.jpg" alt="">
                <h3>Super increible!</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="<?= APP_DIR; ?>assets/css/images/img6.jpg" alt="">
                <h3>AWESOME</h3>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">

        <h1 class="heading"> ¿Tienes alguna duda? <span>CONTACTANOS!</span> </h1>

        <div class="row">

            <form action="<?= APP_DIR; ?>include/mailerContact.php" method="POST" data-aos="fade-right">
                <input type="text" id="nameForm" name="nameForm" placeholder="Nombre completo" class="box">
                <input type="email" id="emailForm" name="emailForm" placeholder="Email" class="box">
                <input type="number" id="phoneForm" name="phoneForm" placeholder="Numero de telefono" class="box">
                <textarea id="textForm" name="textForm" cols="30" rows="10" class="box address" placeholder="Sugerencias"></textarea>
                <input type="submit" value="Enviar!" class="btn">
            </form>

            <div class="image" data-aos="fade-left">
                <img src="<?= APP_DIR; ?>assets/css/images/form-img.jpg" alt="">
            </div>

        </div>

    </section>

    <!-- order section ends -->
    <?php
    require_once 'modules/footerIndex.php';
    ?>

    <!-- aos js cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?= APP_DIR; ?>assets/js/scriptIndex.js"></script>
    <script src="oscuro.js"></script>


    <!-- initializing aos  -->

    <script>
        AOS.init({
            delay: 400,
            duration: 1000
        })
    </script>
    <script type="text/javascript">
        function cambiarModo() {
            var cuerpoweb = document.body;
            cuerpoweb.classList.toggle("oscuro");
        }
    </script>

</body>

</html>