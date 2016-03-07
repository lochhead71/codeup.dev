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
	<title>Document</title>
</head>
<body>

	<h2 id="counter"><?= $counter ?></h2>

	<a href="/counter.php?counter=<?= $counter + 1; ?>">up</a>
	<a href="/counter.php?counter=<?= $counter - 1; ?>">down</a>
	
</body>
</html>