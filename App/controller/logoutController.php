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

<?php 
  session_start();
  include '../../Config/appConfig.php';
  $DIR_PUBLIC = APP_PUBLIC_DIR;
  session_destroy();
  echo  "<script> alert ('!Cierre de Sesion exitoso!');            </script>";

            echo "<script> location.href = '${DIR_PUBLIC}Views/index'; </script>";
  exit();

?>
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

		</body>

</html>