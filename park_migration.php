<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dropTable = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($dropTable);

$migration = <<<QUERY
	CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name  CHAR(100) NOT NULL,
	location CHAR(100) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
    PRIMARY KEY (id)
)
QUERY;

$dbc->exec($migration);