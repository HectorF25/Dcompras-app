<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE.'pedidosModel.php';

class pedidoController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new pedido();
    }
    public function Cliente(){
        require_once  APP_VIEWS.'perfilCliente/modules/headerCliente.php';
        require_once  APP_VIEWS.'perfilCliente/cliente/PedidosRegistrados.php';
        require_once  APP_VIEWS.'perfilCliente/modules/footerCliente.php';
    }
    public function crudPedido(){
        $pedidos = new pedido();
        
        if(isset($_REQUEST['idPedido'])){
            $pedidos = $this->model->Obtener($_REQUEST['idPedido']);
            require_once  APP_VIEWS.'perfilCliente/modules/headerCliente.php';
            require_once  APP_VIEWS.'perfilCliente/cliente/ActualizarPedidos.php';
            require_once  APP_VIEWS.'perfilCliente/modules/footerCliente.php';
        }else{
            require_once  APP_VIEWS.'perfilCliente/modules/headerCliente.php';
            require_once  APP_VIEWS.'perfilCliente/cliente/CrearPedidos.php';
            require_once  APP_VIEWS.'perfilCliente/modules/footerCliente.php';
        }
        
    }
    public function Guardar(){
        $pedido = new pedido();

        $pedido->setIdPedido($_REQUEST['idPedido']);
        $pedido->setDomicilioPedido($_REQUEST['domicilioPedido']);
        $pedido->setNombreProductos($_REQUEST['nombreProductos']);
        $pedido->setEspecificacionProducto($_REQUEST['especificacionProducto']);
        $pedido->setValorTotalPedido($_REQUEST['valorTotalPedido']);
        $pedido->setEstadoPedido($_REQUEST['estadoPedido']);
        $pedido->setIdUsuario($_REQUEST['idUsuario']); 
        $pedido->setIdTipoPago($_REQUEST['idTipoPago']);  
        $pedido->setIdNegocio($_REQUEST['idNegocio']); 
        $pedido->setIdBarrio($_REQUEST['idBarrio']);
        $pedido->setIdDomicilio($_REQUEST['idDomicilio']);  
        
        $pedido->getIdPedido() > 0 
            ? $this->model->Actualizar($pedido)
            : $this->model->Registrar($pedido);
        
        header('Location: index.php?c=pedido&a=Cliente');
    }
    public function inactivar(){
        $this->model->inactivar($_REQUEST['idPedido']);
        header('Location: index.php?c=pedido&a=Cliente');
    }
}