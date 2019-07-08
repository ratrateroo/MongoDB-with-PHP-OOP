<?php 
session_start();
require 'vendor/autoload.php';
include 'Classes/Users.php';
include 'Classes/Books.php';
//connection to the server
$connection = new MongoDB\Client;
//connection to the database
$db = $connection->bookstore;
//connection to the collection users
$collection_users = $db->users;

//connection to the collectin books
$collection_books = $db->books;

$userClass = new Users($collection_users);
$booksClass = new Books($collection_books);
//var_dump($userClass->getCollection());
?>


