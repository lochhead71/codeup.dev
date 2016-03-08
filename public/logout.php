<?php

session_start();

function clearSession() {
    session_unset();
    session_regenerate_id(true);
    header('location: /login.php');
	die();
}

   clearSession();

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