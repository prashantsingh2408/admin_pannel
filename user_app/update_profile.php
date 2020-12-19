<?php

require_once 'config.php';
require_once 'session.php' ;



if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['title']) && isset($_POST['bio']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['height']) && isset($_POST['weight']) && isset($_POST['dob']))
{
    /*$pic=$_POST['pic']; */
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];
    $title=$_POST['title'];
    $bio=$_POST['bio'];
    $height=$_POST['height'];
    $birthday=$_POST['dob'];
    $id=$_SESSION['loggin_data'];
    
    $stmt_u=$link->prepare("UPDATE user SET firstname=?,lastname=?,phone=?,email=?,gender=?,weight=?,title=?,bio=?,height=?,birthday=? WHERE id=?");
    $stmt_u->bind_param("ssississisi",$firstname,$lastname,$phone,$email,$gender,$weight,$title,$bio,$height,$birthday,$id);
    
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
