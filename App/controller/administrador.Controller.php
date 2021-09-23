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
    require_once APP_MODULES_ROUTE . 'administradorModel.php';


    class administradorController
    {
        private $model;

        public function __CONSTRUCT()
        {
            $this->model = new administrador();
        }

        public function Index()
        {
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/ModificacionUsuarios.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
        public function ajustesPerfil()
        {
            $administradores = new administrador();

            if (isset($_REQUEST['idUsuario'])) {
                $administradores = $this->model->Obtener($_REQUEST['idUsuario']);
                require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
                require_once '../../../Views/perfilAdmin/administrador/AjustesPerfil.php';
                require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
            } else {
                require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
                require_once '../../../Views/perfilAdmin/administrador/CrearUsuarios.php';
                require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
            }
        }
        public function fallasSistema()
        {
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/FallasSistema.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
        public function ModificionUsuarios()
        {
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/ModificacionUsuarios.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
        public function crudUsuarios()
        {
            $administradores = new administrador();

            if (isset($_REQUEST['idUsuario'])) {
                $administradores = $this->model->Obtener($_REQUEST['idUsuario']);
                require_once '../../../Views/perfilAdmin/modules/headerPerfil.php';
                require_once '../../../Views/perfilAdmin/administrador/FormularioModificacionUsuarios.php';
                require_once '../../../Views/perfilAdmin/modules/footerPerfil.php';
            } else {
                require_once '../../../Views/perfilAdmin/modules/headerPerfil.php';
                require_once '../../../Views/perfilAdmin/administrador/CrearUsuarios.php';
                require_once '../../../Views/perfilAdmin/modules/footerPerfil.php';
            }
        }
        public function Guardar()
        {
            $administrador = new administrador();
            
            $default = "/images/fotos_perfil/perfil.jpg";
            $directorio = "images/fotos_perfil/";
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
                            location.href = '../perfilAdmin';
                        } else {
                            location.href = '../perfilAdmin';
                            }
                    });
                    }
                    
                    </script>";
                }else{

            if (file_exists($directorio)) {

            if (move_uploaded_file($guardado, 'images/fotos_perfil/'.$imgUsuario)) {
            chmod('images/fotos_perfil/'.$imgUsuario, 0777);
            $administrador->setIdusuario($_REQUEST['idUsuario']);
            $administrador->setNombreusuario($_REQUEST['nombreUsuario']);
            $administrador->setApellidousuario($_REQUEST['apellidoUsuario']);
            $administrador->setContraseñausuario($_REQUEST['contraseñaUsuario']);
            $administrador->setCorreousuario($_REQUEST['correoUsuario']);
            $administrador->setFechanacimiento($_REQUEST['fechaNacimiento']);
            $administrador->setDocumentousuario($_REQUEST['documentoUsuario']);
            $administrador->setDireccionUsuario($_REQUEST['direccionUsuario']);
            $administrador->setImgUsuario($ruta);
            $administrador->setIdTipoDoc($_REQUEST['idTipoDoc']);
            $administrador->setIdPerfilUsuario($_REQUEST['idPerfilUsuario']);

            $administrador->getIdusuario() > 0
                ? $this->model->Actualizar($administrador)
                : $this->model->Registrar($administrador);
                $msgUsuario = "Usuario modificado con exito.";
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
                        location.href = 'index.php?c=administrador&a=modificionusuarios';
                    } else {
                        location.href = 'index.php?c=administrador&a=modificionusuarios';
                        }
                });
                }
                
                </script>";
        }else {
            echo '<script> alert("Error al actualizar su Foto.");</script>';
            echo '<script> window.location="index.php?c=administrador&a=editarPerfilUsuario" </script>';
        }
    }   
}
            }else{
                $administrador->setIdusuario($_REQUEST['idUsuario']);
                $administrador->setNombreusuario($_REQUEST['nombreUsuario']);
                $administrador->setApellidousuario($_REQUEST['apellidoUsuario']);
                $administrador->setContraseñausuario($_REQUEST['contraseñaUsuario']);
                $administrador->setCorreousuario($_REQUEST['correoUsuario']);
                $administrador->setFechanacimiento($_REQUEST['fechaNacimiento']);
                $administrador->setDocumentousuario($_REQUEST['documentoUsuario']);
                $administrador->setDireccionUsuario($_REQUEST['direccionUsuario']);
                $administrador->setImgUsuario($default);
                $administrador->setIdTipoDoc($_REQUEST['idTipoDoc']);
                $administrador->setIdPerfilUsuario($_REQUEST['idPerfilUsuario']);

                $administrador->getIdusuario() > 0
                    ? $this->model->Actualizar($administrador)
                    : $this->model->Registrar($administrador);
                    $msgUsuario = "Usuario modificado con exito.";
                    echo "<script> window.addEventListener('load', init, false);
                    function init () {
                     Swal.fire({
                            title: '¡genial!',
                            text: '$msgUsuario',
                            icon: 'success',
                            buttons: true,
                            dangerMode: true,
                        }).then((willDelete) => {
                        if (willDelete) {
                            location.href = 'index.php?c=administrador&a=modificionusuarios';
                     } else {
                            location.href = 'index.php?c=administrador&a=modificionusuarios';
                            }
                    });
                    }
        
        </script>";
        }
}

        public function AddNegocios()
        {
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/FormularioNegocioAdd.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }

        public function editarPerfilUsuario()
        {
            $administradores = new administrador();

            if (isset($_REQUEST['idUsuario'])) {
                $administradores = $this->model->Obtener($_REQUEST['idUsuario']);
                require_once '../../../Views/perfilAdmin/modules/headerPerfil.php';
                require_once '../../../Views/perfilAdmin/administrador/editarPerfil.php';
                require_once '../../../Views/perfilAdmin/modules/footerPerfil.php';
            } else {
                require_once '../../../Views/perfilAdmin/modules/headerPerfil.php';
                require_once '../../../Views/perfilAdmin/administrador/resumenPerfil.php';
                require_once '../../../Views/perfilAdmin/modules/footerPerfil.php';
            }
        }
        public function GuardarPerfil()
        {
            $administrador = new administrador();
            
            $default = "/images/fotos_perfil/perfil.jpg";
            $directorio = "/images/fotos_perfil/";
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
                        location.href = '../perfilAdmin';
                    } else {
                        location.href = '../perfilAdmin';
                        }
                });
                }
                
                </script>";
            }else{

                if (file_exists($directorio)) {

                    if (move_uploaded_file($guardado, 'images/fotos_perfil/'.$imgUsuario)) {
                        chmod('images/fotos_perfil/'.$imgUsuario, 0777);
                        
                        $administrador->setIdusuario($_REQUEST['idUsuario']);
                        $administrador->setNombreusuario($_REQUEST['nombreUsuario']);
                        $administrador->setApellidousuario($_REQUEST['apellidoUsuario']);
                        $administrador->setContraseñausuario($_REQUEST['contraseñaUsuario']);
                        $administrador->setCorreousuario($_REQUEST['correoUsuario']);
                        $administrador->setFechanacimiento($_REQUEST['fechaNacimiento']);
                        $administrador->setDocumentousuario($_REQUEST['documentoUsuario']);
                        $administrador->setDireccionUsuario($_REQUEST['direccionUsuario']);
                        $administrador->setImgUsuario($ruta);
                        $administrador->setIdTipoDoc($_REQUEST['idTipoDoc']);
                        $administrador->getIdusuario() > 0
                            ? $this->model->ActualizarPerfil($administrador)
                            : $this->model->Registrar($administrador);
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
                                location.href = '../perfilAdmin';
                            } else {
                                location.href = '../perfilAdmin';
                                }
                        });
                        }
                        
                        </script>";
                    } else {
                        echo '<script> alert("Error al actualizar su Foto.");</script>';
                        echo '<script> window.location="index.php?c=administrador&a=editarPerfilUsuario" </script>';
                    }
                }
            }
            }else{
                $administrador->setIdusuario($_REQUEST['idUsuario']);
                        $administrador->setNombreusuario($_REQUEST['nombreUsuario']);
                        $administrador->setApellidousuario($_REQUEST['apellidoUsuario']);
                        $administrador->setContraseñausuario($_REQUEST['contraseñaUsuario']);
                        $administrador->setCorreousuario($_REQUEST['correoUsuario']);
                        $administrador->setFechanacimiento($_REQUEST['fechaNacimiento']);
                        $administrador->setDocumentousuario($_REQUEST['documentoUsuario']);
                        $administrador->setDireccionUsuario($_REQUEST['direccionUsuario']);
                        $administrador->setImgUsuario($default);
                        $administrador->setIdTipoDoc($_REQUEST['idTipoDoc']);
                        $administrador->getIdusuario() > 0
                            ? $this->model->ActualizarPerfil($administrador)
                            : $this->model->Registrar($administrador);
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
                                location.href = '../perfilAdmin';
                            } else {
                                location.href = '../perfilAdmin';
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