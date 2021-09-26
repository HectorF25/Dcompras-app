<?php
include 'usuariosModel.php';

class cliente extends Usuario
{

    private $pdo;

    private $nombreusuario;
    private $apellidousuario;
    private $fechanacimiento;
    private $documentousuario;
    private $estadousuario;
    private $idtipodoc;
    private $direccionusuario;
    private $imgUsuario;
    private $idPerfilUsuario;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Cliente($idusuario, $correousuario, $contraseñausuario, $nombreusuario, $apellidousuario,$fechanacimiento, $documentousuario, $estadousuario, $idtipodoc,$direccionusuario, $imgUsuario,$idPerfilUsuario)
    {
        parent::__USUARIO($idusuario, $correousuario, $contraseñausuario);
        $this->nombreusuario = $nombreusuario;
        $this->apellidousuario = $apellidousuario;
        $this->fechanacimiento = $fechanacimiento;
        $this->documentousuario = $documentousuario;
        $this->estadoUsuario = $estadousuario;
        $this->idtipodoc = $idtipodoc;
        $this->direccionusuario = $direccionusuario;
        $this->imgUsuario = $imgUsuario;
        $this->idPerfilUsuario = $idPerfilUsuario;
    }

    /**
     * Get the value of nombreusuario
     */ 
    public function getNombreusuario()
    {
        return $this->nombreusuario;
    }

    /**
     * Set the value of nombreusuario
     *
     * @return  self
     */ 
    public function setNombreusuario($nombreusuario)
    {
        $this->nombreusuario = $nombreusuario;

        return $this;
    }

    /**
     * Get the value of apellidousuario
     */ 
    public function getApellidousuario()
    {
        return $this->apellidousuario;
    }

    /**
     * Set the value of apellidousuario
     *
     * @return  self
     */ 
    public function setApellidousuario($apellidousuario)
    {
        $this->apellidousuario = $apellidousuario;

        return $this;
    }

    /**
     * Get the value of fechanacimiento
     */ 
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set the value of fechanacimiento
     *
     * @return  self
     */ 
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get the value of documentousuario
     */ 
    public function getDocumentousuario()
    {
        return $this->documentousuario;
    }

    /**
     * Set the value of documentousuario
     *
     * @return  self
     */ 
    public function setDocumentousuario($documentousuario)
    {
        $this->documentousuario = $documentousuario;

        return $this;
    }

    /**
     * Get the value of estadousuario
     */ 
    public function getEstadousuario()
    {
        return $this->estadousuario;
    }

    /**
     * Set the value of estadousuario
     *
     * @return  self
     */ 
    public function setEstadousuario($estadousuario)
    {
        $this->estadousuario = $estadousuario;

        return $this;
    }

    /**
     * Get the value of idtipodoc
     */ 
    public function getIdtipodoc()
    {
        return $this->idtipodoc;
    }

        /**
     * Set the value of direccionUsuario
     *
     * @return  self
     */ 
    public function setDireccionUsuario($direccionusuario)
    {
        $this->direccionusuario = $direccionusuario;

        return $this;
    }

    /**
     * Get the value of direccionUsuario
     */ 
    public function getDireccionUsuario()
    {
        return $this->direccionusuario;
    }

        /**
     * Get the value of imgUsuario
     */
    public function getImgUsuario()
    {
        return $this->imgUsuario;
    }

    /**
     * Set the value of imgUsuario
     *
     * @return  self
     */
    public function setImgUsuario($imgUsuario)
    {
        $this->imgUsuario = $imgUsuario;

        return $this;
    }

    /**
     * Set the value of idtipodoc
     *
     * @return  self
     */ 
    public function setIdtipodoc($idtipodoc)
    {
        $this->idtipodoc = $idtipodoc;

        return $this;
    }
/**
     * Get the value of idPerfilUsuario
     */ 
    public function getIdPerfilUsuario()
    {
        return $this->idtipodoc;
    }

    /**
     * Set the value of idtipodoc
     *
     * @return  self
     */ 
    public function setIdPerfilUsuario($idPerfilUsuario)
    {
        $this->idPerfilUsuario = $idPerfilUsuario;

        return $this;
    }
    
    public function ActualizarPerfil($data)
    {
        try {
            $sql = "UPDATE USUARIO SET 
						nombreUsuario  = ?,
                        apellidoUsuario  = ?,
                        correoUsuario  = ?,
                        contraseñaUsuario  = ?,
                        fechaNacimiento  = ?,
                        documentoUsuario  = ?,
                        idTipoDoc  = ?,
                        direccionUsuario  = ?,
                        imgUsuario  = ?
						
				    WHERE idUsuario = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreusuario(),
                        $data->getApellidousuario(),
                        $data->getCorreousuario(),
                        $data->getContraseñausuario(),
                        $data->getFechanacimiento(),
                        $data->getDocumentousuario(),
                        $data->getIdTipodoc(),
                        $data->getDireccionUsuario(),
                        $data->getImgUsuario(),
                        $data->getIdUsuario()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Listar()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM usuario 
            INNER JOIN tipodocumento ON USUARIO.idTipoDoc = tipodocumento.idTipoDoc
            INNER JOIN PerfilUsuario ON USUARIO.idPerfilUsuario = PerfilUsuario.idPerfilUsuario");
            $sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idusuario)
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM usuario 
            INNER JOIN tipodocumento ON USUARIO.idTipoDoc = tipodocumento.idTipoDoc 
            INNER JOIN PerfilUsuario ON USUARIO.idPerfilUsuario = PerfilUsuario.idPerfilUsuario
            WHERE idUsuario = ? ");
            $sql->execute(array($idusuario));
            return $sql->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE USUARIO SET 
						nombreUsuario  = ?,
                        apellidoUsuario  = ?,
                        contraseñaUsuario  = ?,
                        correoUsuario  = ?,
                        fechaNacimiento  = ?,
                        documentoUsuario  = ?,
                        estadoUsuario  = ?,
                        idTipoDoc  = ?,
                        idPerfilUsuario  = ?
						
				    WHERE idUsuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(  
                        $data->nombreUsuario, 
                        $data->apellidoUsuario,
                        $data->contraseñaUsuario,
                        $data->correoUsuario,
                        $data->fechaNacimiento,
                        $data->documentoUsuario,
                        $data->estadoUsuario,
                        $data->idTipoDoc,
                        $data->idPerfilUsuario,
                        $data->idUsuario
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

    public function Registrar(cliente $data)
	{
		try 
		{
		$sql = "INSERT INTO USUARIO (nombreUsuario,apellidoUsuario,contraseñaUsuario,correoUsuario,fechaNacimiento,documentoUsuario,estadoUsuario,idTipoDoc,idPerfilUsuario) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombreUsuario, 
                    $data->apellidoUsuario,
                    $data->contraseñaUsuario,
                    $data->correoUsuario,
                    $data->fechaNacimiento,
                    $data->documentoUsuario,
                    $data->estadoUsuario,
                    $data->idTipoDoc,
                    $data->idPerfilUsuario,
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    public function ListarTipoDoc()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM tipodocumento");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
