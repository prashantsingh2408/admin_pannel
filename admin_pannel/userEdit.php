<!DOCTYPE html>
<html>
<?php require_once "head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php require_once "navbar.php" ?>

        <?php require_once "mainSidebar.php" ?>

        <?php require_once "UserEditContent.php" ?>
        <?php require_once "footer.php" ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    //For Edit pop up form
    <script type="text/javascript" src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function remove($id) {
        $("#" + $id).remove();
        id = $id;
        $.post("userRemove.php", {
                id: id,
            },
            function(data, status) {
                //alert(data);
            });
    }

    function updateUserInfo(id) {

        var c = document.getElementById(id).children;
        var i;
        var obj = {};
        //Save value in obj
        for (i = 0; i < c.length; i = i + 2) {
            key = c[i].innerText;
            value = c[i + 1].value;
            if (value == '') {
                value = c[i + 1].placeholder;
            }
            obj[key] = value;
        }
        $.post('userUpdate.php',
            obj,
            function(data, status) {
                //alert(data);
            });
    }

    function userAdd(id) {
        //For testing
        // alert('testing');
        var c = document.getElementById(id).children;
        var i;
        var obj = {};
        //Save value in obj
        for (i = 0; i < 37; i = i + 2) {
            // alert(c.length);
            key = c[i].innerText;
            value = c[i + 1].value;
            if (value == '') {
                value = c[i + 1].placeholder;
            }
            obj[key] = value;
            //    alert('id=' + i + ' ' + key + obj[key] + obj['id']);
        }
        //For testing
        // alert(obj['id']);
        //    for (const property in obj){
        //         alert(property + obj[property]);
        //    }
        $.post('userAdd.php',
            obj,
            function(data, status) {
                confirm('Added');
                //Hide Form again after adding
                document.getElementById('hideAddForm').style.display = 'none';
            });
    }
    </script>

</body>

</html>
