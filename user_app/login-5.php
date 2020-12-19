<?php
require_once 'header.php';
require "auth.php";
if (!(auth())) {
  header("location: login.php");
}
?>
<div class="page-content header-clear-medium">
  <form id="genderform" method="post">
    <div class="content">
      <div class='container container-fluid text-center'>
        <h1 class="mb-4">Choose Your Gender</h1>
        <div class="progress my-progress-2">
          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:25%">
            <span class="sr-only">70% Complete</span>
          </div>
        </div>
        <div class="row mt-5">
          <div class="w-50">
            <div class="card rounded-s shadow-l text-center py-2 mx-2">
              <i class=" fa fa-female fa-4x"></i>
              <p>Female</p>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" value="F">
                </label>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="card rounded-s shadow-l text-center py-2 mx-2">
              <i class=" fa fa-male fa-4x"></i>
              <p>Male</p>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="gender" value="M">
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex fixed-bottom p-2">
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
    $("#genderform").on('submit', function(e) {

      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'update_gender.php',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          var obj = JSON.parse(data);

          if (obj.msg == 'ok') {
            window.location = 'login-6.php';
          } else {

            $('#msg1').html(obj.msg);
          }

        },

      });
    });
  });
</script>