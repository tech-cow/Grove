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

	function __construct($data){
		$this->id = (isset($data['id'])) ? $data['id'] : "";
		$this->name = (isset($data['name'])) ? $data['name'] : "";
		$this->size_max = (isset($data['size_max'])) ? $data['size_max'] : "";
		$this->members = (isset($data['members'])) ? $data['members'] : "";
		$this->topic = (isset($data['topic'])) ? $data['topic'] : "";
		$this->meeting_time = (isset($data['meeting_time'])) ? $data['meeting_time'] : "";
		$this->meeting_location = (isset($data['meeting_location'])) ? $data['meeting_location'] : "";
		$this->description = (isset($data['description'])) ? $data['description'] : "";
	}

	public function save($isNewGroup){
		//same logic as user class saving
	}

}


?>