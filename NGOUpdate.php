<!-- Update NGO -->
<?php
require 'config.php';
$id = $_POST['id'];
foreach ($_POST as $key => $value) {

    if ($key !== 'id') {
        $sql = "UPDATE ngos SET $key = '$value' WHERE id = $id";
        $conn->query($sql);
    } else {
        $id = $value;
    }
}
?>