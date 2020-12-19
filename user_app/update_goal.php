<?php

require_once 'config.php';
include 'session.php';




if(isset($_POST['goal']) )
{
   $goal=$_POST['goal'];
     $id=$_SESSION['loggin_data'];
  
    
    
    $sql =$link->prepare("SELECT * from goals where goal_id=?");
     $sql->bind_param("i",$goal);
    $sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
      $goals[]=$row;
  }
}
    
   
$sql->close();
    
    
    
    
    
    // $target=$_SESSION['goal_value']*1000;
    $target=$goals[0]['goal_value']*1000;
    $target=$target*(1/$step_in_m);
    
    
    
    $stmt_u=$link->prepare("UPDATE user SET goals_id=?,target_steps=? WHERE id=?");
    $stmt_u->bind_param("sii",$goal,$target,$id);
    
    if($stmt_u->execute())
    {
        $response['msg']='ok';
    }
    else
    {
        $response['msg']='error';
    }
    
    echo json_encode($response);
}
?>          
