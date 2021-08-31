<?php

class pedido
{

    private $pdo;

    private $idPedido;
    private $domicilioPedido;
    private $nombreProductos;
    private $especificacionProducto;
    private $valorTotalPedido;
    private $estadoPedido;
    private $idUsuario;
    private $idTipoPago;
    private $idNegocio;
    private $idBarrio;
    private $idDomicilio;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Pedido($idPedido, $domicilioPedido, $nombreProductos, $especificacionProducto, $valorTotalPedido, $estadoPedido, $idUsuario, $idTipoPago,$idNegocio,$idBarrio,$idDomicilio)
    {
        $this->idPedido = $idPedido;
        $this->domicilioPedido = $domicilioPedido;
        $this->nombreProductos = $nombreProductos;
        $this->especificacionProducto = $especificacionProducto;
        $this->valorTotalPedido = $valorTotalPedido;
        $this->estadoPedido = $estadoPedido;
        $this->idUsuario = $idUsuario;
        $this->idTipoPago = $idTipoPago;
        $this->idNegocio = $idNegocio;
        $this->idBarrio = $idBarrio;
        $this->idDomicilio = $idDomicilio;
    }

    /**
     * Get the value of idPedido
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get the value of domicilioPedido
     */
    public function getDomicilioPedido()
    {
        return $this->domicilioPedido;
    }

    /**
     * Set the value of domicilioPedido
     *
     * @return  self
     */
    public function setDomicilioPedido($domicilioPedido)
    {
        $this->domicilioPedido = $domicilioPedido;

        return $this;
    }

    /**
     * Get the value of nombreProductos
     */
    public function getNombreProductos()
    {
        return $this->nombreProductos;
    }

    /**
     * Set the value of nombreProductos
     *
     * @return  self
     */
    public function setNombreProductos($nombreProductos)
    {
        $this->nombreProductos = $nombreProductos;

        return $this;
    }

    /**
     * Get the value of especificacionProducto
     */
    public function getEspecificacionProducto()
    {
        return $this->especificacionProducto;
    }

    /**
     * Set the value of especificacionProducto
     *
     * @return  self
     */
    public function setEspecificacionProducto($especificacionProducto)
    {
        $this->especificacionProducto = $especificacionProducto;

        return $this;
    }

    /**
     * Get the value of idTipoNegocio
     */
    public function getValorTotalPedido()
    {
        return $this->valorTotalPedido;
    }

    /**
     * Set the value of valorTotalPedido
     *
     * @return  self
     */
    public function setValorTotalPedido($valorTotalPedido)
    {
        $this->valorTotalPedido = $valorTotalPedido;

        return $this;
    }

    /**
     * Get the value of estadoPedido
     */
    public function getEstadoPedido()
    {
        return $this->estadoPedido;
    }

    /**
     * Set the value of estadoPedido
     *
     * @return  self
     */
    public function setEstadoPedido($estadoPedido)
    {
        $this->estadoPedido = $estadoPedido;

        return $this;
    }

    /**
     * Get the value of idUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of idTipoPago
     */
    public function getIdTipoPago()
    {
        return $this->idTipoPago;
    }

    /**
     * Set the value of idTipoPago
     *
     * @return  self
     */
    public function setIdTipoPago($idTipoPago)
    {
        $this->idTipoPago = $idTipoPago;

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
     * Get the value of idBarrio
     */
    public function getIdBarrio()
    {
        return $this->idBarrio;
    }

    /**
     * Set the value of idBarrio
     *
     * @return  self
     */
    public function setIdBarrio($idBarrio)
    {
        $this->idBarrio = $idBarrio;

        return $this;
    }
     /**
     * Get the value of idDomicilio
     */
    public function getIdDomicilio()
    {
        return $this->idDomicilio;
    }

    /**
     * Set the value of idDomicilio
     *
     * @return  self
     */
    public function setIdDomicilio($idDomicilio)
    {
        $this->idDomicilio = $idDomicilio;

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

    public function Obtener($idpedido)
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM Pedido
            INNER JOIN usuario ON pedido.idUsuario = usuario.idUsuario
            INNER JOIN tipoPago ON pedido.idTipoPago = tipoPago.idTipoPago 
            INNER JOIN negocio ON pedido.idNegocio = negocio.idNegocio
            INNER JOIN barrio ON pedido.idBarrio = barrio.idBarrio
            WHERE Pedido.idPedido = ?");
            $sql->execute(array($idpedido));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE Pedido SET 
						nombreProductos  = ?,
                        domicilioPedido  = ?,
                        especificacionProducto  = ?,
                        valorTotalPedido  = ?,
                        estadoPedido  = ?,
                        idUsuario  = ?,
                        idTipoPago  = ?,
                        idNegocio  = ?,
                        idBarrio  = ?,
                        idDomicilio  = ?
						
				    WHERE idPedido = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreProductos(),
                        $data->getDomicilioPedido(),
                        $data->getEspecificacionProducto(),
                        $data->getValorTotalPedido(),
                        $data->getEstadoPedido(),
                        $data->getIdUsuario(),
                        $data->getIdTipoPago(),
                        $data->getIdNegocio(),
                        $data->getIdBarrio(),
                        $data->getIdDomicilio(),
                        $data->getIdPedido()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(pedido $data)
    {
        try {
            $sql = "INSERT INTO Pedido (nombreProductos,domicilioPedido,especificacionProducto,valorTotalPedido,estadoPedido,idUsuario,idTipoPago,idNegocio,idBarrio,idDomicilio) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreProductos(),
                        $data->getDomicilioPedido(),
                        $data->getEspecificacionProducto(),
                        $data->getValorTotalPedido(),
                        $data->getEstadoPedido(),
                        $data->getIdUsuario(),
                        $data->getIdTipoPago(),
                        $data->getIdNegocio(),
                        $data->getIdBarrio(),
                        $data->getIdDomicilio()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function llenarBarrio()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM Barrio ");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (exception $e) {
            die($e->getMessage());
        }
    }
    public function llenarTipoPago()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM tipopago ");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (exception $e) {
            die($e->getMessage());
        }
    }
    public function traerNegocios()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM Negocio ");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (exception $e) {
            die($e->getMessage());
        }
    }
    public function traerDomicilios()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM domicilio ");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (exception $e) {
            die($e->getMessage());
        }
    }
    public function traerPedidosDomicilo()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM pedido");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (exception $e) {
            die($e->getMessage());
        }
    }
    public function inactivar($idpedido)
	{
		try 
		{
			$sql = $this->pdo->prepare("UPDATE pedido SET estadoPedido = FALSE WHERE idPedido = ?");			          
			$sql->execute(array($idpedido));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
