<?php
include '../../../Config/appConfig.php';
include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosCatalogo();
$registros = contarRegistros();
session_start();
    $correoUsuario = $_SESSION['correo'];
    $estado = $_SESSION["estadoUsuario"];
if(!isset($correoUsuario)){
    echo'<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente");
    window.location.href="../index";
    </script>';
}else{
    
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



 

        <section class="mt-3">
            <div class="container filter">
                <div class="cap">
                    <h4>FILTER</h4>
                </div>
                <div class="sort">
                  <div class="text-dark font-weight-semibold font-size-md mb-4 mb-lg-0"><?php echo $registros ?> Resultados encontrados.</div>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <div class="container product-selection">
                <div class="select">
                  <button class="accordion font-weight-bold mb-3">CUSTOMIZE</button>
                  <div class="panel">
                    <button class="accordion font-weight-bold mb-3">CATAGORIES</button>
                    <div class="panel">
                      <p><a href="#">Lifestyle</a></p>
                      <p><a href="#">Jordan</a></p>
                      <p><a href="#">Running</a></p>
                      <p><a href="#">Basketball</a></p>
                    </div>
                    
                    <button class="accordion font-weight-bold mb-3">PRICE</button>
                    <input type="range" class="custom-range p-4" id="customRange" name="points1">


                    <button class="accordion font-weight-bold mb-3">BRAND</button>
                    <div class="panel">
                      <p><a href="#">Nike</a></p>
                      <p><a href="#">Nike Sportware</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">AIR MAX</button>
                    <div class="panel">
                      <p><a href="#">Air Max 1</a></p>
                      <p><a href="#">Air Max 90</a></p>
                      <p><a href="#">Air Max 95</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">SHOES</button>
                    <div class="panel">
                      <p><a href="#">Boots</a></p>
                      <p><a href="#">Cleats & Spikes</a></p>
                      <p><a href="#">Sandals, Slides & Flip</a></p>
                      <p><a href="#">Flops</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">SIZE</button>
                    <div class="panel size">
                      <p><a href="#">3</a></p>
                      <p><a href="#">3.5</a></p>
                      <p><a href="#">4</a></p>
                      <p><a href="#">4.5</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">TECHNOLOGY</button>
                    <div class="panel">
                      <p><a href="#">Nike Joyride</a></p>
                      <p><a href="#">FlightSpeed</a></p>
                      <p><a href="#">Flyknit</a></p>
                      <p><a href="#">Flywire</a></p>
                      <p><a href="#">Nike Air</a></p>
                      <p><a href="#">Nike Free</a></p>
                      <p><a href="#">Nike React</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">MATERIAL</button>
                    <div class="panel">
                      <p><a href="#">Canvas</a></p>
                      <p><a href="#">Leather</a></p>
                      <p><a href="#">Synthetics</a></p>
                    </div>

                    <button class="accordion font-weight-bold mb-3">BENEFITS</button>
                    <div class="panel">
                      <p><a href="#">Ultra Comfort</a></p>
                      <p><a href="#">Tuned Speed</a></p>
                      <p><a href="#">Natural Motion</a></p>
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