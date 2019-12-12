<?php
    require_once('function.php');

    if(isset($_POST['btnsubmit']))
    {
        $name = $_POST['membername'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $dept = $_POST['dept'];

        $register = AddMember($name,$phone,$email,$dept);
        if($register)
        {
            echo "Successfully Registered";
        }
        else
        {
            echo "Not Registered";
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
    <title>Add Member</title>
</head>
<body>
    <form method="POST" action="#">
        <center>
            <h2><u>Registration</u></h2>

            AIUB ID : 
            <input type="text" name="aiub_id"><br><br>

            Password : 
            <input type="password" name="password"><br><br>

            Confirm Pass: 
            <input type="password" name="conPass"><br><br>

            Member Name : 
            <input type="text" name="membername"><br><br>

            Email : 
            <input type="email" name="email"><br><br>

            User Type : 
            <input type="text" name="type"><br><br>

            <input type="submit" name="btnsubmit" value="Register" onclicke="registration()">

            <a href="Login.php">Login</a>
        </center>
    </form>
</body>
</html>