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
/* Connect to an  database  */
$dsn = 'mysql:host=127.0.0.1;dbname=myblog;port=8889';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO( $dsn, $user, $password);
	 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$statement = $dbh->prepare("
	SELECT first_name, last_name, email
	FROM people
	WHERE (id>0)
	ORDER BY first_name, last_name, email
");
var_dump($statement);

?>    
    <footer>
    <p>&copy; 2013 Jim Hatton || Full Sail University || BDF1312</p> 
    </footer>
  
</div>
</body>
</html>

   
 