<?php

class negocio
{

    private $pdo;

    private $idPeticionNegocio;
    private $nombreNegocio;
    private $nombrePropietario;
    private $nitNegocio;
    private $razonsocialNegocio;
    private $telefonoNegocio;
    private $fechaFundacion;
    private $nombreTipoNegocio;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Negocio($idPeticionNegocio, $nombreNegocio, $nombrePropietario, $nitNegocio, $razonsocialNegocio, $telefonoFundacion, $fechaFundacion, $nombreTipoNegocio)
    {
        $this->idPeticionNegocio = $idPeticionNegocio;
        $this->nombreNegocio = $nombreNegocio;
        $this->nombrePropietario = $nombrePropietario;
        $this->nitNegocio = $nitNegocio;
        $this->razonsocialNegocio = $razonsocialNegocio;
        $this->telefonoNegocio = $telefonoNegocio;
        $this->fechaFundacion = $fechaFundacion;
        $this->nombreTipoNegocio = $nombreTipoNegocio;
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
     * Get the value of nombrePropietario
     */
    public function getnombrePropietario()
    {
        return $this->nombrePropietario;
    }

    /**
     * Set the value of nombrePropietario
     *
     * @return  self
     */
    public function setNombrePropietario($nombrePropietario)
    {
        $this->nombrePropietario = $nombrePropietario;

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
     * Get the value of razonsocialNegocio
     */
    public function getRazonsocialNegocio()
    {
        return $this->razonsocialNegocio; 
    }

    /**
     * Set the value of razonsocialNegocio
     *
     * @return  self
     */
    public function setRazonsocialNegocio($razonsocialNegocio)
    {
        $this->razonsocialNegocio = $razonsocialNegocio;

        return $this;
    }
    
         /**
     * Get the value of telefonoNegocio
     */
    public function getTelefonoNegocio()
    {
        return $this->telefonoNegocio;
    }

    /**
     * Set the value of telefonoNegocio
     *
     * @return  self
     */
    public function setTelefonoNegocio($telefonoNegocio)
    {
        $this->telefonoNegocio = $telefonoNegocio;

        return $this;
    }


        /**
     * Get the value of FechaFundacion
     */
    public function getFechaFundacion()
    {
        return $this->fechaFundacion;
    }

    /**
     * Set the value of fechaFundacion
     *
     * @return  self
     */
    public function setFechaFundacion($fechaFundacion)
    {
        $this->fechaFundacion = $fechaFundacion;

        return $this;
    }

       

    /**
     * Get the value of nombreTipoNegocio
     */
    public function getNombreTipoNegocio()
    {
        return $this->nombreTipoNegocio;
    }

    /**
     * Set the value of nombreTipoNegocio
     *
     * @return  self
     */
    public function setNombreTipoNegocio($nombreTipoNegocio)
    {
        $this->nombreTipoNegocio = $nombreTipoNegocio;

        return $this;
    }

   

    public function ListarNegocio()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM peticionnegocio");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idnegocio)
    {
        try {
            $sql = $this->pdo->prepare("SELECT * 
            FROM peticionnegocio
            WHERE idPeticionNegocio = ?");
            $sql->execute(array($idnegocio));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE peticionnegocio SET 
						nombreNegocio  = ?,
                        nombrePropietario  = ?,
                        nitNegocio  = ?,
                        razonsocialNegocio  = ?,
                        telefonoNegocio = ?,
                        fechaFundacion = ?,
                        nombreTipoNegocio  = ?
						
				    WHERE idPeticionNegocio = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreNegocio(),
                        $data->getNombrePropietario(),
                        $data->getNitNegocio(),
                        $data->getRazonsocialNegocio(),
                        $data->getTelefonoNegocio(),
                        $data->getFechaFundacion(),
                        $data->getNombreTipoNegocio(),
                        $data->getIdPeticionNegocio()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(negocio $data)
    {
        try {
            $sql = "INSERT INTO peticionnegocio (nombreNegocio,nombrePropietario,nitNegocio,razonsocialNegocio,telefonoNegocio,fechaFundacion,nombreTipoNegocio) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreNegocio(),
                        $data->getNombrePropietario(),
                        $data->getNitNegocio(),
                        $data->getRazonsocialNegocio(),
                        $data->getTelefonoNegocio(),
                        $data->getFechaFundacion(),
                        $data->getNombreTipoNegocio(),
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($idnegocio)
    {
        try {
            $sql = "DELETE FROM peticionnegocio WHERE idPeticionNegocio = ?";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    function contarRegistros()
    {
        try {
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM peticionnegocio");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
