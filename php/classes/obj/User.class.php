<?php

require_once 'php/classes/db/DB.class.php';

class User{
	public $id;
	public $username;
	public $pass_hash;
	public $name_first;
	public $name_last;
	public $profile_pic_link;
	public $strengths;
	public $weaknesses;


	function __construct($data){
		$this->id = (isset($data['id'])) ? $data['id'] : "";
		$this->username = (isset($data['username'])) ? $data['username'] : "";
		$this->pass_hash = (isset($data['pass_hash'])) ? $data['pass_hash'] : "";
		$this->name_first = (isset($data['name_first'])) ? $data['name_first'] : "";
		$this->name_last = (isset($data['name_last'])) ? $data['name_last'] : "";
		$this->profile_pic_link = (isset($data['profile_pic_link'])) ? $data['profile_pic_link'] : "";
		$this->strengths = (isset($data['strengths'])) ? $data['strengths'] : "";
		$this->weaknesses = (isset($data['weaknesses'])) ? $data['weaknesses'] : "";
	}

	public function save($isNewUser = false){
		//get current state of variables and such
		//and then update database values accordingly

		//isnewuser will be true if registering a new user,
		//values will be added instead of just updated

		//new user -> db.insert
		//not new user -> db.update
	}
}