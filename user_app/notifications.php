<?php
   require_once 'header.php';
   require_once 'config.php';
   $stmt=$link->prepare("SELECT * FROM notification where user_id=?" );
   $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
      $notifications[]=$row;
  }
}
 $stmt->close();
   ?>
<div class="header header-fixed header-logo-center">
   <a href="index" class="header-title">Notifications</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-medium">
   <div class="container container-fluid">
      <div class="list-group list-custom-large">
      <?php 
      if(isset($notifications))
      {
            foreach ($notifications as $notification)
            {
         ?>
         
           
            <?php
            if ($notification['n_type']==1 && $notification['response']==0)
            {
               $stmt=$link->prepare("SELECT user.pic,user.firstname,teams.t_name FROM user,teams where user.id=? and teams.id=?" );
               $stmt->bind_param("ii",$notification['page_link'],$notification['team_id']);
                    $stmt->execute();
                    $result=$stmt->get_result();
                    $row = $result->fetch_assoc()
               ?>
               <a href="#">
                <img src="<?=$row['pic']?>" class="profile-img" >
                <span><a href='view-profile?key=<?=$notification['page_link'];?>'><?=$row['firstname']?></a><?=$notification['msg']?> "<?=$row['t_name']?> "
               <button onclick="send_request('accept','<?=$notification['team_id']?>');" id="accept" type="button" class="btn btn-primary">Accept</button>
               <button onclick="send_request('reject','<?=$notification['team_id']?>');" id="reject" type="button" class="btn btn-danger">Reject</button>  
       
            </span>
               <strong><i class="fa fa-users float-left mr-0" style="margin-left:-1vh;"></i>22 hours ago</strong>
               </a>
               <?php
            }
            ?>
        
         <p id="msg1" style="color:red"></p>
         <?php
            }
      }
      ?>
       
      </div>
   </div>
</div>
<?php
   require_once 'js-links.php';
   ?>

   
<script>
    
    function send_request(str1,str2)
    {
           $.post("accept-reject-team.php",
            {
                status: str1,
                team_id: str2,
            },
            function(data, status)
            {
               var obj=JSON.parse(data);
                        if(obj.msg=='accept')
                            {
                                $('#accept').html("Accepted");
                                const accept = document.querySelector('accept');
                                accept.disabled = true;
                                reject.disabled = true;
                            }
                        
                        else if(obj.msg=='reject')
                            {
                                $('#reject').html("Rejected");
                                const accept = document.querySelector('reject');
                                reject.disabled = true;
                                accept.disabled = true;
                            }
                            else
                            {
                              $('#msg1').html("Something went wrong");
                            }
                      
    			});
                             
    }
      </script>