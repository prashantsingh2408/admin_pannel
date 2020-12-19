<?php

require_once 'config.php';

session_start();

$id=1;

if(isset($_POST['contact']))
{
    $contact=$_POST['contact'];
    $otp=12345;
    $_SESSION['otp']=$otp;
    if($contact==null)
    {
     $response['msg']='Please enter your number';    
    }
    else
    {
    $response['msg']='continue';
    }
    echo json_encode($response);
}


if(isset($_POST['phone']) && isset($_POST['otp']))
{
    $phone=$_POST['phone'];
    $otp=$_POST['otp'];
    
    
         if($otp==$_SESSION['otp'])
    {
             // $response['msg']='ok';
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
                
    $sql=$link->prepare("SELECT id,phone FROM user WHERE phone=?" );
        $sql->bind_param('s',$phone);
        $sql->execute();
        $result=$sql->get_result();
        $row=$result->fetch_array(MYSQLI_ASSOC);

        if($row['phone']==$phone){
            $id=$row['id'];
             $_SESSION['loggin_data']=$id;
            $response['msg']='old';
            unset($_SESSION['otp']);
            
            
        }
        else{
            $pic='images/user-1.jpg';
            $stmt=$link->prepare("INSERT INTO user(phone,pic) VALUES (?,?)" );
            $stmt->bind_param('ss',$phone,$pic);
            if($stmt->execute()){
                $id=$link->lastInsertId();
                 $_SESSION['loggin_data']=$id;
                $response['msg']='register';
               // echo "Registered Successfully.Login Now!";
            }
        
            else{
                   $response['msg']='something went wrong';
               // echo "Something went wrong. Please try again";
            }
        }
         }
    else if($otp==null){
         $response['msg']='Please enter your OTP';
    }
             else{
                 $response['msg']='OTP does not match';
         }
         
        
    echo json_encode($response);
    
}

?>
