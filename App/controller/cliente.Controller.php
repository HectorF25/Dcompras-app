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

    <?php
    require_once '../../../../Config/appConfig.php';
    require_once APP_MODULES_ROUTE . 'clienteModel.php';


    class clienteController
    {
        private $model;

        public function __CONSTRUCT()
        {
            $this->model = new cliente();
        }

        public function Index()
        {
            require_once '../../../Views/carritoCompras/catalogoCompras.php';
        }
        public function editarPerfilUsuario()
        {
            $clientes = new cliente();

            if (isset($_REQUEST['idUsuario'])) {
                $clientes = $this->model->Obtener($_REQUEST['idUsuario']);
                require_once '../../../Views/carritoCompras/modules/headerPerfil.php';
                require_once '../../../Views/carritoCompras/cliente/editarPerfil.php';
                require_once '../../../Views/carritoCompras/modules/footerPerfil.php';

            } else {
                require_once '../../../Views/carritoCompras/modules/headerPerfil.php';
                require_once '../../../Views/carritoCompras/catalogoCompras.php';
                require_once '../../../Views/carritoCompras/modules/footerPerfil.php';
            }
        }
        public function GuardarPerfil()
        {
            $cliente = new cliente();
            
            $directorio = "../../perfiladmin/administrador/images/fotos_perfil/";
            $imgUsuario = $_FILES['imgUsuario']['name'];
            $tipo = $_FILES['imgUsuario']['type'];
            $tamano = $_FILES['imgUsuario']['size'];
            $guardado = $_FILES['imgUsuario']['tmp_name'];
            $ruta = "../../perfiladmin/administrador/images/fotos_perfil/" . $imgUsuario;
            
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
                        location.href = '../catalogoCompras.php';
                    } else {
                        location.href = '../catalogoCompras.php';
                        }
                });
                }
                
                </script>";
            }else{

                if (file_exists($directorio)) {

                    if (move_uploaded_file($guardado, '../../perfiladmin/administrador/images/fotos_perfil/'.$imgUsuario)) {
                        chmod('../../perfiladmin/administrador/images/fotos_perfil/'.$imgUsuario, 0777);
                        
                        $cliente->setIdusuario($_REQUEST['idUsuario']);
                        $cliente->setNombreusuario($_REQUEST['nombreUsuario']);
                        $cliente->setApellidousuario($_REQUEST['apellidoUsuario']);
                        $cliente->setContraseñausuario($_REQUEST['contraseñaUsuario']);
                        $cliente->setCorreousuario($_REQUEST['correoUsuario']);
                        $cliente->setFechanacimiento($_REQUEST['fechaNacimiento']);
                        $cliente->setDocumentousuario($_REQUEST['documentoUsuario']);
                        $cliente->setDireccionUsuario($_REQUEST['direccionUsuario']);
                        $cliente->setImgUsuario($ruta);
                        $cliente->setIdTipoDoc($_REQUEST['idTipoDoc']);
                        $cliente->getIdusuario() > 0
                            ? $this->model->ActualizarPerfil($cliente)
                            : $this->model->Registrar($cliente);
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
                                location.href = '../catalogoCompras.php';
                            } else {
                                location.href = '../catalogoCompras.php';
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
            }else{
                $cliente->setIdusuario($_REQUEST['idUsuario']);
                        $cliente->setNombreusuario($_REQUEST['nombreUsuario']);
                        $cliente->setApellidousuario($_REQUEST['apellidoUsuario']);
                        $cliente->setContraseñausuario($_REQUEST['contraseñaUsuario']);
                        $cliente->setCorreousuario($_REQUEST['correoUsuario']);
                        $cliente->setFechanacimiento($_REQUEST['fechaNacimiento']);
                        $cliente->setDocumentousuario($_REQUEST['documentoUsuario']);
                        $cliente->setDireccionUsuario($_REQUEST['direccionUsuario']);
                        $cliente->setImgUsuario($_REQUEST['imgUsuario']);
                        $cliente->setIdTipoDoc($_REQUEST['idTipoDoc']);
                        $cliente->getIdusuario() > 0
                            ? $this->model->ActualizarPerfil($cliente)
                            : $this->model->Registrar($cliente);
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
                                location.href = '../catalogoCompras.php';
                            } else {
                                location.href = '../catalogoCompras.php';
                                }
                        });
                        }
                        
                        </script>";
            }
        }
    }
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>

</html>