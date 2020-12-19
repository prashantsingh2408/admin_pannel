<?php

session_start();
require 'config.php';

$id=$_SESSION['ngo_id'];


$stmt=$link->prepare("SELECT * FROM ngo_count WHERE ngo_id=?" );
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_array(MYSQLI_ASSOC);

    $user_id=$row['user_id'];
    $ngo_id=$row['ngo_id'];
    $donation=$row['donation'];
    $timestamp=$row['timestamp'];
  



/*

    if(!isset($firstname)){
        header("location:index.php");
}
*/
  

    ?>