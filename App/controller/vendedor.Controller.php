<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE . 'vendedorModel.php';


class vendedorController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new vendedor();
    }

    public function Index()
    {
        require_once  APP_VIEWS . 'perfilVendedor/PerfilVendedor.php';
    }
    public function editarPerfilUsuario()
    {
        $vendedor = new vendedor();

        if (isset($_REQUEST['idUsuario'])) {
            $vendedor = $this->model->Obtener($_REQUEST['idUsuario']);
            require_once  APP_VIEWS . 'perfilVendedor/modules/headerPerfil.php';
            require_once  APP_VIEWS . 'perfilVendedor/vendedor/editarPerfil.php';
            require_once  APP_VIEWS . 'perfilVendedor/modules/footerPerfil.php';
        } else {
            return $this->Index();
        }
    }
    public function GuardarPerfil()
    {
        $vendedor = new vendedor();

        $directorio = "../../perfiladmin/administrador/images/fotos_perfil/";
        $imgUsuario = $_FILES['imgUsuario']['name'];
        $tipo = $_FILES['imgUsuario']['type'];
        $tamano = $_FILES['imgUsuario']['size'];
        $guardado = $_FILES['imgUsuario']['tmp_name'];
        $ruta = "/images/fotos_perfil/" . $imgUsuario;

        if (isset($imgUsuario) && $imgUsuario != "") {

            if (!((strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {

                $msgError = "Solo se permiten archivos .jpg, .png. y de 2MB como máximo..";
                echo "<script> window.addEventListener('load', init, false);
                function init () {
                    Swal.fire({
                        title: '¡Ha ocurrido un error!',
                        text: '$msgError',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                    if (willDelete) {
                        location.href = '?c=vendedor&a=editarPerfilUsuario&idUsuario='" . $_REQUEST['idUsuario'] . "';
                    } else {
                        location.href = '?c=vendedor&a=editarPerfilUsuario&idUsuario='" . $_REQUEST['idUsuario'] . "';
                        }
                });
                }
                
                </script>";
            } else {

                if (file_exists($directorio)) {

                    if (move_uploaded_file($guardado, '../../perfiladmin/administrador/images/fotos_perfil/' . $imgUsuario)) {
                        chmod('../../perfiladmin/administrador/images/fotos_perfil/' . $imgUsuario, 0777);

                        $vendedor->setIdusuario($_REQUEST['idUsuario']);
                        $vendedor->setNombreusuario($_REQUEST['nombreUsuario']);
                        $vendedor->setApellidousuario($_REQUEST['apellidoUsuario']);
                        $vendedor->setContraseñausuario($_REQUEST['contraseñaUsuario']);
                        $vendedor->setCorreousuario($_REQUEST['correoUsuario']);
                        $vendedor->setFechanacimiento($_REQUEST['fechaNacimiento']);
                        $vendedor->setDocumentousuario($_REQUEST['documentoUsuario']);
                        $vendedor->setDireccionUsuario($_REQUEST['direccionUsuario']);
                        $vendedor->setImgUsuario($ruta);
                        $vendedor->setIdTipoDoc($_REQUEST['idTipoDoc']);
                        $vendedor->getIdusuario() > 0
                            ? $this->model->ActualizarPerfil($vendedor)
                            : $this->model->Registrar($vendedor);
                        $msgUsuario = "Tu perfil ha sido actualizado correctamente.";

                        echo "<script> window.addEventListener('load', init, false);
                        function init () {
                            Swal.fire({
                                title: '¡Genial!',
                                text: '$msgUsuario',
                                icon: 'success',
                                buttons: true,
                                dangerMode: true,
                            }).then((willDelete) => {
                            if (willDelete) {
                                location.href = '?c=vendedor&a=editarPerfilUsuario&idUsuario=" . $_REQUEST['idUsuario'] . "';
                            } else {
                                location.href = '?c=vendedor&a=editarPerfilUsuario&idUsuario=" . $_REQUEST['idUsuario'] . "';
                                }
                        });
                        }
                        
                        </script>";
                    } else {
                        echo '<script> alert("Error al actualizar su Foto.");</script>';
                        echo '<script> window.location="../catalogoCompras.php" </script>';
                    }
                }
            }
        } else {
            $vendedor->setIdusuario($_REQUEST['idUsuario']);
            $vendedor->setNombreusuario($_REQUEST['nombreUsuario']);
            $vendedor->setApellidousuario($_REQUEST['apellidoUsuario']);
            $vendedor->setContraseñausuario($_REQUEST['contraseñaUsuario']);
            $vendedor->setCorreousuario($_REQUEST['correoUsuario']);
            $vendedor->setFechanacimiento($_REQUEST['fechaNacimiento']);
            $vendedor->setDocumentousuario($_REQUEST['documentoUsuario']);
            $vendedor->setDireccionUsuario($_REQUEST['direccionUsuario']);
            $vendedor->setImgUsuario($_REQUEST['imgUsuario']);
            $vendedor->setIdTipoDoc($_REQUEST['idTipoDoc']);
            $vendedor->getIdusuario() > 0
                ? $this->model->ActualizarPerfil($vendedor)
                : $this->model->Registrar($vendedor);
            $msgUsuario = "Tu perfil ha sido actualizado correctamente.";

            echo "<script> window.addEventListener('load', init, false);
                        function init () {
                            Swal.fire({
                                title: '¡Genial!',
                                text: '$msgUsuario',
                                icon: 'success',
                                buttons: true,
                                dangerMode: true,
                            }).then((willDelete) => {
                                if (willDelete) {
                                    location.href = '?c=vendedor&a=editarPerfilUsuario&idUsuario=" . $_REQUEST['idUsuario'] . "';
                                } else {
                                    location.href = '?c=vendedor&a=editarPerfilUsuario&idUsuario=" . $_REQUEST['idUsuario'] . "';
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