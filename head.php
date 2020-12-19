<head>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <?php session_start(); ?>

    <!-- Slider -->
    <style>
        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: 0.2s;
            transition: opacity 0.2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4caf50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4caf50;
            cursor: pointer;
        }
    </style>


    <!-- bootstrap -->

    <!-- /bootstrap -->

    <script>
        dashboard = document.getElementById('dashboard');
        dashboard.getEventListender('click', function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });

        });

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


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>