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
          <form action='./teamEditSave.php' method='get' id='editForm'>
            <div class='row'>
              <!-- User id(disable,user cant't change it) -->
              <div class='col'>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@ ID</span>
                  </div>
                  <input disabled name='id' type="text" class="form-control" placeholder="<?= $row['id'] ?>" value="<?= $row['id'] ?>">
                </div>
              </div>
              <!-- t_name-->
              <div class='col'>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@ Last Name</span>
                  </div>
                  <input name='t_name' type="text" class="form-control" placeholder="<?= $row['t_name'] ?>" value="<?= $row['t_name'] ?>">
                </div>
              </div>
              <!-- /t_name -->

              <!-- t_fn_leader-->
              <div class='col'>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@ Last Name</span>
                  </div>
                  <input name='t_fn_leader' type="text" class="form-control" placeholder="<?= $row['t_fn_leader'] ?>" value="<?= $row['t_fn_leader'] ?>">
                </div>
              </div>
            </div>
            <!-- /t_fn_name -->

            <!-- t_ln_leader-->
            <div class='col'>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ Last Name</span>
                </div>
                <input name='t_ln_leader' type="text" class="form-control" placeholder="<?= $row['t_ln_leader'] ?>" value="<?= $row['t_ln_leader'] ?>">
              </div>
            </div>

            <!-- /t_ln_name -->

            <!-- t_member-->
            <div class='col'>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ Team member</span>
                </div>
                <input name='t_members' type="text" class="form-control" placeholder="<?= $row['t_members'] ?>" value="<?= $row['t_members'] ?>">
              </div>
            </div>

            <!-- /t_members -->

            <!-- user_id-->
            <div class='col'>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ User ID</span>
                </div>
                <input name='user_id' type="text" class="form-control" placeholder="<?= $row['user_id'] ?>" value="<?= $row['user_id'] ?>">
              </div>
            </div>
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