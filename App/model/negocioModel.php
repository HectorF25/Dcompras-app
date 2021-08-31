<?php

class negocio
{

    private $pdo;

    private $idNegocio;
    private $nombreNegocio;
    private $direccionNegocio;
    private $nitNegocio;
    private $estadoNegocio;
    private $idTipoNegocio;
    private $idBarrio;
    private $idUsuario;
    private $idPeticionNegocio;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Negocio($idNegocio, $nombreNegocio, $direccionNegocio, $nitNegocio, $estadoNegocio, $idTipoNegocio, $idBarrio, $idUsuario, $idPeticionNegocio)
    {
        $this->idNegocio = $idNegocio;
        $this->nombreNegocio = $nombreNegocio;
        $this->direccionNegocio = $direccionNegocio;
        $this->nitNegocio = $nitNegocio;
        $this->estadoNegocio = $estadoNegocio;
        $this->idTipoNegocio = $idTipoNegocio;
        $this->idBarrio = $idBarrio;
        $this->idUsuario = $idUsuario;
        $this->idPeticionNegocio = $idPeticionNegocio;
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
     * Get the value of nombreNegocio
     */
    public function getNombreNegocio()
    {
        return $this->nombreNegocio;
    }

    /**
     * Set the value of nombreNegocio
     *
     * @return  self
     */
    public function setNombreNegocio($nombreNegocio)
    {
        $this->nombreNegocio = $nombreNegocio;

        return $this;
    }

    /**
     * Get the value of direccionNegocio
     */
    public function getDireccionNegocio()
    {
        return $this->direccionNegocio;
    }

    /**
     * Set the value of direccionNegocio
     *
     * @return  self
     */
    public function setDireccionNegocio($direccionNegocio)
    {
        $this->direccionNegocio = $direccionNegocio;

        return $this;
    }

    /**
     * Get the value of nitNegocio
     */
    public function getNitNegocio()
    {
        return $this->nitNegocio;
    }

    /**
     * Set the value of nitNegocio
     *
     * @return  self
     */
    public function setNitNegocio($nitNegocio)
    {
        $this->nitNegocio = $nitNegocio;

        return $this;
    }

    /**
     * Get the value of estadoNegocio
     */
    public function getEstadoNegocioValue()
    {
        if ($this->estadoNegocio == 0) {
            return '0';
        } else {
            return '1';
        }
    }

    /**
     * Set the value of estadoNegocio
     *
     * @return  self
     */
    public function setEstadoNegocioValue($estadoNegocio)
    {
        $this->estadoNegocio = $estadoNegocio;
        return $this;
    }

    /**
     * Get the value of estadoNegocio
     */
    public function getEstadoNegocio()
    {
        if ($this->estadoNegocio == TRUE) {
            return 'ACTIVO';
        } else {
            return 'INACTIVO';
        }
    }

    /**
     * Get the value of estadoNegocio
     */
    public function getEstadoNegocioValor()
    {
        return $this->estadoNegocio;
        
    }

    /**
     * Set the value of estadoNegocio
     *
     * @return  self
     */
    public function setEstadoNegocio($estadoNegocio)
    {
        $this->estadoNegocio = $estadoNegocio;

        return $this;
    }

    /**
     * Get the value of idTipoNegocio
     */
    public function getIdTipoNegocio()
    {
        return $this->idTipoNegocio;
    }

    /**
     * Set the value of idTipoNegocio
     *
     * @return  self
     */
    public function setIdTipoNegocio($idTipoNegocio)
    {
        $this->idTipoNegocio = $idTipoNegocio;

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
     * Get the value of idPeticionNegocio
     */
    public function getIdPeticionNegocio()
    {
        return $this->idPeticionNegocio;
    }

    /**
     * Set the value of idPeticionNegocio
     *
     * @return  self
     */
    public function setIdPeticionNegocio($idPeticionNegocio)
    {
        $this->idPeticionNegocio = $idPeticionNegocio;

        return $this;
    }

    public function ListarNegocio()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM Negocio
            INNER JOIN tiponegocio ON negocio.idTipoNegocio = tiponegocio.idTipoNegocio
            INNER JOIN barrio ON negocio.idBarrio = barrio.idBarrio 
            INNER JOIN usuario ON negocio.idUsuario = usuario.idUsuario");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idnegocio)
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM Negocio
            INNER JOIN tiponegocio ON negocio.idTipoNegocio = tiponegocio.idTipoNegocio
            INNER JOIN barrio ON negocio.idBarrio = barrio.idBarrio 
            INNER JOIN usuario ON negocio.idUsuario = usuario.idUsuario
            INNER JOIN peticionnegocio ON negocio.idPeticionNegocio = peticionnegocio.idPeticionNegocio WHERE idNegocio = ?");
            $sql->execute(array($idnegocio));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE Negocio SET 
						nombreNegocio  = ?,
                        direccionNegocio  = ?,
                        nitNegocio  = ?,
                        estadoNegocio  = ?,
                        idTipoNegocio  = ?,
                        idBarrio  = ?,
                        idUsuario  = ?,
                        idPeticionNegocio  = ?
						
				    WHERE idNegocio = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreNegocio(),
                        $data->getDireccionNegocio(),
                        $data->getNitNegocio(),
                        $data->getEstadoNegocioValor(),
                        $data->getIdTipoNegocio(),
                        $data->getIdBarrio(),
                        $data->getIdUsuario(),
                        $data->getIdPeticionNegocio(),
                        $data->getIdNegocio()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(negocio $data)
    {
        try {
            $sql = "INSERT INTO Negocio (nombreNegocio,direccionNegocio,nitNegocio,estadoNegocio,idTipoNegocio,idBarrio,idUsuario,idPeticionNegocio) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreNegocio(),
                        $data->getDireccionNegocio(),
                        $data->getNitNegocio(),
                        $data->getEstadoNegocio(),
                        $data->getIdTipoNegocio(),
                        $data->getIdBarrio(),
                        $data->getIdUsuario(),
                        $data->getIdPeticionNegocio(),
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
}
