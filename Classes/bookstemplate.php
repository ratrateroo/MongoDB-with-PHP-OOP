

    <div class="col-4">
      <div class="card mb-5">

      <!-- Card image -->
      <img class="card-img-top img-fluid z-depth-1" src="data:jpeg;base64,<?php echo $displayImage ; ?>" alt="thumbnail" class="img-thumbnail"
      style="width:100%; height:150px">
      
      

      <!-- Card content -->
      <div class="card-body">

          <!-- Title -->
          <h4 class="card-title" title="<?php echo $title; ?>"><a><?php echo $croppedTitle; ?></a></h4>
          
          <!-- Text -->
          <p class="card-text">Price: &euro;<?php echo $price; ?></p>
          
          
          <!-- Button -->

          <div class="btn-group mb-4" role="group" aria-label="Basic example">
            

            <a href="#" class="btn btn-primary" role="button" value="<?php echo $itemID; ?>" onclick="ajaxBuy(this.value)">Buy</a>
         
          <button
                        type="button"
                        class="btn btn-danger" 
                        data-toggle="popover"
                        data-placement="right"
                        data-trigger="click"
                        title="Book Description" 
                        data-content="<?php echo $description; ?>">Info</button>
          </div>


         
      

      </div>
      </div>
    </div>
  