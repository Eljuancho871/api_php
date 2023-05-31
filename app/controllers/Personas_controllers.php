<?php

require_once "./auto_load.php";
use app\models\Personas;

$url = array_filter(explode("/", $_SERVER["REQUEST_URI"]));

if ($url[4] == "personas"){

    if($_SERVER["REQUEST_METHOD"] === "GET"){

        if(isset($url[5])){

            echo json_encode(Personas::persona_get($url[5]));
        }else{

            echo json_encode(Personas::personas_get());
        }
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        
    }

}else{

    exit("EndPoint no encontrado:(");
}

?>