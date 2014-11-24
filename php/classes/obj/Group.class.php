<?php

require_once 'php/classes/db/DB.class.php';

class Group{
	public $id;
	public $name;
	public $size_max;
	public $members;
	public $topic;
	public $meeting_time;
	public $meeting_location;
	public $description;
	public $creation_date;

	function __construct($data){
		$this->id = (isset($data['id'])) ? $data['id'] : "";
		$this->name = (isset($data['name'])) ? $data['name'] : "";
		$this->size_max = (isset($data['size_max'])) ? $data['size_max'] : "";
		$this->members = (isset($data['members'])) ? $data['members'] : "";
		$this->topic = (isset($data['topic'])) ? $data['topic'] : "";
		$this->meeting_time = (isset($data['meeting_time'])) ? $data['meeting_time'] : "";
		$this->meeting_location = (isset($data['meeting_location'])) ? $data['meeting_location'] : "";
		$this->description = (isset($data['description'])) ? $data['description'] : "";
		$this->creation_date = (isset($data['creation_date'])) ? $data['creation_date'] : "";
	}

	public function save($isNewGroup){
		$db = new DB();

		if(!$isNewGroup){ //update info
			$data = array(
				"name"=>"'$this->username'",
				"size_max"=>"'$this->size_max'",
				"members"=>"'$this->members'",
				"topic"=>"'$this->topic'",
				"meeting_time"=>"'$this->meeting_time'",
				"meeting_location"=>"'$this->meeting_location'",
				"description"=>"'$this->description'"
				);
			$db->update($data, 'groups', "id = ".$this->id);
		} else { //new group
			$data = array(
				"name"=>"'$this->username'",
				"size_max"=>"'$this->size_max'",
				"members"=>"'$this->members'",
				"topic"=>"'$this->topic'",
				"meeting_time"=>"'$this->meeting_time'",
				"meeting_location"=>"'$this->meeting_location'",
				"description"=>"'$this->description'",
				"creation_date"=>"'".date("Y-m-d H:i:s",time())."'"
				);
			$this->id = $db->insert($data, 'users');
			$this->creation_date = time();
		}
		return true;
	}

}


?>