<!doctype html>
<html>

<head>
	<title>Inserting Data</title>
	<meta charset="utf-8">
</head>

<body>

<?php

if (isset($_POST['submitted'])) {

	include('connect-mysql.php');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sqlinsert = "INSERT INTO people (firstname, lastname) VALUES ('$fname', '$lname')";

	if (!mysqli_query($dbcon, $sqlinsert)) {
		die('Error inserting new data, please try again.')
	}

	$confirm = '1 new record successfully added to database.';
}

?>


	<h1>Insert Data into the Database</h1>

	<form method="post" action="insert-data.php">
	<input type="hidden" name="submitted" value="true" />
	<br>
		<label>First Name: <input type="text" name="fname" /></label>
		<label>Last Name: <input type="text" name="lname" /></label>
	<br>
	<input type="submit" value="add person" />
	</form>
	<?php
	echo $confirm;
	?>


</body>

</html>