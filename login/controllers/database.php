<?php

class dataBase {
	
	 public function __construct($dsn, $user, $pass){
		try{
				$dsn="mysql:host=127.0.0.1;port=8889;dbname=myblog";
				$user="root";
				$pass="root";
			
			$this->db=new \PDO($dsn, $user, $pass);
		}
		catch(\PDOException $e){
			var_dump($e);
		}
	}
}