<?php
error_reporting(E_PARSE);

//Carpeta donde se almacenaran las copias de seguridad
define("BACKUP_PATH", "copias/");

date_default_timezone_set('America/Bogota');
class SGBD{
    //Funcion para hacer consultas a la base de datos
    public static function sql($query){
        if(!$con=mysqli_connect(DB_HOST, DB_USER, DB_PASS)){
            echo "Error en el servidor";
        }else{
            if (!mysqli_select_db($con,DB_NAME)) {
                echo "Error al conectar con la base de datos,(Nombre de la BD)";
            }else{
                mysqli_set_charset($con,'utf8');
                mysqli_query($con,"SET AUTOCOMMIT=0;");
                mysqli_query($con,"BEGIN;");
                if (!$consul = mysqli_query($con,$query)) {
                    echo 'Error en la consulta SQL ejecutada';
                    mysqli_query($con,"ROLLBACK;");
                }else{
                    mysqli_query($con,"COMMIT;");
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
