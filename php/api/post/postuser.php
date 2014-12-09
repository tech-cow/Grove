<?php
require_once '../../classes/db/DB.class.php';
require_once '../../classes/obj/Group.class.php';
require_once '../../classes/controller/UserTools.class.php';

$db = new DB();
$db->connect();

$userTools = new UserTools();
//$group = new Group();

if($_POST['userID']){ //looking up existing user
	$user = $userTools->get($_POST['userID']);
	
	//edit stuff yay

	$user->save(false);
	$user = $userTools->get($_POST['userID']);

	echo json_encode($user);
} else { //making new user
	$user->username = $_POST['username'];
	$user->pass_hash = md5($_POST['password'];
	$user->name_first = $_POST['name_first'];
	$user->name_last = $_POST['name_last'];
	$user->profile_pic_link = "NOT IMPLEMENTED";
	$user->strengths = $_POST['good'];
	$user->weaknesses = $_POST['bad'];

	$user->save(true);
	echo json_encode($user);
}



?>