<?php

//If user refresh  move to user.php
if (!isset($_GET['id'])) {
  echo "<script>
    window.location.href = 'user.php';
    </script>";
}
$id = $_GET['id'];
$sql = "SELECT * FROM teams WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Teams</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.userTable -->


  <section class="content">
    <div class="container-fluid">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"><?= 'nae' . 'Info Edit'  ?></h3>
        </div>
        <div class="card-body">
          <!-- Team Edit Form -->
          <form action='./teamEditSave.php' method='post' id='editForm' enctype='multipart/form-data'>
            <div class='row'>
              <!-- User id(disable,user cant't change it) -->
              <div class='col'>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@ ID</span>
                  </div>
                  <input disabled name='id' type="text" class="form-control" placeholder="<?= $row['id'] ?>" value="<?= $id ?>">
                </div>
              </div>
              <!-- name-->
              <div class='col'>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@ Name</span>
                  </div>
                  <input name='name' type="text" class="form-control" placeholder="<?= $row['name'] ?>" value="<?= $row['name'] ?>">
                </div>
              </div>
              <!-- /name -->

              <!-- team_leader-->
              <div class='col'>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@ Last Name</span>
                  </div>
                  <input name='team_leader' type="text" class="form-control" placeholder="<?= $row['team_leader'] ?>" value="<?= $row['team_leader'] ?>">
                </div>
              </div>
            </div>
            <!-- /team_leader-->

            <!-- team_members-->
            <div class='col'>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ Team members</span>
                </div>
                <input name='team_members' type="text" class="form-control" placeholder="<?= $row['team_members'] ?>" value="<?= $row['team_members'] ?>">
              </div>
            </div>

            <!-- /team_members -->

            <!-- Pic show and upload -->
            <div class='row'>
              <div class='col-4'>
                <!-- Current pic display -->
                <span> Current photo </span></br>
                <img src="<?= $row['pic'] ?>" alt="Current pic" width="100" height="100" style="vertical-align:bottom">
              </div>
              <div class='col-8'>
                <!-- Upload Pic -->
                <div class="input-group">
                  <div class="custom-file">
                    <input name='pic' type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Picture</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Pic show and upload -->

        </div>
        <!-- /user_id -->
        </form>

        <!-- Button -->
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Edit
          </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Done</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">User Info Edited</div>
              <div class="modal-footer">
                <button form='editForm' type='submit' name='id' value='<?= $id ?>' class="btn btn-secondary">
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- END Model -->
      </div>
      <!-- /.card-body -->


    </div>
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->