<?php

	class authModel{
		
		public $db;
		// constructs function for server
		public function __construct( $dsn, $user, $pass){
			$this->db= new PDO($dsn, $user, $pass);
			$this->db->setAttribute (PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			
			}	
			
		// gets users name and passwords
		public function getUserByNamePass($name, $pass){
			$stmt=$this->db->prepare("
				SELECT user_id AS id, user_name AS name, user_fullname AS fullname
				FROM users
				WHERE (user_name = :name)
					AND	(user_password = MD5(CONCAT(user_salt, :pass)))
		");
		// if username and password exist then return 
		if ($stmt->execute(array(':name' =>$name, ':pass' => $pass))) {
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
				if(count($rows)===1) {
					return $rows[0];	
				}
			return FALSE;
		}
			
			
		}
	}
	
	