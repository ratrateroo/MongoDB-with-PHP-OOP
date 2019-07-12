<!-- server response to ajax -->
<!-- backend response or server script -->
<?php 
include '../init.php';

if(isset($_POST['book'])) {

    if(isset($_SESSION['user_id'])) {

        $bookData = $booksClass->findBookById($_POST['book']);

        if(!isset($_SESSION['order'])) {

            $_SESSION['order'] = array();
            array_push($_SESSION['order'], $bookData);
    
        } else {
    
            array_push($_SESSION['order'], $bookData);
    
        }
        //print_r($_SESSION['order']);
        echo count($_SESSION['order']);

    } else {
        echo "unregistered";
    }

    
}