<?php
   require_once 'header.php';
require_once 'session.php';
include "config.php";


require "auth.php";

if($firstname=='' || $phone =='' || $lastname ='')
{
    header("location:login-3.php");
}
else if($gender=='')
{
     header("location:login-5.php");
}
else if($weight=='')
{
    header("location:login-6.php");
        
}
else if($goals_id=='')
{
      header("location:login-7.php");
}
/*else
{
      header("location:login-9.php");
}*/


if(!(auth()))
{
    header("location: login.php");
}
//profile_check();
						
$sql = "SELECT * from ngos";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
      $ngos[]=$row;
  }
}
		
   ?>
   
<div class="header header-fixed header-logo-center" style="border-bottom: solid 0px rgba(0,0,0,.0);box-shadow: 0 0px 0px 0 rgba(0,0,0,.0);">
   <a href="index" class="header-title">Hi <?=$firstname; ?> !</a>
   <a href="feed" class="header-icon header-icon-1"><i class="fas fa-globe-asia" ></i></a>
   <a href="notifications" class="header-icon header-icon-4"><i class="fas fa-bell"></i></a>
</div>
<div class="page-content header-clear-medium">
   <div class="container-fluid" onclick="location.href='streak'">
      <div class="row mb-0">
         <div class="w-25 text-center">
            <i class="fa fa-lg fa-map-marker-alt"></i>
            <h1 class="mb-0"><?=($todays_steps*$step_in_m)/1000; ?></h1>
            <p class="mb-0">Distance (km)</p>
         </div>
         <div class="w-50 text-center">
            <!--<i class="fa fa-user-circle fa-5x"></i>-->
             <div id="imgArea"><img src="<?=$pic;?>"></div>
         </div>
         <div class="w-25 text-center">
            <i class="fa fa-shoe-prints fa-lg" style="-webkit-transform: rotate(-90deg);-moz-transform: rotate(-90deg);-ms-transform: rotate(-90deg);-o-transform: rotate(-90deg);transform: rotate(-90deg);"></i>
            <h1 class="mb-0"><?=$todays_steps; ?></h1>
            <p class="mb-0">Today's Steps</p>
         </div>
          
          
         <div class="w-100 text-center">
            <p class="mb-2">Only <?=(($target-$todays_steps)*$step_in_m)/1000; ?> km to maintain streak</p>
         </div>
      </div>
   </div>
   <div class="single-slider slider-boxed owl-carousel owl-no-dots owl-carousel-1">
       
          <?php
        if(isset($ngos))
        {
            
            foreach($ngos as $ngo)
            {
                $t_id=$ngo['id'];
                ?>
       
      <div class="card rounded-s shadow-l">
         <div class="card-bottom p-3 bg-white">
            <div onclick="location.href='cause?token=<?=$t_id;?>' ">
            <h1 class="color-dark font-700 mb-0"><?=$ngo['name'];?></h1>
            <p class="color-dark opacity-80 mb-0">with <?=$ngo['partner'];?></p>
            <div class="container-fluid">
            <div class="row mb-0">
            <div class='w-50'>
            <h4 class="color-dark font-700 mb-0">Rs <?=$ngo['current_amount'];?></h4>
            <p class="color-dark opacity-80 mb-0">raised of <?=$ngo['total_goal'];?></p>
            </div>
            <div class="w-50 text-right">
            <h4 class="color-dark font-700 mb-0"><?=$ngo['no_of_workout'];?></h4>
            <p class="color-dark opacity-80 mb-0">Workouts</p>
            </div>
            </div>
            </div>
            </div>
            <a href="workout" class="btn btn-m btn-center-l text-uppercase font-900 bg-highlight rounded-sm shadow-xl mt-2 w-100">OUTDOOR WORKOUT</a>
         </div>
         <div class="card-overlay"></div>
         <img class="img-fluid img-type-1" src="<?=$ngo['img'];?>" onclick="location.href='cause?token=<?=$t_id;?>'">
      </div>
       
         <?php
               
            }
        }
        ?>
       
       
      
       </div>
   </div>
</div>
<?php
   require_once 'footer.php';
   require_once 'js-links.php';
   ?>