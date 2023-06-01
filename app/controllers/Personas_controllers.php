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

            print_r(Personas::persona_delete($id));
            echo "registro con el id ".$id." eliminado correctamente";
        }else{

            echo "No se puede eliminar todos los datos";
        }
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $body = file_get_contents("php://input");
        echo json_encode(Personas::persona_post(json_decode($body, true)));
        
    }

}else{

    exit("EndPoint no encontrado:(");
}

?>