
<?php
include_once "../model/productosModel.php";
include '../../Config/appConfig.php';
require_once(APP_CONFIG_ROUTE.'Conexion.php');
$DIR_PUBLIC = APP_PUBLIC_DIR;
if (!isset($_POST["idProducto"])) {
    exit("No hay idProducto");
}
agregarProductoAlCarrito($_POST["idProducto"],$_POST["precioProductoNegocio"],$_POST["cantidadProducto"]);
header("Location: ${DIR_PUBLIC}Views/carritoCompras/tienda.php");


