 <?
 class DB{
 	
	public function __construct(){
		// try connection to database
		try {
			$dsn="mysql:dbname=myblog;host=127.0.0.1";
			$db_user="root";
			$db_pass="root";
			
			$this->db=new PDO($dsn,$db_user, $db_pass);
		} catch (PDOException $error){
			var_dump($error);
		}
		
	}
 }
?>