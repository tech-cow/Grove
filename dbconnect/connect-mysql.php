<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', 'asdf');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'grove_database');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

if (!$dbcon) {
	die('Error connecting to database, please try again.');
}

echo('Success! You are now connected to the database.')

?>

<!-- This should get our connection to the db started, and print a message telling us whether that connection was successful
or not.  I believe all that needs to change here is 'localhost' on line 5.  That should instead point to wherever the
db is stored. -->
