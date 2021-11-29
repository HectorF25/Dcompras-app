<?php
session_start();
require_once '../../Config/appConfig.php';
require_once ('../model/chatModelAdmin.php');
$chat = new Chat();
$chat->updateUserOnline($_SESSION['idUsuario'], 0);
session_destroy();
echo "<script> window.addEventListener('load', init, false);
        function init () {
            Swal.fire({
                title: '¡Cierre de sesion exitoso!',
                text: 'Su sesion ha finalizado correctamente',
                icon: 'success',
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
exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    * {
      font-family: "Poppins";
    }
  </style>
  <title>Logout</title>
</head>

<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
</body>

</html>