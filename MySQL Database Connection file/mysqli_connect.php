<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'airline_reservation';

$dbc=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>

