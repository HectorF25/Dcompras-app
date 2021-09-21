<?php
include 'usuariosModel.php';

class administrador extends Usuario
{

    private $pdo;

    private $nombreusuario;
    private $apellidousuario;
    private $fechanacimiento;
    private $documentousuario;
    private $estadousuario;
    private $direccionUsuario;
    private $imgUsuario;
    private $idtipodoc;
    private $idPerfilUsuario;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __Administador($idusuario, $correousuario, $contraseñausuario, $nombreusuario, $apellidousuario, $fechanacimiento, $documentousuario, $estadousuario, $direccionUsuario, $imgUsuario, $idtipodoc, $idPerfilUsuario)
    {
        parent::__USUARIO($idusuario, $correousuario, $contraseñausuario);
        $this->nombreusuario = $nombreusuario;
        $this->apellidousuario = $apellidousuario;
        $this->fechanacimiento = $fechanacimiento;
        $this->documentousuario = $documentousuario;
        $this->estadousuario = $estadousuario;
        $this->direccionUsuario = $direccionUsuario;
        $this->imgUsuario = $imgUsuario;
        $this->idtipodoc = $idtipodoc;
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
        if ($this->estadousuario == TRUE) {
            return 'ACTIVO';
        } else {
            return 'INACTIVO';
        }
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
     * Get the value of estadousuario
     */
    public function getEstadousuarioValue()
    {
        if ($this->estadousuario == 0) {
            return '0';
        } else {
            return '1';
        }
    }

    /**
     * Set the value of estadousuario
     *
     * @return  self
     */
    public function setEstadousuarioValue($estadousuario)
    {
        $this->estadousuario = $estadousuario;
        return $this;
    }

    /**
     * Get the value of estadousuario
     */
    public function getEstadousuarioValor()
    {
        return $this->estadousuario;
    }
    /**
     * Get the value of direccionUsuario
     */
    public function getDireccionUsuario()
    {
        return $this->direccionUsuario;
    }

    /**
     * Set the value of direccionUsuario
     *
     * @return  self
     */
    public function setDireccionUsuario($direccionUsuario)
    {
        $this->direccionUsuario = $direccionUsuario;

        return $this;
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
     * Get the value of idtipodoc
     */
    public function getIdtipodoc()
    {
        return $this->idtipodoc;
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
        return $this->idPerfilUsuario;
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
    public function Listar()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM usuario");
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
        try {
            $sql = "UPDATE USUARIO SET 
						nombreUsuario  = ?,
                        apellidoUsuario  = ?,
                        contraseñaUsuario  = ?,
                        correoUsuario  = ?,
                        fechaNacimiento  = ?,
                        documentoUsuario  = ?,
                        direccionUsuario  = ?,
                        imgUsuario  = ?,
                        idTipoDoc  = ?,
                        idPerfilUsuario  = ?
						
				    WHERE idUsuario = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreusuario(),
                        $data->getApellidousuario(),
                        $data->getContraseñausuario(),
                        $data->getCorreousuario(),
                        $data->getFechanacimiento(),
                        $data->getDocumentousuario(),
                        $data->getDireccionUsuario(),
                        $data->getImgUsuario(),
                        $data->getIdTipodoc(),
                        $data->getIdPerfilUsuario(),
                        $data->getIdUsuario()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(administrador $data)
    {
        try {
            $sql = "INSERT INTO USUARIO (nombreUsuario,apellidoUsuario,contraseñaUsuario,correoUsuario,fechaNacimiento,documentoUsuario,estadoUsuario,direccionUsuario,imgUsuario,idTipoDoc,idPerfilUsuario) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->getNombreusuario(),
                        $data->getApellidousuario(),
                        $data->getContraseñausuario(),
                        $data->getCorreousuario(),
                        $data->getFechanacimiento(),
                        $data->getDocumentousuario(),
                        $data->getEstadousuario(),
                        $data->getDireccionUsuario(),
                        $data->getImgUsuario(),
                        $data->getIdTipodoc(),
                        $data->getIdPerfilUsuario()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
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
    public function ListarPerfil()
    {
        try {
            $sql = $this->pdo->prepare("SELECT * FROM perfilusuario");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    function contarRegistros()
    {
        try {
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM usuario");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    function contarUsuariosInactivos()
    {
        try {
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM usuario
            WHERE estadoUsuario = 0");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    function contarUsuariosSinVerificar()
    {
        try {
            $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM usuario
            WHERE estadoUsuario = NULL");
            $sql->execute();
			return $sql->fetchColumn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    function imgUsuario($idusuario)
    {
        try {
            $sql = $this->pdo->prepare("SELECT imgUsuario FROM usuario
            WHERE idUsuario = ? ");
            $sql->execute($idusuario);
            $result = $sql->fetch(PDO::FETCH_OBJ);
			return $result->imgUsuario;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
