<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE.'categoriaModel.php';

class categoriaController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new categoria();
    }
    public function categoria(){
        require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
        require_once APP_VIEWS . 'perfilAdmin/administrador/categorias.php';
        require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
    }
    public function crudCategoria(){
        $categoria = new categoria();
        
        if(isset($_REQUEST['idCategoria'])){
            $categoria = $this->model->Obtener($_REQUEST['idCategoria']);
            require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
            require_once APP_VIEWS . 'perfilAdmin/administrador/ModificacionCategoria.php';
            require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
        }else{
            require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
            require_once APP_VIEWS . 'perfilAdmin/administrador/CrearCategoria.php';
            require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
        }
        
    }
    public function Guardar(){
        $categoria = new categoria();

        $categoria->setIdCategoria($_REQUEST['idCategoria']);
        $categoria->setNombreCategoria($_REQUEST['nombreCategoria']);

        $categoria->getIdCategoria() > 0 
            ? $this->model->Actualizar($categoria)
            : $this->model->Registrar($categoria);

            $msgUsuario = "La categoria ha sido registrado con exito.";
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
                    location.href = '?c=categoria&a=categoria';
                } else {
                    location.href = '?c=categoria&a=categoria';
                    }
            });
            }
            
            </script>";
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idCategoria']);
        header('Location: ?c=categoria&a=categoria');
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