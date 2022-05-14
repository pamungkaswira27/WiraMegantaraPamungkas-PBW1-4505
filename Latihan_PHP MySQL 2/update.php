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

	$query 		= "UPDATE guest SET lname = 'Subandriah' WHERE id = 2";
	$result 	= mysqli_query($conn, $query);

	if ($result)
	{
		echo "Record updated !";
	}

	mysqli_close($conn);
