<?php

$author1 = [
	'first_name' => 'Christopher',
	'last_name' => 'Buckley'
];

$author2 = [
	'first_name' => 'Tom',
	'last_name' => 'Robbins'
];

$author3 = [
	'first_name' => 'Gregory',
	'last_name' => 'Maguire'
];

$book1 = [
	'title' => 'Little Green Men',
	'author' => $author1
];

$book2 = [
	'title' => 'Thank You For Smoking',
	'author' => $author1
];

$book3 = [
	'title' => 'Skinny Legs and All',
	'author' => $author2
];

$book4 = [
	'title' => 'Still Life with Woodpecker',
	'author' => $author2
];

$book5 = [
	'title' => 'Wicked',
	'author' => $author3
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

