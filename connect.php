<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "Admin" && $password == "Admin")
    {
        header('location:home.php');
    }
    else
    {
        echo "Invalid Username or Password";
    }

?>