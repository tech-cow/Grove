<?php
session_start();

require_once '../../classes/db/DB.class.php';
//require_once '/php/classes/controller/GroupTools.class.php';


function getgroup(){ 
	$db = new DB();
	$db->connect();
	//$groupTools = new GroupTools();

	if(!isset($_GET['apikey'])){ 
		echo "bad api key";
		return NULL;
	}

	if(isset($_GET['groupID'])){  
		$id = $_GET['groupID'];
		$data = $db->select('groups',"id = $id");
		//$data = $groupTools->get($id);
	}

	echo json_encode($data);
}

function getcurrentgroup(){
	$db = new DB();
	$db->connect();

	if($_SESSION['groupID']){
		echo json_encode($db->select('groups',"id = ".$_SESSION['groupID']));
	}
}

if(isset($_GET['currentgroup']) && $_GET['currentgroup'] == true){
	getcurrentgroup();
} else {
	getgroup();
}

?>