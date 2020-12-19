<?php
require_once 'header.php';

require "auth.php";


if (!(auth())) {
   header("location: login.php");
}


?>
<div class="page-content header-clear-medium">

   <form id="weightform" method="post">

      <div class="content">
         <div class='container container-fluid text-center'>
            <h1 class="mb-4">Enter Your Weight</h1>
            <div class="progress my-progress-2">
               <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                  <span class="sr-only">70% Complete</span>
               </div>
            </div>
            <div class="input-style input-style-2 input-required mt-5">
               <span class="color-highlight input-style-1-inactive">Weight (KG)</span>
               <input class="form-control" type="tel" placeholder="" name="weight">
            </div>
            <div class="d-flex fixed-bottom p-2">
               <!-- <a href="login-5" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
         </a>-->
               <!--<a href="login-7" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-50 mx-1">CONTINUE
         </a>-->
               < <!--<input type="button" href="login-5" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-light w-100 mt-4" value="BACK">-->
                  <a href="login-5" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
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
      $("#weightform").on('submit', function(e) {

         e.preventDefault();
         $.ajax({
            type: 'POST',
            url: 'update_weight.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
               var obj = JSON.parse(data);

               if (obj.msg == 'ok') {
                  window.location = 'login-7.php';
               } else {
                  $('#msg1').html(obj.msg);
               }

            },

         });
      });
   });
</script>