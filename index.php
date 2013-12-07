<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="stylesheet" href="css/style.css">
 <title>myBlog</title>
</head>

 <body>
 <!--main title-->
 <div id="main">  
   <h1>Welcome to myBlog</h1>
<?php
/* Connect to an ODBC database using an alias */
$dsn = 'myblog';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO(mysql:host=127.0.0.1; $dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>    
    <footer>
    <p>&copy; 2013 Jim Hatton || Full Sail University || BDF1312</p> 
    </footer>
  
</div>
</body>
</html>
   
 