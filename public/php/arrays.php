<?php

$num = [1,2,3,4,5];

var_dump($num);

print_r($num);

echo $num[3] . PHP_EOL;

$person1 = [
	'first_name' => 'Jimmy Joe',
	'last_name' => 'Fuddrucker',
	'email' => 'jj@fuddrucker.com',
	'phone_number' => '210-555-1234'
];

$person2 = [
	'first_name' => 'Bobby Joe',
	'last_name' => 'Fuddrucker',
	'email' => 'bj@fuddrucker.com',
	'phone_number' => '210-555-1235'
];

$person3 = [
	'first_name' => 'Danny Joe',
	'last_name' => 'Fuddrucker',
	'email' => 'dj@fuddrucker.com',
	'phone_number' => '210-555-1236'
];

$test = ['person1' => $person1, 'person2' => $person2, 'person3' => $person3];

print_r($test);