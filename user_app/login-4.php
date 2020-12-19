<?php
   require_once 'header.php';

require "auth.php";

if(!(auth()))
{
    header("location: login.php");
}
   ?>
<div class="page-content header-clear-medium">
   <div class="content">
      <div class='container container-fluid text-center'>
      <h1 class="mb-3">Welcome</h1>
      <p class="mb-3">Your journey as a changemaker begins now.</p>
      <p>Every step you take will bring a smile on someone's face. .</p>
      <div class="container-fluid fixed-bottom">
      <a href="login-5" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100">CONTINUE
         </a>
      </div>
      </div>
   </div>
</div>
</div>
<?php
   require_once 'js-links.php';
   ?>