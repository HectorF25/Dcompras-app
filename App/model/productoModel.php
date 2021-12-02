<?php

class Producto{
    
    private $idProducto;
    private $nombreProducto;
    private $ivaProducto;
    private $precioProducto;
    private $especificacionProducto;
    private $imgProducto;
    private $estadoProducto;
    private $idSubCategoria;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __PRODUCTO($idProducto,$nombreProducto,$ivaProducto,$precioProducto,$especificacionProducto,$imgProducto,$estadoProducto,$idSubCategoria)
    {
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->ivaProducto = $ivaProducto;
        $this->precioProducto = $precioProducto;
        $this->especificacionProducto = $especificacionProducto;
        $this->imgProducto = $imgProducto;
        $this->estadoProducto = $estadoProducto;
        $this->idSubCategoria = $idSubCategoria;
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
     * Get the value of nombreProducto
     */ 
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * Set the value of nombreProducto
     *
     * @return  self
     */ 
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    /**
     * Get the value of ivaProducto
     */ 
    public function getIvaProducto()
    {
        return $this->ivaProducto;
    }

    /**
     * Set the value of ivaProducto
     *
     * @return  self
     */ 
    public function setIvaProducto($ivaProducto)
    {
        $this->ivaProducto = $ivaProducto;

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
     * Get the value of imgProducto
     */ 
    public function getImgProducto()
    {
        return $this->imgProducto;
    }

    /**
     * Set the value of imgProducto
     *
     * @return  self
     */ 
    public function setImgProducto($imgProducto)
    {
        $this->imgProducto = $imgProducto;

        return $this;
    }

    /**
     * Get the value of estadoProducto
     */ 
    public function getEstadoProducto()
    {
        return $this->estadoProducto;
    }

    /**
     * Set the value of estadoProducto
     *
     * @return  self
     */ 
    public function setEstadoProducto($estadoProducto)
    {
        $this->estadoProducto = $estadoProducto;

        return $this;
    }

    /**
     * Get the value of idSubCategoria
     */ 
    public function getIdSubCategoria()
    {
        return $this->idSubCategoria;
    }

    /**
     * Set the value of idSubCategoria
     *
     * @return  self
     */ 
    public function setIdSubCategoria($idSubCategoria)
    {
        $this->idSubCategoria = $idSubCategoria;

        return $this;
    }

    public function Listar()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM producto ");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
