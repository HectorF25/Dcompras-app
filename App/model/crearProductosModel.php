<?php

class crearProducto
{

    private $pdo;

    private $idProductoNegocio;
    private $idProducto;
    private $idNegocio;
    private $precioProducto;
    private $cantidadProducto;
    private $estadoProductoNegocio;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __crearProducto($idProductoNegocio,$idProducto,$idNegocio, $precioProducto, $cantidadProducto, $estadoProductoNegocio)
    {
        $this->idProductoNegocio = $idProductoNegocio;
        $this->idProducto = $idProducto;
        $this->idNegocio = $idNegocio;
        $this->idNegocio = $precioProducto;
        $this->cantidadProducto = $cantidadProducto;
        $this->estadoProductoNegocio = $estadoProductoNegocio;
    }
    
    /**
     * Get the value of idProductoNegocio
     */ 
    public function getIdProductoNegocio()
    {
        return $this->idProductoNegocio;
    }

    /**
     * Set the value of idProductoNegocio
     *
     * @return  self
     */ 
    public function setIdProductoNegocio($idProductoNegocio)
    {
        $this->idProductoNegocio = $idProductoNegocio;

        return $this;
    }
    /**
     * Get the value of idProducto
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set the value of idProducto
     *
     * @return  self
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }
    /**
     * Get the value of idNegocio
     */
    public function getIdNegocio()
    {
        return $this->idNegocio;
    }

    /**
     * Set the value of idNegocio
     *
     * @return  self
     */
    public function setIdNegocio($idNegocio)
    {
        $this->idNegocio = $idNegocio;

        return $this;
    }
    /**
     * Get the value of precioProducto
     */
    public function getPrecioProducto()
    {
        return $this->precioProducto;
    }

    /**
     * Set the value of precioProducto
     *
     * @return  self
     */
    public function setPrecioProducto($precioProducto)
    {
        $this->precioProducto = $precioProducto;

        return $this;
    }
    /**
     * Get the value of cantidadProducto
     */
    public function getCantidadProducto()
    {
        return $this->cantidadProducto;
    }

    /**
     * Set the value of cantidadProducto
     *
     * @return  self
     */
    public function setCantidadProducto($cantidadProducto)
    {
        $this->cantidadProducto = $cantidadProducto;

        return $this;
    }
/**
     * Get the value of estadoProducto
     */
    public function getEstadoProductoNegocio()
    {
        return $this->estadoProductoNegocio;
    }

    /**
     * Set the value of estadoProducto
     *
     * @return  self
     */
    public function setEstadoProductoNegocio($estadoProductoNegocio)
    {
        $this->estadoProductoNegocio = $estadoProductoNegocio;

        return $this;
    }

    public function ListarPedido()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM Pedido
            INNER JOIN usuario ON pedido.idUsuario = usuario.idUsuario
            INNER JOIN tipoPago ON pedido.idTipoPago = tipoPago.idTipoPago 
            INNER JOIN negocio ON pedido.idNegocio = negocio.idNegocio
            INNER JOIN barrio ON pedido.idBarrio = barrio.idBarrio");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarProducto()
    {
        try {
            $sql = $this->pdo->prepare("SELECT *,nombreProducto, nombreNegocio, producto_negocio.precioProducto,cantidadProducto FROM producto_negocio
            INNER JOIN producto ON producto_negocio.idProducto = producto.idProducto
            INNER JOIN negocio ON producto_negocio.idNegocio = negocio.idNegocio ORDER BY idProductoNegocio ASC");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idProductoNegocio)
    {
        try {
            $sql = $this->pdo->prepare("SELECT tableProductoN.idProductoNegocio,tableProductoN.idNegocio,tableProductoN.idProducto ,nombreProducto, nombreNegocio, tableProductoN.precioProducto,cantidadProducto FROM producto_negocio as tableProductoN
            INNER JOIN producto ON tableProductoN.idProducto = producto.idProducto
            INNER JOIN negocio ON tableProductoN.idNegocio = negocio.idNegocio  WHERE tableProductoN.idProductoNegocio = ?");
            $sql->execute(array($idProductoNegocio));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE producto_negocio SET 
						idProducto  = ?,
                        idNegocio  = ?,
                        precioProducto  = ?,
                        cantidadProducto  = ?
				    WHERE idProductoNegocio = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getIdProducto(),
                        $data->getIdNegocio(),
                        $data->getPrecioProducto(),
                        $data->getCantidadProducto(),
                        $data->getIdProductoNegocio()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(crearProducto $data)
    {
        try {
            $sql = "INSERT INTO producto_negocio (idProducto,idNegocio,precioProducto,cantidadProducto,estadoProductoNegocio) 
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getIdProducto(),
                        $data->getIdNegocio(),
                        $data->getPrecioProducto(),
                        $data->getCantidadProducto(),
                        $data->getEstadoProductoNegocio()            
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function InactivarProducto($idProductoNegocio){
        try {
            
            $sql =$this->pdo->prepare("UPDATE producto_negocio SET 
						estadoProductoNegocio  = 0
				    WHERE `producto_negocio`.`idProductoNegocio`  = ?");

            $sql->execute(array($idProductoNegocio));
		    } catch (Exception $e) 
		    {
			die($e->getMessage());
		    }
	}
    public function activarProducto($idProductoNegocio){
        try {
            
            $sql =$this->pdo->prepare("UPDATE producto_negocio SET 
						estadoProductoNegocio  = 1
				    WHERE `producto_negocio`.`idProductoNegocio`  = ?");

            $sql->execute(array($idProductoNegocio));
		    } catch (Exception $e) 
		    {
			die($e->getMessage());
		    }
        }
}
