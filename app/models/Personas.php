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
        return $query -> fetchAll();
    }
}


?>