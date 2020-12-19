<!-- Content Wrapper. Contains page content -->
<?php
$id = $_GET['id'];
require 'config.php';
$sql = "SELECT * FROM user WHERE id =$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $row['firstname'] ?> Info</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.userTable -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User View Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- <th style="width: 10px">#</th> -->
                                <th>User Field</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($row as $key => $value) {

                                if($key !="pic"){
                                ?>
                                    <tr>
                                        <td> <?= $key ?> </td>
                                        <th> <?= $value ?> </th>
                                    </tr>
                                <?php
                                }else{
                                    ?>
                                    <tr>
                                        <td> <?= $key ?> </td>
                                        <th>
                                            <img src ="<?= $value ?>" alt="<?=$value . 'not found' ?>" height='100'>
                                        </th>
                                    </tr>
                                <?php
                                }
                                ?>

                            <?php
                            }
                            ?>
                    
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->