<?php
session_start();
include '../../Config/appConfig.php';
require_once(APP_CONFIG_ROUTE . 'Conexion.php');

$DIR_PUBLIC = APP_PUBLIC_DIR;

try {
    $conexion = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conexion, 'imake');

    $nombreUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['nombreUsuario']));
    $apellidoUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['apellidoUsuario']));
    $correoUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['correoUsuario']));
    $contraseñaUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['contraseñaUsuario']));

    $nuevo_usuario = mysqli_query($conexion, "SELECT * FROM Usuario WHERE correoUsuario='$correoUsuario'");
    if (mysqli_num_rows($nuevo_usuario) > 0) {
        echo  "<script> alert ('!El correo ya se encuentra registrado!');
        location.href = '${DIR_PUBLIC}Views/index';
        </script>";
    }else {
        $reg = mysqli_query($conexion, "INSERT INTO usuario VALUES ('','$nombreUsuario','$apellidoUsuario','$contraseñaUsuario','$correoUsuario',NULL,NULL,NULL,NULL,NULL,NULL,2)");
        echo  "<script> alert ('!Registro Exitoso!');
        location.href = '${DIR_PUBLIC}Views/index';
        </script>";
    }
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

