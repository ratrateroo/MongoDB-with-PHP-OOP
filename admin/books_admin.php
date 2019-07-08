<?php 
include '../init.php';

//book, category, author, price, description, cover_img
//insert_book

if(isset($_POST['insert_book'])) {
    if(!empty($_POST['title']) && !empty($_POST['category']) && !empty($_POST['author']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_FILES['cover_img']) ) {
        $booksClass->newBook(
            $_POST['title'],
            $_POST['category'],
            $_POST['author'],
            $_POST['price'],
            $_POST['description'],
            $_FILES['cover_img']['tmp_name']
        );
    }
}
?>