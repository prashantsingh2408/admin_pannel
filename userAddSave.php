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
// Insert new id_new
$sql = "INSERT INTO user(id) VALUES ($id_new)";
echo $sql;
if (!($result = $conn->query($sql))) {
    echo ("Error description: " . $conn->error);
}
// Add entity in table from $_POST
foreach ($_POST as $key => $value) {
    echo $key. '--'.$value;
    echo '</br>';
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
            echo $sql;
            echo $key . '--' . $datesql;
            echo '</br>';
        }

        else if($key =='file'){
            // File upload path
            echo 'ho';
            echo '</br>';

            $targetDir = "img/";
            echo $targetDir;
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) 
            {
                // Allow certain file formats
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                if (in_array($fileType, $allowTypes)) 
                {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) 
                    {
                        // Insert image file name into database
                        $insert = $conn->query("UPDATE user SET pic = '$fileName' WHERE id = $id_new");
                        if ($insert) 
                        {
                            $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                        } else 
                        {
                            $statusMsg = "File upload failed, please try again.";
                        }
                    } else 
                    {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } 
                else 
                {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            } 
            else 
            {
                $statusMsg = 'Please select a file to upload.';
            }
        }
        elseif (is_numeric($value)) {
            $sql = "UPDATE user SET $key = $value WHERE id = $id_new";
            $conn->query($sql);
            echo 'num'. $key . '--' . $value;
            echo '</br>';
        } else { //if alphabet save $value as 'string'
            $sql = "UPDATE user SET $key = '$value' WHERE id = $id_new";
            $conn->query($sql);
            echo 'alp' . $key . '--' . $value;
            echo '</br>';
        }
        if (!($conn->query($sql))) {
            echo("Error description: " . $conn->error);
        }
    }
}

header("location:user.php");
