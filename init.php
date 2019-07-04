<?php 
require 'vendor/autoload.php';
include 'Classes/Users.php';
//connection to the server
$connection = new MongoDB\Client;
//connection to the database
$db = $connection->bookstore;
//connection to the collection users
$collection_users = $db->users;

$userClass = new Users($collection_users);

//var_dump($userClass->getCollection());
?>


