<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE.'peticionNegocioModel.php';

class peticionNegocioController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new peticionNegocio();
    }
    public function petiNegocios(){
        require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
        require_once '../../../Views/perfilAdmin/administrador/petiNegocios.php';
        require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
    }
    public function crudNegocio(){
        $negocios = new peticionNegocio();
        
        if(isset($_REQUEST['idPeticionNegocio'])){
            $negocios = $this->model->Obtener($_REQUEST['idPeticionNegocio']);
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/ModificacionPeticiones.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }else{
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/CrearPeticion.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
        
    }
    public function Guardar(){
        $negocio = new peticionNegocio();

        $negocio->setIdPeticionNegocio($_REQUEST['idPeticionNegocio']);
        $negocio->setNombreNegocio($_REQUEST['nombreNegocio']);
        $negocio->setNombrePropietario($_REQUEST['nombrePropietario']);
        $negocio->setNitNegocio($_REQUEST['nitNegocio']);
        $negocio->setRazonsocialNegocio($_REQUEST['razonsocialNegocio']);
        $negocio->setTelefonoNegocio($_REQUEST['telefonoNegocio']);
        $negocio->setFechaFundacion($_REQUEST['fechaFundacion']);
        $negocio->setNombreTipoNegocio($_REQUEST['nombreTipoNegocio']);

        
        
        $negocio->getIdPeticionNegocio() > 0 
            ? $this->model->Actualizar($negocio)
            : $this->model->Registrar($negocio);

            $msgUsuario = "La petición ha sido guardado con exito.";
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
                    location.href = 'index.php?c=negocios1&a=petiNegocios';
                } else {
                    location.href = 'index.php?c=negocios1&a=petiNegocios';
                    }
            });
            }
            
            </script>";
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idPeticionNegocio']);
        $msgUsuario = "La petición ha sido eliminado con exito.";
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
                location.href = 'index.php?c=negocios1&a=petiNegocios';
            } else {
                location.href = 'index.php?c=negocios1&a=petiNegocios';
                }
        });
        }
        
        </script>";
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