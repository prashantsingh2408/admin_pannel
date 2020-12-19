<?php

require_once 'config.php';

session_start();

if(isset($_POST['weight']) )
{
   $weight=$_POST['weight'];
     $id=$_SESSION['loggin_data'];
    $stmt_u=$link->prepare("UPDATE user SET weight=? WHERE id=?");
    $stmt_u->bind_param("si",$weight,$id);
    
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
