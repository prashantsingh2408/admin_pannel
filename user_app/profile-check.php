<?php
include 'session.php';
include "config.php";
function profile_check()
{
  if (!(isset($_SESSION['loggin_data']))) {
    header("location:login-2.php");
  } else if (!(isset($phone) && isset($firstname) && isset($lastname))) {
    header("location: login-3.php");
  } else if (!(isset($gender))) {
    header("location: login-5.php");
  } else if (!(isset($weight))) {
    header("location: login-6.php");
  } else if (!(isset($goals))) {
    header("location: login-7.php");
  } else {
    header("location: index.php");
  }
}
