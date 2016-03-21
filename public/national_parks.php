<?php

require_once '../default_pw.php';
require_once '../db_connect.php';
require_once '../Input.php';

$page = Input::has('page_num') ? Input::get('page_num') : 1;
$offset = $page * 4 - 4;
	
$stmt = $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET {$offset}");

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$no_of_records = $dbc->query("SELECT count(id) FROM national_parks");

$count = $no_of_records->fetchColumn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>U.S. National Parks</title>
	<link rel="stylesheet" href="/css/natty_park.css">
	<link href='https://fonts.googleapis.com/css?family=Delius+Swash+Caps|Amaranth:400,700italic|Work+Sans:300,500,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div>
			<h1>America's National Parks</h1>
		</div>
	</header>
		<div class='listings'>
			<?php foreach ($parks as $park): ?>
				<h2 class='parkName'><?= $park['name'] ?></h2>
				<h3 class='parkLocation'><?= $park['location'] ?></h3>
				<p><strong>Date Established: </strong><?= $park['date_established'] ?></p>
				<p><strong>Total acreage: </strong><?= $park['area_in_acres'] ?></p><br>
				<img src="<?= $park['image_url'] ?>" alt="" class='image'>
			<?php endforeach; ?>
		</div>
		<h3></h3>

	<!-- Add some logic to determine whether or not to show the next and/or previous page links. -->
	<?php if ($page < $count/4) { ?>
		<a href="national_parks.php?page_num=<?=$page+1 ?>">Next Page</a>
	<?php } ?>
	<?php if ($page > 1) { ?>
		<a href="?page_num=<?=$page-1 ?>">Previous Page</a>
	<?php } ?>
	
</body>
</html>