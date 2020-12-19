<?php
require 'config.php';
if (isset($_POST['id'])) {
      echo 'hi';
    error_log("Failed to connect to database!", 0);
    $id = $_POST['id'];
    //Remove user from db
    $sql = "DELETE FROM ngos WHERE id = $id";
    $result = $conn->query($sql);
    // echo $id;
};
