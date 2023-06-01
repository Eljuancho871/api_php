<?php 

$url = array_filter(explode("/", $_SERVER["REQUEST_URI"]));
$id = isset($url[5]) ? $url[5] : false;

if ($url[4] == "personas"){

    require_once "./app/controllers/Personas_controllers.php";

}else{

    exit("EndPoint no encontrado:(");
}


?>