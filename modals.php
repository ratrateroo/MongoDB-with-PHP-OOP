
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
                        <label for="loginusername">Username:</label>
                        <input type="text" class="form-control" id="loginusername" name="loginusername">
                      </div>
                      <div class="form-group">
                        <label for="loginpassword">Password:</label>
                        <input type="password" class="form-control" id="loginpassword" name="loginpassword">
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

<!-- MDB Modals ------------------------------------------------------------------------------------------------------------------------->

<!--    Login Start =======================================================================================================================-->

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user mr-2"></i>Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="admin" value="yes">
          <label class="custom-control-label" for="defaultUnchecked">Login as Admin</label>
        </div>        
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-deep-orange">Submit</button>
      </div>
    </div>
  </div>
</div>

<!--    Login End  ========================================================================================================================-->

<!--    Register Start ====================================================================================================================-->

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-plus mr-2"></i>Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
        </div>
        <div class="md-form mb-5">
        <i class="fas fa-flag prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Country</label>
        </div>
        <div class="md-form mb-5">
        <i class="fas fa-map-marker-alt prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Address</label>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-deep-orange">Submit</button>
      </div>
    </div>
  </div>
</div>
<!--      PHP Register Modal -->
          <?php include 'modal/register_php.php'; ?>
<!--      End of PHP Regieter Modal -->
<!--    Register End ======================================================================================================================-->
<!-- MDB Modals ------------------------------------------------------------------------------------------------------------------------->

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
                        <label for="username">Choose Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="password">Choose Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="email">Enter E-mail:</label>
                        <input type="text" class="form-control" id="email" name = "email">
                      </div>

                      <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" class="form-control" id="country" name="country">
                      </div>

                      <div class="form-group">
                        <label for="addresss">Address:</label>
                        <input type="text" class="form-control" id="addresss" name="address">
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



<!-- ORDERS Modal data-backdrop="static" data-keyboard="false"-->
<div id="ordersModal" class="modal fade" role="dialog"  >
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
                              <td>&euro;<strong id="total"> <?php echo isset($_SESSION['order']) ? array_sum($totalTablePrice) : ''; 
                              $_SESSION['totalPrice'] = isset($_POST['total']) ? $_POST['total']: array_sum($totalTablePrice);
                              
                              ?> </strong></td>
                              <td></td>
                            </tr>
                            
                          </table>
                      </div>
                  
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-default" name="empty_cart" value="Submit" >Empty Cart</button>
          <button type="submit" class="btn btn-default" name ="newOrder" value="Submit">Confirm Order</button>
        </form>
      </div>
    </div>

  </div>
</div>

<script>
  $(document).ready(function(){

    $("#ordersModal").on('hide.bs.modal', function() {
      // location.replace("http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php");
      window.location.replace("http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php");
      
     
    });


    $(".remove").click(function(){
      var item_price = $(this).attr("price");
      var bookId = $(this).attr("id");
      var total = $("#total").text();

      var total_sum = total - item_price;

      console.log({remove_id: bookId});
      
      $(this).closest("tr").remove();
      $("#total").text(total_sum);
      
      

        
            $.ajax({
                url: "http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php",
                type: "post",
                data: {remove_id: bookId, total: total_sum},
                success: function (response) {
                    console.log(response);   
                                    

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });
        






    });
  });
</script>
<?php 

  if (isset($_POST['remove_id'])) {
    
    //remove from SESSION['order']
    $ordersClass->removeBook($_SESSION['order'], $_POST['remove_id']);
    
  }

?>

<?php 
$finalUserData = isset($_SESSION['user_id']) ? $userClass->userData($_SESSION['user_id']): '';
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
        

                      <div class="form-group">
                        <label for="userData">Dear <?php echo $finalUserData->username; ?> Thank you for buying from us.</label><br>
                      </div>

                      <div class="form-group">
                        <label for="address">Shipping Address: <?php 
                        echo $finalUserData->country . " " . $finalUserData->address;
                        ?></label><br>
                      </div>
                      <div class="form-group">
                        <label for="total">Total Price: <?php echo $_SESSION['totalPrice']; ?></label><br>
                      </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" name ="ok" data-dismiss="modal">OK</button>
        
      </div>
    </div>
  </div>
</div>

<script>

$("#confirmationMdal").on('hide.bs.modal', function() {
      
      window.location.replace("http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/admin/unset.php")
     
    });

</script>

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

