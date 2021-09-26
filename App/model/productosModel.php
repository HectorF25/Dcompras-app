<?php

function obtenerProductosEnCarrito()
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT * FROM pedido_producto 
    INNER JOIN producto  as t2 ON t2.idProducto = pedido_producto.idProducto 
    WHERE pedido_producto.idSesion = ?");
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
function obtenerProductosCatalogo()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM producto_negocio AS t1
    INNER JOIN Producto AS t2 ON t1.idProducto=t2.idProducto
    INNER JOIN Negocio AS t3 ON t1.idNegocio=t3.idNegocio");
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
    $sentencia = $bd->prepare("SELECT COUNT(*) FROM pedido_producto WHERE idSesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchColumn();
}

function obtenerIdsDeProductosEnCarritoUnico($id)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT cantidadPedido FROM pedido_producto WHERE idSesion = ? AND idProducto = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion, $id]);
    return $sentencia->fetchColumn();
}


function cantidadDeProductos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT SUM(cantidadPedido) FROM pedido_producto WHERE idSesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchColumn();
    
}


function agregarProductoAlCarrito($idProducto,$cantidadPedido,$precioPedido)
{
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    if(obtenerIdsDeProductosEnCarritoUnico($idProducto)>=1){
        $sentencia = $bd->prepare("UPDATE pedido_producto SET cantidadPedido = cantidadPedido + 1 WHERE idSesion = ? AND idProducto = ?");
        return $sentencia->execute([$idSesion,$idProducto]);
        }
    $sentencia = $bd->prepare("INSERT INTO pedido_producto(idProducto, cantidadPedido, precioPedido, idSesion) VALUES (?, ?, ?, ?)");
    return $sentencia->execute([$idProducto,$cantidadPedido,$precioPedido,$idSesion]);
}

function quitarUnProducto($idProducto){
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    if(obtenerIdsDeProductosEnCarritoUnico($idProducto)<2){
        quitarProductoDelCarrito($idProducto);
    }
    $sentencia = $bd->prepare("UPDATE pedido_producto SET cantidadPedido = cantidadPedido - 1 WHERE idSesion = ? AND idProducto = ?");
    return $sentencia->execute([$idSesion,$idProducto]);
        
}

function agregarUnProducto($idProducto){
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("UPDATE pedido_producto SET cantidadPedido = cantidadPedido + 1 WHERE idSesion = ? AND idProducto = ?");
    return $sentencia->execute([$idSesion,$idProducto]);
        
}

function contarRegistros()
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT  COUNT(*) total FROM producto_negocio AS t1
    INNER JOIN Producto AS t2 ON t1.idProducto=t2.idProducto
    INNER JOIN Negocio AS t3 ON t1.idNegocio=t3.idNegocio");
    $sentencia->execute();
    return $sentencia->fetchColumn();
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
