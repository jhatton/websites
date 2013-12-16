<?php

echo "<center>";

foreach ($data as $user){
	echo $user['First Name'];
	echo " ";
	echo $user['Last Name'];
	echo "<a href=?action=details&$id".$data["id"].">detalis</a?";
	echo "</br>";
}

echo "</center>";
