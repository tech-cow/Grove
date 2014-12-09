<?php 

//require_once '../../php/classes/db/DB.class.php';

//require_once '../../classes/db/DB.class.php';

//require_once '../db/DB.class.php';
//require_once '/../db/DB.class.php';

//require_once '../../classes/obj/Group.class.php';

class GroupTools {
	protected $table = "groups";

	//returns false if failed, returns true if successful
	public function add_member($memberid, $groupid){
		$db = new DB();
		$group = $this->get($groupid);

		//$group_members = mysql_query("select members from groups where id='$groupid'");
		$group_members = $group->members;
		$group_members = explode($group_members,',');
		
		foreach($group_members as $index => $value){
			if($value == $memberid){
				return false;
			}
		}

		array_push($group_members, $memberid);
		$group->members = implode($group_members,",");
		$group->save();
		return true;
	}

	public function remove_member($memberid, $groupid){
		//$db = new DB();

		$group = $this->get($groupid);

		$group_members = explode($group->members, ',');
		$new_group_members = array_diff($group_members, array($memberid));
		$group->members = implode($new_group_members, ',');
		$group->save();

		return true;
	}

	public function get($id){
		$db = new DB();
		$result = $db->select('groups',"id='$id'");
		return new Group($result);
	}

	public function get_raw($id){
		$db = new DB();
		$result = $db->select('groups',"id=$id");
		return $result;
	}

	public function delete_group($id){
		$group = $this->get($id);
		$db = new DB();
		$selector = array(
			'id',
			'$id'
			);
		$db->delete($selector,'');
	}

	public function searchGroup($query){
		//searching algorithm goes here
	}
}

?>
