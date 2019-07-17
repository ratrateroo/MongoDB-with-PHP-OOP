<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 1;



$sort = ['bookTitle' => 1]; 





//find how many books
$cursorPage = $collection_books->find([], []);
//total number of books
$total = $collection_books->count($cursorPage);

// number of books to show per page
$limit = 2;

// find out total pages
$maxPages = ceil($total/$limit);


// get the current page or set a default
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        // cast var as int
        $currentpage = (int) $_GET['page'];
} else {
        // default page num
        $currentpage = 1;
} 


// if current page is greater than total pages...
if ($currentpage > $maxPages) {
        // set current page to last page
        $currentpage = $maxPages;
     } // end if

     // if current page is less than first page...
if ($currentpage < 1) {
        // set current page to first page
        $currentpage = 1;
     } // end if

// the offset of the list, based on current page 
$skip = ($currentpage - 1) * $limit;




$cursorPage = $collection_books->find([], ['limit' => $limit, 'skip' => $skip, 'sort' => $sort]);


$range = 3;

$next = ($currentpage + 1);

$prev = ($currentpage - 1);


$moveRight;
$moveLeft;

switch ($currentpage) {
    
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