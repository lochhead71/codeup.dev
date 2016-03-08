<?php

	$username = 'Bob Boberson';
	$password = 'yippeeskippy';

	$attemptedUserName = isset($_POST['username']) ? $_POST['username'] : '';
	$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

	if ($attemptedUserName == $username && $attemptedPassword == $password) {
		echo 'You have successfully logged in!';
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>

	<hr><br>
	<form method="POST">
		<label for="username">User Name</label>
		<input type="text" name="username">
		<br>
		<label for="password"> Password</label>
		<input type="password" name="password">
		<input type="submit">
		<br>
	</form>
	<hr>
	
</body>
</html>