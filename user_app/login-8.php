<?php
   require_once 'header.php';
//include "profile-check.php";
include "auth.php";
if(!(auth()))
{
    header("location: login.php");
}

   ?>
<div class="page-content header-clear-medium">
   <div class="content">
      <div class='container container-fluid text-center'>
      <h1 class="mb-4">Allow Google Fit Access</h1>
      <div class="progress my-progress-2">
         <div class="progress-bar" role="progressbar" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100" style="width:100%">
            <span class="sr-only">70% Complete</span>
         </div>
      </div>
      <p class="mt-4">
      Please allow access to Physical Activity of details and google fit data for better workout tracking    
      </p>
      <div class="d-flex fixed-bottom p-2">
        <a href="login-7" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
         </a>
         <a href="login-9" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-50 mx-1">ALLOW
         </a>
      </div>
      </div>
   </div>
</div>
</div>
<?php
   require_once 'js-links.php';
   ?>