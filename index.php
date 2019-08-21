
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>E-BookStore</title>
<meta name= "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = yes">
<!-- <link rel="stylesheet" type="text/css" href="/Mongo/style.css"> -->
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
<noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>
</head>

<?php 
  include 'init.php';
  include 'admin/orders.php';
  include 'modals.php';
  //include 'oldmodals.php';
  //if(isset($_SESSION['user_id'])) {
    //var_dump($_SESSION['user_id']);
  //}

  if(isset($_SESSION['user_id'])) {
    
    $userData = $userClass->userData($_SESSION['user_id']);
    //var_dump($userData->country);
  } 

  


?>

<body>



    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="oldindex.php">Marcus Bookstore</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <!-- Admin Nav with Modal -->
          <li class="nav-item">
            <a href="#" class="nav-link"  <?php echo isset($_SESSION['admin_id']) ? 'data-toggle="modal" data-target="#modalAdminForm"' : 'data-toggle="modal" data-target="#loginWarningAdmin"'; ?>>Admin Panel</a>
          </li>

          
          <!-- Register Nav with Modal -->
          <li class="nav-item">        
            <a href="#" class="nav-link" <?php  echo isset($_SESSION['user_id']) ? '' : 'data-toggle="modal" data-target="#modalRegisterForm"';?>>Register</a>
          </li>

          
          <!-- Login Nav with Modal -->
          <li class="nav-item">
            <a href="#" class="nav-link" <?php echo isset($_SESSION['user_id']) ? '' : 'data-toggle="modal" data-target="#modalLoginForm"'; ?>>Login</a>
          </li>

          

          

          

         

          <li class="nav-item">
            <a class="nav-link" href="" data-toggle="modal" data-target="#ordersCartModal">
              
                  <?php echo isset($_SESSION['order']) ? '<i class="fas fa-cart-arrow-down">
                <span class="badge badge-pill badge-danger" id="shopcart">'. count($_SESSION['order']).'</span> </i> ' : '<i class="fas fa-cart-arrow-down">
                <span class="badge badge-pill badge-danger" id="shopcart"></span> </i> <script>$("#ordersCartModal").modal("show");</script>';
                        
                        ?>
                             
                             
            </a>
          </li>

          <!-- Username when logged in -->
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user mr-1"></i><span class="glyphicon glyphicon-user">&nbsp;</span><?php echo isset($userData) ? $userData->username : 'No User'; ?></a>
          </li>

         <!-- Logout Nav when user is logged in -->
          <?php echo isset($_SESSION['user_id']) ? '<li class="nav-item" ><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt mr-1"></i>Logout</a></li>' : ''; ?>

     <!-- Username info show modal -->
     <li class="nav-item">
            <a class="nav-link" href="" data-toggle="modal" data-target="#userInfos"><i class="fas fa-user mr-1"></i><span class="glyphicon glyphicon-user">&nbsp;</span><?php echo isset($userData) ? $userData->username : 'No User';?> infos</a>
          </li>



        </ul>
        <!-- Links -->

        <form class="form-inline" method="post" action="">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search" list="searchedBooks" id="searchBar">
            <datalist id="searchedBooks">          
            </datalist>
          </div>
        </form>

         
      </div>


      



      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar--------------------------------------------------------------------------------------------------------->

    







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

    <!-- Pagination-->
    <nav class="white">
      <ul class="pagination pg-red justify-content-center">
        <li class="page-item">
          <a class="page-link" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link">1</a></li>
        <li class="page-item pagination-hover-inactive"><a class="page-link">2</a></li>
        <li class="page-item"><a class="page-link">3</a></li>
        <li class="page-item"><a class="page-link">4</a></li>
        <li class="page-item"><a class="page-link">5</a></li>
        <li class="page-item">
          <a class="page-link" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- Pagination-->



    <!-- Footer --------------------------------------------------------------------------------------------------------->
    <footer class="page-footer fixed-bottom font-small elegant-color-dark pt-4">
      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#">Marcus Bookstore Ltd.</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

<script src="./js/ajax_search.js"></script>
<script src="./js/ajax_cart.js"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>




</body>
</html>









