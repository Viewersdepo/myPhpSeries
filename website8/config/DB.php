<?php
	//Create Connection
	$conn= mysqli_connect('localhost', 'root', 'uzo123amaka', 'phpblog');

	//Check the connection
	if (mysqli_connect_errno()) {
		//Conection Failed 
		echo 'Failed to connect to MYSQL '.mysqli_connect_errno();
	}
?>