<?php
	session_start();

	$_SESSION['name']='John Doe';

	$name= $_SESSION['name'];
	$email= $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<h5>Thank you <?php echo $name; ?>, You have suscribed with the email <?php echo $email; ?></h5>
	<a href="page3.php">Go to page 3</a>
</body>
</html>