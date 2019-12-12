<?php
    require_once('DB.php');


    function AddMember($name,$phone,$email,$dept)
    {
        $conn = getConnection();
        $sql = "INSERT INTO user VALUES('','{$name}','$phone','{$email}','$dept')";
        $result = mysqli_query($conn,$sql);

        return $result;
    }


    function getAllUser()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn,$sql);
        $data = array();
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($data,$row);
        }
        return $data;
    }

    function deleteData($id)
    {
        $conn = getConnection();
        $sql = " DELETE FROM `user` WHERE id={$id} ";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getUserUpdate($id,$name,$phone,$email,$dept)
    {
        $conn = getConnection();
        $sql = "UPDATE user SET name='{$name}', phone='{$phone}', email='{$email}',dept='{$dept}' where id=$id";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function getInfo($id)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM user WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
    //dfjjjjjjjjjjjjv

    function reg($aiubid,$name,$email,$type,$password)
    {
        $conn = getConnection();
        $sql = "INSERT INTO userlist VALUES('','{$aiubid}','{$name}','{$email}','$type','{$password}')";
        $result = mysqli_query($conn,$sql);

        return $result;
    }

    function login($aiubid,$password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM userlist WHERE AIUB_ID='{$aiubid}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
?>