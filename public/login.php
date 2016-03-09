<?php

	require_once 'functions.php';
	session_start();

	// $userLogin = inputGet('LOGGED_IN_USER');
	$username = 'Bob Boberson';
	$password = 'yippeeskippy';

	if (inputHas('LOGGED_IN_USER')) {
		header('location: /authorized.php');
		die();
	}

	$attemptedUserName = inputGet('username');
	$attemptedPassword = inputGet('password');

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
		<input type="text" name="username" value="<?php escape('username'); ?>">
		<br>
		<label for="password"> Password</label>
		<input type="password" name="password" value="<?php escape('password'); ?>">
		<br><br>
		<input type="submit">
		<br><br>
	</form>
	<hr>
	
</body>
</html>