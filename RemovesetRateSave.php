<?php

//Rate per km
$value = $_POST['rate'];

// echo $value; For testing

require 'config.php';
$sql = "UPDATE admin_data SET rate_per_km = '$value'";
$result = $conn -> query($sql); 
