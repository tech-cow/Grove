<!-- <!--
?php 
session_start();
error_reporting(0);
mysql_connect('localhost'.'root','');
mysql_select_db(login); 
function sanitize($data){
return mysql_real_escape_string($data);
function user_exists($username){
	$username = sanitze($username);
	return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username'"),0) == 1)? true : false;
}
function user_active($username){
	$username = sanitze($username);
	return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username' AND active = 1"),0) == 1)? true : false;
}
$errors = array();
?>
!-->

<DOCTYPE <html>
		
<head>
	<title>Grove</title>
	<link rel="stylesheet" href="css/login/login_style.css"/>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!--this line of code get rid of the wierd symbol ("Â") of the copyright-->
</head>


<div id="header">
<h1><img src="http://s27.postimg.org/eatxsc3ab/logo.png" alt="Grove" align="middle"style="width:65px;height:65px"></h1>
</div>

<div id="page">

	<img src="http://s27.postimg.org/k8ykb37hf/logo_name.png" alt="Grove" align="middle"style="width:250px;height:100px">

	<div class="login">
		<form action = "login.php" method="post">
			<ul id= "login">
				<p>
					Username:<br>
					<input type "text" name="username"
				</p>
				<p>
					Password:<br>
					<input type ="password" name="password">
				</p>
				<p>
					<input type="submit" value = "Log in">
				</p>
				<p>
				<a href="../../php/login/test.php">Signup</a>
				</p>

			</ul>
		</form>
	</div>


    	<div class="login-help">
    		<p>Forgot your password? <a href="php/login/change_pass.html">Click here to reset it</a>.</p>
    	</div>

</div>


<div id="footer">
Copyright © Grove.com
</div>


