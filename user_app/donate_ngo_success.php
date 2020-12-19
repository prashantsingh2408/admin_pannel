<?php

require_once 'config.php';

include 'session.php';
if(isset($_POST['ngo_id']) )
{
//    alert("yes");
    $ngo_id=$_POST['ngo_id'];
     $user_id=$_SESSION['loggin_data'];
    
    $stmt=$link->prepare("INSERT INTO ngo_count(user_id,ngo_id,donation) select id,?,current_steps from user where id=?");
    $stmt->bind_param("ii",$ngo_id,$user_id);
    
  $response['ngo']=$ngo_id;
    
    if($stmt->execute())
    {
        $response['msg']='ok';
        
        $step=0;
        $todays_step=0;
        $total_donation_steps=$total_donation_steps+$current;
        
        $stmt_u=$link->prepare("UPDATE user SET current_steps=? , todays_steps=? ,total_donation_steps=? where id=?");
        $stmt_u->bind_param("iiii",$step,$todays_step,$total_donation_steps,$user_id);
        $stmt_u->execute();
    }
    else
    {
        $response['msg']='error';
    }
    
    
  
    echo json_encode($response);
}
?>     