


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
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body mx-3">                      
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" class="form-control " id="loginusername" name="loginusername" required>
            <label  for="loginusername">Username</label>
          </div>
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" class="form-control " id="loginpassword" name="loginpassword" required>
            <label  for="loginpassword">Password</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="admin" value="yes">
            <label class="custom-control-label" for="defaultUnchecked">Login as Admin</label>
          </div>          
        </div>

        <div class="modal-footer d-flex justify-content-center">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-deep-orange" name="login" value="Submit" id="login">Submit</button>
        </div>
      </form> 
    </div>
  </div>
</div>

<!--      PHP Login Modal Start -->
<?php include 'modal/login_php.php'; ?>
<!--      PHP Login Modal End   -->
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
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" class="form-control validate" id="username" name="username">
            <label data-error="wrong" data-success="right" for="username" >Username</label>
          </div>
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" class="form-control validate" id="password" name="password">
            <label data-error="wrong" data-success="right" for="password">Password</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" class="form-control validate" id="email" name="email">
            <label data-error="wrong" data-success="right" for="email">Email</label>
          </div>
          <div class="md-form mb-5">
          <i class="fas fa-flag prefix grey-text"></i>
            <input type="text" class="form-control validate" id="country" name="country">
            <label data-error="wrong" data-success="right" for="country">Country</label>
          </div>
          <div class="md-form mb-5">
          <i class="fas fa-map-marker-alt prefix grey-text"></i>
            <input type="text" class="form-control validate" id="addresss" name="address">
            <label data-error="wrong" data-success="right" for="addresss">Address</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-deep-orange" name="register" value="Submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--      PHP Register Modal Start -->
          <?php include 'modal/register_php.php'; ?>
<!--      PHP Register Modal End   -->
<!--    Register End ======================================================================================================================-->

<!--    Admin Start ======================================================================================================================-->

<div class="modal fade" id="modalAdminForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-book mr-2"></i>Add a new book</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/books_admin.php" method="post" enctype="multipart/form-data">
        <div class="modal-body mx-3">
            <div class="form-group">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" class="form-control " id="title" name="title" required>
                <label  for="title">INSERT NEW BOOK TITLE:</label>
              </div>
            </div>

            <div class="form-group">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" class="form-control " id="category" name="category" required>
                <label  for="category">BOOK CATEGORY:</label>
              </div>
            </div>

            <div class="form-group">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" class="form-control " id="author" name="author" required>
                <label  for="author">BOOK AUTHOR:</label>
              </div>
            </div>

            <div class="form-group">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" class="form-control " id="price" name="price" required>
                <label  for="price">BOOK PRICE:</label>
              </div>
            </div>

            <div class="form-group">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" class="form-control " id="description" name="description" required>
                <label  for="description">BOOK DESCRIPTION:</label>
              </div>
            </div>

            <div class="form-group">
              <div class="md-form mb-5">                
                <input type="file" class="custom-file-input" id="cover_img" name="cover_img" aria-describedby="cover_img">                
                <label class="custom-file-label" for="cover_img">BOOK IMAGE:</label>
              </div>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">      
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-deep-orange" name="insert_book" value="Submit" id="insert_book" >Insert</button>
        </div>
      </form>                
    </div>
  </div>
</div>
<!--    Admin End ======================================================================================================================-->

<!--    Orders Modal Start ======================================================================================================================-->

<!-- user info -->

<?php if(isset($_SESSION['user_id'])) {
    
    $userData = $userClass->userData($_SESSION['user_id']);
    //var_dump($userData->country);
  }  ?>
<div class="modal fade" id="userInfos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">
        <?php echo isset($userData) ? $userData->username : 'Your';?>User Informations</h4>        
      </div>
      <!--Body-->
      
        <div class="modal-body">
          <table class="table table-hover">

            <thead>
              <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Country</th>
                <th>Address</th>
                <th>Admin</th>
              </tr>
            </thead>

            <tbody>

            <tr>
                <th>Id</th>
                <th><?php echo $userData->username; ?></th>
                <th><?php echo $userData->password; ?></th>
                <th><?php echo $userData->email; ?></th>
                <th><?php echo $userData->country; ?></th>
                <th><?php echo $userData->address; ?></th>
                <th><?php echo $userData->admin; ?></th>
              </tr>
              
            </tbody>
          </table>

        </div>
        <!--Footer-->
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>

         
        </div>
      
    </div>
  </div>
</div>
<!-- user info -->

<!-- Modal: modalCart -->
<div class="modal fade" id="ordersCartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">
        <?php echo isset($userData) ? $userData->username : 'Your';?>'s Cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <table class="table table-hover">

            <thead>
              <tr>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Erase</th>
              </tr>
            </thead>

            <tbody>
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
            </tbody>
          </table>

        </div>
        <!--Footer-->
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary" name="empty_cart" value="Submit" >Empty Cart</button>
          <button type="submit" class="btn btn-primary" name ="newOrder" value="Submit">Confirm Order</button>

         
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

    $("#ordersCartModal").on('hide.bs.modal', function() {
      // location.replace("http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/index.php");
      window.location.replace("http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/oldindex.php");
      
     
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
                url: "http://localhost/MongoDB%20with%20PHP%20in%20OOP/MongoDB-with-PHP-OOP/oldindex.php",
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
<!-- Modal: modalCart -->
<!--    Orders Modal End ======================================================================================================================-->

<!-- MDB Modals ------------------------------------------------------------------------------------------------------------------------->

<div id="" class="modal fade" role="dialog">
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

<div class="modal fade" id="errorModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> All fields are required !!! <p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, i got the ideea </button>        
      </div>
    </div>
  </div>
</div>

<!-- ORDERS Modal data-backdrop="static" data-keyboard="false"-->
<div id="" class="modal fade" role="dialog"  >
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



<!--modal for not logged in as admin-->
<div id="loginWarningAdmin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Not logged in as admin.</h4>
      </div>
      <div class="modal-body">
        <p> You have to login as an admin. <p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
      </div>
    </div>

  </div>
</div>

