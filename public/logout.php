<?php

	require_once '../Auth.php';
	require_once '../Input.php';

	session_start();

	Auth::logout();
	header('location: /login.php');
	die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log Out</title>
</head>
<body>
	
</body>
</html>