<?php 
    require 'config.php';
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    foreach($_POST as $key => $value){

        if ($key !== 'id') {
            $sql = "UPDATE user SET $key = '$value' WHERE id = $id";
            $conn ->query($sql);
        }
        else{
            $id = $value;
        }
    }
?>