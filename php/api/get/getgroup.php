<?php
require_once '../../classes/db/DB.class.php';
//require_once '/php/classes/controller/GroupTools.class.php';

/*! @mainpage GetGroup()
*@author Simon R-G
*This function uses the sql connection to get info about a study group of users from the database.
*
*@brief The point of this function is to return the primary group info.  It will show up on the homepage and group page, and is a pivotal feature of Grove.
*@return The value returned is the id of the group.
*
*/

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

getgroup();

?>
