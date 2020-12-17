<?php
require 'config.php';

// Create NGO ID
//max id + 1
$sql = "SELECT MAX(id) FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id_new = $row['MAX(id)'] + 1;
echo 'new id' . $id_new;
echo '</br>';
// END Create NGO ID

// Insert new id_new
$sql = "INSERT INTO user(id) VALUES ($id_new)";
echo $sql;
if (!($result = $conn->query($sql))) {
    echo ("Error description: " . $conn->error);
}
//END Insert new id_new


//// Input file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['pic']['name']);
    $uploadOk = 1;
    echo $target_file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Check if image file is a actual image or
    //fake image
    if(isset($_POST['submit'])){
    $check=getimagesize($_FILES['pic']['tmp_name']);
    //Check for img or not
    if($check != false){
        echo "File is image -" . $check["mime"].".";
        $uploadOk= 1;
    }else{
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
    $sql = "UPDATE user SET pic = '$target_file' WHERE id = $id_new";
    $conn->query($sql);

////END Input file

// Add entity in table from $_POST
foreach ($_POST as $key => $value) {
    echo $key . ',';
    // echo $key. '--'.$value;
    // echo '</br>';
    if ($key !== 'id') { //Skip 'id' as key
        if ($key == 'birthday') { //convert birthday into sql date format
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
            $sql = "UPDATE user SET $key = '$datesql' WHERE id = $id_new";
            $conn->query($sql);
            // echo $sql;
            // echo $key . '--' . $datesql;
            // echo '</br>';
        }


        else if (is_numeric($value)) {
            $sql = "UPDATE user SET $key = $value WHERE id = $id_new";
            $conn->query($sql);
            // echo $sql;
            // echo 'num'. $key . '--' . $value;
            // echo '</br>';
        } else { //if alphabet save $value as 'string'
            $sql = "UPDATE user SET $key = '$value' WHERE id = $id_new";
            $conn->query($sql);
            // echo $sql;
            // echo 'alp' . $key . '--' . $value;
            // echo '</br>';
        }
        if (!($conn->query($sql))) {
            echo("Error description: " . $conn->error);
        }
    }
}

header("location:user.php");
