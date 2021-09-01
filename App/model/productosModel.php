<?php

function obtenerProductosEnCarrito()
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT * FROM producto AS t1 INNER JOIN producto_negocio AS t2 ON t1.idProducto=t2.idProducto  INNER JOIN pedido_producto  ON t1.idProducto = pedido_producto.idProducto WHERE pedido_producto.idSesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll();
}
function quitarProductoDelCarrito($idProducto)
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("DELETE FROM pedido_producto WHERE idSesion = ? AND idProducto = ?");
    return $sentencia->execute([$idSesion, $idProducto]);
}

function obtenerProductos()
{
    $bd = obtenerConexion();
 
    $sentencia = $bd->query("SELECT * FROM producto AS t1 INNER JOIN producto_negocio AS t2 ON t1.idProducto=t2.idProducto");
    return $sentencia->fetchAll();
}
function productoYaEstaEnCarrito($idProducto)
{
    $ids = obtenerIdsDeProductosEnCarrito();
    foreach ($ids as $idProducto) {
        if ($idProducto == $idProducto) return true;
    }
    return false;
}

function obtenerIdsDeProductosEnCarrito()
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT idProducto FROM pedido_producto WHERE idSesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}

function agregarProductoAlCarrito($idProducto)
{
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("INSERT INTO pedido_producto(idProducto, idSesion) VALUES (?, ?)");
    return $sentencia->execute([$idProducto, $idSesion]);
}

function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}


function obtenerConexion()
{
    $password = ("");
    $user = ("root");
    $dbName = ("imake");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
