<?php
	require('config/config.php');
	require('config/DB.php');

	#Create Query
	$query= 'SELECT * FROM post ORDER BY created_at DESC';

	//Get Result
	$result= mysqli_query($conn, $query);


	#Fetch data
	$posts=mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);
	

	#Free Result
	mysqli_free_result($result);

	#close Connection
	mysqli_close($conn);
?>


	<?php include('inc/header.php');?>
		<div class="container">
				<h1 class="container">Posts</h1>
				<?php foreach($posts as $post) : ?>
				<div>
					<h3><?php echo $post['title']; ?></h3>
					<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author'];?></small>
					<p><?php echo $post['body'];?></p>
					<a class="btn btn-primary" href="<?php echo ROOT_URL;?>post.php?Id=<?php echo $post['Id']; ?>">Read More</a><hr>
				</div>

			<?php endforeach; ?>
			
		</div>
	<?php include('inc/footer.php'); 
 