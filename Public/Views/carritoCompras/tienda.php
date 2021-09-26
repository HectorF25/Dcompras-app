<?php include_once "./modules/headerTienda.php" ?>
<?php
include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosCatalogo();
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

   


<div class="container">

    <div class="d-flex justify-content-center align-items-center mt-5"> <button class="btn btn-gradient-danger">NUESTRAS CATEGORÍAS</button> </div><br>
    <div class="row mt-2 g-4">
        <div class="col-md-3">
            <div class="card p-1">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Mobile</span> <span>Phones</span> </div>
                    <div> <img src="https://i.imgur.com/b9zkoz0.jpg" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Head</span> <span>Phones</span> </div>
                    <div> <img src="https://i.imgur.com/SHWASPG.png" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Smart</span> <span>Watches</span> </div>
                    <div> <img src=" https://i.imgur.com/Ya0OXCv.png" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Air</span> <span>Purifiers</span> </div>
                    <div> <img src="https://i.imgur.com/2gvGwbh.png" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
<br> <br> <br> <br>        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Washing</span> <span>Machines</span> </div>
                    <div> <img src="https://i.imgur.com/e9CyhXR.png" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Smart</span> <span>Televisions</span> </div>
                    <div> <img src=" https://i.imgur.com/Zq8VigZ.png" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Laptops</span> </div>
                    <div> <img src="https://i.imgur.com/6pK5oZl.jpg" height="100" width="100" /> </div>
                </div>
            </div>
        </div>
    </div>
</div>

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