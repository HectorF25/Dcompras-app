<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE . 'pagoModel.php';

class PagoController
{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new tipoPago();
    }
    public function pago()
    {
        require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
        require_once APP_VIEWS . 'perfilAdmin/administrador/tipoPago.php';
        require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
    }
    public function crudPago()
    {
        $tipoPago = new tipoPago();

        if (isset($_REQUEST['idTipoPago'])) {
            $tipoPago = $this->model->Obtener($_REQUEST['idTipoPago']);
            require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
            require_once APP_VIEWS . 'perfilAdmin/administrador/ModificacionTipoPago.php';
            require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
        } else {
            require_once APP_VIEWS . 'perfilAdmin/modules/headerAdmin.php';
            require_once APP_VIEWS . 'perfilAdmin/administrador/CrearPago.php';
            require_once APP_VIEWS . 'perfilAdmin/modules/footerAdmin.php';
        }
    }
    public function Guardar()
    {
        $tipoPago = new tipoPago();

        $tipoPago->setIdTipoPago($_REQUEST['idTipoPago']);
        $tipoPago->setNombreTipoPago($_REQUEST['nombreTipoPago']);

        $tipoPago->getIdTipoPago() > 0
            ? $this->model->Actualizar($tipoPago)
            : $this->model->Registrar($tipoPago);
        $msgUsuario = "El tipo de pago se ha guardado correctamente";

        echo "<script> window.addEventListener('load', init, false);
                function init () {
                    Swal.fire({
                        title: 'Se ha guardado correctamente!',
                        text: '$msgUsuario',
                        icon: 'success',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                    if (willDelete) {
                        location.href = '?c=pago&a=pago';
                    } else {
                        location.href = '?c=pago&a=pago';
                    }
                    });
                }
                </script>";
    }
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['idTipoPago']);
        header('Location: ?c=pago&a=pago');
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