<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE.'documentoModel.php';

class documentoController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new documento();
    }
    public function documento(){
        require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
        require_once APP_VIEWS . 'perfilAdmin/administrador/tipoDoc.php';
        require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
    }
    public function crudDoc(){
        $documento = new documento();
        
        if(isset($_REQUEST['idTipoDoc'])){
            $documento = $this->model->Obtener($_REQUEST['idTipoDoc']);
            require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
            require_once APP_VIEWS . 'perfilAdmin/administrador/ModificacionTipoDoc.php';
            require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
        }else{
            require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
            require_once APP_VIEWS . 'perfilAdmin/administrador/CrearTipoDoc.php';
            require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
        }
        
    }
    public function Guardar(){
        $documento = new documento();

        $documento->setIdTipoDoc($_REQUEST['idTipoDoc']);
        $documento->setNombreTipoDoc($_REQUEST['nombreTipoDoc']);

        $documento->getIdTipoDoc() > 0 
            ? $this->model->Actualizar($documento)
            : $this->model->Registrar($documento);

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
                    location.href = '?c=documento&a=documento';
                } else {
                    location.href = '?c=documento&a=documento';
                    }
            });
            }
            
            </script>";
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idTipoDoc']);
        header('Location: ?c=documento&a=documento');
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