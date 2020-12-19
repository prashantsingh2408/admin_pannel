<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Team</h1>
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
          <h3 class="card-title">Add Team</h3>
        </div>
        <div class="card-body">
          <form action='./teamAddSave.php' method="post" enctype="multipart/form-data" id='editForm'>

            <!-- Team Name -->
            <div class='col'>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ Team Name </span>
                </div>
                <input required='true' name='name' type="text" class="form-control" placeholder="Team Name" required="true">
              </div>
            </div>

            <!-- team_leader -->
            <div class='col'>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ Team Leader </span>
                </div>
                <input required='true' name='team_leader' type="text" class="form-control" placeholder="Leader leader name" required="true">
              </div>
            </div>
            <!-- /team_leader -->

            <!-- team_members -->
            <div class='col'>
              <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@ Team member separated by , </span>
                </div>
                <input required='true' name='team_members' type="text" class="form-control" placeholder="Team members" required="true">
              </div>
            </div>
            <!-- /team_members -->


            <!-- Upload Pic -->
            <div class="form-group mb-3">
              <label for="exampleFormControlFile1">Photo</label>
              <input type="file" name="pic" class="form-control">
              <!-- <input type="submit" name="submit" value="Upload" class="form-control-file" id="exampleFormControlFile1"> -->
            </div>

          </form>

          <!-- Button -->
          <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Add
            </button>
            <!-- <button type="submit" name='id' value="<?= $id ?>" class="btn btn-info">Edit</button> -->
            <!-- <a>
                            <button class="btn btn-default float-right">Done</button>
                        </a> -->
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
                <div class="modal-body">Team Added</div>
                <div class="modal-footer">
                  <button form='editForm' type='submit' name='submit' value='<?= $id ?>' class="btn btn-secondary">
                    Submit
                  </button>
                  <!-- <button type="submit" form='editForm' class="btn btn-secondary"
                                        data-dismiss="modal">
                                        Done
                                    </button> -->
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