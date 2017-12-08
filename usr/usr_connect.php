<?php
	
	DEFINE ('host', 'localhost');
	DEFINE ('user', 'root');
	DEFINE ('pass', '');
	DEFINE ('db', 'invent-mgmt-db');
	

	$conn = mysqli_connect(host, user, pass, db);
	if(! $conn) {
		die ("Error");
	} else {
		echo "";
	}
	
?>