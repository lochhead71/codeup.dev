<?php

	session_start();

	$username = 'Bob Boberson';
	$password = 'yippeeskippy';

	if ($_SESSION['logged_in_user'] != $username) {
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
</body>
</html>