<?php

//insert.php

// $connect = new PDO("mysql:host=localhost;dbname=fitness_app", "root", "");
require 'config.php';

$steps = $_POST['steps'];
$name = $_POST['name'];
// $img = $_POST['img'];
echo $steps;
$sql = "INSERT INTO achievements (steps, name) VALUES ($steps,'$name')";
$result = $conn->query($sql);

$data = array(
    'steps'  => $steps,
    'name'  => $name,
);

echo json_encode($data);
