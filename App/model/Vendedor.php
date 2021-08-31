<?php
require "../Config/Conexion.php";
class Vendedor extends Usuario{

    private $conn;
    public $idVendedor;
    public $nombreVendedor;
    public $apellidoVendedor;
    public $estadoVendedor;
    public $tipodocumentoVendedor;
    public $documentoVendedor;


    public function __Vendedor()
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

    public function Consultar($idVendedor,$nombreVendedor,$apellidoVendedor,$estadoVendedor,$tipodocumentoVendedor,$documentoVendedor){
        try{
            $sql="INSERT INTO USUARIOS (idusuario,nombreusuario,apellidousuario,contraseñausuario,correousuario,fechanacimiento,documentousuario,estadousuario,tipodocumento_idtipodoc) VALUES ('$idVendedor','$nombreVendedor','$apellidoVendedor','$estadoVendedor','$tipodocumentoVendedor','$documentoVendedor')";
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>