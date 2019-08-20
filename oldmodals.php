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


