<?php 
require 'vendor/autoload.php';
$connection = new MongoDB\Client;
//$connection = new MongoDB\Client("mongodb://localhost:27017");
//$collection = new MongoDB\Collection($manager, "logs","capped_logs");

var_dump($connection);

?>


