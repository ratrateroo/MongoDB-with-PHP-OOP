<?php 
include 'init.php';
//searching one document and using projection
$document = $collection_users->findOne(['username'=> "wang", 'password'=>"123456"], ['projection' => ['_id'=> 0]]);
//create a cursor and iterate to see the data that was retrieved from MongoDB
$document = $collection_users->find();

foreach($document as $val) {
    //var_dump($val->username);
}


//use projection together with limit functionality

$document = $collection_users->find([], ['limit' => 2, 'projection'=> ['_id' => 0, 'admin'=> 0 ]]);

foreach($document as $val) {
    echo "<pre>";
    var_dump($val);
    echo "</pre>";
}


// var_dump($document);

echo date('Y-m-d', 1562355453);

//test if not match book - if null

$document = $collection_books->findOne(["bookTitle" => "book1","bookCategory" => "action"],['projection' => ['_id' => 1]]);

    var_dump($document);
    ?>

<?php 
          $query =$collection_books->find([],
          ['projection' => ['bookCategory' => 1, '_id' => 0]]);

          $distint = $collection_books->distinct('bookCategory', $query);

          foreach($distint as $value) {
            var_dump($value);
          }



          //Regex search
          $search = 'prince';
          $searched_result = $collection_books->find(['bookTitle' => new MongoDB\BSON\Regex($search, 'i')], ['projection' => ['bookTitle' => 1, '_id' => 0]]);

          foreach($searched_result as $value) {
            print_r($value);
          }

          echo "<br>";
          echo "<br>";
          echo "<pre>";
          print_r($_SESSION['order']);
          echo "<pre>";

          echo "<pre>";
          var_dump($_SESSION['order'][0]);


          echo "<pre>";


         //$insert = $collection_orders->insertOne(["customerID" => "test", "totalPrice" => ["value1"]]);

          // $insert - $collection_orders->FindOneAndUpdate(["customerID" => "test"], ['$set' => ["totalPrice" => "value3"]]);

          //$insert - $collection_orders->FindOneAndUpdate(["customerID" => "test"], ['$push' => ["totalPrice" => ["nested as array"]]]);

          //$insert - $collection_orders->FindOneAndUpdate(["customerID" => "test"], ['$push' => ["totalPrice.1" => ["nested as value"]]]);

          $find = $collection_orders->findOne(["customerID" => "test"]);

          echo $find->totalPrice[1][3][0];

        ?>