<div class="content-wrapper" style="min-height: 564.331px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <?php
              require 'config.php';
              $sql = "SELECT COUNT(*) FROM user";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              foreach ($row as $key => $value) {
                $userRegister = $value;
              ?>

                <h3><?= $userRegister ?></h3>
              <?php } ?>
              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <!-- <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>New User This Week</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="./user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div> -->
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT COUNT(id) FROM ngos";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $ngos_count = $row['COUNT(id)'];
              ?>
              <h3><?= $ngos_count ?><sup style="font-size: 20px"></sup></h3>
              <p>No Of NGOs</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT COUNT(id) FROM teams";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $team_count = $row['COUNT(id)'];
              ?>
              <h3><?= $team_count ?><sup style="font-size: 20px"></sup></h3>
              <p>No Of Teams</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>

        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class='row'>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT COUNT(id) FROM team_members";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $team_members_count = $row['COUNT(id)'];
              ?>
              <h3><?= $team_members_count ?><sup style="font-size: 20px"></sup></h3>
              <p>Total No of Team Members</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT COUNT(goal_id) FROM goals";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $goals_count = $row['COUNT(goal_id)'];
              ?>
              <h3><?= $goals_count ?><sup style="font-size: 20px"></sup></h3>
              <p>No Of Goals Available</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT COUNT(id) FROM achievements";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $achievements_count = $row['COUNT(id)'];
              ?>
              <h3><?= $achievements_count ?><sup style="font-size: 20px"></sup></h3>
              <p>No of Achievements Available</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>



      </div>

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  
  <!-- /.content -->
</div>