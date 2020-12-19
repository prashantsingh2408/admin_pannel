<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users</h1>
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
            <h3 class="card-title">Users Records</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <!-- <th>Photo</th> -->
                        <th>Photo</th>
                        <th>Id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th class="float-right">
                            <form id='userAddForm' method="get" action='userAdd.php'>
                                <button form='userAddForm' type="submit" name="id" value="<?= $id ?>" class="btn btn-primary">
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
                    $sql = "SELECT pic,id,firstname,lastname,phone,email,gender FROM user";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $gender = $row['gender'];
                        $pic_src= $row['pic']

                    ?>

                        <tr id="<?= 'row' . $id; ?>">
                            <td><img  src='<?= $pic_src ?>' height='60' alt='<?= $pic_src ?> not found'></td>
                            <td><?= $id ?></td>
                            <td><?= $firstname; ?></td>
                            <td><?= $lastname; ?></td>
                            <td><?= $phone; ?></td>
                            <td><?= $email; ?></td>
                            <td><?= $gender; ?></td>
                            <td class='text-right py-0 align-middle'>
                                <div class='btn-group btn-group-sm'>
                                    <form action='userEdit.php' method='get'>
                                        <button type="submit" name="id" value="<?= $id ?>" class="btn btn-primary">
                                            <i class="icon-user icon-white"></i> Edit
                                        </button>
                                    </form>
                                    <form method='get' action='userView.php'>
                                        <button type="submit" name="id" value="<?= $id ?>" class='btn btn-info'><i class='fas fa-eye'></i></button>
                                    </form>
                                    <a onclick='removeUser(<?= $id; ?>)' class='btn btn-danger'><i class='fas fa-trash'></i></a>
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