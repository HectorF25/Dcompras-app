
<?php include_once "encabezado.php" ?>
<?php
$productName = "Producto Demostración";
$currency = "USD";
$productPrice = 25;
$productId = 123456;
$orderNumber = 546;
include('config.php');

include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosEnCarrito();

if (count($productos) <= 0) {
?>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="tienda.php" class="button is-warning">Ver tienda</a>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column"><br>
            <h2 class="is-size-2">Mi carrito de compras</h2><br>
            <table class="table">
                <thead>
                    <tr>
                        <th><h3>Nombre</h3></th>
                        <th><h3>Descripción</h3></th>
                        <th><h3>Precio</h3></th>
                        <th><h3>Quitar</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precioProducto;
                    ?>
                        <tr>
                            
                            <td><h5 class="subtitle"><?php echo $producto->nombreProducto ?></h5></td>
                            <td><h5 class="subtitle"><?php echo $producto->especificacionProducto ?></h5></td>
                            <td><h5 class="subtitle">$<?php echo number_format($producto->precioProducto, 2) ?></h5></td>
                            <td>
                                <form action="../../../App/controller/eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="idProducto" value="<?php echo $producto->idProducto ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><h4><strong>Total</strong></h4></td>
                        <td colspan="2" class="is-size-4"><h4>
                            
                            $<?php echo number_format($total, 2) ?>

                    </h4></td>
                    </tr>
                </tfoot>
            </table>

            <?php include 'paypalCheckout.php'; ?><br><br>

            <a href="./terminar_compra.php" class="button is-success is-large"><h2>✔️ Terminar compra</h2></a>

        </div>
    </div>
<?php } ?>
<?php include_once "pie.php" ?>