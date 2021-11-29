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
require_once APP_MODULES_ROUTE.'documentoModel.php';

class documentoController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new negocio();
    }
    public function documento(){
        require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
        require_once '../../../Views/perfilAdmin/administrador/tipoDoc.php';
        require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
    }
    public function crudNegocio(){
        $negocios = new negocio();
        
        if(isset($_REQUEST['idTipoDoc'])){
            $negocios = $this->model->Obtener($_REQUEST['idTipoNegocio']);
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/ModificacionTipoDoc.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }else{
            require_once '../../../Views/perfilAdmin/modules/headerAdmin.php';
            require_once '../../../Views/perfilAdmin/administrador/CrearTipoDoc.php';
            require_once '../../../Views/perfilAdmin/modules/footerAdmin.php';
        }
        
    }
    public function Guardar(){
        $negocio = new negocio();

        $negocio->setIdTipoDoc($_REQUEST['idTipoDoc']);
        $negocio->setNombreTipoDoc($_REQUEST['nombreTipoDoc']);

        
        
        $negocio->getIdTipoNegocio() > 0 
            ? $this->model->Actualizar($negocio)
            : $this->model->Registrar($negocio);

            $msgUsuario = "El tipo de documento ha sido registrado con exito.";
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
                    location.href = 'index.php?c=documento&a=documento';
                } else {
                    location.href = 'index.php?c=documento&a=documento';
                    }
            });
            }
            
            </script>";
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idTipoDoc']);
        $msgUsuario = "El tipo de documento ha sido eliminado con exito.";
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
                location.href = 'index.php?c=documento&a=documento';
            } else {
                location.href = 'index.php?c=documento&a=documento';
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