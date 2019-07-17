
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
  include 'modals.php';
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
      echo isset($_SESSION['admin_id']) ? 'data-toggle="modal" data-target="#adminModal"' : '';
      ?> href="#">Admin Panel</a></li>
      <li><a <?php 
      echo isset($_SESSION['user_id']) ? '' : 'data-toggle="modal" data-target="#registerModal"';
      ?> href="#">Register</a></li>
      <li><a <?php 
      echo isset($_SESSION['user_id']) ? '' : 'data-toggle="modal" data-target="#loginModal"';
      ?> id="loginModal" href="#"> Login </a></li>

      <li><a href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php?show=modal" rel="keep-params"
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
<!-- end  for displaying books -->

<?php 


?>





<!--arrows - pagination-->
 <div  id="arrowsContainer" >
    <div id="arrows">
     <a class="btn btn-info btn-lg" href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php<?php echo $moveLeft; ?>" >
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a> 


        <a class="btn btn-info btn-lg" style="float:right;" href="http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php<?php echo $moveRight; ?>" >
          <span class="glyphicon glyphicon-chevron-right"></span> 
        </a>
    </div>
</div>


<!--footer-->
      <div class = "footer" style="margin-top: 100px; height:40px;" > 
				<p> Company Name. Copyright &copy; 2016 - 2018 <?php echo $page; ?></p>
        <p> Current Page: <?php echo $page; ?></p>
        <p> Move Left:  <?php echo $moveLeft; ?></p>
        <p> Move Right:  <?php echo $moveRight;$maxPages ?></p>
        <p> Max Pages:  <?php echo $maxPages ?></p>
			</div>
		
	</div>


<script src="./js/ajax_search.js"></script>
<script src="./js/ajax_cart.js"></script>
<!-- <script src="./js/keep_params.js"></script> -->
<!-- <script src="./js/prevent_modal_close.js"></script> -->
</body>
</html>









