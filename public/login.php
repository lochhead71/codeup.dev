<?php

	session_start();

	require_once '../Auth.php';
	require_once '../Input.php';
	require_once 'functions.php';

	function pageController()
	{
		if (Auth::check())
		{
			header('location: /authorized.php');
			die();
		}

		if (Input::has('username') && Input::has('password'))
		{
			$username = Input::get('username');
			$password = Input::get('password');
			if (Auth::attempt($username, $password)) {
				Auth::user();
				header('location: /authorized.php');
				die();
			} else {
				echo 'Those are not valid credetials!';
			}
		}
	} // close pageController

	pageController();

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