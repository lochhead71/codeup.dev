<?php

$book1 = [
	'title' => 'Little Green Men',
	'author' => [
		'first_name' => 'Christopher',
		'last_name' => 'Buckley'
	]
];

$book2 = [
	'title' => 'Thank You For Smoking',
	'author' => [
		'first_name' => 'Christopher',
		'last_name' => 'Buckley'
	]
];

$book3 = [
	'title' => 'Skinny Legs and All',
	'author' => [
		'first_name' => 'Tom',
		'last_name' => 'Robbins'
	]
];

$book4 = [
	'title' => 'Still Life with Woodpecker',
	'author' => [
		'first_name' => 'Tom',
		'last_name' => 'Robbins'
	]
];

$book5 = [
	'title' => 'Wicked',
	'author' => [
		'first_name' => 'Gregory',
		'last_name' => 'Maguire'
	]
];

$books = [
	'book1' => $book1,
	'book2' => $book2,
	'book3' => $book3,
	'book4' => $book4,
	'book5' => $book5
];

print_r($books);

echo "{$book2['title']} was written by {$book2['author']['first_name']} {$book2['author']['last_name']}.\n";

