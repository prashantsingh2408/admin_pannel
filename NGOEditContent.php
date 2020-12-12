<!-- Content Wrapper. Contains page content -->
<?php
require "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM ngos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">NGO Edit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.userTable -->
    <section class="content">

        <div class="container-fluid">
            <form id='editForm' method="POST" action="NGOEditSave.php">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"><?= $row['name_ngos'] ?></h3>&nbsp; Fill Detail</h3>
                    </div>
                    <div class="card-body">

                        <!-- name_nogs -->
                        <div class="input-group mb-3">
                            <input name='name_ngos' type="text" class="form-control" placeholder="NGO Name" value="<?= $row['name_ngos'] ?>">
                        </div>
                        <!--Partner -->
                        <div class="input-group mb-3">
                            <input name='partner' type="text" class="form-control" placeholder="Partner" value="<?= $row['partner'] ?>">
                        </div>
                        <!-- current_value -->
                        <div class="input-group mb-3">
                            <input name='current_amount' type="text" class="form-control" placeholder="Current Amount" value="<?= $row['current_amount'] ?>">
                        </div>
                        <!-- total_goal -->
                        <div class="input-group mb-3">
                            <input name='total_goal' type="text" class="form-control" placeholder="Total Goal" value="<?= $row['total_goal'] ?>">
                        </div>

                        <!-- no_of_worker -->
                        <div class="input-group mb-3">
                            <input name='no_of_workout' type="text" class="form-control" placeholder="No of Workout" value="<?= $row['no_of_workout'] ?>">
                        </div>
                        <!-- description -->
                        <div class="input-group mb-3">
                            <input name='description' type="text" class="form-control" placeholder="description" value="<?= $row['description'] ?>">
                        </div>

                        <!-- about -->
                        <div class="input-group mb-3">
                            <input name='about' type="text" class="form-control" placeholder="about" value="<?= $row['about'] ?>">
                        </div>

                        <!-- Show Current Image -->
                        <img src="<?=$row['img']?>">
                        <!-- Img -->
                        <div class="input-group">
                            <div class="custom-file">
                                <input name='' type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Picture</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>

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
                                <div class="modal-body">NOG Info Edited</div>
                                <div class="modal-footer">
                                    <button form='editForm' type='submit' name='id' value='<?= $id ?>' class="btn btn-secondary">
                                        Submit
                                    </button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                </from>
        </div><!-- /.container-fluid -->

    </section>
</div>
<!-- /.content-wrapper -->