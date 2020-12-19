<?php

require_once 'config.php';

session_start();

if(isset($_POST['gender']) )
{
   $gender=$_POST['gender'];
     $id=$_SESSION['loggin_data'];
    
    
    
     
    $stmt_u=$link->prepare("UPDATE user SET gender=? WHERE id=?");
    $stmt_u->bind_param("si",$gender,$id);
    
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
