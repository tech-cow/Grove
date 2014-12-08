<!doctype html>

<html>

<head>

	<meta charset="utf-8">
	<title>Sign up</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<style>
		#math2, #science2, #history2, #english2, #flanguage2, #technology2, #business2, #art2, #music2{
			display: none;
		}
	</style>

</head>

<body>

<?php

/*! @mainpage Grove Signup Page
*
* @author Spence Hood
*
* @brief This is where new users will be directed to sign up for a Grove account.  Here they will input basic identity info and say which subjects they are good/bad at.  This info will then be stored in the database for future reference.
* @return This page doesn't have any parameters or returns, per say.  It is the first step for the user towards entering the app.
*
*/

/*! @param This function tests to see if the "submitted" form input has been set.  If so, the form has been filled out and the db connections should be made
 *  @result This function will do several things.  It will test that the two input passwords match, it will connect with the db, and it will input user identity info based on what they've filled out in the form. 
*/

if (isset($_POST['submitted'])) {

	if ($_POST['pass'] != $_POST['pass2']) {
    	die('Oops! Those two passwords do not match. Please try again.');
 	}

	//include('connect-mysql.php');
	$dbhost = 'localhost';  
   	$dbuser = 'root';      
   	$dbpass = ' ';
   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
   	if(! $conn )
   	{
     	die('Could not connect: ' . mysql_error());
   	}
   	echo 'Connected successfully';
  	// mysql_close($conn);



	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$good = $_POST['good'];
	$great = $_POST['great'];
	$bad = $_POST['bad'];
	$nogood = $_POST['nogood'];
	$sqlinsert = "INSERT INTO people (firstname, lastname, email, password, good, othergood, bad, otherbad) VALUES ('$fname', '$lname', '$email', '$pass', '$good', '$great', '$bad', '$nogood')";

	if (!mysqli_query( $sqlinsert,$conn)) {
		die('Error inserting new data, please try again.');
	}

	$confirm = 'Your new record has been successfully added to database.';
	mysql_close($conn);
}

