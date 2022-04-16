<?php 

	function secureInput($data)
	{
		$data = trim($data);
		$data = stripslashes($data);

		return $data;
	}

	if (isset($_POST['submit']))
	{
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$website 	= $_POST['website'];
		$comment 	= $_POST['comment'];
		$gender 	= $_POST['gender'];
	}
	else
	{
		die("Sorry, you cannot access this page!");
	}

	if (!empty($name))
	{
		if (!preg_match("/^[a-zA-Z \-\.\']*$/", $name))
		{
			echo "Your input name is incorrect! <br>";
		}
		else
		{
			$name = secureInput($name);
			echo "Thanks, <b>$name<b> <br>";
		}
	}
	else
	{
		echo "Name is required <br>";
	}

	if (!empty($email))
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid email format! <br>";
		}
		else
		{
			$email = secureInput($email);
			echo "Your email is: <b>$email<b> <br>";
		}
	}
	else
	{
		echo "Email is required <br>";
	}

	if (!empty($website))
	{
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $email))
		{
			echo "Invalid URL! <br>";
		}
		else
		{
			$website = secureInput($website);
			echo "Your website is: <b>$website<b> <br>";
		}
	}
	else
	{
		echo "Your website is: none <br>";
	}

	if (!empty($comment))
	{
		$comment = secureInput($comment);
		echo "Your comment is: <b>$comment<b> <br>";
	}
	else
	{
		echo "Your comment is: none <br>";
	}

	if (!empty($gender))
	{
		echo "You are: <b>$gender<b> <br>";
	}
	else
	{
		echo "Gender is required <br>";
	}

