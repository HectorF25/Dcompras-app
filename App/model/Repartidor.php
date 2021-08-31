<?php
require "../Config/Conexion.php";
class Repartidor extends Usuario{

    private $conn;
    public $idRepartidor;
    public $nombreRepartidor;
    public $apellidoRepartidor;
    public $estadoRepartidor;
    public $tipodocumentoRepartidor;
    public $documentoRepartidor;


    public function __Repartidor()
    {
        try
		{
			$this->conn = Conexion::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }

    public function Consultar($idRepartidor,$nombreRepartidor,$apellidoRepartidor,$estadoRepartidor,$tipodocumentoRepartidor,$documentoRepartidor){
        try{
            $sql="INSERT INTO USUARIOS (idusuario,nombreusuario,apellidousuario,contraseñausuario,correousuario,fechanacimiento,documentousuario,estadousuario,tipodocumento_idtipodoc) VALUES ('$idRepartidor','$nombreRepartidor','$apellidoRepartidor','$estadoRepartidor','$tipodocumentoRepartidor','$documentoRepartidor')";
            //ejecutarConsulta($sql);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>