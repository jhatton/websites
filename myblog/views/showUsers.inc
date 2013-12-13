<?php
foreach ($rows as $num => $row) {
		 echo "<h2>${row['user_fullname']}: ${row['user_name']}</h2>";
		 echo "<li>${row['user_password']}: ${row['user_salt']}</li>";
	 }