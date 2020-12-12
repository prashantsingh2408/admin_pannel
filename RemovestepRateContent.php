  <!-- Content Wrapper. Contains page content -->
  <?php
    require "config.php";
    $sql = "SELECT rate_per_km FROM admin_data";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
    $rate_per_km = $row['rate_per_km'];
  ?>
  <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <h1>Set Rate Per Step</h1>
              <div class="slidecontainer">
                  <input type="range" min="1" max="5000" value="<?=$rate_per_km?>" class="slider" id="myRange">
                  <div class='d-flex justify-content-center'>
                      <div id='submitRateMessage' class="alert alert-success" role="alert" style='display:none'>
                          Saved 
                      </div>
                  </div>
                  <div class='d-flex justify-content-center'>
                      <button class='btn btn-primary' onclick="submitRate()" id='submitRateButton'>
                          Save
                      </button>
                  </div>

                  <div class='d-flex justify-content-center'>
                      <p>Value: <span id="demo"></span> Rs</p>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
