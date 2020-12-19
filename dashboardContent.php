<?php
require 'config.php';
$sql = "SELECT  * FROM teams";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


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
      <!-- row 1 -->
      <div class="row">
        <!-- .col 1 User Registration-->
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
        <!-- ./col 1 -->

        <!-- col 2 No of NGOs-->
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
              <p>No of NGOs</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col 2 -->

        <!-- col 3 No of Team -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              // count no of team member
              $sql = "SELECT COUNT(id) FROM teams";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $team_count = $row['COUNT(id)'];
              ?>
              <h3><?= $team_count  ?> <sup style="font-size: 20px"></sup></h3>
              <p>No of Teams</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col 3 -->
      </div>
      <!-- /.row 1 -->

      <!-- row 2 -->
      <div class='row'>
        <!--col 1 Total No of Team Members  -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <!--Total No of Team Members  -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $sql = "SELECT COUNT(id) FROM team_members";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $team_members_count = $row['COUNT(id)'];
              ?>
              <h3><?= $team_members_count ?> <sup style="font-size: 20px"></sup></h3>
              <p>Total Team Members</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <!-- /Total No of Team Members  -->
        </div>
        <!--/ col 1 Total No of Team Members  -->

        <!--col 2 Total No goal available  -->
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
              <p>No of Goals Available</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./adminNGO.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!--/col 2 Total No goal available  -->
      </div>
      <!-- /.row 2 -->


      <!-- row 3 -->
      <div class="row">
        <div class="col">
          <!-- Hall of fame -->
          <!-- Base on total_donation_steps -->
          <!-- Fetch hall of fame -->
          <?php
          require "config.php";
          $sql = "SELECT total_donation_steps,id,firstname,lastname,pic FROM user ORDER BY total_donation_steps DESC";
          $result = $conn->query($sql);

          $total_users = $result->num_rows;
          ?>
          <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hall of fame</h3>

                <div class="card-tools">
                  <span class="badge badge-danger"><?= $total_users ?> </span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->


              <div class="card-body p-0">
                <ul class="users-list clearfix">
                  <?php
                  $i = 0;
                  while ($rows = $result->fetch_assoc()) { //iterate over each row
                    $i = $i + 1; // count no of user printed
                  ?>
                    <li>
                      <img style='border-radius:50%;' src="<?= $rows['pic'] ?>" alt="<?= $rows['pic'] ?>">
                      <a class="users-list-name" href="#"><?= $rows['total_donation_steps'] ?></a>
                      <span class="users-list-date"><?= $rows['firstname'] . ' ' . $rows['lastname'] ?></span>
                    </li>
                  <?php

                    if ($i > 10) {
                      break; // only top 10 user print then loop break;
                    }
                  }
                  ?>



                  <!-- <li>
                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Norman</a>
                    <span class="users-list-date">Yesterday</span>
                  </li>
                  <li>
                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Jane</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">John</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">13 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">14 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nora</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nadia</a>
                    <span class="users-list-date">15 Jan</span>
                  </li> -->
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:">View All Users</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!--/.card -->
          </div>
          <!-- Hall of fame -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->