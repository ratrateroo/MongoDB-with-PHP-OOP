<?php 
if(isset($_SESSION['order'])) {
    if(isset($_POST['empty_cart'])) {
        unset($_SESSION['order']);
        header("Location: http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php");
    }

    if(isset($_POST['newOrder'])) {
        //var_dump($_SESSION['totalPrice']);

        $insert = $collection_orders->insertOne([
            "customerID" => $_SESSION['user_id'],
            "details" => $_SESSION['order'],
            "totalPrice" => $_SESSION['totalPrice'],
            "orderDate" => new MongoDB\BSON\UTCDateTime()]);
        $lastInsertedId = $insert->getInsertedId();
        $undateUserProfile = $collection_users->FindOneAndUpdate(
            ["_id" => $_SESSION['user_id']],
            ['$push' => [
                "ordersIDS" => $lastInsertedId
            ]]);

        echo "<script>
                $(document).ready(function(){
                    $('#confirmationModal').modal('show');
                });
        </script>";

        unset($_SESSION['order']);
            
        
    }
}
