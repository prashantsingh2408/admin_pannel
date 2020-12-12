<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12381483";
$password = "76MtWJaASt";
$db = "sql12381483";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>