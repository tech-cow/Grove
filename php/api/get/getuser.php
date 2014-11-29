<?php

require_once '../../classes/db/DB.class.php';

function getuser(){ 
	$db = new DB();
	$db->connect();

	if(!isset($_GET['apikey'])){ 
		echo "bad api key";
		return NULL;
	}

	if(isset($_GET['userID'])){  
		$id = $_GET['userID'];
		$data = $db->select('users',"id = $id");
	}

	echo json_encode($data);
}

getuser();

?>