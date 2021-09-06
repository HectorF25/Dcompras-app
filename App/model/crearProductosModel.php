<?php

class crearProducto
{

    private $pdo;

    private $idProductoNegocio;
    private $idProducto;
    private $idNegocio;
    private $precioProducto;
    private $cantidadProducto;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __crearProducto($idProductoNegocio,$idProducto,$idNegocio, $precioProducto, $cantidadProducto)
    {
        $this->idProductoNegocio = $idProductoNegocio;
        $this->idProducto = $idProducto;
        $this->idNegocio = $idNegocio;
        $this->idNegocio = $precioProducto;
        $this->cantidadProducto = $cantidadProducto;
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

    public function ListarProducto()
    {
        try {
            $sql = $this->pdo->prepare("SELECT *,nombreProducto, nombreNegocio, precioProducto,cantidadProducto FROM producto_negocio
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
            $sql = $this->pdo->prepare("SELECT tableProductoN.idProductoNegocio,tableProductoN.idNegocio,tableProductoN.idProducto ,nombreProducto, nombreNegocio, precioProducto,cantidadProducto FROM producto_negocio as tableProductoN
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
            $sql = "INSERT INTO producto_negocio (idProducto,idNegocio,precioProducto,cantidadProducto) 
		        VALUES (?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getIdProducto(),
                        $data->getIdNegocio(),
                        $data->getPrecioProducto(),
                        $data->getCantidadProducto()                   
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
