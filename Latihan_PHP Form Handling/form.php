<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Form Handling</title>
</head>
<body>

	<h2>Student Union Form</h2>

	<form action="proses.php" method="post">
		
		Name: <input type="text" name="name">
		<br><br>
		Email: <input type="email" name="email">
		<br><br>
		Website: <input type="text" name="website">
		<br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea>
		<br><br>
		Gender:
		<input type="radio" name="gender" value="male"> Male
		<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="other"> Other
		<br><br>
		
		<input type="submit" name="submit" value="Submit">

	</form>
	
</body>
</html>