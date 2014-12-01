<?php
//require_once '../../classes/db/DB.class.php';
require_once '../../classes/controller/GroupTools.class';

function getuser(){ 
	//$db = new DB();
	//$db->connect();
	$groupTools = new GroupTools();

	if(!isset($_GET['apikey'])){ 
		echo "bad api key";
		return NULL;
	}

	if(isset($_GET['groupID'])){  
		$id = $_GET['groupID'];
		//$data = $db->select('users',"id = $id");
		$data = $groupTools->get($id);
	}

	echo json_encode($data);
}

getuser();

?>