<?php
require_once '../../../../Config/Conexion.php';
require_once '../../../../Config/appConfig.php';

$controlador = 'administrador';

if(!isset($_REQUEST['c']))
{
    require_once APP_CONTROLLER_ROUTE.$controlador.'.Controller.php';
    $controlador = ucwords($controlador) . 'Controller';
    $controlador = new $controlador;
    $controlador->Index();    
}
else
{
    $controlador = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    require_once APP_CONTROLLER_ROUTE.$controlador.'.Controller.php';
    $controlador = ucwords($controlador) . 'Controller';
    $controlador = new $controlador;

    call_user_func( array( $controlador, $accion ) );
}