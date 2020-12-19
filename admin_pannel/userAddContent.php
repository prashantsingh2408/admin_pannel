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
                    <h3 class="card-title">Add User</h3>
                </div>
                <div class="card-body">
                    <form action='./userAddSave.php' method="POST" enctype="multipart/form-data" id='editForm'>
                        <!-- Title and User -->
                        <!-- Title -->
                        <div class='row'>
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
                                    <input required='true' name='firstname' type="text" class="form-control" placeholder="Username" required="true">
                                </div>
                            </div>
                            <!-- User lastname-->
                            <div class='col'>
                                <div class="input-group mb-3 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@ Last Name</span>
                                    </div>
                                    <input required='true' name='lastname' type="text" class="form-control" placeholder="Username" required="true">
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
                            <input required='true' required='true' name='phone' class="form-control" placeholder="Phone">
                        </div>

                        <!-- Email -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i>
                                    &ensp;Email
                                </span>
                            </div>
                            <input required='true' required='true' name='email' type="email" class="form-control" placeholder="Email">
                        </div>

                        <!-- Gender -->
                        <div class="form-group">
                            <!-- radio 1-->
                            <div class="form-group clearfix" required='true'>
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
                            <input required='true' required='true' name='weight' type="title" class="form-control" placeholder="Weight">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Weight</span>
                            </div>
                        </div>

                        <!-- Title -->
                        <!-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-heading"></i>
                                    &ensp;Title</span>
                            </div>
                            <input required='true' name='title' type="title" class="form-control" placeholder="Title">
                        </div> -->

                        <!-- Bio -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i>
                                    &ensp;Bio</span>
                            </div>
                            <input required='true' name='bio' type="bio" class="form-control" placeholder="Bio">
                        </div>

                        <!-- Height -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fas fa-weight"></i> -->
                                    Height
                                </span>
                            </div>
                            <input required='true' name='height' type="height" class="form-control" placeholder="Height">
                        </div>

                        <!-- BirthDay -->
                        <div class="form-group">
                            <label>Birth Day:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input required='true' name='birthday' type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>


                        <!-- targetStep -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fas fa-weight"></i> -->
                                    Target Step
                                </span>
                            </div>
                            <input required='true' name='target_steps' type="height" class="form-control" placeholder="Target Step">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Km</span>
                            </div>
                        </div>

                    <!-- Upload Pic -->
                    <!-- TODO: Placeholder Img need to implement here -->
                        <div class="form-group mb-3">
                            <label for="exampleFormControlFile1">Photo</label>
                            <input type="file" name="pic" class="form-control" />
                            <!-- <input type="submit" name="submit" value="Upload" class="form-control-file" id="exampleFormControlFile1"> -->
                        </div>



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
                                    <div class="modal-body">User Added</div>
                                    <div class="modal-footer">
                                        <button form='editForm' type='submit' name='id' value='<?= $id ?>' class="btn btn-secondary">
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
                    </form>

                </div>
                <!-- /.card-body -->


            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->