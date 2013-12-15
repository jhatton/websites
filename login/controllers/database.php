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
}