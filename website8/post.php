<?php
	require('config/config.php');
	require('config/DB.php');



	//Check For Delete
	if (isset($_POST['delete'])) {
		//Get form data
		$delete_id=mysqli_real_escape_string($conn, $_POST['delete_id']);

		$query= "DELETE FROM post WHERE Id= {$delete_id}";

		if (mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		}else{
			echo 'ERROR: '.mysqli_error($conn);
		}
		
	}


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
				<div class="d-flex row">
					<div class="col-sm-2 d-flex">
						<a href="<?php echo ROOT_URL; ?>editPost.php?Id=<?php echo $post['Id'];?>" class="btn btn-default ">Edit</a>
					</div>

					<div class="col-sm-2 text-right">
						<form class="text-right d-flex" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<input type="hidden" name="delete_id" value="<?php echo $post['Id'];?>">
						<input type="submit" name="delete" value="Delete" class="btn btn-danger">
						</form>
					</div>
			</div>
		</div>
	<?php include('inc/footer.php') ?>

