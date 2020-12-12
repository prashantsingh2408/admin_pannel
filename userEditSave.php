<?php
require 'config.php';
$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$title = $_POST['title'];
$target_steps = $_POST['target_steps'];
$todays_steps = $_POST['todays_steps'];
//Convert date
// birthdays
// Convert date
$datetime = $_POST['birthday'];
$arr = explode(' ', $datetime);
$PM = array_pop($arr);
$time = array_pop($arr);
$birthday = array_pop($arr);
$arr2 = explode('/', $birthday);
$year = array_pop($arr2);
$day = array_pop($arr2);
$month = array_pop($arr2);
$datesql = $year . '-' . $month . '-' . $day;

$id = $_POST['id'];
$sql = "UPDATE user
         SET 
            title = '$title',
            firstname = '$firstname',
            lastname = '$lastname',
            phone = $phone,
            email = '$email',
            gender = '$gender',
            weight = $weight,
            birthday = '$datesql',
            target_steps = $target_steps,
            todays_steps = $todays_steps
         WHERE id = $id";
// echo $sql;
$result = $conn->query($sql);

header("location:team.php");
