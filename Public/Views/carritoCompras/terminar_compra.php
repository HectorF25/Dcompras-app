
<?php
# Es responsabilidad del programador hacer algo con los productos
include_once "../../../App/model/productosModel.php";
$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
var_dump($productos);
