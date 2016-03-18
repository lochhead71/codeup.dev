<?php

require_once '../default_pw.php';
require_once '../db_connect.php';
require_once '../Input.php';

$page = Input::has('page_num') ? Input::get('page_num') : 1;
$offset = $page * 4 - 4;
	
$stmt = $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET {$offset}");

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

	<a href="national_parks.php?page_num=<?=$page+1 ?>">Next Page</a>
	<a href="national_parks.php?page_num=<?=$page-1 ?>">Previous Page</a>
	
</body>
</html>