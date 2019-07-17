<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 3;

$sort = ['bookTitle' => 1]; 

$skip = ($page - 1) * $limit;

$next = ($page + 1);

$prev = ($page - 1);


$cursorPage = $collection_books->find([], ['limit' => $limit, 'skip' => $skip, 'sort' => $sort]);

$total = $collection_books->count($cursorPage);

$maxPages = ceil($total/$limit);

$moveRight = 100;
$moveLeft = 100;

switch ($page) {
    
    case 1:
    $moveRight = '?page=' . $next;
    $moveLeft = '';   
    break;    
    case $maxPages:
            $moveRight = '';
            $moveLeft = '?page=' . $prev;
    break;
    default:
            $moveLeft = '?page=' . $prev;
            $moveRight = '?page=' . $next;
        break;
}
?>