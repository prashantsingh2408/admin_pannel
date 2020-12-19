<?php
   require_once 'header.php';

require 'config.php';

//echo $id;


$stmt=$link->prepare("SELECT * FROM teams where user_id=?" );
$stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
      $teams[]=$row;
  }
}
 $stmt->close();

$stmt_o=$link->prepare("SELECT * FROM teams where user_id<>?" );
        $stmt_o->bind_param("i",$id);
        $stmt_o->execute();
        $result_o=$stmt_o->get_result();
        
if ($result_o->num_rows > 0) {
  // output data of each row
  while($row_o = $result_o->fetch_assoc())
  {
      $other_teams[]=$row_o;
  }
}
	
   ?>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">Join Team</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-small">
   <div class="content">
   <div class="search-box bg-white rounded-s mb-3 mt-5">
<i class="fa fa-search"></i>
<input type="text" class="border-0" placeholder="Search for the team you  want to join" data-search="">
</div>
      <div class="list-group list-custom-small">
          <p>My teams</p>
             <?php
        if(isset($teams))
        {
        
            foreach($teams as $team)
            {
               $t_id= $team['id'];
              
                
                ?>
         <a href="league-member-list?token=<?=$t_id;?> ">
            <img src="<?= $team['t_img']?>" class="profile-img">
            <?= $team['t_name']?>
            <span class="float-right"><?= $team['t_members']?> <i class="fa fa-users fa-lg" style="font-size:16px;color:black"></i></span>
         </a>
                        
                <?php    
       
            }
        }
          ?>
        <p>Other teams</p>
             <?php
        if(isset($other_teams))
        {
           
            foreach($other_teams as $other_team)
            {
               $t_id= $other_team['id'];
                ?>
         <a href="league-member-list?token=<?=$t_id;?> ">
            <img src="<?= $other_team['t_img']?>" class="profile-img">
            <?= $other_team['t_name']?>
            <span class="float-right"><?= $other_team['t_members']?> <i class="fa fa-users fa-lg" style="font-size:16px;color:black"></i></span>
         </a>
                        
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