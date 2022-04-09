<?php 

	$user  = "username";
	$pass  = "password";

	$md5   = sprintf("The md5 hashed password of %s is   : %s\n", $pass, md5($pass.$user));
	$sha1  = sprintf("The sha1 hashed password of %s is   : %s\n", $pass, sha1($pass.$user));
	$gost  = sprintf("The gost hashed password of %s is   : %s\n", $pass, hash("gost", $pass.$user));

	echo $md5 . "<br>" . $sha1 . "<br>" . $gost;