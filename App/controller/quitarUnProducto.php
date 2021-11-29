<?php
include_once "../model/productosModel.php";
include '../../Config/appConfig.php';
require_once(APP_CONFIG_ROUTE.'Conexion.php');
$DIR_PUBLIC = APP_PUBLIC_DIR;
if (!isset($_POST["idProducto"])) {
    exit("No hay idProducto");
}
    quitarUnProducto($_POST["idProducto"]);
    if (isset($_POST["redireccionar_carrito"])) {
        header("Location: ${DIR_PUBLIC}Views/carritoCompras/ver_carrito.php");
    } else {
        header("Location: ${DIR_PUBLIC}Views/carritoCompras/catalogoCompras.php");
    }

# Saber si redireccionamos a tienda o al carrito, esto es porque
# llamamos a este archivo desde la tienda y desde el carrito
?>