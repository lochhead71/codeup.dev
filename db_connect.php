<?php

define('PASSWORD', 'vagrant');

$dbc = new PDO(
	'mysql:host=127.0.0.1;dbname=employees',
	'vagrant',
	PASSWORD
);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);