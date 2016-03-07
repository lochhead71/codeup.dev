<?php

$randoAdj = [ 'happy', 'perky', 'sleepy', 'snarky', 'woozy', 'fuzzy', 'funky', 'sulky', 'fizzy', 'loopy'];
$randoName = [ 'Jerry', 'Bobby', 'Phil', 'Bill', 'Mickey', 'Pigpen', 'Tom', 'Keith', 'Donna', 'Brent'];

function ServerNameGenerator($var1, $var2) {
	$index1 = mt_rand(0, count($var1)-1);
	$index2 = mt_rand(0, count($var2)-1);
	$message = $var1[$index1] . "_" . $var2[$index2];
	return $message;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Name Generator</title>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<style>
		body {
			background-color: lemonchiffon;
			background-image: url("/img/server.png");
			margin: 0px;
		}

		.RandoName {
			font-family: 'Lobster', cursive;
			color: darkmagenta;
			text-align: center;
			font-size: 3em;
			position: absolute;
			width: 100%;
			top: 100px;
			background-color: rgba(255,235,175,0.7);
			background-opacity:0.7;
			padding: 10px;
			margin: 0px;
		}
	</style>
</head>
<body>

	<h2 class="RandoName"><?php echo ServerNameGenerator($randoAdj, $randoName); ?></h2>

	<script>

		
	</script>	
</body>
</html>