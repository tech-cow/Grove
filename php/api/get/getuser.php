<?php
require_once '../../classes/db/DB.class.php';
//require_once '../../classes/controller/UserTools.class';

function getuser(){ 
	$db = new DB();
	$db->connect();
	//$userTools = new UserTools();

	if(!isset($_GET['apikey'])){ 
		echo "bad api key";
		return NULL;
	}

	if(isset($_GET['userID'])){  
		$id = $_GET['userID'];
		$data = $db->select('users',"id = $id");
		//$data = $userTools->get($id);
	} elseif(isset($_GET['name'])){
		$name = $_GET['name'];
		//$data = $userTools->getByName($name);
		$data = $db->select('users',"name = $name");
	}

	echo json_encode($data);
}

getuser();

?>