
<?php
include "./modules/headerCliente.php";

include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosEnCarrito();


require '../../../vendor/autoload.php';
require_once '../../../Config/payment-methods.php';

MercadoPago\SDK::setAccessToken($access_token);


if (count($productos) <= 0) {
?>

    <div class="container-fluid mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Carrito</h5>
                </div>
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>Tu carrito esta vacio!</strong></h3>
                        <h4>Agrega algo para hacerme feliz :)</h4> <a href="catalogoCompras" class="btn btn-gradient-success cart-btn-transform m-3" data-abc="true">Continuar comprando</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } else { ?>
    <div class="columns">
        <div class="column"><br>
            <h2 class="is-size-2">Compra realizada</h2><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <h3>Nombre</h3>
                        </th>
                        <th>
                            <h3>Descripción</h3>
                        </th>
                        <th>
                            <h3>Precio</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precioProducto;
                    ?>
                        <tr>
                            <td>
                                <h5 class="subtitle"><?php echo $producto->nombreProducto ?></h5>
                            </td>
                            <td>
                                <h5 class="subtitle"><?php echo $producto->especificacionProducto ?></h5>
                            </td>
                            <td>
                                <h5 class="subtitle">$<?php echo number_format($producto->precioProducto, 2) ?></h5>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right">
                            <h4><strong>Total</strong></h4>
                        </td>
                        <td colspan="2" class="is-size-4">
                            <h4>
                                $<?php echo number_format($total, 2) ?>
                            </h4>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <div class="jumbotron" onload="calcRoute();">
                <div class="container-fluid">
                    <h1>Tu orden está en camino</h1>
                    <p>En unos momentos llegará su pedido</p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                            <div class="col-xs-4">
                                <input type="text" id="from" placeholder="Origen" value="Carrera 2 #1a-4, Bogota, Colombia" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                            <div class="col-xs-4">
                                <input type="text" id="to" value="Restrepo, Bogota, Colombia" placeholder="Destino" class="form-control">
                            </div>

                        </div>

                    </form>

                    <div class="col-xs-offset-2 col-xs-10">
                        <button class="btn btn-info btn-lg "><i class="fas fa-map-signs"></i></button>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="googleMap">

                    </div>
                    <div id="output">

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<?php include_once "pie.php" ?>