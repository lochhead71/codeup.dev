<?php

function pageController() {
	if (! isset( $_GET['counter'] ) && ! isset( $_GET['status'])) {
		$_GET['counter'] = 0;
		$_GET['status'] = "New Game";
	}

	return $_GET;
}

extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ping: The Page</title>
	<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<style>
		body {
			background-color: gainsboro;
			font-family: 'Permanent Marker', cursive;
			font-size: 1.5em;
			padding: 30px;
		}

		a {
			padding: 6px;
			text-decoration: none;
			background-color: mediumblue;
			color: white;
			border-radius: 6px;
		}

	</style>
</head>
<body>

	<h2 id="counter">Number of Hits: <?=$counter?></h2>
	<h3><?= 'It\'s a ' . $status; ?></h3>

	<a href="/pong.php?counter=<?=$counter+1;?> & status=HIT ">HIT</a>
	<a href="/ping.php?counter=0&status=MISS" id="miss">MISS</a>
	<img src="/img/Forrest_Paddle.png" id="pcubed" alt="Ping Pong Paddle">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script>
		$(#miss).click(function() {
			$(#pcubed).hide();
			$(#splat).show();
		}
	</script>

</body>
</html>