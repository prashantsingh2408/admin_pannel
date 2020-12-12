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
            <th>Id</th>
            <th>Team name</th>
            <th>Leader first name</th>
            <th>Leader last name</th>
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
          $sql = "SELECT id, t_name, t_fn_leader, t_ln_leader FROM teams";
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $t_name = $row['t_name'];
            $t_fn_leader = $row['t_fn_leader'];
            $t_ln_leader = $row['t_ln_leader'];
          ?>
            <tr id="<?= 'team_row' . $id; ?>">
              <!-- Team Contents -->
              <td><?= $id  ?></td>
              <td><?= $t_name; ?></td>
              <td><?= $t_fn_leader; ?></td>
              <td><?= $t_ln_leader; ?></td>
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
                  <a onclick="removeTeam('<?= 'team_row' . $id; ?>')" class='btn btn-danger'><i class='fas fa-trash'></i></a>
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