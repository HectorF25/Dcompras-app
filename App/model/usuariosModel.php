<?php
class Usuario
{

    private $pdo;

    private $idusuario;
    private $correousuario;
    private $contraseñausuario;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function __USUARIO($idusuario,$correousuario,$contraseñausuario)
    {
        $this->idusuario = $idusuario;
        $this->correousuario = $correousuario;
        $this->contraseñausuario = $contraseñausuario;
    }
    
    /**
     * Get the value of idusuario
     */ 
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */ 
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get the value of correousuario
     */ 
    public function getCorreousuario()
    {
        return $this->correousuario;
    }

    /**
     * Set the value of correousuario
     *
     * @return  self
     */ 
    public function setCorreousuario($correousuario)
    {
        $this->correousuario = $correousuario;

        return $this;
    }

    /**
     * Get the value of contraseñausuario
     */ 
    public function getContraseñausuario()
    {
        return $this->contraseñausuario;
    }

    /**
     * Set the value of contraseñausuario
     *
     * @return  self
     */ 
    public function setContraseñausuario($contraseñausuario)
    {
        $this->contraseñausuario = $contraseñausuario;

        return $this;
    }

}
?>