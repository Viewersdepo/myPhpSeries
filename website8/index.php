<?php
	require('config/DB.php');

	$query= 'SELECT * FROM posts';

	//Get Result
	$result= mysqli_query($conn, $query);

	//Fetch data
	$posts=mysqli_fetch_all($result, MYSQLI_ASSOC);
	var_dump($posts);

	//Free Result
	//mysqli_free_result($result);

	//close Connection
	//mysqli_close($conn);
?>
