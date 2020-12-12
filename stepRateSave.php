<?php

//Rate per km
require "config.php";
if (!isset($_POST['unit'])){
    $rate_km = $_POST['rate_km'];
    $sql = "UPDATE admin_data SET rate_per_km = $rate_km";
    $result = $conn->query($sql);
    echo $rate_km;
}
else{
  $rate_m = $_POST['rate_m'];
  $rate_km = $rate_m / 1000;
  $sql = "UPDATE admin_data SET rate_per_km = $rate_km";
  echo $rate_km;
}


