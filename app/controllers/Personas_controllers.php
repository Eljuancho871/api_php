<?php

require_once "./auto_load.php";
use app\models\Personas;

$url = array_filter(explode("/", $_SERVER["REQUEST_URI"]));
$id = isset($url[5]) ? $url[5] : false;

if ($url[4] == "personas"){

    if($_SERVER["REQUEST_METHOD"] === "GET"){

        if($id !== false){

            echo json_encode(Personas::persona_get($id));
        }else{

            echo json_encode(Personas::personas_get());
        }
    }

    if($_SERVER["REQUEST_METHOD"] === "DELETE"){

        if($id !== false){

            echo "registro con el id ".$id." eliminado correctamente";
        }else{

            echo "No se puede eliminar todos los datos";
        }
    }

}else{

    exit("EndPoint no encontrado:(");
}

?>