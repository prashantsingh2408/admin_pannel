<?php
require 'config.php';

if (isset($_POST['id'])) {
    
    //Id is in form of  'team_row1' so remove team_row and get 1 form string
    $str = $_POST['id'];
    $str_array = (explode('team_row', $str));
    $id = $str_array[1];
    
    //Remove user from db
    $sql = "DELETE FROM teams WHERE id = $id";
    $result = $conn->query($sql);
};
