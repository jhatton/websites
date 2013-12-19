<?

// protected view
echo "<center>";
foreach($data as $d){
	echo "<b>Email:</br>";
	echo $d['email'];
	echo "<b>Phone:</br>";
	echo $d['phone'];
	echo "<b>Address:</br>";
	echo $d['address'];
	echo "<a href=''>Update</a>";
	echo "<a href=''>Delete</a>";
}
echo "</center>";