<?php
   require_once 'header.php';
   ?>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">League</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-small">
   <img src="images/running-3.jpg" class="card-img">
   <div class="content">
      <h1>November Walkathon</h1>
      <p class="text-muted mb-0">Powered By Fitness</p>
      <h6 class="my-3 text-center">Select Your Team</h6>
      <div class="card card-style" onclick="location.href='league-list'">
         <div class="content">
            <h4>
               Andaman And Nicobar Islands
               <span class="float-right">123<i class="fa fa-users"></i>
               </span>
            </h4>
         </div>
      </div>
      <div class="card card-style" onclick="location.href='league-list'">
         <div class="content">
            <h4>
               Andhra Pradesh
               <span class="float-right">123<i class="fa fa-users"></i>
               </span>
            </h4>
         </div>
      </div>
   </div>
</div>
<?php
   require_once 'footer.php';
   require_once 'js-links.php';
   ?>