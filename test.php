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
