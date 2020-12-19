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
          <h1 class="m-0 text-dark"><?= $row['name'] ?> Info</h1>
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
                <td>Name</td>
                <td><?= $row['name'] ?></td>
              </tr>

              <tr>
                <td>Leader name</td>
                <td><?= $row['team_leader'] ?></td>
              </tr>
              <tr>
                <td>Team memebrs</td>
                <td><?= $row['team_members'] ?></td>
              </tr>
              <tr>
                <td>pic</td>
                <td><img  src="<?= $row['pic'] ?>" alt="<?= $row['pic'] ?> . 'not fount'" height='60'></td>
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