<?php
require_once 'header.php';

include "config.php";
//include "session.php";
//include "profile-check.php";
include "auth.php";

if (!(auth())) {
    header("location: login.php");
}


$sql = "SELECT * from goals";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $goals[] = $row;
    }
}

?>
<div class="page-content header-clear-medium">
    <form id="goalform" method="post">
        <div class="content">
            <div class='container container-fluid text-center'>
                <h1 class="mb-4">Pick A Daily Goal</h1>
                <div class="progress my-progress-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>
                <div class='container container-fluid mt-5'>

                    <?php
                    if (isset($goals)) {
                        $x = 1;
                        foreach ($goals as $goal) {
                    ?>
                            <div class="form-check icon-check">
                                <input class="form-check-input" type="radio" name="goal" value="<?= $goal['goal_id']; ?>" id="radio<?= $x; ?>">
                                <label class="form-check-label w-100" for="radio<?= $x; ?>"><?= $goal['goal_name']; ?>
                                    <span class="float-right"><?= $goal['goal_value'];  /*$_SESSION['goal_value']=$goal['goal_value'];*/ ?>km/hr</span>
                                </label>
                                <i class="icon-check-1 fa fa-circle color-gray-dark font-16"></i>
                                <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
                            </div>
                            <div class="divider divider-margins my-3"></div>


                    <?php
                            $x++;
                        }
                    }
                    ?>


                </div>
                <div class="d-flex fixed-bottom p-2">
                    <!-- <a href="login-6" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
         </a>
         <a href="login-8" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-50 mx-1">CONTINUE
         </a>-->

                    <a href="login-4" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
                    </a>
                    <button type="submit" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-50 mx-1">CONTINUE
                    </button>
                </div>
            </div>
        </div>
</div>
</form>
</div>
<?php
require_once 'js-links.php';



?>


<script>
    $(document).ready(function() {
        $("#goalform").on('submit', function(e) {

            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'update_goal.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var obj = JSON.parse(data);

                    if (obj.msg == 'ok') {
                        window.location = 'login-8.php';
                    } else {
                        $('#msg1').html(obj.msg);
                    }

                },

            });
        });
    });
</script>