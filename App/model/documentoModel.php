<?php

class negocio
{

    private $pdo;

    private $idTipoDoc;
    private $nombreTipoDoc;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Negocio($idTipoDoc, $nombreTipDoc)
    {
        $this->idTipoDoc = $idTipoDoc;
        $this->nombreTipoDoc = $nombreTipoDoc;    
    }



    /**
     * Get the value of idPeticionNegocio
     */
    public function getIdTipoDoc()
    {
        return $this->idTipoDoc;
    }

    /**
     * Set the value of idPeticionNegocio
     *
     * @return  self
     */
    public function setIdTipoDoc($idTipoDoc)
    {
        $this->idTipoDoc = $idTipoDoc;

        return $this;
    }

    /**
     * Get the value of nombreNegocio
     */
    public function getNombreTipoDoc()
    {
        return $this->nombreTipoDoc;
    }

    /**
     * Set the value of nombreNegocio
     *
     * @return  self
     */
    public function setNombreTipoNegocio($nombreTipoDoc)
    {
        $this->nombreTipoDoc = $nombreTipoDoc;

        return $this;
    }

   
   

    public function ListarNegocio()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM tipodocumento");
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
            FROM tipodocumento
            WHERE idTipoDoc = ?");
            $sql->execute(array($idnegocio));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE tipodocumento SET 
						nombreTipoDoc  = ?
						
				    WHERE tipodocumento = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreTipoDoc(),
                        $data->getIdTipoDoc()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(negocio $data)
    {
        try {
            $sql = "INSERT INTO tipodocumento (nombreTipoDoc) 
		        VALUES (?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreTipoDoc(),
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($idnegocio)
    {
        try {
            $sql = "DELETE FROM tipodocumento WHERE idTipoDoc = ?";
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
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM tipodocumento");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
