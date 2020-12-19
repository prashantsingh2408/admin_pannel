<?php
   require_once 'header.php';

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
						$sql = "SELECT * from goals";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
      $goals[]=$row;
  }
}

?>
<div class="header header-fixed header-logo-center">
    <form id="goalform" method="post"> 
   <div class="content">
   <a href="#" class="header-title">Pick A Goal</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
   <a href="#" class="header-icon header-icon-4"><i class="fa fa-check fa-lg"></i></a>
</div>
<div class="page-content header-clear-medium">
   <div class="content">
      <div class='container container-fluid'>
    <?php
        if(isset($goals))
        {
            $x=1;
            foreach($goals as $goal)
            {
                ?>
 <div class="form-check icon-check">
                  <input class="form-check-input" type="radio" name="goal" value="<?=$goal['goal_id'];?>" id="radio<?=$x;?>" >
                  <label class="form-check-label w-100" for="radio<?=$x;?>"><?=$goal['goal_name'];?>
                  <span class="float-right"><?=$goal['goal_value'];  $_SESSION['goal_value']=$goal['goal_value']; ?>km/hr</span>
                  </label>
                  <i class="icon-check-1 fa fa-circle color-gray-dark font-16"></i>
                  <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
               </div>
               <div class="divider divider-margins my-3"></div>
        
        
        <?php
                $x++;
            }
        }
        ?>
      </div>
      <div class="d-flex fixed-bottom p-2">
       <!-- <a href="login-6" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-white text-dark border-dark w-50 mx-1">BACK
         </a>
         <a href="login-8" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-50 mx-1">CONTINUE
         </a>-->
          
      
           <div class="form-group">
                <input type="submit" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100 mt-4" value="CONTINUE">
                
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
    $(document).ready(function(){
         $("#goalform").on('submit', function(e){
            
    			e.preventDefault();
    			$.ajax({
    				type: 'POST',
    				url: 'update_goal.php',
    				data: new FormData(this),
    				contentType: false,
    				cache: false,
    				processData:false,
    				success:function(data){
    				    var obj=JSON.parse(data);
                        
                        if(obj.msg=='ok')
                            {
                              window.location='streak.php';
                            }
                       
                        else{
                            $('#msg1').html(obj.msg);
                        }
                      
    				},
                    
    			});
    });
    });
    
    
</script>
    
