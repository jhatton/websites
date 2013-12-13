<?php

class dataBase {
	
	private $db;
	
	public function __construct($dsn, $user, $pass){
		try{
			$this->db =new \PDO($dsn, $user, $pass);
		}
		catch(\PDOException $e){
			var_dump($e);
		}
	}
	
	public function getUsers(){
		$statment=$this->db->prepare("
	SELECT user_name, user_password, user_fullname, user_salt
	FROM users
	Where (user_id>0)
		AND (user_name is not NULL)
		AND (user_password is not NULL)
		AND (user_fullname is not NULL)
		AND (user_salt is not NULL)
	ORDER BY user_name, user_password, user_fullname, user_salt
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