<?php
require_once '../../classes/db/DB.class.php';
//require_once '../../classes/controller/UserTools.class';

/*! @mainpage GetUser()
* @author Simon R-G
* This function uses the sql connection to get info about the user from the database.
*
* @brief The point of this function is to return some info about the current user.  It will show up on the homepage and be necessary in matching him or her up with other users.
* @return The values returned are the user id and the user's name.
*
*/

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
