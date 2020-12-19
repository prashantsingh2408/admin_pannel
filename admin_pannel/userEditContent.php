<?php

//If user refresh  move to user.php
if (!isset($_GET['id'])) {
    echo "<script>
    window.location.href = 'user.php';
    </script>";
}

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = $id";
if ($result = $conn->query($sql)) {
    $row = $result->fetch_assoc();
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $phone = $row['phone'];
    $email = $row['email'];
    $gender = $row['gender'];
    $weight = $row['weight'];
    $target_steps = $row['target_steps'];
    $birthday = $row['birthday'];
    $bio = $row['bio'];
    $height = $row['height'];
    $pic = $row['pic'];
}
?>
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


    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">

                    <h3 class="card-title"><?= $firstname . 'Info Edit'  ?></h3>
                </div>
                <div class="card-body">
                    <form action='./userEditSave.php' method='POST' id='editForm' enctype='multipart/form-data'>
                        <!-- Title and User -->
                        <!-- Title -->
                        <div class='row'>
                            <!-- Title and User -->
                            <!-- Title -->
                            <div class="col-2">
                                <div class="form-group mb-3">
                                    <select name='title' class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="mr" selected="selected" data-select2-id="3">Mr</option>
                                        <option value="mrs" data-select2-id="21">Mrs</option>
                                        <option value="miss" data-select2-id="22">Miss</option>
                                        <option value="master" data-select2-id="23">Master</option>
                                        <option value="dr" data-select2-id="24">Dr</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true">
                                        </span></span>
                                </div>
                            </div>
                            <!-- User firstname -->
                            <div class='col'>
                                <div class="input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@ First Name</span>
                                    </div>
                                    <input name='firstname' type="text" class="form-control" placeholder="<?= $firstname ?>" value="<?= $firstname ?>">
                                </div>
                            </div>
                            <!-- User lastname-->
                            <div class='col'>
                                <div class="input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@ Last Name</span>
                                    </div>
                                    <input name='lastname' type="text" class="form-control" placeholder="<?= $lastname ?>" value="<?= $lastname ?>">
                                </div>
                            </div>
                        </div>
                        <!-- /Title and User -->

                        <!-- Phone -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i>
                                    &ensp;Phone
                                </span>
                            </div>
                            <input name='phone' class="form-control" placeholder="<?= $phone ?>" value="<?= $phone ?>">
                        </div>

                        <!-- Email -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i>
                                    &ensp;Email
                                </span>
                            </div>
                            <input name='email' type="email" class="form-control" placeholder="<?= $email ?>" value="<?= $email ?>">
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <!-- radio 1-->
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">

                                    <input name='gender' value='m' type="radio" id="radioPrimary1" name="r1" checked="">
                                    <label for="radioPrimary1">Male
                                    </label>
                                </div>
                                <!-- radio -->
                                <div class="icheck-primary d-inline">
                                    <input name='gender' value='f' type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">Female
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Weight -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-weight"></i>
                                    &ensp;Weight</span>
                            </div>
                            <input name='weight' type="title" class="form-control" placeholder="<?= $weight ?>" value="<?= $weight ?>">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Weight</span>
                            </div>
                        </div>


                        <!-- Bio -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i>
                                    &ensp;Bio</span>
                            </div>
                            <input name='bio' type="bio" class="form-control" placeholder="<?= $bio ?>" value="<?= $firstname ?>">
                        </div>

                        <!-- Height -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fas fa-weight"></i> -->
                                    Height
                                </span>
                            </div>
                            <input name='height' type="height" class="form-control" placeholder="<?= $height ?>" value="<?= $height ?>">
                        </div>

                        <!-- BirthDay -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input name='birthday' type="text" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?= $birthday ?>">
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>


                        <!-- targetSteps -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fas fa-weight"></i> -->
                                    Target Step
                                </span>
                            </div>
                            <input name='target_steps' type="height" class="form-control" placeholder="Target Step" value="<?= $target_steps ?>">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Km</span>
                            </div>
                        </div>

                        <!-- Today's steps -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fas fa-weight"></i> -->
                                    Today's steps
                                </span>
                            </div>
                            <input name='todays_steps' type="height" class="form-control" placeholder="Today's step" value="<?= $row['todays_steps'] ?>">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Km</span>
                            </div>
                        </div>

                        <!-- Pic show and upload -->
                        <div class='row'>
                            <div class='col-4'>
                                <!-- Current pic display -->
                                <span> Current photo </span></br>
                                <img src="<?= $pic ?>" alt="Current pic" width="100" height="100" style="vertical-align:bottom">
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