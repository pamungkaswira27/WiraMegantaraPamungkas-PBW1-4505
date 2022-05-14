<?php

	$servername	= "localhost";
	$username	= "root";
	$password	= "";
	$db 		= "pwb_minggu10";

	$conn 		= mysqli_connect($servername, $username, $password, $db);

	if (!$conn)
	{
		die("Connection Failed : " . mysqli_connect_error());
	}

	$query 		= "DELETE FROM guest WHERE id = 3";
	$result 	= mysqli_query($conn, $query);

	if ($result)
	{
		echo "Record deleted !";
	}

	mysqli_close($conn);
