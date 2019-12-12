<?php
    require_once('function.php');
    if(isset($_POST['btnAdd']))
    {
        header('location:add.php');
    }

    if(isset($_POST['btnProfile']))
    {
        header('location:profile.php');
    }

    $data = getAllUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <form method="POST" action="#">
        <center>
            <h1><u> Welcome to Home Page </u></h1>
            
            <input type="submit" name="btnProfile" value="Profile">
            <input type="submit" name="btnChangePass" value="Change Password">
            <input type="submit" name="btnView" value="View User">
            <input type="submit" name="btnAdd" value="Add Member">
            
            <hr>

            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Dept</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                <?php
                    for($i=0;$i<count($data);$i++)
                    {

                ?>
                <tr>
                    <?php
                        echo "<td>" .$data[$i]['name']. "</td>";
                        echo "<td>" .$data[$i]['phone']. "</td>";
                        echo "<td>" .$data[$i]['email']. "</td>";
                        echo "<td>" .$data[$i]['dept']. "</td>";
                        echo '<td> <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value='.$data[$i]['id'].'>
                            <input type="submit" name="btnDelete" value="Delete">
                            </form> </td>';
                        echo '<td> <form action="update.php" method="POST">
                            <input type="hidden" name="idUpdate" value='.$data[$i]['id'].'>
                            <input type="submit" name="btnUpdate" value="Update">
                            </form> </td>';
                    ?>
                </tr>
                <?php
                    } 
                ?>
            </table>
        </center>
    </form>
</body>
</html>