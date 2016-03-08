<?php

	session_start();

	$username = isset($_SESSION['LOGGED_IN_USER']) ? $_SESSION['LOGGED_IN_USER'] : '';

	if (!isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == "") {
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
	<p>Welcome, <?=$username?>.</p>
	<a href="/logout.php">Log Out</a>
</body>
</html>