 <div class = "d-flex flex-row flex-wrap justify-content-center mt-5">
          <?php 
         if (!isset($_GET['find'])) {
              foreach($All_Data as $key => $val) {  ?>
            <div class="d-flex flex-wrap  bg-dark p-2 rounded-2 m-1" id="card">
              <div class = "product-img cont image " >
                  <img src = "../<?php echo $val['Cover_Image'] ?>" id="image" class = "image img-fluid d-block mx-auto" height="400px !important">
                  <div class="overlay w-100">
                     <div class="middle">
                      <div class="text w-100">
                        <p><?php echo $val['Author_Name'] ?></p>
                        <p><?php echo $val['State'] ?></p>
                        <p><?php echo $val['Edition_Date'] ?></p>
                        <p><?php echo $val['Category_Name'] ?></p>
                        <p><?php echo $val['Category_Type'] ?></p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class = "product-content text-center d-flex flex-column d-block m-auto mb-3">
                  <span class = " m-1 text-uppercase"><?php echo $val['Title'] ?></span>
                  <span class = " m-1 text-success"><?php echo $val['Status'] ?></span>
                  <button type="button" <?php if(!isset($val['Status']) || $val['Status'] !== "Available") { echo "hidden"; } ?> class="btn btn-outline-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">reserve</button>
              </div>
            </div>
           <?php 
           }
            
          } else if (isset($_GET['find'])) { //check if the method is po  st
              foreach($Filters as $key => $val) { //loops in the table of announce with filterd data and display the in cards 
                      ?>
            <div class="d-flex flex-wrap  bg-dark p-2 rounded-2 m-1" id="card">
              <div class = "product-img cont image " >
                  <img src = "../<?php echo $val['Cover_Image'] ?>" id="image" class = "image img-fluid d-block mx-auto" height="400px !important">
                  <div class="overlay w-100">
                     <div class="middle">
                      <div class="text w-100">
                        <p><?php echo $val['Author_Name'] ?></p>
                        <p><?php echo $val['State'] ?></p>
                        <p><?php echo $val['Edition_Date'] ?></p>
                        <p><?php echo $val['Category_Name'] ?></p>
                        <p><?php echo $val['Category_Type'] ?></p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class = "product-content text-center d-flex flex-column d-block m-auto mb-3">
                  <span class = " m-1 text-uppercase"><?php echo $val['Title'] ?></span>
                  <span class = " m-1 text-success"><?php echo $val['Status'] ?></span>
                  <button type="button" <?php if(!isset($val['Status']) || $val['Status'] !== "Available") { echo "hidden"; } ?> class="btn btn-outline-primary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">reserve</button>

              </div>
            </div>
           <?php  } } ?>



        </div>