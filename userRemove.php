<?php
require 'config.php';
if (isset($_POST['id'])) {
    error_log("Failed to connect to database!", 0);
    $id = $_POST['id'];
    //Remove user from db
    $sql = "DELETE FROM user WHERE id = $id";
    $result = $conn->query($sql);
    // echo $id;
};
?>