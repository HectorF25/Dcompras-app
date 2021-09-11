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
        require_once '../../../Views/perfilAdmin/administrador/Clientes.php';
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
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/FormularioModificacionUsuarios.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        } else {
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/CrearUsuarios.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
    }
    public function Guardar()
    {
        $administrador = new administrador();

        $directorio ="images/usuarios/";
        $aleatorio = mt_rand(100, 999);
        $ruta = "images/usuarios/".$aleatorio.".png";
         
        $nombre=$_FILES['imgUsuario']['name'];
        $guardado=$_FILES['imgUsuario']['tmp_name'];
                  
         
        if(!file_exists($directorio)){
            mkdir($directorio ,0777,true);
            if(file_exists($directorio )){
         
                if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                    echo "Archivo guardado con exito";
                }else{
                    echo "Archivo no se pudo guardar";
                }
            }
        }else{
                if(move_uploaded_file($guardado, $directorio.$aleatorio.".png")){
                echo "Archivo guardado con exito";
         
            }elseif(move_uploaded_file($guardado, $directorio.$aleatorio.".pdf")){
                echo "Archivo guardado con exito";
            }else{
                echo "Archivo no se pudo guardar";
            }
         
            var_dump($ruta);
         
        }
         
    
        $administrador->setIdusuario($_REQUEST['idUsuario']);
        $administrador->setNombreusuario($_REQUEST['nombreUsuario']);
        $administrador->setApellidousuario($_REQUEST['apellidoUsuario']);
        $administrador->setContraseñausuario($_REQUEST['contraseñaUsuario']);
        $administrador->setCorreousuario($_REQUEST['correoUsuario']);
        $administrador->setFechanacimiento($_REQUEST['fechaNacimiento']);
        $administrador->setDocumentousuario($_REQUEST['documentoUsuario']);
        $administrador->setEstadousuario($_REQUEST['estadoUsuario']);
        $administrador->setDireccionUsuario($_REQUEST['direccionUsuario']);
        $administrador->setImgUsuario($aleatorio);
        $administrador->setIdTipoDoc($_REQUEST['idTipoDoc']);
        $administrador->setIdPerfilUsuario($_REQUEST['idTipoDoc']);

        $administrador->getIdusuario() > 0
            ? $this->model->Actualizar($administrador)
            : $this->model->Registrar($administrador);
        header('Location: index.php?c=administrador&a=modificionusuarios');
    }

    public function AddNegocios()
    {
        require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
        require_once '../../../Views/perfilAdmin/administrador/FormularioNegocioAdd.php';
        require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
    }
}
