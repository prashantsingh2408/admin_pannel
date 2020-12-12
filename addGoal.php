<?php

//insert.php

// $connect = new PDO("mysql:host=localhost;dbname=fitness_app", "root", "");
require 'config.php';

$goal_name = $_POST['goal_name'];
$goal_value = $_POST['goal_value'];


$sql = "INSERT INTO goals (goal_name, goal_value) VALUES ('$goal_name','$goal_value'    )";
$result = $conn -> query($sql);

$data = array(
 'goal_name'  => $goal_name,
 'goal_value'  => $goal_value
);

echo json_encode($data);
?>
