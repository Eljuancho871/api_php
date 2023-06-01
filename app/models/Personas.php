<?php  


namespace app\models;
require_once "./auto_load.php";
use app\database\Connect;

class Personas {

    private static $connection;
    final static function personas_get(){

        self::$connection = Connect::connect_db();
        $query = self::$connection -> query("SELECT * FROM `personas`");
        self::$connection = "";
        return $query -> fetchAll();
    }

    final static function persona_get($id){

        self::$connection = Connect::connect_db();
        $query = self::$connection -> query("SELECT * FROM `personas` WHERE id = $id");
        self::$connection = "";
        $data = $query -> fetchAll();
        return (count($data) <= 0) ? ["msg" => "error al obtener el registro"] : $data;
    }

    final static function persona_delete($id){

        self::$connection = Connect::connect_db();
        $query = self::$connection -> query("DELETE FROM `personas` WHERE id = $id");
        self::$connection = "";
        return $query -> fetchAll();
    }

    final static function persona_post($body){

        if(isset($body["nombre"]) && isset($body["edad"])){

            self::$connection = Connect::connect_db();
            $nombre = $body["nombre"];
            $edad = $body["edad"];
            self::$connection -> query("INSERT INTO `personas` (`id`, `nombre`, `edad`) 
                                        VALUES (NULL, '$nombre', '$edad' )");
            self::$connection = "";
            return ["msg" => "registro insertado correctamente"];
        }

        return ["msg" => "datos mal enviados"];
    }

    final static function persona_put($body, $id){

        if(isset($body["nombre"]) && isset($body["edad"])){

            self::$connection = Connect::connect_db();
            $nombre = $body["nombre"];
            $edad = $body["edad"];

            self::$connection -> query("UPDATE `personas` 
                SET nombre = '$nombre', edad = '$edad' WHERE id = $id");

            self::$connection = "";
            return ["msg" => "acualizado correctamente"];
        }

        return ["msg" => "no se pudo hacer la actualizacion del registro :("];
        
    }

}


?>