<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">NGOs</h1>
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
            <h3 class="card-title">NGOs Records</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Id</th>
                        <th>Name_ngos</th>
                        <th>Partner</th>
                        <th>Current_amount</th>
                        <th>total_goal</th>
                        <th class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="NGOAdd.php" class="btn btn-info"><i class="fas fa-plus"></i></a>
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic Table,Fetch and remove data from table -->
                    <?php
                    require 'config.php';
                    $sql = "SELECT id,name_ngos,partner,current_amount,total_goal FROM ngos";
                    $result = $conn->query($sql);

                    while ($row =  $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name_ngos = $row['name_ngos'];
                        $partner = $row['partner'];
                        $current_amount = $row['current_amount'];
                        $total_goal = $row['total_goal'];
                    ?>
                        <tr id="<?= $id; ?>">
                            <td contenteditable="true"><?= $id; ?></td>
                            <td contentedita ble="true"><?= $name_ngos; ?></td>
                            <td contenteditable="true"><?= $partner; ?></td>
                            <td contenteditable="true"><?= $current_amount; ?></td>
                            <td contenteditable="true"><?= $total_goal; ?></td>
                            <td class='text-right py-0 align-middle'>
                                <div class='btn-group btn-group-sm'>
                                    
   
                                    <form id='form1' method='get' action="NGO_event_add.php">
                                        <button form='form1' type="submit" name='id' value='<?= $id ?>' class="btn btn-info">Add Event
                                        </button>
                                    </form>
                                    <form id='form2' method='get' action="NGOEdit.php">
                                        <button form='form2' type="submit" name='id' value='<?= $id ?>' class="btn btn-info"><i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                                    <form id='form3' method='get' action="NGOView.php">
                                        <button form='form3' type="submit" name='id' value='<?= $id ?>' class="btn btn-info"><i class="fas fa-eye"></i>
                                        </button>
                                    </form>
                                    <button onclick="remove('<?= $id; ?>')" class='btn btn-danger'><i class='fas fa-trash'></i></button>

                                </div>
                            </td>
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