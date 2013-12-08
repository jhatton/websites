<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>myBlog</title>
</head>

 <body>
 <!--main title-->
 <div id="main">  
   <h1>Welcome to myBlog</h1>
<?php
require_once "dsn.php";
require_once "bdclass.php";
/* Connect to an database  */
$model= new db(DSN, USER, PASS);
$rows=$model->getDataBase();
try {
    $dbh = new \PDO( $dsn, $user, $password);
	 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

 
	foreach ($rows as $id => $rows){
		echo "<h2>${rows['first_name']}: ${rows['last_name']}</h2>";
		echo "<li>${rows['email']}</li>";
		}
?>    
    <footer>
    <p>&copy; 2013 Jim Hatton || Full Sail University || BDF1312</p> 
    </footer>
  
</div>
</body>
</html>

   
 