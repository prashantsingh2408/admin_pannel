<?php

require_once 'config.php';
include 'session.php';



if(isset($_POST['goal']) )
{
   $goal=$_POST['goal'];
     $id=$_SESSION['loggin_data'];
   $target=$_SESSION['goal_value']*1000;
    $target=$target*(1/$step_in_m);
    
    
    
    $stmt_u=$link->prepare("UPDATE user SET goals_id=?,target_steps=? WHERE id=?");
    $stmt_u->bind_param("iii",$goal,$target,$id);
    
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
