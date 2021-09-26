
<?php
include_once "../model/productosModel.php";
include '../../Config/appConfig.php';
require_once(APP_CONFIG_ROUTE.'Conexion.php');
$DIR_PUBLIC = APP_PUBLIC_DIR;
if (!isset($_POST["idProducto"])) {
    exit("No hay idProducto");
}
cantidadDeProductos($_POST["idProducto"]);
obtenerIdsDeProductosEnCarritoUnico($_POST["idProducto"]);
agregarProductoAlCarrito($_POST["idProducto"],1,$_POST["precioProductoNegocio"]);
header("Location: ${DIR_PUBLIC}Views/carritoCompras/catalogoCompras.php");


