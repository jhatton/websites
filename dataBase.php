<?php

class dataBase {
	
	private $db;
	
	public function __construct($dsn, $user, $pass){
		try{
		
			$this->db=new \PDO($dsn, $user, $pass);
		}
		catch(\PDOException $e){
			var_dump($e);
		}
	}
	
	public function getUsers(){
		$statment=$this->db->prepare("
	SELECT un, pass, first, last 
	FROM users
	Where (id>0)
		AND (un is not NULL)
		AND (pass is not NULL)
		AND (first is not NULL)
		AND (last is not NULL)
	ORDER BY un, pass, first, last 
");
try {
	if ($statment->execute()) {
	$rows=$statment->fetchAll(\PDO::FETCH_ASSOC);
	return $rows;
	}// if execute
}
	catch(\PDOException $e){
			echo "Couldn't query the database.";
			var_dump($e);
		}
	return array();
	}
} 