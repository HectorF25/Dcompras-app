<?php
require_once '../../../../Config/appConfig.php';
require_once APP_MODULES_ROUTE.'crearProductosModel.php';

class crearProductosController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new crearProducto();
    }
    public function mostrarProductos(){
        require_once '../../../Views/perfilVendedor/modules/headerVendedor.php';
        require_once '../../../Views/perfilVendedor/vendedor/FormularioProductos.php';
        require_once '../../../Views/perfilVendedor/modules/footerVendedor.php';
    }
    public function mostrarPedidos(){
        require_once '../../../Views/perfilVendedor/modules/headerVendedor.php';
        require_once '../../../Views/perfilVendedor/vendedor/PedidosRegistrados.php';
        require_once '../../../Views/perfilVendedor/modules/footerVendedor.php';
    }
    public function registrarProductos(){
        require_once '../../../Views/perfilVendedor/modules/headerVendedor.php';
        require_once '../../../Views/perfilVendedor/vendedor/CrearProductos.php';
        require_once '../../../Views/perfilVendedor/modules/footerVendedor.php';
    }
    public function modificarProductos(){
        require_once '../../../Views/perfilVendedor/modules/headerVendedor.php';
        require_once '../../../Views/perfilVendedor/vendedor/modificarProducto.php';
        require_once '../../../Views/perfilVendedor/modules/footerVendedor.php';
    }
    public function crudCrearP(){
        $crearP = new crearProducto();
        
        if(isset($_REQUEST['idProductoNegocio'])){
            $crearP = $this->model->Obtener($_REQUEST['idProductoNegocio']);
            require_once '../../../Views/perfilVendedor/modules/headerVendedor.php';
            require_once '../../../Views/perfilVendedor/vendedor/modificarProducto.php';
            require_once '../../../Views/perfilVendedor/modules/footerVendedor.php';
        }else{
            require_once '../../../Views/perfilVendedor/modules/headerVendedor.php';
            require_once '../../../Views/perfilVendedor/vendedor/CrearProductos.php';
            require_once '../../../Views/perfilVendedor/modules/footerVendedor.php';
        }
        
    }
    public function Guardar(){
        $crearProducto = new crearProducto();

        $crearProducto->setIdProductoNegocio($_REQUEST['idProductoNegocio']);
        $crearProducto->setIdProducto($_REQUEST['idProducto']);
        $crearProducto->setIdNegocio($_REQUEST['idNegocio']);
        $crearProducto->setPrecioProducto($_REQUEST['precioProducto']);
        $crearProducto->setCantidadProducto($_REQUEST['cantidadProducto']); 
        $crearProducto->setEstadoProductoNegocio($_REQUEST['estadoProductoNegocio']); 
        
        
        $crearProducto->getIdProductoNegocio() > 0 
            ? $this->model->Actualizar($crearProducto)
            : $this->model->Registrar($crearProducto);
        
        header('Location: index.php?c=crearProductos&a=mostrarProductos');
        
    }

    public function inactivar(){
        $this->model->InactivarProducto($_REQUEST['idProductoNegocio']);
        header('Location: index.php?c=crearProductos&a=mostrarProductos');
    }
    public function activar(){
        $this->model->activarProducto($_REQUEST['idProductoNegocio']);
        header('Location: index.php?c=crearProductos&a=mostrarProductos');
    }
}