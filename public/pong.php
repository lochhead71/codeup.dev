<?php

function pageController() {
	if (! isset( $_GET['counter'] )) {
		$_GET['counter'] = 0;
	}
	return $_GET;
}

extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pong: The ONLY Alternative</title>
	<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<style>
		body {
			background-color: gainsboro;
			font-family: 'Permanent Marker', cursive;
			font-size: 1.5em;
			text-align: right;
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
	<h3><?= 'It\'s a ' . $_GET['status']; ?></h3>


	<img src="/img/Forrest_Paddle.png" id="pcubed" alt="Ping Pong Paddle">
	<a href="/ping.php?counter=<?=$counter+1;?>&status=HIT">HIT</a>
	<a href="/ping.php?counter=0&status=MISS" id="miss">MISS</a>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script>
		$(#miss).click(function() {
			$(#pcubed).hide();
			$(#splat).show();
		}
	</script>
	
</body>
</html>