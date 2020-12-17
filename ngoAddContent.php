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
                    <h3 class="card-title">Fill Detail</h3>
                </div>
                <form id='NGOAddForm' method='POST' action='NGOAddSave.php' enctype="multipart/form-data">
                    <div class="card-body">

                        <!-- name_nogs -->
                        <div class="input-group mb-3">
                            <input name='name_ngos' type="text" class="form-control" placeholder="NGO Name">
                        </div>
                        <!--Partner -->
                        <div class="input-group mb-3">
                            <input name='partner' type="text" class="form-control" placeholder="Partner">
                        </div>
                        <!-- current_value -->
                        <div class="input-group mb-3">
                            <input name='current_amount' type="text" class="form-control" placeholder="Current Value">
                        </div>
                        <!-- total_goal -->
                        <div class="input-group mb-3">
                            <input name='total_goal' type="text" class="form-control" placeholder="Total Goal">
                        </div>

                        <!-- description -->
                        <div class="input-group mb-3">
                            <input name='discription' type="text" class="form-control" placeholder="Description">
                        </div>

                        <!-- about -->
                        <div class="input-group mb-3">
                            <input name='about' type="text" class="form-control" placeholder="About">
                        </div>

                        <!-- Img -->
                        <!-- <div class="input-group">
                                <div class="custom-file">
                                    <input name='file' type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Picture</span>
                                </div>
                            </div> -->


                        <!-- Upload Pic -->
                        <!-- TODO: Placeholder Img need to implement here -->
                        <div class="form-group mb-3">
                            <label for="exampleFormControlFile1">Photo</label>
                            <input type="file" name="img" class="form-control" />
                            <!-- <input type="submit" name="submit" value="Upload" class="form-control-file" id="exampleFormControlFile1"> -->
                        </div>

                        <div class="page-content header-clear-medium">
                            <!-- <div class="content">
                                <div class="container container-fluid">
                                    <div class="row">
                                        <div class="w-100 text-center">
                                            <div id="imgContainer">
                                                <form enctype="multipart/form-data" action="image_upload_demo_submit.php" method="post" name="image_upload_form" id="image_upload_form">
                                                    <div id="imgArea"><img src="./img/default.jpg">
                                                        <div class="progressBar">
                                                            <div class="bar"></div>
                                                            <div class="percent">0%</div>
                                                        </div>
                                                        <div id="imgChange"><span>Change Photo</span>
                                                            <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <button form='NGOAddForm' class="btn btn-primary"> Add </button>
                        </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->