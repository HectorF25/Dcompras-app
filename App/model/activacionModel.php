<?php

include '../../Config/appConfig.php';

$server =  DB_HOST;
$username = DB_USER; 
$password = DB_PASS; 
$database = DB_NAME; 


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $e) {
	
	die('Connection failed: '.$e->getMessage());
}

$link = mysqli_connect($server, $username, $password, $database) or die("Error " . mysqli_error($link));
$DIR_PUBLIC = APP_PUBLIC_DIR;


if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verificar datos
    $email = mysqli_escape_string($link, $_GET['email']); // Asignar el correo electrónico a una variable
    $hash = mysqli_escape_string($link, $_GET['hash']); // Asignar el hash a una variable
                 
    $search = mysqli_query($link, "SELECT correoUsuario, hashUsuario, estadoUsuario, idTipoDoc FROM usuario WHERE correoUsuario='".$email."' AND hashUsuario='".$hash."' AND estadoUsuario IS NULL") or die(mysqli_error($link)); 
    $match  = mysqli_num_rows($search);
                 
    if($match > 0){
        mysqli_query($link, "UPDATE usuario SET estadoUsuario='1', idTipoDoc='1' WHERE correoUsuario='".$email."' AND hashUsuario='".$hash."' AND estadoUsuario IS NULL") or die(mysqli_error($link));
        $mensajeExito = "Tu cuenta ha sido activada, ya puedes iniciar sesión."; 
        echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Registro exitoso!',
                text: '$mensajeExito',
                icon: 'success',
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
            if (willDelete) {
                location.href = '".APP_VIEWS."index.php';
            } else {
                location.href = '".APP_VIEWS."index.php';
            }
          });
        }
        
          </script>"; 

        }else{
        $mensajeError = "La URL es invalida o ya has activado tu cuenta.";
        echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Ha ocurrido un error!',
                text: '$mensajeError',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
            if (willDelete) {
                location.href = '".APP_VIEWS."index.php';
            } else {
                location.href = '".APP_VIEWS."index.php';
            }
          });
        }
        
          </script>"; 

    }
}else{
    // Intento nó válido (ya sea porque se ingresa sin tener el hash o porque la cuenta ya ha sido registrada)
    $mensajeError2 = "Intento inválido, por favor revisa el mensaje que enviamos correo electrónico.";
    echo "<script> window.addEventListener('load', init, false);
    function init () {
        Swal.fire({
            title: '¡Ha ocurrido un error!',
            text: '$mensajeError2',
            icon: 'error',
            buttons: true,
            dangerMode: true,
          }).then((willDelete) => {
        if (willDelete) {
            location.href = '".APP_VIEWS."index.php';
        } else {
            location.href = '".APP_VIEWS."index.php';
        }
      });
    }
    
      </script>"; 
}
?>
<html>
<head>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

*{
  font-family: "Poppins";
}
</style>

</head>
<body>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

		</body>

</html>