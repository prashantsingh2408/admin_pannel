<?php

require_once 'config.php';
include 'header.php';
if(isset($_POST['teamname']) && isset($_POST['teampurpose']))
{
//    alert("yes");

    $teamname=$_POST['teamname'];
    $teampurpose=$_POST['teampurpose'];
        
                  
    $sql=$link->prepare("SELECT t_name from teams where t_name=?" );
        $sql->bind_param('s',$teamname);
        $sql->execute();
        $result=$sql->get_result();
        $row=$result->fetch_array(MYSQLI_ASSOC);
       
        if(($row['t_name']==$teamname) )
        {
            $response['msg']='exists';
        }
        else{
                $member=0;
                $stmt=$link->prepare("INSERT INTO teams(t_name,t_fn_leader,t_ln_leader,t_img,t_members,t_purpose,user_id) VALUES (?,?,?,?,?,?,?)" );
                $stmt->bind_param('ssssisi',$teamname,$firstname,$lastname,$pic,$member,$teampurpose,$id);
                if($stmt->execute())
                {
                    $response['msg']='ok';
                    // echo "Registered Successfully.Login Now!";
                }
                else{
                    $response['msg']='something went wrong';
                // echo "Something went wrong. Please try again";
                   }
            }
        
    
  
    echo json_encode($response);
}
else
{
    $response['msg']='Enter Teamname and purpose';
    echo json_encode($response);
}
?>     