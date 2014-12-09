<?php
//require_once 'php/classes/db/DB.class.php';
require_once '../../classes/db/DB.class.php';
require_once '../../classes/obj/Group.class.php';
require_once '../../classes/controller/GroupTools.class.php';
//require_once 'php/classes/controller/GroupTools.class.php';

$db = new DB();
$db->connect();

$groupTools = new GroupTools();
//$group = new Group();

if($_POST['groupID']){ //looking up existing group
	$group = $groupTools->get($_POST['groupID']);
	
	$group->description = $_POST['description'];
	$group->meeting_time = $_POST['meeting_time'];
	$group->meeting_location = $_POST['meeting_location'];

	$group->save(false);
	$group = $groupTools->get($_POST['groupID']);
	//$groupraw = $groupTools->get_raw($_POST['groupID']);
	//echo json_encode($groupraw);
	echo json_encode($group);
	return;
} else { //making new group
	$group->name = $_POST['name'];
	$group->size_max = $_POST['size_max'];
	$group->members = $_POST['members'];
	$group->topic = $_POST['topics'];
	$group->meeting_time = $_POST['meeting_time'];
	$group->meeting_location = $_POST['meeting_location'];
	$group->description = $_POST['description'];
	$group->creation_date = $_POST['creation_date'];

	$group->save(true);
	echo "made new group";
	return;
}
?>