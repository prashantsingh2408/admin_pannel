<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- php -->
    <?php
    require "config.php";
    $sql = "SELECT id,name,steps, img FROM achievements";
    $result = $conn->query($sql);
    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <br />
            <br />
            <h2 align="center">Achievement</h2><br />
            <br />
            <form method="post" id="add_details">
                <div class="form-group">
                    <label>Steps</label>
                    <input type="text" name="steps" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="img" class="form-control" required />
                </div>
                <div class="form-group">
                    <input type="submit" name="add" id="add" class="btn btn-success" value="Add" />
                </div>
            </form>
            <br />
            <h3 align="center">View Achievement</h3>
            <br />
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Steps</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table_data">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $steps = $row["steps"];
                        $name = $row['name'];
                        $img  = $row['img']; ?>
                        <tr id=<?= 'goaltr' . $id ?>>
                            <td>
                                <?= $steps ?></td>
                            <td><?= $name ?></td>
                            <td><img src='<?= $img ?>'></td>
                            <td>
                                <button type="submit" id="del" name="del" class="text-right btn btn-danger" value="13" onclick="removetrAchievement('<?= 'goaltr' . $id ?>')" )"><i class="fa fa-trash"></i></button>
                            </td>
                            <!-- <td onclick="removetrAchievement('')"><i class="fa fa-trash"></td> -->
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-wrapper -->