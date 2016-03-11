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
				echo 'Those are not valid credentials!';
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
	<link rel="stylesheet" href="/css/basic.css">
</head>
<body>

	<form method="POST">
		<label for="username">User Name</label>
		<input type="text" name="username" value="<?php escape('username'); ?>"><br>
		<label for="password"> Password</label>
		<input type="password" name="password" value="<?php escape('password'); ?>"><br>
		<input class = "button" type="submit">
	</form>
	
</body>
</html>