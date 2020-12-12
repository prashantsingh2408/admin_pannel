<!-- Content Wrapper. Contains page content -->
<?php
$id = $_GET['id'];
require 'config.php';
$sql = "SELECT * FROM teams WHERE id =$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?= $row['t_name'] ?> Info</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.userTable -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">User View Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <!-- <th style="width: 10px">#</th> -->
                <th>User Field</th>
                <th>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Id</td>
                <td><?= $row['id'] ?></td>
              </tr>
              <tr>
                <td>Table Name</td>
                <td><?= $row['t_name'] ?></td>
              </tr>

              <tr>
                <td>Leader first name</td>
                <td><?= $row['t_fn_leader'] ?></td>
              </tr>

              <tr>
                <td>Leader last name</td>
                <td><?= $row['t_ln_leader'] ?></td>
              </tr>

              <tr>
                <td>No of members</td>
                <td><?= $row['t_members'] ?></td>
              </tr>

              <tr>
                <td>Purpose</td>
                <td><?= $row['t_purpose'] ?></td>
              </tr>

              <tr>
                <td>User ID</td>
                <td><?= $row['user_id'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->