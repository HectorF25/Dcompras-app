<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE.'negocioModel.php';

class negociosController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new negocio();
    }
    public function Negocios(){
        require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
        require_once '../../../Views/perfilAdmin/administrador/NegoRegistrados.php';
        require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
    }
    public function SolicitudNegocios(){
        require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
        require_once '../../../Views/perfilAdmin/administrador/SolicitudNegocio.php';
        require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
    }
    public function crudNegocio(){
        $negocios = new negocio();
        
        if(isset($_REQUEST['idNegocio'])){
            $negocios = $this->model->Obtener($_REQUEST['idNegocio']);
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/ModificarNegocio.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }else{
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/CrearNegocio.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
        
    }
    public function Guardar(){
        $negocio = new negocio();

        $negocio->setIdNegocio($_REQUEST['idNegocio']);
        $negocio->setNombreNegocio($_REQUEST['nombreNegocio']);
        $negocio->setDireccionNegocio($_REQUEST['direccionNegocio']);
        $negocio->setNitNegocio($_REQUEST['nitNegocio']);
        $negocio->setEstadoNegocio($_REQUEST['estadoNegocio']);
        $negocio->setIdTipoNegocio($_REQUEST['idTipoNegocio']);
        $negocio->setIdBarrio($_REQUEST['idBarrio']);
        $negocio->setIdUsuario($_REQUEST['idUsuario']); 
        $negocio->setIdPeticionNegocio($_REQUEST['idPeticionNegocio']);  
        
        $negocio->getIdNegocio() > 0 
            ? $this->model->Actualizar($negocio)
            : $this->model->Registrar($negocio);
        
        header('Location: index.php?c=negocios&a=negocios');
    }
}