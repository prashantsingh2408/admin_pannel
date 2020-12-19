<?php
require_once 'header.php';
require 'config.php';
?>
<div class="header header-fixed header-logo-center">
    <a href="#" class="header-title">Create Team</a>
    <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<form id="createteamform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="page-content header-clear-small">
        <div class="content">
            <h1 class="text-center mb-5">Enter Team Details</h1>

            <span class="color-highlight input-style-1-inactive">Team Name</span>
            <input class="form-control" type="text" placeholder="Team Name" name="teamname" id="teamname">
            <span class="color-highlight input-style-1-inactive">Team Purpose</span>
            <input class="form-control" type="text" placeholder="Team Purpose" name="teampurpose" id="teampurpose" value="">
        </div>
        <!-- <a href="teams-create" class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4">
        CREATE TEAM <i class="fa fa-lock"></i>
    </a> -->
        <div class="form-group">
            <input type="submit" class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4" value="CREATE TEAM ">
        </div>
        <p style="color:red" id="msg1"></p>
    </div>
</form>
<?php
require_once 'footer.php';
require_once 'js-links.php';
?>
<script>
    $(document).ready(function() {
        $("#createteamform").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'create-team-request.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

                    var obj = JSON.parse(data);

                    if (obj.msg == 'ok') {
                        $('#msg1').html(obj.msg);
                        alert("Team created");
                    } else if (obj.msg == "exists") {
                        $('#msg1').html("Team name already exists..!");
                        alert("Team name already exists..!");
                    } else {
                        $('#msg1').html("SOMETHING WENT WRONG!");
                        alert("SOMETHING WENT WRONG!");
                    }

                },

            });
        });

    });
</script>