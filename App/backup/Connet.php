<?php
error_reporting(E_PARSE);

//Nombre de usuario de mysql
define("USER", "root");

//Servidor de mysql
define("SERVER", "localhost");

//Nombre de la base de datos
define("BD", "imake");

//Contraseña de myqsl
define("PASS", "");

//Carpeta donde se almacenaran las copias de seguridad
define("BACKUP_PATH", "copias/");

date_default_timezone_set('America/Bogota');


class SGBD{
    //Funcion para hacer consultas a la base de datos
    public static function sql($query){
        if(!$con=mysqli_connect(SERVER,USER,PASS)){
            echo "Error en el servidor";
        }else{
            if (!mysqli_select_db(BD)) {
                echo "Error al conectar con la base de datos,(Nombre de la BD)";
            }else{
                mysqli_set_charset('utf8',$con);
                mysqli_query("SET AUTOCOMMIT=0;",$con);
                mysqli_query("BEGIN;",$con);
                if (!$consul = mysqli_query($query,$con)) {
                    echo 'Error en la consulta SQL ejecutada';
                    mysqli_query("ROLLBACK;",$con);
                }else{
                    mysqli_query("COMMIT;",$con);
                }
                return $consul;
            }
        }
    }  

    //Funcion para limpiar variables que contengan inyeccion SQL
    public static function limpiarCadena($valor) {
        $valor=addslashes($valor);
        $valor = str_ireplace("<script>", "", $valor);
        $valor = str_ireplace("</script>", "", $valor);
        $valor = str_ireplace("SELECT * FROM", "", $valor);
        $valor = str_ireplace("DELETE FROM", "", $valor);
        $valor = str_ireplace("UPDATE", "", $valor);
        $valor = str_ireplace("INSERT INTO", "", $valor);
        $valor = str_ireplace("DROP TABLE", "", $valor);
        $valor = str_ireplace("TRUNCATE TABLE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        return $valor;
    }
}