?>

	<h1>Let's get rolling.</h1>

	<form method="post" action="signup.php">
		<input type="hidden" name="submitted" value="true" />
		<br>
			<label>First Name: <input type="text" name="fname" /></label><br><br>
			<label>Last Name: <input type="text" name="lname" /></label><br><br>
			<label>Email: <input type="text" name="email" /></label><br><br>
			<label>Password: <input type="password" name="pass" /></label><br><br>
			<label>Retype Password: <input type="password" name='pass2' /></label><br><br>

			<label for="good">Subject you're great at: <select name="good" id="good">
				<option value="" disabled selected>Select your option</option>
				<option value="math">Math</option>
				<option value="science">Science</option>
				<option value="history">History</option>
				<option value="english">English</option>
				<option value="flanguage">Foreign Language</option>
				<option value="philosophy">Philosophy</option>
				<option value="psychology">Psychology</option>
				<option value="technology">Technology</option>
				<option value="business">Business</option>
				<option value="art">Art</option>
				<option value="music">Music</option>
				<option value="film">Film</option>
				<option value="theater">Theater</option>
				<option value="education">Education</option>
			</select></label><br><br>

			<select name="great" id="math2">
				<option value="algebra">Algebra</option>
				<option value="trig">Trigonometry</option>
				<option value="calc12">Calculus 1 or 2</option>
				<option value="calc3">Calculus 3+</option>
				<option value="discrete">Discrete Math</option>
				<option value="probstat">Probability/Statistics</option>
				<option value="linear">Linear Algebra</option>
				<option value="diffeq">Differential Equations</option>
				<option value="analysis">Analysis</option>
				<option value="settime">Set Theory/Time Series</option>
			</select>

			<select name="great" id="science2">
				<option value="gchem">General Chemistry</option>
				<option value="ochem">Organic Chemistry</option>
				<option value="bio">Biology</option>
				<option value="mbio">Molecular Biology</option>
				<option value="anatomy">Anatomy</option>
				<option value="weather">Weather/Atmosphere</option>
				<option value="physics">Physics</option>
				<option value="astronomy">Astronomy</option>
				<option value="anthropology">Anthropology</option>
				<option value="geology">Geology</option>
				<option value="genetics">Genetics</option>
				<option value="geography">Geography</option>
				<option value="thermo">Thermodynamics</option>
			</select>

			<select name="great" id="history2">
				<option value="us">U.S./Western</option>
				<option value="la">Latin America</option>
				<option value="greek">Greek/Roman</option>
				<option value="african">African</option>
				<option value="me">Middle Eastern</option>
				<option value="kcj">Korean/Chinese/Japanese</option>
				<option value="jewish">Jewish</option>
				<option value="european">European</option>
				<option value="worldwar">World War</option>
				<option value="ais">Aztec/Incan/Spanish</option>
				<option value="wcr">Women/Cultural/Religious</option><br>
			</select>

			<select name="great" id="english2">
				<option value="writing">Writing</option>
				<option value="literature">Literature</option>
				<option value="language">Language</option>
				<option value="poetry">Poetry</option>
				<option value="shakespeare">Shakespeare</option><br>
			</select>

			<select name="great" id="flanguage2">
				<option value="spanish">Spanish</option>
				<option value="catalan">Catalan</option>
				<option value="french">French</option>
				<option value="italian">Italian</option>
				<option value="portuguese">Portuguese</option>
				<option value="chinese">Chinese</option>
				<option value="japanese">Japanese</option>
				<option value="korean">Korean</option>
				<option value="german">German</option>
				<option value="dutch">Dutch</option>
				<option value="russian">Russian</option>
				<option value="polish">Polish</option><br>
			</select>

			<select name="great" id="technology2">
				<option value="cpp">Programming (C, C++, Python, Java)</option>
				<option value="html">Programming (HTML, CSS, Javascript, jQuery)</option>
				<option value="php">Programming (PHP, MySQL, Ruby, Scala)</option>
				<option value="systems">Computer Systems/Operating Systems</option>
				<option value="data">Data Structures</option>
				<option value="electronics">Electronics</option>
				<option value="circuits">Circuits</option>
				<option value="mech">Mechanical Engineering</option>
				<option value="civil">Civil Engineering</option>
				<option value="aero">Aerospace Engineering</option>
				<option value="robotics">Robotics</option>
				<option value="ai">Artificial Intelligence</option><br>
			</select>

			<select name="great" id="business2">
				<option value="marketing">Marketing/Advertising</option>
				<option value="accounting">Accounting</option>
				<option value="management">Management</option>
				<option value="global">Global Affairs</option>
				<option value="busana">Business Analysis</option>
				<option value="dev">Development</option><br>
			</select>

			<select name="great" id="art2">
				<option value="painting">Painting</option>
				<option value="sculpting">Sculpting</option>
				<option value="pottery">Pottery/Ceramics</option>
				<option value="digital">Digital</option>
				<option value="drawing">Drawing/Sketching</option>
				<option value="abstract">Abstract/Conceptual</option><br>
			</select>

			<select name="great" id="music2">
				<option value="painting">Theory</option>
				<option value="sculpting">Choir</option>
				<option value="pottery">Orchestra</option>
				<option value="digital">Band</option>
				<option value="drawing">Education</option>
				<option value="abstract">Jazz</option><br>
			</select><br>



			<label for="bad">Subject need some help with: <select name="bad" id="bad">
				<option value="" disabled selected>Select your option</option>
				<option value="math">Math</option>
				<option value="science">Science</option>
				<option value="history">History</option>
				<option value="english">English</option>
				<option value="flanguage">Foreign Language</option>
				<option value="philosophy">Philosophy</option>
				<option value="psychology">Psychology</option>
				<option value="technology">Technology</option>
				<option value="business">Business</option>
				<option value="humanities">Humanities</option>
				<option value="art">Art</option>
				<option value="music">Music</option>
				<option value="film">Film</option>
				<option value="theater">Theater</option>
				<option value="education">Education</option>
			</select></label><br><br>
			<div id="another"></div>

			

		<br><br>
		<input type="submit" value="Sign In!" />
	</form>

	<?php
	echo $confirm;
	?>

	<script>
		$(document).ready(function() {

			$("#good").live('change', function() {
    			if ($(this).val() == 'math'){
        			$("#math2").css("display", "block");
        		} else {
        			$("#math2").css("display", "none");
        		}
        		if ($(this).val() == 'science'){
        			$("#science2").css("display", "block");
        		} else {
        			$("#science2").css("display", "none");
        		}
        		if ($(this).val() == 'history'){
        			$("#history2").css("display", "block");
        		} else {
        			$("#history2").css("display", "none");
        		}
        		if ($(this).val() == 'english'){
        			$("#english2").css("display", "block");
        		} else {
        			$("#english2").css("display", "none");
        		}
        		if ($(this).val() == 'flanguage'){
        			$("#flanguage2").css("display", "block");
        		} else {
        			$("#flanguage2").css("display", "none");
        		}
        		if ($(this).val() == 'technology'){
        			$("#technology2").css("display", "block");
        		} else {
        			$("#technology2").css("display", "none");
        		}
        		if ($(this).val() == 'business'){
        			$("#business2").css("display", "block");
        		} else {
        			$("#business2").css("display", "none");
        		}
        		if ($(this).val() == 'art'){
        			$("#art2").css("display", "block");
        		} else {
        			$("#art2").css("display", "none");
        		}
        		if ($(this).val() == 'music'){
        			$("#music2").css("display", "block");
        		} else {
        			$("#music2").css("display", "none");
        		}
        	});

			$("#bad").live('change', function() {
    			if ($(this).val() == 'math'){
    				$("#math2").clone().attr({id: "math3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#math3").css("display", "none");
        		}
        		if ($(this).val() == 'science'){
        			$("#science2").clone().attr({id: "science3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#science3").css("display", "none");
        		}
        		if ($(this).val() == 'history'){
        			$("#history2").clone().attr({id: "history3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#history3").css("display", "none");
        		}
        		if ($(this).val() == 'english'){
        			$("#english2").clone().attr({id: "english3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#english3").css("display", "none");
        		}
        		if ($(this).val() == 'flanguage'){
        			$("#flanguage2").clone().attr({id: "flanguage3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#flanguage3").css("display", "none");
        		}
        		if ($(this).val() == 'technology'){
        			$("#technology2").clone().attr({id: "technology3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#technology3").css("display", "none");
        		}
        		if ($(this).val() == 'business'){
        			$("#business2").clone().attr({id: "business3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#business3").css("display", "none");
        		}
        		if ($(this).val() == 'art'){
        			$("#art2").clone().attr({id: "art3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#art3").css("display", "none");
        		}
        		if ($(this).val() == 'music'){
        			$("#music2").clone().attr({id: "music3", name: "nogood"}).css("display", "block").insertAfter("#another");
        		} else {
        			$("#music3").css("display", "none");
        		}
        	});

		});
	</script>

</body>

<!--
	This is how this page works.  All of the user's info up until the subjects will be added to the database as expected.
	Once at the dropdown, the user will see that some options, like "Math", reveal a secondary dropdown with more specific
	areas.  Other options, like "Psychology", do not.  If the user picks "Math" > "Algebra", for example, two values will
	be pushed into the table.  In the "good" column, we will see a value of "Math", and in the "othergood" column, we will
	see a value of "Algebra".  I think we should just take into consideration "Algebra".  In other words, if something is
	stored into the "othergood" column that isn't "null", we should use that value as opposed to whatever is in the "good"
	column.  The same logic applies to the "bad" and "otherbad" columns.  I'd also reccomend we don't let users pick more
	than one area that they are strong or weak yet.  We can talk about that being a potential future improvement, but I
	don't think it's worth the extra work right now.  I'm sorry if this isn't the most efficient way of doing things haha
	but it's the best I could think of.  Simon, feel free to change name attributes or SQL posts to fit your tables if you
	want.  I apologize for potential unsemantic labeling too... Lemme know if you have any other questions.

-->

</html>
