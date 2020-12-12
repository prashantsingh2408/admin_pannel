<?php
require 'config.php';

// Create NGO ID
$sql = "SELECT COUNT(id) FROM ngos";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id_new = $row['COUNT(id)'] + 1;


// Insert id into table
$sql = "INSERT INTO ngos(id) VALUES($id_new)";
$result = $conn->query($sql);

// Add entity in table from $_GET
foreach ($_POST as $key => $value) {
    // echo $key;
    // echo '</br>';
    if ($key !== 'id') {
        if($key == 'file'){
            // File upload path
            // echo 'ho';
            // echo '</br>';

            $targetDir = "img/";
            // echo $targetDir;
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
                // Allow certain file formats
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                        // Insert image file name into database
                        $insert = $conn->query("INSERT into ngos (img) VALUES ('$fileName')");
                        if ($insert) {
                            $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                        } else {
                            $statusMsg = "File upload failed, please try again.";
                        }
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } else {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            } else {
                $statusMsg = 'Please select a file to upload.';
            }
        }
        if (is_numeric($value)) {

            $sql = "UPDATE ngos SET $key= $value WHERE id = $id_new";
            $conn->query($sql);
        } else {

            $sql = "UPDATE ngos SET $key= '$value' WHERE id = $id_new";
            $conn->query($sql);
        }
    }
}
header("location:adminNGO.php");
