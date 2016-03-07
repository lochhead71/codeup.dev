<?php

function pageController() {
	$favThings = ['acoustic guitar', 'grill tongs', 'iPhone 6s', 'Apple MacBookPro', 'Penguin shoes'];
	$data = [];
	$data['favThings'] = $favThings;
	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Favorite Things</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>

	<style>

		body {
			background-color: whitesmoke;
			font-family: 'Roboto', sans-serif;
			color:steelblue;
			font-size: 1.5em;
		}

		table {
			width: 100%;
		}

		tr {
			height: 48px;
			width: 100%;
			text-indent: 8px;
		}

		tr:nth-child(odd) {
			background: #ccc;
		}

	</style>

</head>
<body>

	<h1>My Favorite Things</h1>
	<table><?php foreach ($favThings as $items): ?>
		<tr><td><?= $items; ?></td></tr>
	<?php endforeach; ?>
	</table>
	
</body>
</html>