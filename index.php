<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "./auto_load.php";
use app\database\Connect;

Connect::connect_db();

?>