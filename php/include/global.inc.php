<?php

require_once '../../php/classes/obj/Group.class.php';
require_once '../../php/classes/obj/User.class.php';
require_once '../../php/classes/db/DB.class.php';
require_once '../../php/classes/controller/GroupTools.class.php';
require_once '../../php/classes/controller/UserTools.class.php';

$db = new DB();
$db->connect();

$userTools = new UserTools();
$groupTools = new GroupTools();

session_start();

if(isset($_POST['getGroup'])){
	echo json_encode($groupTools->get($_SESSION['groupID']));
} else if(isset($_POST['getMember'])){
	echo "getting member ".$_POST['getMember'];
	echo json_encode($userTools->get($_POST['getMember']));
}

/*
session_start();
if(isset($_SESSION['logged_in'])){
	$user = unserialize($_SESSION['user']);
	$_SESSION['user'] = serialize($userTools->get($user->id));
}

//leaving above unimplemented on account of lack of
any sort of login or authentication system or stuff

*/




?>