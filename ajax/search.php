<?php 
include '../init.php';

if(isset($_POST['data_to_send']) && ($_POST['data_to_send'] != " ")) {
    $foundBooks = $booksClass->search($_POST['data_to_send']);

    foreach($foundBooks as $book) {
        echo $book->bookTitle . ";";
    }
}
?>