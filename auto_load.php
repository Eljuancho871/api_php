<?php

function auto_load($class){

    $path_file = __DIR__."/".str_replace("\\", "/", $class).".php";

    if(is_file($path_file)){

        require_once $path_file;
    }else{

        echo "El archivo no existe, con la ruta ".$path_file;
    }
}

spl_autoload_register("auto_load");

?>