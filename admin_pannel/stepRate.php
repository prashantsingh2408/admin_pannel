<!DOCTYPE html>
<html>
<?php require_once "head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php require_once "navbar.php" ?>

    <?php require_once "mainSidebar.php" ?>

    <?php require_once "stepRateContent.php" ?>
    <?php require_once "footer.php" ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- Slider -->
  </style>

  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    };
  </script>
  //For Edit pop up form
  <script type="text/javascript" src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    // function remove($id) {
    //   $("#" + $id).remove();
    //   id = $id;
    //   $.post("userRemove.php", {
    //       id: id,
    //     },
    //     function(data, status) {
    //       //alert(data);
    //     });
    // }

    // function NGOUpdate(id) {

    //   var c = document.getElementById(id).children;
    //   var i;
    //   var obj = {};
    //   //Save value in obj
    //   for (i = 0; i < c.length; i = i + 2) {
    //     key = c[i].innerText;
    //     value = c[i + 1].value;
    //     if (value == '') {
    //       value = c[i + 1].placeholder;
    //     }
    //     obj[key] = value;
    //   }
    //   $.post('NGOUpdate.php',
    //     obj,
    //     function(data, status) {
    //       alert(data);
    //     });
    // }

    // function NGOAdd(id) {
    //For testing
    //alert('testing');
    // var c = document.getElementById(id).children;
    // var i;
    // var obj = {};
    //Save value in obj
    // for (i = 0; i < c.length; i = i + 2) {
    //   //alert(c.length);
    //   key = c[i].innerText;
    //   value = c[i + 1].value;
    //   if (value == '') {
    //     value = c[i + 1].placeholder;
    //   }
    //   obj[key] = value;
    //testing
    // alert(i + ' ' + key + obj[key]);
    // }
    // alert('testing');
    //For testing
    // alert(obj['id']);
    //    for (const property in obj){
    //         alert(property + obj[property]);
    //    }
    //   $.post('NGOAdd.php',
    //     obj,
    //     function(data, status) {
    //       alert(data);
    //       //Hide Form again after adding
    //       document.getElementById('hideAddForm').style.display = 'none';
    //     });
    // }

    function submit_rate_btn_km() {
      // alert('hi');
      // document.getElementById('submitRateMessage').style.display = 'block';
      // rate = document.getElementById('myRange').value;
      rate_km = document.getElementById('submit_rate_input_km').value;
      $.post("stepRateSave.php", {
          rate_km: rate_km
        },
        function(data, status) {
          if (data == '') {
            document.getElementById('set_rate_km_box').style.display = 'block'
            document.getElementById('set_rate_km_text').innerHTML = data + 'Enter Your input';

          } else {
            document.getElementById('set_rate_km_box').style.display = 'block'
            document.getElementById('set_rate_km_text').innerHTML = data + ' Km saved';
            document.getElementById('current_rate_area').innerHTML = 'Current Rate ' + data + ' Rs/Km';
          }
          // $('#' + 'set_rate_km_text').value = data;
        }
      );
    }

    function submit_rate_btn_m() {
      // alert('hi');
      // document.getElementById('submitRateMessage').style.display = 'block';
      // rate = document.getElementById('myRange').value;
      rate_m = document.getElementById('submit_rate_input_m').value;
      unit = 'm';
      $.post("stepRateSave.php", {
          rate_m: rate_m,
          unit: unit
        },
        function(data, status) {
          if (data == '') {
            document.getElementById('set_rate_m_box').style.display = 'block'
            document.getElementById('set_rate_m_text').innerHTML = data + 'Enter Your input';
          } else {
            document.getElementById('set_rate_m_box').style.display = 'block'
            document.getElementById('set_rate_m_text').innerHTML = data + ' m saved';
            document.getElementById('current_rate_area').innerHTML = 'Current Rate ' + data + ' Rs/Km';
          }
          // $('#' + 'set_rate_km_text').value = data;
        }
      );
    }
  </script>

  <script src="../../plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
  <!-- jQuery -->
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