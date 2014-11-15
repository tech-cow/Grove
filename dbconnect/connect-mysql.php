<?php

DEFINE ('DB_USER', 'spencehood');
DEFINE ('DB_PSWD', 'spencehood');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'grove_database');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

if (!$dbcon) {
	die('Error connecting to database, please try again.');
}

echo('Success! You are now connected to the database.')

?>