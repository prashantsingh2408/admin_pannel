<?php

require_once 'config.php';

session_start();

if(isset($_POST['contact']))
{
    $contact=$_POST['contact'];
    $otp=12345;
    $_SESSION['otp']=$otp;
    
    $response['msg']='ok';
    echo json_encode($response);
}


if(isset($_POST['phone']) && isset($_POST['otp']))
{
    $phone=$_POST['phone'];
    $otp=$_POST['otp'];
    
    
         if($otp==$_SESSION['otp'])
    {
              $response['msg']='ok';
        //select contact from table;
       
        
        
//        if(found)
//            login session set and return ok;
           
//        else
//            //insert into table
//          //  session login set 
//           //  and return msg 'register'
//            
//            
//            $_SESSION['loggin_data']=$id;
                
    }
        
  
        
   
    
    echo json_encode($response);
}

?>
