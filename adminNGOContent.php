<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">NGOs</h1>
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
            <h3 class="card-title">NGOs Records</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name_ngos</th>
                        <th>Partner</th>
                        <th>Current_amount</th>
                        <th>total_goal</th>
                        <th class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="NGOAdd.php" class="btn btn-info"><i class="fas fa-plus"></i></a>
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>

                    <!-- Hide Edit form -->
                    <?php
                    require 'config.php';
                    $sql = "SELECT * FROM ngos";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name_ngos = $row['name_ngos'];
                    ?>
                        <div class="klaviyo_modal" id=<?= 'hideEditFormNGO' . $id ?> style="display:none;">
                            <div class="klaviyo_inner" style="overflow:scroll">
                                <a href="#" class="klaviyo_close_modal klaviyo_header_close">×</a>
                                <form action="//manage.kmail-lists.com/subscriptions/subscribe" method="POST" novalidate="novalidate" class="klaviyo_subscription_form">
                                    <input type="hidden" name="g" value="LIST_ID">
                                    <div class="klaviyo_fieldset">
                                        <p class="klaviyo_header">Edit <?= $name_ngos ?></p>
                                        <!-- <p class="klaviyo_subheader">Edit Info</p> -->
                                    </div>
                                    <div class="klaviyo_fieldset">
                                        <div id="<?= 'user' . $id ?>" class="klaviyo_field_group">
                                            <?php
                                            foreach ($row as $key => $value) {
                                            ?>

                                                <label for="k_id_modal_$email"><?= $key ?></label>
                                                <input contentEditable='true' placeholder="<?= $value ?>" type="email" id="k_id_modal_$email" name="email">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="klaviyo_fine_print"></div>
                                    <div class="klaviyo_form_actions">
                                        <button onclick="NGOUpdate('<?= 'user' . $id ?>')" type="submit" class="klaviyo_submit_button">
                                            <span>Update</span>
                                        </button>
                                    </div>
                                    <div class="klaviyo_below_submit"></div>
                                </form>
                                <div class="error_message"></div>
                                <div class="success_message"></div>
                            </div>
                        </div>
                    <?php
                    } //endwhile
                    ?>
                    <!-- /Hide Edit Form -->

                    <!-- Hide view form -->
                    <?php
                    require 'config.php';
                    $sql = "SELECT * FROM ngos";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name_ngos = $row['name_ngos'];
                    ?>
                        <div class="klaviyo_modal" id=<?= 'hideViewFormNGO' . $id ?> style="display:none;">
                            <div class="klaviyo_inner" style="overflow:scroll">
                                <a href="#" class="klaviyo_close_modal klaviyo_header_close">×</a>
                                <form action="//manage.kmail-lists.com/subscriptions/subscribe" method="POST" novalidate="novalidate" class="klaviyo_subscription_form">
                                    <input type="hidden" name="g" value="LIST_ID">
                                    <div class="klaviyo_fieldset">
                                        <p class="klaviyo_header"><?= $name_ngos ?> Info</p>
                                        <!-- <p class="klaviyo_subheader">Edit Info</p> -->
                                    </div>
                                    <div class="klaviyo_fieldset">
                                        <div id="<?= 'user' . $id ?>" class="klaviyo_field_group">
                                            <?php
                                            foreach ($row as $key => $value) {
                                            ?>
                                                <p><b><u><?= $key ?></u></b>: <?= $value ?></p>
                                                <!-- <p for="k_id_modal_$email"><u><?= $key ?></u></p> -->
                                                <!-- <p  placeholder="<?= $value ?>" type="email" id= "k_id_modal_$email" name="email"> -->
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="klaviyo_fine_print"></div>
                                    <div class="klaviyo_form_actions">
                                        <!-- <button onclick="updateUserInfo('<?= 'user' . $id ?>')" type="submit" class="klaviyo_submit_button">
                      <span>Update</span>
                    </button> -->
                                    </div>
                                    <div class="klaviyo_below_submit"></div>
                                </form>
                                <div class="error_message"></div>
                                <div class="success_message"></div>
                            </div>
                        </div>
                    <?php
                    } //endwhile
                    ?>
                    <!-- /Hide view form -->

                    <!-- Hide Add form -->
                    <div class="klaviyo_modal" id='hideAddFormNGO' style="display:none;">
                        <div class="klaviyo_inner" style="overflow:scroll">
                            <a href="#" class="klaviyo_close_modal klaviyo_header_close">×</a>
                            <form action="//manage.kmail-lists.com/subscriptions/subscribe" method="POST" novalidate="novalidate" class="klaviyo_subscription_form">
                                <input type="hidden" name="g" value="LIST_ID">
                                <div class="klaviyo_fieldset">
                                    <p class="klaviyo_header">Add </p>
                                    <p class="klaviyo_subheader">Edit Info</p>
                                </div>
                                <div class="klaviyo_fieldset">
                                    <div id='NGOAdd' class="klaviyo_field_group">
                                        <?php
                                        $sql = "SELECT * FROM ngos";
                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();
                                        foreach ($row as $key => $value) {
                                        ?>
                                            <!-- when input in pic -->

                                            <label for="k_id_modal_$email"><?= $key ?></label>
                                            <input contentEditable='true' placeholder="<?= $value ?>" type="email" id="k_id_modal_$email" name="email">
                                        <?php  } ?>
                                    </div>
                                </div>
                                <div class="klaviyo_fine_print"></div>
                                <div class="klaviyo_form_actions">
                                    <button onclick="NGOAdd('NGOAdd')" type="submit" class="klaviyo_submit_button">
                                        <span>Add</span>
                                    </button>
                                </div>
                                <div class="klaviyo_below_submit"></div>
                            </form>
                            <div class="error_message"></div>
                            <div class="success_message"></div>
                        </div>
                    </div>

                    <!-- /Hide Edit Form -->

                    <!-- Dynamic Table,Fetch and remove data from table -->
                    <?php
                    require 'config.php';
                    $sql = "SELECT id,name_ngos,partner,current_amount,total_goal FROM ngos";
                    $result = $conn->query($sql);

                    while ($row =  $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name_ngos = $row['name_ngos'];
                        $partner = $row['partner'];
                        $current_amount = $row['current_amount'];
                        $total_goal = $row['total_goal'];
                    ?>
                        <tr id="<?= $id; ?>">
                            <td contenteditable="true"><?= $id; ?></td>
                            <td contentedita ble="true"><?= $name_ngos; ?></td>
                            <td contenteditable="true"><?= $partner; ?></td>
                            <td contenteditable="true"><?= $current_amount; ?></td>
                            <td contenteditable="true"><?= $total_goal; ?></td>
                            <td class='text-right py-0 align-middle'>
                                <div class='btn-group btn-group-sm'>
                                    <form id='form' method='get' action="NGOEdit.php">
                                        <button form='form' type="submit" name='id' value='<?= $id ?>' class="btn btn-info"><i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                                    <form id='form2' method='get' action="NGOView.php">
                                        <button form='form2' type="submit" name='id' value='<?= $id ?>' class="btn btn-info"><i class="fas fa-eye"></i>
                                        </button>
                                    </form>
                                    <button onclick="remove('<?=$id; ?>')" class='btn btn-danger'><i class='fas fa-trash'></i></button>

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