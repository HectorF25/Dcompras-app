<?php

class tipoNegocio
{

    private $pdo;

    private $idTipoNegocio;
    private $nombreTipoNegocio;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Negocio($idTipoNegocio, $nombreTipoNegocio)
    {
        $this->idTipoNegocio = $idTipoNegocio;
        $this->nombreTipoNegocio = $nombreTipoNegocio;    
    }



    /**
     * Get the value of idPeticionNegocio
     */
    public function getIdTipoNegocio()
    {
        return $this->idTipoNegocio;
    }

    /**
     * Set the value of idPeticionNegocio
     *
     * @return  self
     */
    public function setIdTipoNegocio($idTipoNegocio)
    {
        $this->idTipoNegocio = $idTipoNegocio;

        return $this;
    }

    /**
     * Get the value of nombreNegocio
     */
    public function getNombreTipoNegocio()
    {
        return $this->nombreTipoNegocio;
    }

    /**
     * Set the value of nombreNegocio
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
            $sql = $this->pdo->prepare("SELECT * FROM tiponegocio");
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
            FROM tiponegocio
            WHERE idTipoNegocio = ?");
            $sql->execute(array($idnegocio));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE tiponegocio SET 
						nombreTipoNegocio  = ?
						
				    WHERE idTipoNegocio = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreTipoNegocio(),
                        $data->getIdTipoNegocio()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(tipoNegocio $data)
    {
        try {
            $sql = "INSERT INTO tiponegocio (nombreTipoNegocio) 
		        VALUES (?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
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
            $sql = "DELETE FROM tiponegocio WHERE idTipoNegocio = ?";
            $this->pdo->prepare($sql)
                ->execute(
                    array($idnegocio)
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    function contarRegistros()
    {
        try {
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM tiponegocio");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
