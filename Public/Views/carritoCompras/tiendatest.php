<?php include_once "encabezadotest.php" ?>
<?php
include_once "../../../App/model/productosModel.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Tienda/ <?php echo $estado ?></h2>
    </div>
</div>
<?php foreach ($productos as $producto) { ?>

    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $producto->nombreProducto ?>
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php echo $producto->especificacionProducto?>
                    </div>
                    <h1 class="is-size-3">$<?php echo number_format($producto->precioProducto, 0) ?></h1>
                    <?php ?>
                        <form action="../../../App/controller/agregar_al_carrito.php" method="post">
                            <input type="hidden" name="idProducto" value="<?php echo $producto->idProducto ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                        </form>
                    <?php ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php include_once "pie.php" ?>