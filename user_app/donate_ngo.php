<?php
   require_once 'header.php';
require_once 'session.php';
include "config.php";
function auth()
{
    if(isset($_SESSION['loggin_data']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

if(!auth())
{
//    header("location: login.php");
}
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
<div class="page-content header-clear-medium" style="min-height: 640px;">
<div class="container-fluid" onclick="location.href='streak'">
      <div class="row mb-0">
       
         <div class="w-100 text-center">
            <p class="mb-2">Your total steps are <?=$current; ?></p>
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
             
            <button  onclick="send_request('<?=$t_id;?>');" class="btn btn-m btn-center-l text-uppercase font-900 bg-highlight rounded-sm shadow-xl mt-2 w-100" >DONATE NOW</button>
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







<script>
    
    function send_request(str)
    {
           $.post("donate_ngo_success.php",
            {
                ngo_id: str,
            },
            function(data, status){
               var obj=JSON.parse(data);
                        if(obj.msg=='ok')
                            {
                                $t_id=obj.ngo;
                              window.location='thank-you?token=<?=$t_id;?>.php';
                            }
                        
                        else{
                            $('#msg1').html(obj.msg);
                        }
                      
    				});
                             
    }
      </script>