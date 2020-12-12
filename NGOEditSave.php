<!-- Edit/Update ngo database  -->
<?php
require 'config.php';
$name_ngos = $_POST['name_ngos'];
$partner = $_POST['partner'];
$current_amount = $_POST['current_amount'];
$total_goal = $_POST['total_goal'];
$no_of_workout = $_POST['no_of_workout'];
$description = $_POST['description'];
$about = $_POST['about'];
$id = $_POST['id'];

$sql = "UPDATE ngos SET name_ngos = '$name_ngos', 
          partner='$partner', 
          current_amount='$current_amount',
          total_goal=$total_goal,
          no_of_workout = $no_of_workout,
          description = '$description',
          about = '$about'  WHERE id = $id";
// echo $sql;
$conn -> query($sql);
header("location:adminNGO.php");