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
                            <div class="input-group-prepend">
                                <span class="input-group-text">Name NGOs</span>
                            </div>
                            <input name='name_ngos' type="text" class="form-control" placeholder="NGO Name">
                        </div>
                        <!--Partner -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Partner</span>
                            </div>
                            <input name='partner' type="text" class="form-control" placeholder="Partner">
                        </div>
                        <!-- current_amount -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Current amount</span>
                            </div>
                            <input name='current_amount' type="text" class="form-control" placeholder="Current amount">
                        </div>
                        <!-- current_amount -->

                        <!-- total_goal -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Total Goal</span>
                            </div>
                            <input name='total_goal' type="text" class="form-control" placeholder="Total Goal">
                        </div>


                        <!-- no_of_workout -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No of workout</span>
                            </div>
                            <input name='no_of_workout' type="text" class="form-control" placeholder="No of workout">
                        </div>
                        <!-- no_of_workout -->

                        <!-- description -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <input name='description' type="text" class="form-control" placeholder="Description">
                        </div>
                        <!-- description -->

                        <!-- about -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">About</span>
                            </div>
                            <input name='about' type="text" class="form-control" placeholder="About">
                        </div>

                        <!-- amount_raised-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Amount raised</span>
                                </div>
                                <input name='amount_raised' type="text" class="form-control" placeholder="amount_raised">
                            </div>
                        </div>
                        <!-- /amount_raised -->

                        <!-- on_of_days-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">No of Days</span>
                                </div>
                                <input name='on_of_days' type="text" class="form-control" placeholder="on_of_days">
                            </div>
                        </div>
                        <!-- /on_of_days -->

                        <!-- events-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Event</span>
                                </div>
                                <input name='events' type="text" class="form-control" placeholder="Event">
                            </div>
                        </div>
                        <!-- /events -->

                        <!-- change_makers-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Change Makers</span>
                                </div>
                                <input name='change_makers' type="text" class="form-control" placeholder="Change Makers">
                            </div>
                        </div>
                        <!-- /change_makers -->

                        <!-- timespent-->
                        <div class='col'>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Time Spent</span>
                                </div>
                                <input name='timespent' type="text" class="form-control" placeholder="Time Spent">
                            </div>
                        </div>
                        <!-- /timespent -->

                        <!-- Upload Pic -->
                        <!-- TODO: Placeholder Img need to implement here -->
                        <div class="form-group mb-3">
                            <label for="exampleFormControlFile1">Photo</label>
                            <input type="file" name="img" class="form-control" />
                            <!-- <input type="submit" name="submit" value="Upload" class="form-control-file" id="exampleFormControlFile1"> -->
                        </div>

                        <div class="page-content header-clear-medium">

                            <button form='NGOAddForm' class="btn btn-primary"> Add </button>
                        </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->