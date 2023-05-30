<?php 

namespace app\database;

class Connect {

    private static $host = "127.0.0.1";
    private static $db_name = "registros";
    private static $password = "campus2023";
    private static $user = "campus";
    private static $connection;

    static final function connect_db(){

        try{

            self::$connection = new \PDO("mysql:host=".self::$host.";dbname=".self::$db_name, self::$user, self::$password);
            return self::$connection;
            
        }catch(\ErrorException $error){

            echo "Error DB -> ".$error;
        }
    }

}

?>