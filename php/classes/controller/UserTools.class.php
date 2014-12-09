<?php 
/*
require_once '../../php/classes/db/DB.class.php';
require_once '../../php/classes/obj/User.class.php';
*/
class UserTools {
	protected $table = "users";
	//$db = new DB();
	//$db->connect();

	public function login($username, $password){
		$hashedpass = md5($password);
		$result = $db->select($table, 'username = $username, pass_hash = $hashedpass');
		if(mysql_num_rows($result)==1){
			$_SESSION['user'] = serialize(new User(mysql_fetch_assoc($result)));
			$_SESSION['login_time'] = time();
			$_SESSION['logged_in'] = 1;
			return true;
		} else {
			return false;
		}

	} 

	public function logout(){
		unset($_SESSION['user']);
		unset($_SESSION['login_time']);
		unset($_SESSION['logged_in']);
		session_destroy();
	}

	public function checkUsernameExists($username){
		if($this->get($username)){
			return true;
		} else {
			return false;
		}
	}

	public function get($id){
		$db = new DB();
		$result = $db->select('users',"id='$id'");
		return new User($result);
	}
/*
	public function getByName($name){
		$db = new DB();
		$result = $db->select('users','name="$name"');
		$out = array();
		if(count(result) > 1){
			foreach($row in $result){
				array_push($out, new User($row));
			}
			return $out;
		} else {
			return new User($result);
		}
	}*/

	//data should be formatted in json i guess?
	public function edit($userID, $data){
		$user = get($userID);
		$data = json_decode($data);
		//do something else yay
	}

	public function searchUser($query){
		//search algorithm goes here
	}

	public function changePassword($id){
		//stuff to change password goes here
	}
}
?>