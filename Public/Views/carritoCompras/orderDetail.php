
<?php
include "./modules/headerCliente.php";

include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosEnCarrito();


require '../../../vendor/autoload.php';
require_once '../../../Config/payment-methods.php';

MercadoPago\SDK::setAccessToken($access_token);

if (isset($_GET['collection_id'])) {
    $collection_id = $_GET['collection_id'];
    $preference_id = $_GET['preference_id'];
    $payment_type = $_GET['payment_type'];
    $approved_pay = $_GET['collection_status'];  
?>
<div class="columns">
        <div class="column"><br>
            <h2 class="is-size-2">Compra realizada</h2><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <h3>Tipo de Pago</h3>
                        </th>
                        <th>
                            <h3>Estado Pago</h3>
                        </th>
                        <th>
                            <h3>Terminar</h3>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h5 class="subtitle"><?php echo $payment_type == "credit_card" ?  'Tarjeta de Credito' :  'Efectivo o PSE'; ?></h5>
                        </td>
                        <td>
                            <h5 class="subtitle"><?php echo $approved_pay == "approved" ?  'Pago Aprobado' :  'Pago pendiente'; ?></h5>
                        </td>
                        <td>
                        <a href="terminar_compra.php" class="btn btn-gradient-success cart-btn-transform m-3" data-abc="true">Terminar compra</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php } else { ?>
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

<?php } ?>
<?php include_once "pie.php" ?>