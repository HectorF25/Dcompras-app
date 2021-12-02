<?php
include_once "../../../../App/model/productosModel.php";
$productos = obtenerProductosCatalogo();
$registros = contarRegistros();
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-store menu-icon"></i>
                </span> Catalogo
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Informacion de categorias<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Categorías registradas <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $registros ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Categorías actuales <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $registros; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Registros</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <a class="btn btn-gradient-primary mr-2 float-left" href="?c=crearProductos&a=crudCrearP"><i class="mdi mdi-store menu-icon"> Nuevo Producto</i></a>
                                        <a class="btn btn-gradient-danger mr-2 float-right" href="ReportePDF_Negocios.php"><i class="mdi mdi-chart-areaspline menu-icon"> Generar reporte</i></a>
                                        <br><br><br><br>

                                        <div class="row">

                                            <?php foreach ($productos as $producto) { ?>

                                                <div class="col-lg-3 mb-3" style="width: 29.499999995%; flex: 0 0 29.499%;max-width: 29.499%;">

                                                    <div class="store card border-0 rounded-0" style="width: 300px; max-width: 300px;">
                                                        <div class="position-relative store-image">
                                                            <a href="./detallesProductos">
                                                                <center><img src="<?= APP_DIR_IMG_PRODUCTS; ?>assets/img/productos/<?php echo $producto->imgProducto ?>.jpg" alt="store 1" class="card-img-top rounded-0 prod" style="height: 150px; width: 140px; max-height: 150px; max-width: 140px;"></center>
                                                            </a>
                                                            <div class="image-content position-absolute d-flex align-items-center">
                                                                <div class="content-right ml-auto d-flex">
                                                                    <a href="<?= APP_DIR_IMG_PRODUCTS; ?>assets/img/productos/<?php echo $producto->imgProducto ?>.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body pb-4">
                                                            <center><a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2" style="text-align: center;"><span class="letter-spacing-25" "><?php echo $producto->nombreProducto . " " ?></span><span class=" badge badge-success mr-1 d-inline-block">4.8</span></a></center>
                                                            <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                                <center>
                                                                    <li class="list-inline-item separate"></li>
                                                                    <li class="list-inline-item">
                                                                        <center><span class="mr-1" style="text-align: center;">Desde</span><span class="text-danger font-weight-bold" style="text-align: center;">$<?php echo number_format($producto->precioProducto, 0) ?></span></center>
                                                                    </li>
                                                                    <li class="list-inline-item separate"></li>
                                                                    <li class="list-inline-item"><span class="text-green" style="text-align: center; color: green;">Abierto ahora!</span></li>
                                                                </center>
                                                            </ul>

                                                            <div class="media">
                                                                <a href="#" class="d-inline-block mr-3"><img src="<?= APP_DIR_IMG_PRODUCTS; ?>assets/css/images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                                </a>
                                                                <div class="media-body lh-14 font-size-sm">
                                                                    <?php echo $producto->especificacionProducto ?>
                                                                    <a href="#" class="text-secondary text-decoration-none address"><?php echo $producto->direccionNegocio ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                                            <div class="border-top pt-3">
                                                                <input type="hidden" name="idProducto" value="<?php echo $producto->idProducto ?>">
                                                                <center><button class="btn btn-gradient-primary agregar-carrito">
                                                                        <i class="fa fa-cart-plus"></i>Inactivar
                                                                    </button>
                                                                    </a></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteCategoria(idCategoria) {
            Swal.fire({
                title: 'Está seguro de eliminar el registro seleccionado?',
                text: "Esta acción no se puede revertir!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado!',
                        'La categria se ha eliminado correctamente.',
                        'success'
                    )
                    location.href = '?c=categoria&a=Eliminar&idCategoria=' + idCategoria + '';
                }
            });
        }
    </script>