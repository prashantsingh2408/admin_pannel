<?php

require_once 'config.php';

session_start();

if(isset($_POST['first']) && isset($_POST['last']) && isset($_POST['email']))
{
    $email=$_POST['email'];
    $first=$_POST['first'];
    $last=$_POST['last'];
    $id=$_SESSION['loggin_data'];
    
    $stmt_u=$link->prepare("UPDATE user SET firstname=?,lastname=?,email=? WHERE id=?");
    $stmt_u->bind_param("sssi",$first,$last,$email,$id);
    if($email=="")
    {
        $response['msg']='Please enter your email';
    }
    
    else if($stmt_u->execute())
    {
        $response['msg']='ok';
    }
    else
    {
        $response['msg']='invalid email';
    }
    
    echo json_encode($response);
}
?>          
