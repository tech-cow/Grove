<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Sign up</title>
	<style>

	</style>

</head>

<body>

<?php

if (isset($_POST['submitted'])) {

	if ($_POST['pass'] != $_POST['pass2']) {
    	die('Oops! Those two passwords do not match. Please try again.');
 	}

	include('connect-mysql.php');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$sqlinsert = "INSERT INTO people (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$pass')";

	if (!mysqli_query($dbcon, $sqlinsert)) {
		die('Error inserting new data, please try again.');
	}

	$confirm = '1 new record successfully added to database.';
}

?>

	<h1>Let's get rolling.</h1>

	<form method="post" action="insert-data.php">
		<input type="hidden" name="submitted" value="true" />
		<br>
			<label>First Name: <input type="text" name="fname" /></label><br>
			<label>Last Name: <input type="text" name="lname" /></label><br>
			<label>Email: <input type="text" name="email" /></label><br>
			<label>Password: <input type="password" name="pass" /></label><br>
			<label>Retype Password: <input type="password" name='pass2' /></label>
		<br>
		<input type="submit" value="add person" />
	</form>

	<?php
	echo $confirm;
	?>

</body>

</style>