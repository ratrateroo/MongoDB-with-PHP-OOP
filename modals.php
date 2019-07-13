
<!-- LOGIN Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login with username and password</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">

                      <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                      </div>
                      <div class="checkbox">
                        <label>
                        <input type="checkbox" name="admin" value = "yes"> Login as admin 
                        </label>
                      </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default" name ="login" value="Submit">Submit</button>
        </form>
      </div>
    </div>

  </div>
</div>

<?php 
  
  include 'modal/login_php.php';
?>



<!-- REGISGTER Modal -->
<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Your Account</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">

                      <div class="form-group">
                        <label for="email">Choose Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Choose Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Enter E-mail:</label>
                        <input type="text" class="form-control" id="pwd" name = "email">
                      </div>
                  
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default" name = "register" value="Submit">Submit</button>
        </form>
      </div>
    </div>

  </div>
</div>

<!-- PHP Register Modal -->

<?php 

 include 'modal/register_php.php';

?>

<!-- End of PHP Regieter Modal -->

<!--error modal-->
<div id="errorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Your Account</h4>
      </div>
      <div class="modal-body">
        <p> All fields are required !!! <p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok, i got the ideea </button>
      </div>
    </div>

  </div>
</div>

<!--error modal for login-->
<div id="errorModalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Error</h4>
      </div>
      <div class="modal-body">
        <p> All fields are required !!! <p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok, i got the ideea </button>
      </div>
    </div>

  </div>
</div>



<!-- ADMIN Modal -->
<div id="adminModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content ADMIN-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Admin Modal</h4>
      </div>
      <div class="modal-body">
        <form action="admin/books_admin.php" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="title">INSERT NEW BOOK TITLE:</label>
                        <input type="text" class="form-control" name="title">
                      </div>
                      <div class="form-group">
                        <label for="category">BOOK CATEGORY:</label>
                        <input type="text" class="form-control" name="category">
                      </div>
                      <div class="form-group">
                        <label for="author">BOOK AUTHOR:</label>
                        <input type="text" class="form-control" name="author">
                      </div>
                      <div class="form-group">
                        <label for="amount">BOOK PRICE: </label>
                        <input type="text" class="form-control" name = "price">
                      </div>
                      <div class="form-group">
                        <label for="amount">BOOK DESCRIPTION: </label>
                        <input type="text" class="form-control" name = "description">
                      </div>
                      <div class="form-group">
                        <label for="amount">BOOK IMG: </label>
                        <input type="file" class="form-control" name = "cover_img">
                      </div>
                  
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
          <button type="submit" class="btn btn-default" name = "insert_book" value="Submit">INSERT</button>
        </form>
      </div>
    </div>

  </div>
</div>



<!-- ORDERS Modal -->
<div id="ordersModal" class="modal fade" role="dialog"  data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">

    <!-- Modal content ADMIN-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Orders Modal</h4>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post" enctype="multipart/form-data">

                      <div class="form-group"  style="overflow: scroll; height: 300px;">
                        <label for="title">All the books:</label><br>
                          <table id="table" class="table table-hover table-fixed">
                            <tr>
                              <th>Title</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Erase</th>
                            </tr>
                           
                            <?php 

                            if(isset($_SESSION['order'])) {

                              $totalTablePrice = array();

                              foreach($_SESSION['order'] as $val) {

                                array_push($totalTablePrice, $ordersClass->getTotals($val[2], $val[3]));


                                echo '<tr>
                                        <td>'. $val[1] .'</td>
                                        <td>'. $val[3] .'</td>
                                        <td>&euro; '. $val[2] .'</td>
                                        <td 
                                        type="button" 
                                        id="'. $val[0] .'"
                                        price="'. $val[2] .'"
                                        class="remove btn btn-danger"

                                        >Remove</td>
                                      </tr>';
                              }
                            }

                            
                            ?>
                            <tr>
                              <td><strong>Total</strong></td>
                              <td>Quantity</td>
                              <td>&euro;<strong id="total"> <?php echo isset($_SESSION['order']) ? array_sum($totalTablePrice) : '';  ?> </strong></td>
                              <td></td>
                            </tr>
                            
                          </table>
                      </div>
                  
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-default" name="empty_cart" value="Submit" >Empty Cart</button>
          <button type="submit" class="btn btn-default" name = "newOrder" value="Submit">Confirm Order</button>
        </form>
      </div>
    </div>

  </div>
</div>

<script>
  $(document).ready(function(){
    $(".remove").click(function(){
      var item_price = $(this).attr("price");
      var bookId = $(this).attr("id");
      var total = $("#total").text();

      var total_sum = total - item_price;

      $(this).closest("tr").remove();
      $("#total").text(total_sum);
      
      $.post('http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php', {remove_id: bookId}, function(data){

      });
    });
  });
</script>
<?php 

if (isset($_POST['remove_id'])) {
  //remove from SESSION['order']
  $orderClass->removeBook($_SESSION['order'], $_POST['remove_id']);
  
}

?>

 <!--Confirmation Modal-->

<div id="confirmationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmation Order Modal</h4>
      </div>
      <div class="modal-body">
        <form action="ajax/refresh_index.php" method="post">

                      <div class="form-group">
                        <label for="userData">Thank you!</label><br>
                      </div>

                      <div class="form-group">
                        <label for="address">Shipping Address</label><br>
                      </div>
                      <div class="form-group">
                        <label for="total">Total Price</label><br>
                      </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-default" name ="ok" value="Submit">OK</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--error modal for login-->
<div id="loginWarning" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User not logged in.</h4>
      </div>
      <div class="modal-body">
        <p> You need to be logged in to buy!!! <p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok, i got the ideea </button>
      </div>
    </div>

  </div>
</div>

