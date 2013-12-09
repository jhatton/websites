<?php
 
class db{
	
	private $dbh;
		
	public function __construct($dsn, $user, $password){
		try {
			$this->dbh = new PDO( $dsn, $user, $password);
		}
		catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();	
		}
	}// construct for db
	
	public function getDataBase(){
		$statement = $this->dbh->prepare("
		SELECT first_name, last_name, email
			FROM people
			WHERE (id>0)
			AND (first_name IS NOT NULL)
			AND (last_name IS NOT NULL)
			AND (email IS NOT NULL)
		ORDER BY first_name, last_name, email
");
	try {
		if ($statement ->execute()){
			$rows=$statement->fetchAll(\PDO::FETCH_ASSOC);
			return $rows;
		 
		
			}// if executes correctly
	}
	catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();	
		}
	return array();
} 
}
?>