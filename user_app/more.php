<?php
   require_once 'header.php';
   ?>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">More</a>
</div>
<div class="page-content header-clear-small">
   <div class="content">
      <div class="list-group list-custom-large mt-5">
         <a href="#">
            <div class="row mb-0">
               <div class="w-75 pl-3">
                  <i class="fa font-18 fa-map-marker-alt color-dark1-dark"></i>
                  <span>Default Workout Mode</span>
                  <strong>Using GPS To Track</strong>
               </div>
               <div class="w-25">
                  <div class="input-style input-style-2 input-required mt-2 mr-2">
                     <span class="">OUTDOOR</span>
                     <select class="form-control">
                        <option value="default" disabled="" selected="">OUTDOOR</option>
                        <option value="Linux">INDOOR</option>
                     </select>
                  </div>
               </div>
            </div>
         </a>
         <a href="settings">
         <i class="fa font-18 fa-cog color-dark1-dark"></i>
         <span>Settings</span>
         <strong>Set Preferences, Add Reminders and more</strong>
         <i class="fa fa-angle-right"></i>
         </a>
         <a href="help">
         <i class="fa font-18 fa-comment-alt color-dark1-dark"></i>
         <span>Help Center</span>
         <strong>Hava an issue. Reaach out to us</strong>
         <i class="fa fa-angle-right"></i>
         </a>
         <a href="#">
         <i class="fa font-18 fa-share-alt color-dark1-dark"></i>
         <span>Share The App</span>
         <strong>Kindness is contagious. Spread it.</strong>
         <i class="fa fa-angle-right"></i>
         </a>
         <a href="#">
         <i class="fa font-18 fa-mobile-alt color-dark1-dark"></i>
         <span>Allow app to track in background</span>
         <strong>To Solve those tracking queries</strong>
         <i class="fa fa-angle-right"></i>
         </a>
         <a href="how">
         <i class="fa font-18 fa-question color-dark1-dark"></i>
         <span>How It Works</span>
         <strong>Know what happens behind The scenes</strong>
         <i class="fa fa-angle-right"></i>
         </a>
      </div>
      <a href="#" class="my-2 icon rounded-l icon-xl bg-highlight text-white float-right"><i class="fa fa-comment-alt"></i></a>
   </div>
</div>
<?php
   require_once 'footer.php';
   require_once 'js-links.php';
   ?>