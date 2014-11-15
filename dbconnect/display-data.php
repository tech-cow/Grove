<!doctype html>
<html>

<head>
	<title>Displaying Data</title>
	<meta charset="utf-8">
	<style>


	</style>

</head>

<body>

<h1>Data from DB</h1>

<?php
include('connect-mysql.php');
$sqlget = "SELECT * FROM people";
$sqldata = mysqli_query($dbcon, $sqlget) or die('Error retrieving data from the database.  Please try again.');

echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th></tr>";

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['firstname'];
	echo "</td><td>";
	echo $row['lastname'];
	echo "</td></tr>";
}

echo "</table>";

?>

</body>

</html>