<?php
require 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$team_leader = $_POST['team_leader'];
$team_members = $_POST['team_members'];

$sql = "UPDATE teams
         SET 
            name = '$name',
            team_leader = '$team_leader',
            team_members = '$team_members'
            WHERE id = $id";
// echo $sql;
$result = $conn->query($sql);

//// Input file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['pic']['name']);
$uploadOk = 1;
// echo $target_file;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//Check if image file is a actual image or
//fake image
if (isset($_POST['submit'])) {
   $check = getimagesize($_FILES['pic']['tmp_name']);
   //Check for img or not
   if ($check != false) {
      echo "File is image -" . $check["mime"] . ".";
      $uploadOk = 1;
   } else {
      echo "File is not as image.";
      $uploadOk = 0;
   }
}

// Check if file already exists Replace it
// if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
// }

// Check file size
if ($_FILES['pic']['size'] > 500000) {
   echo "Sorry, your file is too large.";
   $uploadOK = 0;
}

// Allow certain file formats
if (
   $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
   && $imageFileType != 'gif'
) {
   echo "Sorry, only JPG, JPEG, PNG, GIF file are allowed.";
   $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error message
if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
} else {
   if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES['pic']['name'])) . "has been uploaded.";
   } else {
      echo "Sorry, there was an error uploading your file. ";
   }
}

// save location in db
$sql = "UPDATE teams SET pic = '$target_file' WHERE id = $id";
// echo $sql;
$conn->query($sql);


////END Input file



header("location:team.php");

