<!doctype html>
<!--
<html>

<head>
	<title>Inserting Data</title>
	<meta charset="utf-8">
</head>

<body>
-->
<?php
$dbconnect_path = "../dbconnect/";


if (isset($_POST['submitted'])) {

	include($dbconnect_path + 'connect-mysql.php');
	$desc = $_POST['group_description'];
	$meeting_time = $_POST['group_time'];
	$meeting_loc = $_POST['group_loc'];
	$sqlinsert = "INSERT INTO groups (description, meeting_time, meeting_location) VALUES ('$desc', '$meeting_time', '$meeting_loc')";

	if (!mysqli_query($dbcon, $sqlinsert)) {
		die('Error inserting new data, please try again.');
	}

	$confirm = '1 new record successfully added to database.';
}

?>

<!--
	<h1>Insert Data into the Database</h1>

	<form method="post" action="insert-data.html">
	<input type="hidden" name="submitted" value="true" />
	<br>
		<label>First Name: <input type="text" name="fname" /></label>
		<label>Last Name: <input type="text" name="lname" /></label>
	<br>
	<input type="submit" value="add person" />
	</form>
	<?php
	
	//if($confirm){
	//	echo $confirm;
	}
	//echo $confirm;
	?>


</body>

</html>
-->


<!-- This should insert some data into our db.  Assuming the table named "people" has been created in the db, this will
allow a user to add a first name and last name into that table, which will both be stored in seperate columns. So,
when we have a finalized "Sign up" page, for example, that page should probably have a script looking a lot like this,
where stuff entered in the form fields gets pushed to the db. -->
