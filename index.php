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
	$dsn="mysql:host=127.0.0.01;port=8889;dbname=myblog";
	$db_user="root";
	$db_pass="root";
	$db=new PDO($dsn, $db_user, $db_pass);
	$statement= $db->prepare("
		SELECT first_name, last_name, email
		FROM person 
		WHERE (id>0)
			AND (first_name IS NOT NULL);
			AND (last_name IS NOT NULL);
			AND (email IS NOT NULL);
		ORDER BY first_name, last_name, email
	");
	if ($statement->execute()){
		$rows=$statement>fetchAll(\PDO::FETCH_ASSOC);
		}
?>     
    
    <footer>
    <p>&copy; 2013 Jim Hatton || Full Sail University || BDF1312</p> 
    </footer>
  
</div>
</body>
</html>
   
 