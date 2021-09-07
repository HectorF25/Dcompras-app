<?php include_once "encabezado.php" ?>
<?php
include_once "../../../App/model/productosModel.php";
$productos = obtenerProductos();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="./assets/css/sweetalert2.min.css">

    <title>Carrito Compras</title>
</head>

<body>

   


    <main>


        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">

            <h1 class="display-4 mt-4">¡Estas D'compras!</h1><br>
            <h2>Selecciona uno de nuestros productos y obten %50 OFF</p>
        </div>

        <div class="container" id="lista-productos">


        <?php foreach ($productos as $producto) { ?>

            <div class="card-deck mb-3 text-center">

            <div class="card mb-4 shadow-sm">

                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">
                        <?php echo $producto->nombreProducto ?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <img src="./assets/img/productos/<?php echo $producto->imgProducto ?>.jpg" class="card-img-top res">
                        <h1 class="card-title pricing-card-title precio">$ <span class=""><?php echo number_format($producto->precioProducto, 0) ?></span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li><h4><?php echo $producto->especificacionProducto ?></h4></li>
                         
                            <li><h4><?php echo $producto->nombreProducto ?></h4></li>
                        </ul>
                        <?php ?>
                        <form action="../../../App/controller/agregar_al_carrito.php" method="post">
                            <input type="hidden" name="idProducto" value="<?php echo $producto->idProducto ?>">

                            <a href="javascript:void(0);">
                                <button class="btn btn-block agregar-carrito">
                                <i class="fa fa-cart-plus"></i>Agregar al carrito
                            </button></a>
                        </form>
                    <?php ?>
                    </div>
                

                </div>
        </div>






   

        <?php } ?>

<?php include_once "pie.php" ?>
    </main>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='text/javascript' src="js/carrito.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.agregar-carrito').on('click',function(){
        //Scroll to top if cart icon is hidden on top
        $('html, body').animate({
            'scrollTop' : $(".cart_anchor").position().top
        });
        //Select item image and pass to the function
        var itemImg = $(this).parent().find('img').eq(0);
        flyToElement($(itemImg), $('.cart_anchor'));
    });
    });
    </script>

</body>

</html>