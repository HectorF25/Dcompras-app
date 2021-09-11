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
require_once(APP_CONFIG_ROUTE . 'Conexion.php');

$conexion = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexion, 'imake');

$DIR_PUBLIC = APP_PUBLIC_DIR;

if (isset($_POST['correo'])) {

    $correoUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['correo']));
    $contraseñaUsuario = htmlentities(mysqli_real_escape_string($conexion, $_POST['contraseña']));


    $log = mysqli_query($conexion, "SELECT * FROM Usuario WHERE correoUsuario='$correoUsuario' AND contraseñaUsuario='$contraseñaUsuario' ");
    if (mysqli_num_rows($log) > 0) {
        $row = mysqli_fetch_array($log);

        $_SESSION["nombreUsuario"] = $row['nombreUsuario'];
        $_SESSION["idPerfilUsuario"] = $row['idPerfilUsuario'];
        $_SESSION["estadoUsuario"] = $row['estadoUsuario'];
        $_SESSION["idUsuario"] = $row['idUsuario'];
        $_SESSION["imgUsuario"] = $row['imgUsuario'];
        $nombre = $_SESSION["nombreUsuario"];

        if ($_SESSION["estadoUsuario"] == NULL) {
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
                    location.href = '${DIR_PUBLIC}Views/index';
                } else {
                    location.href = '${DIR_PUBLIC}Views/index';
                }
              });
            }
            
              </script>";        

             } elseif ($_SESSION["idPerfilUsuario"] == 1) {
            //$_SESSION['estadoUsuario'] = $estado;
            $_SESSION['correo'] = $correoUsuario;
            $_SESSION["idUsuario"];
            $_SESSION["imgUsuario"];

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
                    location.href = '${DIR_PUBLIC}Views/perfiladmin/PerfilAdmin';               
                 } else {
                    location.href = '${DIR_PUBLIC}Views/perfiladmin/PerfilAdmin';               
                }
              });
            }
            
              </script>";        
              

        } elseif ($_SESSION["idPerfilUsuario"] == 2) {
            $_SESSION['correo'] = $correoUsuario;
            //$_SESSION['estadoUsuario'] = $estado;
            $_SESSION["idUsuario"];
            $_SESSION["imgUsuario"];
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
                    location.href = '${DIR_PUBLIC}Views/carritoCompras/catalogoCompras.php';
                } else {
                    location.href = '${DIR_PUBLIC}Views/carritoCompras/catalogoCompras.php';                
                }
              });
            }
            
              </script>";  
        } elseif ($_SESSION["idPerfilUsuario"] == 3) {
            $_SESSION['correo'] = $correoUsuario;
            $_SESSION["idUsuario"];
            $_SESSION["imgUsuario"];
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
                    location.href = '${DIR_PUBLIC}Views/perfilVendedor/perfil_Vendedor.php';                
                } else {
                        location.href = '${DIR_PUBLIC}Views/perfilVendedor/perfil_Vendedor.php';              
                    }
              });
            }
            
              </script>";  

        }
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
                location.href = '${DIR_PUBLIC}Views/perfilRepartidor/perfilRepartidor.php';
             } else {
                location.href = '${DIR_PUBLIC}Views/perfilRepartidorperfilRepartidor.php';
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
                location.href = '${DIR_PUBLIC}Views/index.php';
            } else {
                location.href = '${DIR_PUBLIC}Views/index.php';
            }
          });
        }
        
          </script>";  
    }
}
    /* include '../../Config/appConfig.php';
    require_once (APP_CONFIG_ROUTE.'Conexion.php'); */


    

    /*$conn = new Conexion();
    $Conexion = $conn -> Conectar();

    $DIR_PUBLIC = APP_PUBLIC_DIR;

    $correoUsuario = $_POST['correo'];
    $contraseñaUsuario = $_POST['contraseña'];

    $query = "SELECT * FROM usuario
    WHERE correoUsuario='$correoUsuario' and contraseñaUsuario='$contraseñaUsuario'";
    $datos = $Conexion->prepare($query);
    $datos -> execute();
    $datos -> fetchAll(PDO::FETCH_OBJ);

    if($datos -> rowCount()>=1){
        echo $datos['idPerfilUsuario']; 
        /* if ($_SESSION["idPerfilUsuario"] == 1) {
            /*$respuesta = $datos -> fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['correo'] = $correoUsuario;
            echo  "<script> alert ('Bienvenido al sistema $correoUsuario');
                location.href = '${DIR_PUBLIC}Views/perfiladmin/PerfilAdmin';
                </script>";
        }else{
            echo  "<script> alert ('Datos Incorrectos');
                location.href = '${DIR_PUBLIC}Views/login';
                </script>";
        }
    }*/

    ?>
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

		</body>

</html>