<?php
    function getConnection()
    {
		$conn = mysqli_connect('localhost', 'root', '', 'labexamp');
		return $conn;
	}
?>