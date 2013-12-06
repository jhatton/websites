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
	$dsn="mysql:host.0.0.1;port=8889";
	$db_user="root";
	$db_pass="root";
	$db=new \PDO($dsn, $db_user, $db_pass);
	  
?>     
    
    <footer>
    <p>&copy; 2013 Jim Hatton || Full Sail University || BDF1312</p> 
    </footer>
  
</div>
</body>
</html>
   
 