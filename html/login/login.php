<?php session_start(); ?>
<!DOCTYPE html> 

<html>	
	<head>
		<title>Grove</title>
		<link rel="stylesheet" href="/css/login/login_style.css"/>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

		<script data-main="../../js/login.js" src="../../js/lib/require.js"></script>

	<!--this line of code get rid of the wierd symbol ("Â") of the copyright-->
	</head>

	<body>

		<?php require_once '../../php/include/global.inc.php'; ?>

		<div id="header">
			<h1><img src="http://s27.postimg.org/eatxsc3ab/logo.png" alt="Grove" align="middle"style="width:65px;height:65px"></h1>
		</div>

		<div id="page">

			<img src="http://s27.postimg.org/k8ykb37hf/logo_name.png" alt="Grove" align="middle"style="width:250px;height:100px">

			<div class="login">
				<div id="errorspace"></div>
				<form method="post">
					<ul id="login">
						<p>
							Username:
							<br>
							<input type="text" name="username">
						</p>

						<p>
							Password:
							<br>
							<input type ="password" name="password">
						</p>

						<p>
							<input name="submit" type="button" onclick="process_login(this.form)" value = "Log in">
						</p>
						
						<p>
							<a href="php/login/test.php">Signup</a>
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
	</body>
</html>