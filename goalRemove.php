<?php
$goal_name = $_POST['goal_name'];
echo $gaol_name;
require "config.php";
$sql = "DELETE FROM goals WHERE goal_name = '$goal_name'";
$conn->query($sql);

