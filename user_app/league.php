<?php
   require_once 'header.php';
   ?>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">League</a>
   <a href="index" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-medium">
<div class="container container-fluid">
<h1>Enter the secret code here</h1>
<p style="line-height: 20px!important;margin-bottom:5px">Enter the code that you've recieved from your organisation. If you don'tt have a secret code you can join one of the open leagues below.</p>
<span class="color-highlight">Eg. IMPT32</span>
<span class="d-flex">
<div class="input-style has-icon input-style-1 input-required w-75">
<input type="name" placeholder="Enter Code">
</div>
<a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-highlight">SUBMIT</a>
</span>
</div>
<h1 class="pl-3 pb-2">Open Leagues</h1>
<div class="card card-style" onclick="location.href='league-join'">
<img src="images/running-3.jpg" class="card-img">
</div>
</div>
</div>
<?php
   require_once 'footer.php';
   require_once 'js-links.php';
   ?>