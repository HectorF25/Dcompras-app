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

            $msgUsuario = "El negocio ha sido guardado con exito.";
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
                    location.href = 'index.php?c=negocios&a=negocios';
                } else {
                    location.href = 'index.php?c=negocios&a=negocios';
                    }
            });
            }
            
            </script>";
    }
}
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>

</html>