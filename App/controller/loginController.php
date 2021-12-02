<?php
session_start();
require_once '../../Config/appConfig.php';
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
mysqli_select_db($conexion, DB_NAME);
mysqli_set_charset($conexion, "utf8");

if (isset($_POST['correo'])) {
  $correoUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['correo']));
  $contraseñaUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['contraseña']));


  $log = mysqli_query($conexion, "SELECT * FROM usuario INNER JOIN perfilusuario pf on usuario.idPerfilUsuario = pf.idPerfilUsuario
    WHERE correoUsuario='$correoUsuario' AND contraseñaUsuario='$contraseñaUsuario'");

  if (mysqli_num_rows($log) > 0) {
    $row = mysqli_fetch_array($log);
    include('../model/chatModel.php');

    $_SESSION["nombreUsuario"] = $row['nombreUsuario'];
    $_SESSION["idPerfilUsuario"] = $row['idPerfilUsuario'];
    $_SESSION["estadoUsuario"] = $row['estadoUsuario'];
    $_SESSION["idUsuario"] = $row['idUsuario'];
    $_SESSION["imgUsuario"] = $row['imgUsuario'];
    $_SESSION["apellidoUsuario"] = $row['apellidoUsuario'];
    $_SESSION["nombrePerfilUsuario"] = $row['nombrePerfilUsuario'];
    $chat = new Chat();
    $chat->updateUserOnline($row['idUsuario'], 1);
    $lastInsertId = $chat->insertUserLoginDetails($row['idUsuario']);
    $_SESSION['login_details_id'] = $lastInsertId;

    $nombre = $_SESSION["nombreUsuario"];
    if ($_SESSION["estadoUsuario"] == null) {
      $_SESSION['correo'] = $correoUsuario;
      $Inactivo = "El usuario no se encuentra activo, por favor verifique su correo y active su cuenta $correoUsuario";
      echo "<script> window.addEventListener('load', init, false);
            function init () {
                Swal.fire({
                    title: '¡Ha ocurrido un error!',
                    text: '$Inactivo',
                    icon: 'error',
                    buttons: true,
                    dangerMode: true,
                  }).then((willDelete) => {
                if (willDelete) {
                    location.href = '".APP_VIEWS_ROTE."index';
                } else {
                    location.href = '".APP_VIEWS_ROTE."index';
                }
              });
            }
            
              </script>";
    } elseif ($_SESSION["idPerfilUsuario"] == 1) {
      //$_SESSION['estadoUsuario'] = $estado;
      $_SESSION['correo'] = $correoUsuario;
      $_SESSION["idUsuario"];
      $_SESSION["imgUsuario"];
      $_SESSION["apellidoUsuario"];
      $_SESSION["nombrePerfilUsuario"];
      $BienvenidoAdmin = "Bienvenido al sistema, $nombre";

      echo "<script> window.addEventListener('load', init, false);
            function init () {
                Swal.fire({
                    title: '¡Incio de sesión exitoso!',
                    text: '$BienvenidoAdmin',
                    icon: 'success',
                    buttons: true,
                    dangerMode: true,
                  }).then((willDelete) => {
                if (willDelete) {
                    location.href = '".APP_VIEWS_ROTE."perfiladmin/PerfilAdmin';               
                 } else {
                    location.href = '".APP_VIEWS_ROTE."perfiladmin/PerfilAdmin';               
                }
              });
            }
            
              </script>";
    } elseif ($_SESSION["idPerfilUsuario"] == 2) {
      $_SESSION['correo'] = $correoUsuario;
      $_SESSION["idUsuario"];
      $_SESSION["imgUsuario"];
      $_SESSION["apellidoUsuario"];
      $_SESSION["nombrePerfilUsuario"];
      $BienvenidoCliente = "Bienvenido a Dcompras, $nombre";
      echo "<script> window.addEventListener('load', init, false);
            function init () {
                Swal.fire({
                    title: '¡Incio de sesión exitoso!',
                    text: '$BienvenidoCliente',
                    icon: 'success',
                    buttons: true,
                    dangerMode: true,
                  }).then((willDelete) => {
                if (willDelete) {
                    location.href = '".APP_VIEWS_ROTE."carritoCompras/catalogoCompras.php';
                } else {
                    location.href = '".APP_VIEWS_ROTE."carritoCompras/catalogoCompras.php';                
                }
              });
            }
            
              </script>";
    } elseif ($_SESSION["idPerfilUsuario"] == 3) {
      $_SESSION['correo'] = $correoUsuario;
      $_SESSION["idUsuario"];
      $_SESSION["imgUsuario"];
      $_SESSION["apellidoUsuario"];
      $_SESSION["nombrePerfilUsuario"];
      $BienvenidoVendedor = "Bienvenido a Dcompras, $nombre";
      echo "<script> window.addEventListener('load', init, false);
            function init () {
                Swal.fire({
                    title: '¡Incio de sesión exitoso!',
                    text: '$BienvenidoVendedor',
                    icon: 'success',
                    buttons: true,
                    dangerMode: true,
                  }).then((willDelete) => {
                if (willDelete) {
                    location.href = '".APP_VIEWS_ROTE."perfilVendedor/PerfilVendedor.php';                
                } else {
                        location.href = '".APP_VIEWS_ROTE."perfilVendedor/PerfilVendedor.php';              
                    }
              });
            }
            
              </script>";
    } elseif ($_SESSION["idPerfilUsuario"] == 4) {
      $_SESSION['correo'] = $correoUsuario;
      $_SESSION["idUsuario"];
      $_SESSION["imgUsuario"];
      $BienvenidoRepartidor = "Bienvenido a Dcompras, $nombre";
      echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Incio de sesión exitoso!',
                text: '$BienvenidoRepartidor',
                icon: 'success',
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
            if (willDelete) {
                location.href = '".APP_VIEWS_ROTE."perfilRepartidor/perfilRepartidor.php';
             } else {
                location.href = '".APP_VIEWS_ROTE."perfilRepartidor/perfilRepartidor.php';
                }
          });
        }
        
          </script>";
    } else {
      $datosIncorrectos = "El correo o la contraseña son incorrectos!";
      echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Ha ocurrido un error!',
                text: '$datosIncorrectos',
                icon: 'error',
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
            if (willDelete) {
                location.href = '".APP_VIEWS_ROTE."index.php';
            } else {
                location.href = '".APP_VIEWS_ROTE."index.php';
            }
          });
        }
        
          </script>";
    }
  }
}
?>
<html>

<head>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    * {
      font-family: "Poppins";
    }
  </style>

</head>

<body>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>

</html>