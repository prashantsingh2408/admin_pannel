<?php
   require_once 'header.php';
   ?>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">Settings</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-small">
   <div class="content">
      <div class="list-group list-custom-large mt-5">
         <a data-trigger-switch="switch-1" class="" href="#">
            <i class="fa font-14 fa-bell color-dark1-dark"></i>
            <span>Reminders</span>
            <strong>To never miss your workout</strong>
            <div class="custom-control scale-switch ios-switch">
               <input type="checkbox" class="ios-input" id="switch-1" checked="">
               <label class="custom-control-label" for="switch-1"></label>
            </div>
            <i class="fa fa-angle-right"></i>
         </a>
         <a data-trigger-switch="switch-1" class="" href="#">
            <i class="fa font-14 fa-microphone color-dark1-dark"></i>
            <span>Voice Updates</span>
            <strong>Automatic updates to keep you on track</strong>
            <div class="custom-control scale-switch ios-switch">
               <input type="checkbox" class="ios-input" id="switch-1" checked="">
               <label class="custom-control-label" for="switch-1"></label>
            </div>
            <i class="fa fa-angle-right"></i>
         </a>
         <a href="notification-settings">
         <i class="fa font-18 fa-cog color-dark1-dark"></i>
         <span>Notification Settings</span>
         <strong>Choose your preferred push notifications</strong>
         <i class="fa fa-angle-right"></i>
         </a>
         <a href="#">
            <div class="row mb-0">
               <div class="w-75 pl-3">
                  <i class="fa font-18 fa-ruler-horizontal color-dark1-dark"></i>
                  <span>Distance</span>
                  <strong>Choose your preferred distance metric</strong>
               </div>
               <div class="w-25">
                  <div class="input-style input-style-2 input-required mt-2 mr-2">
                     <span class="">KM</span>
                     <select class="form-control">
                        <option value="default" disabled="" selected="">KM</option>
                        <option value="H">MILE</option>
                     </select>
                  </div>
               </div>
            </div>
         </a>
         <a href="#">
            <div class="row mb-0">
               <div class="w-75 pl-3">
                  <i class="fa font-18 fa-rupee-sign color-dark1-dark"></i>
                  <span>Currency</span>
                  <strong>Choose your preferred currency type</strong>
               </div>
               <div class="w-25">
                  <div class="input-style input-style-2 input-required mt-2 mr-2">
                     <span class="">INR</span>
                     <select class="form-control">
                        <option value="default" disabled="" selected="">INR</option>
                        <option value="H">USD</option>
                        <option value="H">EUR</option>
                        <option value="H">GBP</option>
                        <option value="H">RMB</option>
                     </select>
                  </div>
               </div>
            </div>
         </a>
         <a href="#">
         <i class="fa font-18 fa-star color-dark1-dark"></i>
         <span>Rate Us</span>
         <strong>Like Impact? Shower your love on Play Store.</strong>
         <i class="fa fa-angle-right"></i>
         </a>
         <a href="#">
         <i class="fa font-18 fa-power-off color-dark1-dark"></i>
         <span>Logout</span>
         <strong>I don't want to stay healthy & happy</strong>
         <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
</div>
<?php
   require_once 'footer.php';
   require_once 'js-links.php';
   ?>