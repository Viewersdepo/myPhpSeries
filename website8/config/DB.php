<?php
	//Create Connection
	$conn= mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	//Check the connection
	if (mysqli_connect_errno()) {
		//Conection Failed 
		echo 'Failed to connect to MYSQL '.mysqli_connect_errno();
		exit;
	}
?>