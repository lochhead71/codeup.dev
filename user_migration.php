<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'codeup_test_db');
define('DB_USER', 'vagrant');
define('DB_PASS', 'vagrant');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dropTable = 'DROP TABLE IF EXISTS users';

$dbc->exec($dropTable);

$migration = <<<QUERY
	CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name  CHAR(50) NOT NULL,
	last_name CHAR(50) NOT NULL,
	email_address CHAR(100) NOT NULL,
	password CHAR(100) NOT NULL,
    PRIMARY KEY (id)
)
QUERY;

$dbc->exec($migration);