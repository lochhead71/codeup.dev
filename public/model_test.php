<?php 

	require_once '../Model.php';

	$book = new Model();

	$book->title1 = 'Another Roadside Attraction';
	$book->title2 = 'Still Life with Woodpecker';
	$book->title3 = 'Jitterbug Perfume';
	$book->title4 = 'Half Asleep in Frog Pajamas';
	$book->title5 = 'Fierce Invalids Home from Hot Climates';

	var_dump($book);

 ?>