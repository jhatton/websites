<center>
<p><b>Welcome to my contacts</b></p>
<p><a href="/index.php?action=">HOME</a></p>

<? 
	if($_SESSION["loggedin"]==1){
		echo "<a href='/index.php?action=logout'>HOME</a></p>";
		echo "<a href='/protected.php?action=protected'>HOME</a></p><a href='/protected.php?action=add'>Add a Contact</a></p>";
	}else{
		echo "<a href='/index.php?action=login'>LOGIN</a></p>";
	}
?>
</center>