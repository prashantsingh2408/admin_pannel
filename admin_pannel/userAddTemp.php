<?php
    // echo 'testing';
    require 'config.php';
    $id = $_POST['id'];
    $sql = "INSERT INTO user(id) VALUE($id)";
    $result = $conn ->query($sql);
     echo $conn -> error;
    foreach($_POST as $key => $value){
        // echo 'key:' . $key . '  value       ' . $value . '</br>';
        if ($key !== 'id') {
            $sql = "UPDATE user SET $key = '$value' WHERE id = $id";
            $result = $conn ->query($sql);
        }
        else{
            $id = $value;
        }
    }
?>