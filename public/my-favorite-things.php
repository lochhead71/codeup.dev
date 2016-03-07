<?php

$favThings = ['guitar', 'grill tongs', 'iPhone 6s', 'Apple MacBookPro', 'Penguin shoes'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Favorite Things</title>
</head>
<body>

	<h1>My Favorite Things</h1>
	<table><?php foreach ($favThings as $items) { ?>
		<tr><td><?php echo $items; ?></td></tr>
	<?php } ?>
	</table>
	
</body>
</html>