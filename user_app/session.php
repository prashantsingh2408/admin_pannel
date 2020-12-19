<?php
session_start();
require 'config.php';

$id = $_SESSION['loggin_data'];
$stmt = $link->prepare("SELECT * FROM user WHERE id=?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$phone = $row['phone'];
$email = $row['email'];
$gender = $row['gender'];
$weight = $row['weight'];
$goals_id = $row['goals_id'];
$title = $row['title'];
$bio = $row['bio'];
$height = $row['height'];
$birthday = $row['birthday'];
$pic = $row['pic'];
$current = $row['current_steps'];
$target = $row['target_steps'];
$workouts = $row['workouts'];
$todays_steps = $row['todays_steps'];
$total_donation_steps = $row['total_donation_steps'];
$stmt->close();

$admin_id = 1;
$stmt_a = $link->prepare("SELECT * FROM admin_data where id=?");
$stmt_a->bind_param('i', $admin_id);
$stmt_a->execute();
$result = $stmt_a->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

$rate_per_km = $row['rate_per_km'];
$step_in_m = $row['step_in_m'];



/*
   if(isset($firstname)){
        header("location:index.php");
}
  */
