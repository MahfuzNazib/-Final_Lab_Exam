<?php
    require_once('function.php');

    $name =  $_POST['Name'];
    $email =  $_POST['Email'];
    $type = $_POST['Type'];
    $Aiub_Id = $_POST['AIUB'];
    $password = $_POST['Password'];

    //echo $name."".$email."".$type."".$Aiub_Id."".$password;

    $reg = reg($Aiub_Id,$name,$email,$type,$password);
    if($reg)
    {
        echo "Successfully Registered";
    }
    else
    {
        echo "Problem Occure";
    }
?>