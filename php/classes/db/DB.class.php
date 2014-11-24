<?php

class DB{
	protected $db_name = "grove_database";
	protected $db_user = "root";
	protected $db_pass = "asdf";
	protected $db_host = "localhost";

	public function connect(){
		$connection = mysql_connect($this->db_host, $this->db_user, $this->db_pass);
		mysql_select_db($this->db_name);
	}

	public function processRowSet($rowSet, $singleRow = false){
		$resultArray = array();
		while($row = mysql_fetch_assoc($rowSet)){
			array_push($resultArray, $row);
		}

		if($singleRow === true){
			return $resultArray[0];
		}

		return $resultArray;
	}

	public function select($table, $where, $col=NULL){
		if($col == NULL){
			$col = "*"
		} else {
			$col = implode(',',$col);
		}

		$sql = "SELECT $col FROM $table WHERE $where";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) == 1){
			return $this->processRowSet($result, true);
		}
		return $this->processRowSet($result);
	}

	public function update($data, $table, $where){
		foreach($data as $column=>$value){
			$sql = "UPDATE $table SET $column = $value WHERE $where";
			mysql_query($sql) or die(mysql_error());
		}
		return true;
	}

	public function insert($data, $table){
		$columns = "";
		$values = "";

		foreach($data as $column => $value) {
			$columns .= ($columns == "") ? "" : ", ";
			$columns .= $column;

			$values .= ($values == "") ? "" : ", ";
			$values .= $value;
		}

		$sql = "INSERT INTO $table ($columns) VALUES ($values)";
		mysql_query($sql) or die(mysql_error());
		return mysql_insert_id();
	}	


	public function delete($data, $table){
		$sql = "DELETE FROM $table WHERE $data[0]=$data[1]";
		mysql_query($sql) or die(mysql_error());
		return true;
	}
}

?>