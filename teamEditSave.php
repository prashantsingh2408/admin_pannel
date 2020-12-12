<?php
require 'config.php';
$t_name = $_GET['t_name'];
$t_fn_leader =$_GET['t_fn_leader'];
$t_ln_leader = $_GET['t_ln_leader'];
$t_members = $_GET['t_members'];
$user_id = $_GET['user_id'];
$id = $_GET['id'];
$sql = "UPDATE teams
         SET
            t_name = '$t_name',
            t_fn_leader = '$t_fn_leader',
            t_ln_leader = '$t_ln_leader',
            t_members = $t_members,
            user_id = $user_id
         WHERE id = $id";
echo $sql;
$result = $conn->query($sql);
header("location:team.php");
?>
