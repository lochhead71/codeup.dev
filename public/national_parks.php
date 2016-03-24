<?php

require_once '../default_pw.php';
require_once '../db_connect.php';
require_once '../Input.php';

// defining global variables

$page = Input::has('page_num') ? Input::getNumber('page_num') : 1;
$limit = Input::has('input') ? Input::getNumber('input') : 4;
$offset = ($page * $limit) - $limit;

// connecting to the database

$parks = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset');

$parks->bindValue(':limit', $limit, PDO::PARAM_INT);
$parks->bindValue(':offset', $offset, PDO::PARAM_INT);

$parks->execute();
$parks = $parks->fetchAll(PDO::FETCH_ASSOC);

$no_of_records = $dbc->query("SELECT count(id) FROM national_parks");

$count = $no_of_records->fetchColumn();

require 'np_inputModal.php';

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
		<div class='header'>
			<h1>America's National Parks</h1>
			<button id='add'>Add a Park</button>
		</div>
	</header>

	<div>
		<?php foreach ($errors as $key => $value){echo "There was an error: " . $errors[$key] . PHP_EOL;} ?>
	</div>

	<!-- interating across the database to build HTML objects -->

	<div class='listings'>
		<?php foreach (array_chunk($parks, 2) as $parkRow): ?>
			<div class='row'>
				<?php foreach ($parkRow as $park): ?>
						<div class="park">
							<h2 class='parkName'><?= $park['name'] ?></h2>
							<h3 class='parkLocation'><?= $park['location'] ?></h3>
							<p><strong>Date Established: </strong><?= $park['date_established'] ?></p>
							<p><strong>Total acreage: </strong><?= $park['area_in_acres'] ?></p><br>
							<img src="<?= $park['image_url'] ?>" alt="" class='image'>
							<p class='description'><?= $park['description'] ?></p>
						</div>
				<?php endforeach ?>
			</div>
		<?php endforeach; ?>
	</div>

	<!-- Added some logic to determine whether or not to show the next and/or previous page links. -->

	<?php if ($page < $count/$limit) { ?>
		<a href="national_parks.php?page_num=<?=$page+1 ?>">Next Page</a>
	<?php } ?>
	<?php if ($page > $count/$count) { ?>
		<a href="?page_num=<?=$page-1 ?>">Previous Page</a>
	<?php } ?>

	<script>

		// Get the modal
		var modal = document.getElementById('addModal');

		// Get the button that opens the modal
		var btn = document.getElementById("add");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}

	</script>
	
</body>
</html>