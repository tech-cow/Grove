<?php
require_once '../../classes/db/DB.class.php';
//require_once '/php/classes/controller/GroupTools.class.php';

$db = new DB();
$db->connect();

/*
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
*/
echo "got a post request";
if($_POST['test']){
	echo "got val ".$_POST['test'];
}
?>