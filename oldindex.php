
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>E-BookStore</title>
<meta name= "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = yes">
<!-- <link rel="stylesheet" type="text/css" href="/Mongo/style.css"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>
</head>

<?php 
  include 'init.php';
  include 'admin/orders.php';
  include 'oldmodals.php';
  
  //if(isset($_SESSION['user_id'])) {
    //var_dump($_SESSION['user_id']);
  //}

  if(isset($_SESSION['user_id'])) {
    
    $userData = $userClass->userData($_SESSION['user_id']);
    //var_dump($userData->country);
  } 

  


?>

<body>



 
<!--navigation-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WW Online Bookstore</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>

      <li><a <?php 
      echo isset($_SESSION['admin_id']) ? 'data-toggle="modal" data-target="#adminModal"' : 'data-toggle="modal" data-target="#loginWarningAdmin"';
      ?> href="#">Admin Panel</a></li>
      <li><a <?php 
      echo isset($_SESSION['user_id']) ? '' : 'data-toggle="modal" data-target="#registerModal"';
      ?> href="#">Register</a></li> 
      <li><a <?php 
      echo isset($_SESSION['user_id']) ? '' : 'data-toggle="modal" data-target="#loginModal"';
      ?> id="loginModal" href="#"> Login </a></li>

      <li><a href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/oldindex.php?show=modal" rel="keep-params"
      data-controls-modal="#ordersModal" ><span id="cart" class="glyphicon glyphicon-shopping-cart my-cart-icon">&nbsp;<span class="badge badge-notify my-cart-badge" id="shopcart">
      <?php 
      echo isset($_SESSION['order']) ? count($_SESSION['order']) : '';
      echo isset($_GET['show']) && $_SESSION['order']? '<script>$("#ordersModal").modal("show");</script>':'';
      ?>
      </span>
      </span></a></li>

      <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span><?php 
      echo isset($userData) ? $userData->username : 'No User';
      ?></a></li>
      <?php 
        
          echo isset($_SESSION['user_id']) ? '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">&nbsp;</span>Logout</a></li>' : '';
        
      ?>
    </ul>
   
    <form method="post"  class="navbar-form navbar-left" action="">
      <div class="form-group">
      <div class="ui-widget">
        <input type="text" class="form-control" placeholder="Search" name="search" list="searchedBooks" id="searchBar">
        <datalist id="searchedBooks">
          
        </datalist>
      <button type="submit" class="btn btn-success" name="search_call"><span class="glyphicon glyphicon-search"></span></button>
      </div>
      </div>
   
    </form>    
           
  </div>
</nav>
<!--end of navigation bar-->



<!--left side bar categories-->
<div class="container-fluid" >
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4 >Categories</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1"></a></li>
        <li><a href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php"> All </a></li>
        <?php 
          $query =$collection_books->find([],
          ['projection' => ['bookCategory' => 1, '_id' => 0]]);

          

          $distint = $collection_books->distinct('bookCategory', $query);

          foreach($distint as $value) {
            echo "<li><a href='http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php?category=$value'>" . $value . "</a></li>";
          }
        ?>
      </ul><br>
    </div>
<!--end left side bar categories-->

<!-- rows for displaying books -->
<?php 

          include 'ajax/pagination.php';
          if(isset($_POST['search'])) {
            $whatToDisplay = $booksClass->searchButton($_POST['search']);

          } else {
            $whatToDisplay = $cursorPage;
          }
          
          $category = (isset($_GET['category'])) ? $_GET['category'] : '';

          echo "<div class='row' style='margin-bottom: 40px;'>";

          $booksClass->display($category, $whatToDisplay);

          echo "</div>";
?>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover(); 
});

$(".titles").hover(
  function(){
  var fullTitle = $(this).attr("title");
  $(this).text(fullTitle);
  },
  function(){
  var shortTitle = $(this).text();
  if(shortTitle.length >= 16){
    shortTitle.substring(0, 16) + "..."
  }
  $(this).text(shortTitle);
});
</script>

<!-- end  for displaying books -->

<?php 


?>








<!--footer-->
      

  <div class="navbar navbar-default navbar-fixed-bottom">

<!--arrows - pagination-->
<div  id="arrowsContainer" >
    <div id="arrows">
     <a id="singlebutton" name="singlebutton" class="btn btn-primary" href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php<?php echo $moveLeft; ?>" >
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a> 
        <?php 

 
// if not on page 1, don't show back links
if ($currentpage > 1) {
  // show << link to go back to page 1
  echo " <a id='singlebutton' name='singlebutton' class='btn btn-primary' href='{$_SERVER['PHP_SELF']}?page=1'><<</a> ";
  // get previous page num
  $prevpage = $currentpage - 1;
  // show < link to go back to 1 page
  echo " <a id='singlebutton' name='singlebutton' class='btn btn-primary' href='{$_SERVER['PHP_SELF']}?page=$prevpage'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
  // if it's a valid page number...
  if (($x > 0) && ($x <= $maxPages)) {
     // if we're on current page...
     if ($x == $currentpage) {
        // 'highlight' it but don't make a link
        echo " <a id='singlebutton' name='singlebutton' class='btn btn-danger' href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
     // if not current page...
     } else {
        // make it a link
        echo " <a id='singlebutton' name='singlebutton' class='btn btn-primary' href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
     } // end else
  } // end if 
} // end for

// if not on last page, show forward and last page links        
if ($currentpage != $maxPages) {
  // get next page
  $nextpage = $currentpage + 1;
   // echo forward link for next page 
  echo " <a id='singlebutton' name='singlebutton' class='btn btn-primary' href='{$_SERVER['PHP_SELF']}?page=$nextpage'>></a> ";
  // echo forward link for lastpage
  echo " <a id='singlebutton' name='singlebutton' class='btn btn-primary' href='{$_SERVER['PHP_SELF']}?page=$maxPages'>>></a> ";
}
?>



        <a id="singlebutton" name="singlebutton" class="btn btn-primary"  href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php<?php echo $moveRight; ?>" >
          <span class="glyphicon glyphicon-chevron-right"></span> 
        </a>
    </div>
</div>


    
</div>

     



     

<script src="./js/ajax_search.js"></script>
<script src="./js/ajax_cart.js"></script>

<!-- <script src="./js/keep_params.js"></script> -->
<!-- <script src="./js/prevent_modal_close.js"></script> -->
</body>
</html>









