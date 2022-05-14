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

	$query 		= "SELECT id, fname, lname FROM guest LIMIT 3";
	$result 	= mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "Id : " . $row["id"] . "<br>";
			echo "Name : " . $row["fname"] . " " . $row["lname"] . "<br><br>";
		}
	}
	else
	{
		echo "Table is empty.";
	}

	echo "<br><br>";

	$query 		= "SELECT id, fname, lname FROM guest LIMIT 3, 6";
	$result 	= mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "Id : " . $row["id"] . "<br>";
			echo "Name : " . $row["fname"] . " " . $row["lname"] . "<br><br>";
		}
	}
	else
	{
		echo "Table is empty.";
	}

	mysqli_close($conn);
