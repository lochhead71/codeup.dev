<?php

// code to connect to the database

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'password');

require 'db_connect.php';

// PHP multidimensional array for iteratation

$parks = array(
	array ('name'=>'Acadia', 'location'=>'Maine', 'date_established'=>'1919-02-26', 'area_in_acres'=>47389.67, 'image_url'=>'/img/np_acadia.jpg'),
	array ('name'=>'American Samoa', 'location'=>'American Samoa', 'date_established'=>'1988-10-31', 'area_in_acres'=>9000.00, 'image_url'=>'/img/np_AmSomoa.jpg'),
	array ('name'=>'Arches', 'location'=>'Utah', 'date_established'=>'1929-04-12', 'area_in_acres'=>76518.98, 'image_url'=>'/img/np_arches.jpg'),
	array ('name'=>'Badlands', 'location'=>'South Dakota', 'date_established'=>'1978-11-10', 'area_in_acres'=>242755.94, 'image_url'=>'/img/np_badlands.jpg'),
	array ('name'=>'Big Bend', 'location'=>'Texas', 'date_established'=>'1944-06-12', 'area_in_acres'=>801163.21, 'image_url'=>'/img/np_BigBend.jpg'),
	array ('name'=>'Biscayne', 'location'=>'Florida', 'date_established'=>'1980-06-28', 'area_in_acres'=>172924.07, 'image_url'=>'/img/np_biscayne.jpg'),
	array ('name'=>'Black Canyon of the Gunnison', 'location'=>'Colorado', 'date_established'=>'1999-10-21', 'area_in_acres'=>32950.03, 'image_url'=>'/img/np_gunnison.jpg'),
	array ('name'=>'Bryce Canyon', 'location'=>'Utah', 'date_established'=>'1928-02-25', 'area_in_acres'=>35835.08, 'image_url'=>'/img/np_BryceCanyon.jpg'),
	array ('name'=>'Canyonlands', 'location'=>'Utah', 'date_established'=>'1964-09-12', 'area_in_acres'=>337597.83, 'image_url'=>'/img/np_canyonlands.jpg'),
	array ('name'=>'Capitol Reef', 'location'=>'Utah', 'date_established'=>'1971-12-18', 'area_in_acres'=>241904.26, 'image_url'=>'/img/np_CapitolReef.JPG'),
	array ('name'=>'Carlsbad Caverns', 'location'=>'New Mexico', 'date_established'=>'1930-05-14', 'area_in_acres'=>46766.45, 'image_url'=>'/img/np_carlsbad.jpg'),
	array ('name'=>'Channel Islands', 'location'=>'California', 'date_established'=>'1980-03-05', 'area_in_acres'=>249561.00, 'image_url'=>'/img/np_ChannelIslands.jpg'),
	array ('name'=>'Congaree', 'location'=>'South Carolina', 'date_established'=>'2003-11-10', 'area_in_acres'=>26545.86, 'image_url'=>'/img/np_congaree.jpg'),
	array ('name'=>'Crater Lake', 'location'=>'Oregon', 'date_established'=>'1902-05-22', 'area_in_acres'=>183224.05, 'image_url'=>'/img/np_CraterLake.jpg'),
	array ('name'=>'Cuyahoga Valley', 'location'=>'Ohio', 'date_established'=>'2000-10-11', 'area_in_acres'=>32860.73, 'image_url'=>'/img/np_cuyahoga.jpg'),
	array ('name'=>'Death Valley', 'location'=>'California & Nevada', 'date_established'=>'1994-10-31', 'area_in_acres'=>3372401.96, 'image_url'=>'/img/np_DeathValley.jpg'),
	array ('name'=>'Denali', 'location'=>'Alaska', 'date_established'=>'1917-02-26', 'area_in_acres'=>4740911.72, 'image_url'=>'/img/np_denali.jpg'),
	array ('name'=>'Dry Tortugas', 'location'=>'Florida', 'date_established'=>'1992-10-26', 'area_in_acres'=>64701.22, 'image_url'=>'/img/np_DryTortugas.jpg'),
	array ('name'=>'Everglades', 'location'=>'Florida', 'date_established'=>'1934-05-30', 'area_in_acres'=>1508537.90, 'image_url'=>'/img/np_everglades.jpg'),
	array ('name'=>'Gates of the Arctic', 'location'=>'Alaska', 'date_established'=>'1980-12-02', 'area_in_acres'=>7523897.74, 'image_url'=>'/img/np_GatesArctic.jpg'),
);

// convert array into correct string format for SQL

$sql = "";
foreach($parks as $park) {
	$sql .= "('{$park['name']}', '{$park['location']}', '{$park['date_established']}', {$park['area_in_acres']}, '{$park['image_url']}'),";
}
$sql = rtrim($sql,',');

// SQL code for seeding db

$parkSeeder = <<<QUERY
	TRUNCATE national_parks;

	INSERT INTO national_parks (name, location, date_established, area_in_acres, image_url)
	VALUES $sql
QUERY;

var_dump($parkSeeder);

// execute command to interface with SQL

$dbc->exec($parkSeeder);

// default confirmation message that code ran

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
