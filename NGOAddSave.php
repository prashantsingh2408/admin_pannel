`<?php
require 'config.php';

// Create NGO ID
$sql = "SELECT COUNT(id) FROM ngos";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id_new = $row['COUNT(id)'] + 1;


// Insert id into table
$sql = "INSERT INTO ngos(id) VALUES($id_new)";
$result = $conn->query($sql);

    //// Input file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['img']['name']);
    $uploadOk = 1;
    echo $target_file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Check if image file is a actual image or
    //fake image
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['img']['tmp_name']);
        //Check for img or not
        if ($check != false) {
            echo "File is image -" . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not as image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['img']['size'] > 500000) {
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
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES['img']['name'])) . "has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file. ";
        }
    }

    // save location in db
    $sql = "UPDATE ngos SET img = '$target_file' WHERE id = $id_new";
    echo $sql;
    $conn->query($sql);

////END Input file

// Add entity in table from $_GET
foreach ($_POST as $key => $value) {
    // echo $key;
    // echo '</br>';
    if ($key !== 'id') {
        if (is_numeric($value)) {

            $sql = "UPDATE ngos SET $key= $value WHERE id = $id_new";
            echo $sql;
            $conn->query($sql);
        } else {

            $sql = "UPDATE ngos SET $key= '$value' WHERE id = $id_new";
            echo $sql;
            $conn->query($sql);
        }
    }
}
// header("location:adminNGO.php");
