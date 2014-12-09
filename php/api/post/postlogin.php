<?php

require_once '../../classes/db/DB.class.php';
require_once '../../classes/controller/UserTools.class.php';

function login(){
	$controller = new UserTools();
	$db = new DB();
	$db->connect();
		
	if(!isset($_POST['apikey'])){
		echo "bad api key";
		return NULL;
	}

	if(isset($_POST['username']) && isset($_POST['password'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$result = $controller->login($user, $pass);

		echo $result;
		/*
		$query = $db->select('users', 'username=$user,pass_hash=$pass');
		if(mysql_num_rows($query) == 1){
			//success
			$_SESSION['logged_in'] = $query['id'];
		} else {
			//fail
			echo "invalid username or password";
		}
		*/
	}
}

login();
?>