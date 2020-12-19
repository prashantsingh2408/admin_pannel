<!-- Content Wrapper. Contains page content -->
<?php
require "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM ngos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$img = $row['img'];

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
                            <!-- name_ngos-->
                            <div class='col'>
                                <div class="input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@ NGO name</span>
                                    </div>
                                    <input name='name_ngos' type="text" class="form-control" placeholder="NGO name" value="<?= $row['name_ngos'] ?>">
                                </div>
                            </div>
                            <!-- /name_ngos -->

                            <!-- partner-->
                            <div class='col'>
                                <div class="input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Partner</span>
                                    </div>
                                    <input name='partner' type="text" class="form-control" placeholder="<?= $row['partner'] ?>" value="<?= $row['partner'] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- /partner-->

                        <!-- current_amount-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Current amount</span>
                                </div>
                                <input name='current_amount' type="text" class="form-control" placeholder="<?= $row['current_amount'] ?>" value="<?= $row['current_amount'] ?>">
                            </div>
                        </div>
                        <!-- /current_amount -->

                        <!-- total_goal-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Total goals</span>
                                </div>
                                <input name='total_goal' type="text" class="form-control" placeholder="<?= $row['total_goal'] ?>" value="<?= $row['total_goal'] ?>">
                            </div>
                        </div>
                        <!-- /total_goals -->

                        <!-- no_of_workout-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">No of workouts</span>
                                </div>
                                <input name='no_of_workout' type="text" class="form-control" placeholder="<?= $row['no_of_workout'] ?>" value="<?= $row['no_of_workout'] ?>">
                            </div>
                        </div>
                        <!-- /no_of_workout -->

                        <!-- description-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">descriptions</span>
                                </div>
                                <input name='description' type="text" class="form-control" placeholder="<?= $row['description'] ?>" value="<?= $row['description'] ?>">
                            </div>
                        </div>
                        <!-- /description -->

                        <!-- about-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">About</span>
                                </div>
                                <input name='about' type="text" class="form-control" placeholder="<?= $row['about'] ?>" value="<?= $row['about'] ?>">
                            </div>
                        </div>
                        <!-- /about -->



                        <!-- amount_raised-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Amount Raised</span>
                                </div>
                                <input name='amount_raised' type="text" class="form-control" placeholder="<?= $row['amount_raised'] ?>" value="<?= $row['amount_raised'] ?>">
                            </div>
                        </div>
                        <!-- /amount_raised -->

                        <!-- no_of_days-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">No of days</span>
                                </div>
                                <input name='no_of_days' type="text" class="form-control" placeholder="<?= $row['no_of_days'] ?>" value="<?= $row['no_of_days'] ?>">
                            </div>
                        </div>
                        <!-- /no_of_days -->

                        <!-- events-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Event</span>
                                </div>
                                <input name='events' type="text" class="form-control" placeholder="<?= $row['events'] ?>" value="<?= $row['events'] ?>">
                            </div>
                        </div>
                        <!-- /events -->

                        <!-- change_makers-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Change Makers</span>
                                </div>
                                <input name='change_makers' type="text" class="form-control" placeholder="<?= $row['change_makers'] ?>" value="<?= $row['change_makers'] ?>">
                            </div>
                        </div>
                        <!-- /change_makers -->

                        <!-- timespent-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Time Spent</span>
                                </div>
                                <input name='timespent' type="text" class="form-control" placeholder="<?= $row['timespent'] ?>" value="<?= $row['change_makers'] ?>">
                            </div>
                        </div>
                        <!-- /timespent -->

                        <!-- img show and upload -->
                        <div class='row'>
                            <div class='col-4'>
                                <!-- Current pic display -->
                                <span> Current photo </span></br>
                                <img src="<?= $row['img'] ?>" alt="<?= $row['img'] ?>. 'not found'" width="100" height="100" style="vertical-align:bottom">
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