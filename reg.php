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
<center>
            <h2><u>Registration</u></h2>

            AIUB ID : 
            <input type="text" name="aiub_id" id="aiub_id">
            <p id="errorid"></p>
            <br><br>

            Password : 
            <input type="password" name="password" id="pass">
            <p id="errorpass"></p>
            <br><br>

            Confirm Pass: 
            <input type="password" name="conPass" id="conPass">
            <p id="errorconpass"></p>
            <br><br>

            Member Name : 
            <input type="text" name="membername" id="name">
            <p id="errorname"></p>
            <br><br>

            Email : 
            <input type="email" name="email" id="email">
            <p id="erroremail"></p>
            <br><br>

            User Type : 
            <input type="text" name="type" id="type">
            <p id="errortype"></p>
            <br><br>

            <input type="submit"  value="Register" onclick="registration()">

            <a href="Login.php">Login</a>
        </center>
</body>
</html>