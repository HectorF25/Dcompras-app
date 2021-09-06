<?php
require_once '../../../../Config/Conexion.php';
require_once '../../../../Config/appConfig.php';

$controlador = 'crearProductos';

if(!isset($_REQUEST['c']))
{
    require_once APP_CONTROLLER_ROUTE.$controlador.'.Controller.php';
    $controlador = ucwords($controlador) . 'Controller';
    $controlador = new $controlador;
    $controlador->modificarProductos();    
}
else
{
    $controlador = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'modificarProductos';
    
    require_once APP_CONTROLLER_ROUTE.$controlador.'.Controller.php';
    $controlador = ucwords($controlador) . 'Controller';
    $controlador = new $controlador;

    call_user_func( array( $controlador, $accion ) );
}