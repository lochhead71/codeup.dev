<?php

	session_start();

	$userLogin = isset($_SESSION['LOGGED_IN_USER']) ? $_SESSION['LOGGED_IN_USER'] : '';

	$username = 'Bob Boberson';
	$password = 'yippeeskippy';

	if (isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != "") {
		header('location: /authorized.php');
		die();
	}
		
	$attemptedUserName = isset($_POST['username']) ? $_POST['username'] : '';
	$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

	if ($attemptedUserName == $username && $attemptedPassword == $password) {
		$_SESSION['LOGGED_IN_USER'] = $username;
		header('location: /authorized.php');
		die();
	} elseif ($attemptedUserName != '' || $attemptedPassword != '') {
		echo 'Those are not valid credetials!';
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