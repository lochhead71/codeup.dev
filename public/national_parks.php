<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');

require_once '../db_connect.php';

$stmt = $dbc->query('SELECT * FROM national_parks');

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>U.S. National Parks</title>
</head>
<body>
	<?php foreach ($parks as $park): ?>
		<h2><?= $park['name'] ?></h2>
		<h3><?= $park['location'] ?></h3>
		<p><strong>Date Established: </strong><?= $park['date_established'] ?></p>
		<p><strong>Total acreage: </strong><?= $park['area_in_acres'] ?></p><br>
		<?php endforeach; ?>
	
</body>
</html>