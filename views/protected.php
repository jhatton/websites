<?

// protected page
echo "<center>";
foreach($data as $d){
	echo "<b>Email:</br>";
	echo $d['email'];
	echo "<b>Phone:</br>";
	echo $d['phone'];
	echo "<b>Address:</br>";
	echo $d['address'];
	echo "<a href='?action=update&id=".$d["id"]."'>Update</a>";
	echo "<a href='?action=delete&id=".$d["id"]."'>Delete</a>";
	echo "<br>";
}
echo "</center>";