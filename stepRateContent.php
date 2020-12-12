  <!-- Content Wrapper. Contains page content -->
  <?php
  require "config.php";
  $sql = "SELECT rate_per_km FROM admin_data";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $rate_per_km = $row['rate_per_km'];
  ?>
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Current Rate -->
        <pre id='current_rate_area'>Current rate <?= $rate_per_km ?> </pre>

        <!-- For Km -->
        <h1>Set Rate Per Km</h1>
        <input id='submit_rate_input_km' type='text' name='rs_per_km' placeholder="Rs per Km">
        <button class='btn btn-primary' onclick="submit_rate_btn_km()">
          Save
        </button>
        <div class='row'>
          <div id='set_rate_km_box' class="alert alert-success col-3" role="alert" style="display:none">
            <pre id='set_rate_km_text'></pre>
          </div>
        </div>

        <!-- For m -->
        <h1>Set Rate Per m</h1>
        <input id='submit_rate_input_m' type='text'  placeholder="Rs per m">
        <button class='btn btn-primary' onclick="submit_rate_btn_m()">
          Save
        </button>
        <div class='row'>
          <div id='set_rate_m_box' class="alert alert-success col-3" role="alert" style="display:none">
            <pre id='set_rate_m_text'></pre>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->