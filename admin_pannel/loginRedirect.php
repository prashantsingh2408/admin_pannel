<?php
//Redirect to index.php if authentication is correct 
if (isset($_GET['password']) && isset($_GET['email'])) {
    
    $email = $_GET['email'];
    $password = $_GET['password'];

    //if Correct Authentication
    if ($email == 'webixun@webixun.com' && $password == 'webixun') {
        header('location:index.php');
        echo "correct";
    }
    //if Wrong Authentication 
    
    else {
        //Alert message and redirect to login again
        echo "<script>alert('Wrong authentication'); window.location.href = './login.php';</script>";
    }
}
