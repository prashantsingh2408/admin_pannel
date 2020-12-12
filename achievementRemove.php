<?php
$name = $_POST['name'];

require "config.php";
$sql = "DELETE FROM achievements WHERE name = '$name'";
$conn->query($sql);
// echo $sql;
?>
