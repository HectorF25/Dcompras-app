<?php

class categoria
{

    private $pdo;

    private $idCategoria;
    private $nombreCategoria;


    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Categoria($idCategoria, $nombreCategoria)
    {
        $this->idCategoria = $idCategoria;
        $this->nombreCategoria = $nombreCategoria;    
    }

    /**
     * Get the value of idPeticionNegocio
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idPeticionNegocio
     *
     * @return  self
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of nombreNegocio
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set the value of nombreNegocio
     *
     * @return  self
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    public function Listar()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM categoriaproducto");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $sql = $this->pdo->prepare("SELECT * 
            FROM categoriaproducto
            WHERE idCategoria = ?");
            $sql->execute(array($id));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE categoriaproducto SET 
						nombreCategoria  = ?
				    WHERE idCategoria = ?";
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreCategoria(),
                        $data->getIdCategoria()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(categoria $data)
    {
        try {
            $sql = "INSERT INTO categoriaproducto (nombreCategoria) 
		        VALUES (?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreCategoria(),
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $sql = "DELETE FROM categoriaproducto WHERE idCategoria = ?";
            $this->pdo->prepare($sql)
                ->execute(
                    array($id)
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    function contarRegistros()
    {
        try {
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM categoriaproducto");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
