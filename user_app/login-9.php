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
      <h1 class="mb-4">Thank You</h1>
      <p class="mt-4">
      Enjoy Your Workouts With Impact    
      </p>
      <div class="d-flex fixed-bottom p-2">
        <a href="login-7" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
         </a>
         <a href="index" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-50 mx-1">LETS GO
         </a>
      </div>
      </div>
   </div>
</div>
</div>
<?php
   require_once 'js-links.php';
   ?>