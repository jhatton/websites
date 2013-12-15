<?php

include "database.php";

class getsModels extends dataBase{
	
	public function _constructs () {
		
	}
	
	public function getNames(){
		$sql="select * from users";
		$statement = $this->db->prepare($sql);
		$statement->execute();
		
		return $statement->fetchAll();
	}
	
	public function getOne($id=0) {
		$sql="select * from users";
		$statement = $this->db->prepare($sql);
		$statement->execute();
		
		return $statement->fetchAll();
		
	}
}


