<?php
    if(isset($_POST['btnSubmit']))
    {
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
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        <center>
            <h1><u>User Login</u></h1>

            Username : <br>
            <input type="text" name="username" id="Username">
            <p id="errorUsername"></p>
            <br><br>

            Password : <br>
            <input type="password" name="password" id="Password">
            <p id="errorPassword"></p>
            <br><br>

            <input type="submit" name="btnSubmit" value="LOGIN">
            <a href="reg.php">Registration</a>
            <!--<input type="submit" name="btnSubmit" value="LOGIN" onclick="LoginValidation()" ><br><br>-->
        </center>
    </form>
</body>
</html>