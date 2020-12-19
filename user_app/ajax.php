
<?php
/*require "config.php";
session_start();
$id=$_SESSION['loggin_data'];
$sql = "SELECT per FROM user WHERE id = $id";
$result=$link->query($sql);

if($result->num_rows> 0){
    $row=$result->fetch_assoc();
   $response['per']=$row['per'];
   echo json_encode($response);
}*/


require "config.php";
include "session.php";

if($target==0)
{   $percent=0;
    $response['per']=$percent;
}
else
{

$percent=(($current/$target)*100);
   $response['per']=$percent;
}
$stmt_u=$link->prepare("UPDATE user SET per=? WHERE id=?");
    $stmt_u->bind_param("ii",$percent,$id);
    
    if($stmt_u->execute())
    {

   echo json_encode($response);
    }



?>
