<?php

require_once '../Input.php';

function pageController() {
	if (!Input::has('counter') && !Input::has('status')) {
		$counter = 0;
		$status = 'new game';
	} else {
		$counter = Input::get('counter');
		$status = Input::get('status');
	}
	$data = [
		'counter' => $counter,
		'status' => $status
		];

	if (Input::get('status') == 'MISS') {
		$image = '/img/Splat_Paddle.png';
	} else {
		$image = '/img/Forrest_Paddle.png';
	}

	$data['image'] = $image;

	return $data;
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
	<a href="/ping.php?counter=0&status=MISS" >MISS</a>
	<img src="<?php echo $image ?>" alt="Ping Pong Paddle">  
	
</body>
</html>