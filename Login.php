<?php
    require_once('function.php');
    if(isset($_POST['btnSubmit']))
    {
        $id = $_POST['userId'];
        $password = $_POST['password'];
        $login = login($id,$password);

        if($login)
        {
            header('home.php');
        }
        else
        {
            echo "Invalid ID or Password";
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

            UserID : <br>
            <input type="text" name="userId" id="Username">
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