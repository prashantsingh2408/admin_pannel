<?php
   require_once 'header.php';
   require_once 'config.php';

$t_id=$_GET['token'];


$status=1;
$stmt=$link->prepare("SELECT * FROM team_members WHERE team_id=? and status=?" );
        $stmt->bind_param('ii',$t_id,$status);
        $stmt->execute();
        $result=$stmt->get_result();
        

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
      $members[]=$row;
  }
}
	      




   ?>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">Telengana</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
   <a href="#" class="header-icon header-icon-4"><i class="fa fa-sign-out-alt fa-lg"></i></a>
</div>
<div class="page-content header-clear-medium">
   <div class="content">
      <div class="list-group list-custom-small">
               <?php
         
        if(isset($members))
        {
         $index=0;
            foreach($members as $member)
            {
              $user_id= $member['user_id'];
                            $stmt=$link->prepare("SELECT user.pic,total_donation_steps as donation FROM `user` WHERE id IN(Select user_id from team_members where user_id=? and team_id=?)");
        $stmt->bind_param('ii',$user_id,$t_id);
        $stmt->execute();
        $result=$stmt->get_result();
       // $row=$result->fetch_array(MYSQLI_ASSOC);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    
      $data[]=$row;
  }
}
         
                 if(isset($data))
            {
          
              
                ?>
       
         <a href="league-member-list">
            <img src="<?=$data[$index]['pic']?>" class="profile-img">
             <?=$member['user_id'];?>
           <?= $member['firstname']; ?>
           <span class="float-right">Rs <?=(($data[$index]['donation']*$step_in_m)/1000)*$rate_per_km; ?></span>
         </a>
          <?php
               $index=$index+1;    
            }
        }
      }
          ?>
    
      </div>
   </div>
    <a onclick="send_request('<?=$t_id;?>');" class="btn btn-m btn-center-l bg-white text-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4">
    JOIN TEAM <i class="fa fa-plus"></i>
   </a>
   <p style="color:red" id="msg1"></p> 
</div>

  


<?php
   require_once 'footer.php';
   require_once 'js-links.php';
   ?>

<script>
    
    function send_request(str)
    {
           $.post("send-request.php",
            {
                team_id: str,
            },
            function(data, status){
               var obj=JSON.parse(data);
                        if(obj.msg=='ok')
                            {
                               window.location='success.php';
                            }
                        
                        else{
                            $('#msg1').html(obj.msg);
                        }
                      
    				});
                             
    }
      </script>