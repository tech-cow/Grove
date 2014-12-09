<?php
session_start();

require_once '../../classes/db/DB.class.php';
//require_once '/php/classes/controller/GroupTools.class.php';

<<<<<<< HEAD
=======
/*! @mainpage GetGroup()
*@author Simon R-G
*This function uses the sql connection to get info about a study group of users from the database.
*
*@brief The point of this function is to return the primary group info.  It will show up on the homepage and group page, and is a pivotal feature of Grove.
*@return The value returned is the id of the group.
*
*/

/*! @param Just requires a database connection, which is handled at the beginning of the function.
 *  @result Standard information regarding the student group is fetched
 *  @test The test scenario would be if a user clicked on a student group from the homepage, thus being directed to the groupview page and triggering this function
*/
>>>>>>> 0a6e16ac8ba58e37cf325c1ed3b180de3e82a010

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
