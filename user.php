<!DOCTYPE html>
<html>
<?php require_once "head.php";
require_once 'config.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php require_once "navbar.php" ?>

        <?php require_once "mainSidebar.php" ?>

        <?php require_once "userContent.php" ?>
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
    function removeUser($id) {

        $("#" + $id).remove();
        id = $id;
        $.post("userRemove.php", {
                id: id,
            },
            function(data, status) {
                window.location.replace("user.php");
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

    function userEdit(id) {
        alert(id);
        $.post('userEdit.php', {
                id: id
            },
            function(data, status) {
                alert(data);
            });
    }
    </script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>
