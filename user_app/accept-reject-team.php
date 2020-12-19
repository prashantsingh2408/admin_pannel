<?php

require_once 'config.php';

include 'session.php';
if(isset($_POST['status']) && (isset($_POST['team_id'])))
{
//    alert("yes");
    $status=$_POST['status'];
     $user_id=$_SESSION['loggin_data'];
     $team_id=$_POST['team_id'];
    
   if($status=="accept")
   {
       $r=1;
    $stmt_n=$link->prepare("UPDATE notification SET response=? where user_id=? and team_id=?");
    $stmt_n->bind_param("iii",$r,$user_id,$team_id);
    if($stmt_n->execute())
    {   $s=1;
        $stmt_t=$link->prepare("UPDATE team_members SET status=? where user_id=(select page_link from notification where user_id=? and team_id=?)");
        $stmt_t->bind_param("iii",$s,$user_id,$team_id);
        if($stmt_t->execute())
        {
            $response['msg']='accept'; 
        }

    }
    $response['msg']='accept'; 
   }
   else if($status=="reject")
   {
       $r=-1;
    $stmt_n=$link->prepare("UPDATE notification SET response=? where user_id=? and team_id=?");
    $stmt_n->bind_param("iii",$r,$user_id,$team_id);
    if($stmt_n->execute())
    {   $s=-1;
        $stmt_t=$link->prepare("UPDATE team_members SET status=? where user_id=(select page_link from notification where user_id=? and team_id=?)");
        $stmt_t->bind_param("iii",$s,$user_id,$team_id);
        if($stmt_t->execute())
        {
            $response['msg']='reject'; 
        }

    }
    $response['msg']='reject'; 
   }
   else
   {
    $response['msg']='error'; 
   }
    
//   $response['ngo']=$ngo_id;
    
//     if($stmt->execute())
//     {
//         $response['msg']='ok';
        
//         $step=0;
//         $todays_step=0;
//         $total_donation_steps=$total_donation_steps+$current;
        
//         $stmt_u=$link->prepare("UPDATE user SET current_steps=? , todays_steps=? ,total_donation_steps=? where id=?");
//         $stmt_u->bind_param("iiii",$step,$todays_step,$total_donation_steps,$user_id);
//         $stmt_u->execute();
//     }
//     else
//     {
//         $response['msg']='error';
//     }
    
    
  
    echo json_encode($response);
}
else
{
 $response['msg']='error'; 
 echo json_encode($response);
}
?>     