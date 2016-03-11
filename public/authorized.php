<?php

	require_once '../Auth.php';
	
	session_start();

	if (!Auth::check())
	{
		header('location: /login.php');
		die();
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Authorized</title>
	</head>
	<body>
		<h1>Authorized</h1>
		<p>Welcome, <?=Auth::user()?>.</p>
		<a href="/logout.php">Log Out</a>
	</body>
</html>