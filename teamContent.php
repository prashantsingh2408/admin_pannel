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
  <!-- /.card -->
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Teams Record</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table">
        <!-- Team Heading -->
        <thead>
          <tr>
            <th>Logo</th>
            <th>Id</th>
            <th>Team Name</th>
            <th>Team Leader</th>
            <th>Team Members</th>
            <th class="float-right">
              <form id='teamAddForm' method="get" action='teamAdd.php'>
                <button form='teamAddForm' type="submit" name="id" value="<?= $id ?>" class="btn btn-primary">
                  <i class="icon-user icon-white"></i> Add
                </button>
              </form>
            </th>
          </tr>
        </thead>
        <tbody>
          <!-- Dynamic Table,Fetch and remove data from table -->
          <?php
          require 'config.php';
          $sql = "SELECT id,name, team_leader,team_members,pic FROM teams";
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()) {
          ?>
            <tr id="<?= 'team_row' . $row['id']; ?>">

              <!-- Team Contents -->
              <td><img src='<?= $row['pic']; ?>' height='40' alt='<?= $row['pic'] . 'not found' ?>'></td>
              <td><?= $row['id'];  ?></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['team_leader']; ?></td>
              <td><?= $row['team_members']; ?></td>


              <!-- Team Action Buttons -->
              <td class='text-right py-0 align-middle'>
                <div class='btn-group btn-group-sm'>

                  <!-- Team Edit Button -->
                  <form action='teamEdit.php' method='get'>
                    <button type="submit" name="id" value="<?= $id ?>" class="btn btn-primary">
                      <i class="icon-user icon-white"></i> Edit
                    </button>
                  </form>

                  <!-- Team View Button -->
                  <form method='get' action='teamView.php'>
                    <button type="submit" name="id" value="<?= $id ?>" class='btn btn-info'><i class='fas fa-eye'></i></button>
                  </form>

                  <!-- Team Remove Button -->
                  <a onclick="removeTeam('<?= 'team_row' . $row['id']; ?>')" class='btn btn-danger'><i class='fas fa-trash'></i></a>
                </div>
              </td>
              <!-- /Team Action Buttons -->
            </tr>
          <?php
          } // end while
          ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.content-wrapper -->