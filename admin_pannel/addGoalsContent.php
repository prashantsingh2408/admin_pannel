<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- php -->
    <?php
    require "config.php";
    $sql = "SELECT goal_name, goal_value FROM goals";
    $result = $conn->query($sql);
    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div>
                <fieldset>
                    <legend>Option Values</legend>
                    <table id="option-value" class="table table-striped table-hover" style="width:95%" align="center">
                        <thead>
                            <tr>
                                <td class="text-left required">Goal Name</td>
                                <td class="text-left required">Goal View</td>
                                <td class="text-right">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php
                            $sql = "SELECT goal_name, goal_value FROM goals";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                $goal_name = $row["goal_name"];
                                $goal_value = $row['goal_value'];
                            ?>
                                <tr id=<?= 'goalrow' . $goal_name ?>>
                                    <td><?= $goal_name ?></td>
                                    <td><?= $goal_value ?></td>
                                    <td class="pull-right">
                                        <button type="submit" id="del" name="del" class="text-right btn btn-danger" value="13" onclick="removeGoal('<?= 'goalrow' . $goal_name ?>')"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <form method="post" id="add_details">
                                <tr>
                                    <td>
                                        <div class="input-group mb-3">

                                            <input name="goal_name" class="form-control" placeholder="Add Goal Name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <input name="goal_value" class="form-control" placeholder="Add Goal Value">
                                        </div>
                                    </td>

                                    <td class="text-right">
                                        <button form="add_details" type="submit" name="add" id='add' data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Option Value"><i class="fa fa-plus-circle"></i></button>
                                    </td>
                                </tr>
                            </form>
                        </tfoot>
                    </table>
                </fieldset>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-wrapper -->