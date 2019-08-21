<!--    Orders Modal Start ======================================================================================================================-->
<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ordersCartModal">Launch modal</button>

<!-- Modal: modalCart -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?php echo isset($userData) ? $userData->username : 'Your';?>'s Cart</h4>
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