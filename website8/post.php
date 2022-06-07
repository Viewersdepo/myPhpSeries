<?php
	require('config/config.php');
	require('config/DB.php');

	//get ID
	$id=mysqli_real_escape_string($conn, $_GET['Id']);

	#Create Query
	$query= 'SELECT * FROM post WHERE Id= '.$id;

	//Get Result
	$result= mysqli_query($conn, $query);


	#Fetch data
	$post=mysqli_fetch_assoc($result);
	//var_dump($posts);
	

	#Free Result
	mysqli_free_result($result);

	#close Connection
	mysqli_close($conn);
?>


<?php include('inc/header.php'); ?>
		<div class="container">
			<a href="<?php echo ROOT_URL;?>" class="btn btn-success">Back</a>
			<h1><?php echo $post['title']; ?></h1>
			<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author'];?></small>
			<p><?php echo $post['body'];?></p>
			<hr>
			<a href="<?php echo ROOT_URL;?>editPost.php?id=<?php echo $post['id'];?>" class="btn btn-default">Edit</a>
		</div>
	<?php include('inc/footer.php') ?>
